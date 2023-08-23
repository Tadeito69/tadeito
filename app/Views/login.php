<h1>Login</h1>
<div class="card">
    <div class="card-body">
        <form method="post" action="<?= base_url("/dashboard1"); ?>">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" required type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="contrasena" class="form-label">Contraseña</label>
                <input name="contrasena" required type="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <div class="mb-3"><input type="submit" value="Login" class="btn btn-primary" /></div>
        </form>
    </div>
</div>