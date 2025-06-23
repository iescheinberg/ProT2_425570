<!-- Formulario de Login -->
<main>
    <!-- Contenedor -->
    <div class="container py-4">
        <!-- Validación -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger text-center">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>
        <!-- Formulario -->
        <form method="post" action="<?= base_url('login/verificar') ?>" class="mx-auto" style="max-width: 500px;">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="usuario" class="form-label">Nombre de usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
                <div id="emailHelp" class="form-text">Nunca compartiremos tus datos con nadie más.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1" />
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-success">Aceptar</button>
                <button type="reset" class="btn btn-outline-danger">Borrar</button>
            </div>
        </form>

    </div>

</main>