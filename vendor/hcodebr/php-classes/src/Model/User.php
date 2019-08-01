<?php
namespace Hcode\Model ;
use \Hcode\Model;
use \Hcode\DB\Sql;


class User extends Model{

	const SESSION = "user" ;
  const SESSION_USER = "usuario" ;




	public static function login($deslogin , $password , $user){
		$sql = new Sql();



    if($user === true){

		$result = $sql->select("SELECT * FROM tb_tecnico WHERE deslogin = :deslog" , array(
			":deslog" => $deslogin
		));

    }else if($user === false){
      $result = $sql->select("SELECT * FROM tb_usuario WHERE deslogin = :deslog" , array(
      ":deslog" => $deslogin
    ));
    }



		if(count($result) === 0 ){
			throw new \Exception("Login ou senha incorretos");
		}

		$data = $result[0] ;

		//$senha = password_hash($data['despassword'] , PASSWORD_DEFAULT);

    if($user === true){

      		$senha = $data['despassword'];

      		$password = MD5($password);

		}else if($user === false){

          $senha = $data['dessenha'] ;
          $password = MD5($password);
    }


    if($user === true){

  		if($senha === $password){
  			$user = new User();
  			$user->setData($data);
  			$_SESSION[User::SESSION] = $user->getValues();
  			return $user ;
  		}else{
  			throw new \Exception("Login ou senha incorretos");
  			
  		}
    }
    if($user === false){

      if($senha === $password){
        $user = new User();
        $user->setData($data);
        $_SESSION[User::SESSION_USER] = $user->getValues();
        return $user ;
      }else{
        throw new \Exception("Login ou senha incorretos");
        
      }
    }

	}

  

	public static function verifyLogin($inadmin){


    if($inadmin === true ){

  		if(
      			!isset($_SESSION[User::SESSION])
      			|| 
      			!$_SESSION[User::SESSION]
      			||
      			!(int)$_SESSION[User::SESSION]['idtec'] > 0 
  			//||(bool)$_SESSION[User::SESSION]['inadmin']  !== $inadmin
  		){

  			header("Location: /login");
  			exit;

  		}
    }if($inadmin === false){
        if(
            !isset($_SESSION[User::SESSION_USER])
            || 
            !$_SESSION[User::SESSION_USER]
            ||
            !(int)$_SESSION[User::SESSION_USER]['iduser'] > 0 
        //||(bool)$_SESSION[User::SESSION]['inadmin']  !== $inadmin
      ){

        header("Location: /login-user");
        exit;

      }
    }


	}



	public static function logout(){
		$_SESSION[User::SESSION] = NULL;
	}

  public static function logoutUser(){
    $_SESSION[User::SESSION_USER] = NULL;
  }



	public function getSolicit(){
        $sql = new Sql();
        $sol = $sql->select("SELECT * FROM tb_atendimento a JOIN tb_usuario u ON a.fiduser = u.iduser");
        return $sol ;
  }
  public function getAberto(){
        $sql = new Sql();
        $sol = $sql->select("SELECT * FROM tb_atendimento a JOIN tb_usuario u ON a.fiduser = u.iduser WHERE desstatus = 'Aberto' ");
        return $sol ;
  }
  public function getOk(){
        $sql = new Sql();
        $sol = $sql->select("SELECT * FROM tb_atendimento a JOIN tb_usuario u ON a.fiduser = u.iduser WHERE desstatus = 'OK' ");
        return $sol ;
  }




  public function getAtend(){
        $sql = new Sql();
        $result = $sql->select("SELECT * FROM tb_atendimento  where fiduser = :fiduser",array(
            ":fiduser" => (int)$_SESSION[User::SESSION_USER]['iduser']
        ));
        $this->setData($result) ;
  }




      public function get($idatend){
            	$sql = new Sql();
            	$results = $sql->select("SELECT * FROM tb_atendimento  where idatend = :idatend",
            		array(
            			":idatend" => $idatend
            		)
            );
            	$this->setData($results[0]);

        }    

      public function ok(){

        $sql = new Sql();

        $result = $sql->select("CALL sp_ok(:idatend)" , array(
              ":idatend" => $this->getidatend()
            ));

          $this->setData($result[0]) ;
      }	


      public function apropriar($nome){
          $sql = new Sql();

          $result = $sql->select("CALL sp_apropriar(:idatend , :desnome)" , array(
              ":desnome" => $nome ,
              ":idatend" => $this->getidatend()
            ));

          $this->setData($result[0]) ;

      }

      public function update(){

        	$sql = new Sql();
            $result = $sql->select("CALL sp_atendupdate_save(:idatend,:destecnico ,:desprob,:desdate,:desstatus , :fiduser)" , array(

            	":idatend" => $this->getidatend(),
               ":destecnico" =>  $this->getdestecnico(),
               ":desprob" => $this->getdesprob(),
               ":desdate" => $this->getdesdate(),
               ":desstatus" => $this->getdesstatus(),
               ":fiduser" => $this->getfiduser()

            ));

            $this->setData($result[0]) ;

        }




        public function delete(){
        	$sql = new Sql();
            $sql->query("CALL sp_users_delete(:idatend)" , array(
            	":idatend" => $this->getidatend()
            ));
        }




        public function save(){

        	try{

        	  $sql = new Sql();

            $result = $sql->select("CALL sp_save(:desnome ,:dessetor,:destel,:deslogin,:dessenha)" , array(
               ":desnome" =>  $this->getdesnome(),
               ":dessetor" => $this->getdessetor(),
               ":destel" => $this->getdestel(),
               ":deslogin" => $this->getdeslogin() ,
               ":dessenha" => MD5($this->getdessenha())
            ));

            if(count($result) > 0){

            $this->setData($result[0]) ;

        	  return true ;
          }
        }
          catch(\Exception $e){
        	     return false ;
        	     exit;
          }

        
      }

      public function saveAtend(){

        try{

         $sql = new Sql();

            $result = $sql->select("CALL sp_saveAtend(:desprob,:fiduser)" , array(
               ":desprob" =>  $this->getdesprob(),
               ":fiduser" => (int)$_SESSION[User::SESSION_USER]['iduser']
            ));

            if(count($result) > 0){

            $this->setData($result[0]) ;
            return true ;

        }

      }catch(\Exception $e){
        throw new Exception("Error");
      }


    }


}