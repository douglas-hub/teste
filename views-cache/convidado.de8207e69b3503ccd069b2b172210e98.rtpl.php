<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="login-box">

	<form action="convidado" method="post">

	 <div class="form-row mt-5">
	    <div class="form-group col-md">
	      <label for="dessetor"><h3>Setor</h3></label>
	      <input type="text" class="form-control" id="dessetor" name="dessetor" placeholder="Informe o setor">
	    </div>
	  </div>

	<div class="form-row ">
	    <div class="form-group col-md">
	      <label for="desnome"><h3>Seu Nome</h3></label>
	      <input type="text" class="form-control" id="desnome" name="desnome" placeholder="Digite seu nome">
	    </div>
	</div>
	<div class="form-row">
	     <div class="form-group col-md">
	      <label for="desprob"><h3>Informe o problema</h3></label>
	      <input type="text" class="form-control" id="desprob" name="desprob" placeholder="Digite aqui">
	    </div>
	</div>
	  

	  
	<div class="form-row">
	  <button type="submit" class="btn btn-primary">Enviar</button>
	</div>
	</form>

</div>