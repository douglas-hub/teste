<?php
session_start();
require_once 'vendor/autoload.php';

use \Slim\Slim;
use \Rain\Tpl;
use \Hcode\Page ;
use \Hcode\PageAdmin ;
use \Hcode\PageUser ;
use \Hcode\Model\User ;



$app = new Slim();

$app->config("debug" , true);

$app->get("/" , function(){
    
    $page = new Page();

    $page->setTpl("index");
    
});




//---------------------------Cadastrar usuario------------------------

$app->get('/cadastrar' , function(){

	$page = new Page();

	$page->setTpl("cadastrar");

});

$app->post("/cadastrar" , function(){

    $page = new Page();
    $user = new User();
    $user->setData($_POST);

    $sav = $user->save();

    if($sav === true){

        $page->setTpl("result-user" , array(
        "user" => $user->getValues()
    ));
    }else if($sav === false){
        $page->setTpl("error"); 
    }

    exit;


});

//------------------------------------------------------------------------------

//----------------------------ROTAS ADMIN------------------------------

$app->get("/admin" , function(){


	User::verifyLogin(true);
	$user = new User();
    $sol = $user->getSolicit();
	$page = new PageAdmin(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION]))) ;

	$page->setTpl("index" , $sol , false , false);



});
//----------------abertos
$app->get("/admin/aberto" , function(){


    User::verifyLogin(true);
    $user = new User();
    $sol = $user->getAberto();
    $page = new PageAdmin(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION]))) ;

    $page->setTpl("aberto" , $sol , false , false);

});
//---------------Atendimento OK
$app->get("/admin/ok" , function(){


    User::verifyLogin(true);
    $user = new User();
    $sol = $user->getOk();
    $page = new PageAdmin(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION]))) ;

    $page->setTpl("admin-ok" , $sol , false , false);

});
//---------------------------------ROTA HISTORICO-USER--------------------------------
$app->get("/historico" , function(){


    User::verifyLogin(false);
    $page = new PageUser(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION_USER]))) ;
    $user = new User();
    $user->getAtend();
    $page->setTpl("/historico" , $user->getValues() , false , false);


});
//---------------------------------ROTA USUARIO----------------------------------

$app->get("/user",function(){

    User::verifyLogin(false);

     $user = new User();

    $page = new PageUser(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION_USER]))) ;

    $page->setTpl("index");

});

//----------------------------------ROTA ATENDIMENTO----------------------------

$app->get("/user-atendimento",function(){

    User::verifyLogin(false);

    $page = new PageUser(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION_USER]))) ;

    $page->setTpl("/user-atendimento");

});

//---------------------SALVA ATENDOMENTO USER
$app->post("/user-atendimento",function(){

    User::verifyLogin(false);

    $user = new User();

    $page = new PageUser(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION_USER]))) ;

    $user->setData($_POST);

    $result = $user->saveAtend();

    if($result === true){

        $page->setTpl("result-atend" , array(
        "user" => $user->getValues()
    ));
    }else if($result === false){
        $page->setTpl("error"); 
    }

    exit;

});

//-------------------------------------------------------------------------------
//---------------------------------LOGIN DO USUARIO------------------------------
$app->get("/login-user",function(){
    $page = new Page();
    $page->setTpl("login-user");
});

$app->post("/login-user",function(){
    $page = new Page();
    User::login($_POST["deslogin"],$_POST["dessenha"] , false);
    header("Location: /user");
    exit;
});

//------------------------------------------------------------------------------

//-----------------------------------LOGIN ADMIN--------------------------------

$app->get("/login" , function(){
	$page = new PageAdmin( array("header"=>false,"footer"=>false));
	$page->setTpl("login");
});

$app->post("/login", function(){
	User::login($_POST["deslogin"],$_POST["despassword"] , true);
	header("Location: /admin");
	exit;
});

//-------------------------------------------------------------------------------
//-----------------------------------LIMPA A SESSÃO------------------------------

$app->get("/logout" , function(){
	User::logout();
	header("Location: /login");
	exit;
});

$app->get("/logout-usuario" , function(){
    User::logoutUser();
    header("Location: /login-user");
    exit;
});


//--------------------PÁGINA PARA ATUALIZAR--------------------------------------


$app->get("/admin/update/:idatend" , function($idatend){
   
    User::verifyLogin(true);
    
    //$page =  new PageAdmin();
    $page = new PageAdmin(array( 
        "header" => true ,
        "footer" => true ,
        "data" =>  ($_SESSION[User::SESSION]))) ;

    $user = new User();

    $user->get((int)$idatend);
    
    $page->setTpl("users-update" , array(
        "user" => $user->getValues() 
    )
    );
    
});

//------atualiza

$app->post("/admin/update/:idatend" , function($idatend){
    
    User::verifyLogin(true);

    $user = new User();

    $user->get((int)$idatend);

    $user->setData($_POST);
    
    $user->update();

    header("Location: /admin");

    exit;
});

//-------------------APROPRIAR----------------------------------
$app->get("/admin/apropriar/:idatend" , function($idatend){

    User::verifyLogin(true);
    $user = new User();
    $user->get((int)$idatend);
    $user->apropriar($_SESSION[User::SESSION]['desnome']);
    header("Location: /admin");
    exit;

});

//----------------ok

$app->get("/admin/ok/:idatend" , function($idatend){

    User::verifyLogin(true);
    $user = new User();
    $user->get((int)$idatend);
    $user->ok();
    header("Location: /admin");
    exit;

});

//----------------excluir solicitacao

  $app->get("/admin/:idatend/delete" , function($idatend){
    
    User::verifyLogin(true);

    $user = new User();

    $user->get((int)$idatend);
	$user->delete();

    header("Location: /admin");
    exit;
});




//---------------------------------EXECUTA--------------------------------------------------
$app->run();
//------------------------------------------------------------------------------------------
        
        
        