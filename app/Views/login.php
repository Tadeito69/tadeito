<form id="login-form" class="form" action="<?php echo base_url('/login') ?>" method="post">
    <h3 class="text-center text-info">Login</h3>
    <div class="form-group">
        <label for="usuario" class="text-info">Usuario:</label><br>
        <input type="text" name="usuario" id="usuario" class="form-control">
    </div>
    <div class="form-group">
        <label for="contrasena" class="text-info">Contraseña:</label><br>
        <input type="password" name="contrasena" id="contrasena" class="form-control">
    </div>
    <button class="btn btn-primary">Entrar</button>
</form>