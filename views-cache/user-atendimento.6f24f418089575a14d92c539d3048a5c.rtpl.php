<?php if(!class_exists('Rain\Tpl')){exit;}?>
<div class="content-wrapper">

	<section class="content">		
		        <h1>
		          Solicitações de Atendimento
		        </h1>
		        <ol class="breadcrumb">
		          <li><a href="/user"><i class="fa fa-dashboard"></i>Inicio</a></li>
		          <li class="active"><a href="/admin/users">Usuários</a></li>
        		</ol>

			<div class="login-box">

				<form action="user-atendimento" method="post">

						
						<div class="form-row">

						     <div class="form-group col-md">
						      <label for="desprob"><h3>Informe o Atendimento</h3></label>
						      <input type="text" class="form-control" id="desprob" name="desprob" maxlength="50" placeholder="Digite aqui">
						    </div>
						    
						</div>
						  

				  
				<div class="form-row">
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</div>
				</form>

			</div>

	</section>
	
</div>	