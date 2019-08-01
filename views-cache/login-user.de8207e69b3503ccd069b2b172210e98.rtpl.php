<?php if(!class_exists('Rain\Tpl')){exit;}?>

<div class="row container-fluid">
<div class="login-box">
  <div class="login-logo">
    <a href="/res/admin/index2.html"><b>Login</b>Usuário</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Entre para iniciar a sessão</p>

    <form action="/login-user" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Login" name="deslogin">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Senha" name="dessenha">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8 ml-3">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Lembre-Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4 ml-5">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Logar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <div class="social-auth-links text-center">
      <a href="/cadastrar" class="btn btn-block btn-social btn-facebook btn-flat">Criar uma conta</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="/res/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/res/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/res/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</div>