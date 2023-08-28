<h1>Registrarse</h1>
<div class="card">
    <div class="card-body">
        <form method="post" action="<?= base_url("/register"); ?>">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input name="nombre" required type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Usuario</label>
                <input name="usuario" required type="text" class="form-control" id="usuario" placeholder="Usuario">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input name="email" required type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contraseña</label>
                <input name="contrasena" required type="password" class="form-control" id="contraseña" placeholder="Password">
            </div>
            <div class="mb-3"><input type="submit" value="Registrarse" class="btn btn-primary" /></div>
        </form>
    </div>
</div>