<main>
    <div class="container py-4">
    <?php
        use Config\Services;
        $validation = isset($validation) ? $validation : Services::validation();
    ?>

        <!-- Mensaje general (ej. redireccionado con Flashdata) -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-warning text-center">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form class="row g-3" method="post" action="<?= base_url('registro/guardar') ?>">
            <?= csrf_field(); ?>

            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre"
                    value="<?= set_value('nombre') ?>"
                    class="form-control <?= ($validation->hasError('nombre')) ? 'is-invalid' : '' ?>"
                    required>
                <div class="invalid-feedback">
                    <?= $validation->getError('nombre') ?>
                </div>
            </div>

            <div class="col-md-6">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" name="apellido" id="apellido"
                    value="<?= set_value('apellido') ?>"
                    class="form-control <?= ($validation->hasError('apellido')) ? 'is-invalid' : '' ?>"
                    required>
                <div class="invalid-feedback">
                    <?= $validation->getError('apellido') ?>
                </div>
            </div>

            <div class="col-md-6">
                <label for="usuario" class="form-label">Nombre de Usuario</label>
                <input type="text" name="usuario" id="usuario"
                    value="<?= set_value('usuario') ?>"
                    class="form-control <?= ($validation->hasError('usuario')) ? 'is-invalid' : '' ?>"
                    required>
                <div class="invalid-feedback">
                    <?= $validation->getError('usuario') ?>
                </div>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" name="email" id="email"
                    value="<?= set_value('email') ?>"
                    class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?>"
                    required>
                <div class="invalid-feedback">
                    <?= $validation->getError('email') ?>
                </div>
            </div>

            <div class="col-md-6">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" name="pass" id="pass"
                    class="form-control <?= ($validation->hasError('pass')) ? 'is-invalid' : '' ?>"
                    required>
                <div class="invalid-feedback">
                    <?= $validation->getError('pass') ?>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-success">Registrarse</button>
                <button type="reset" class="btn btn-outline-danger">Borrar</button>
            </div>
        </form>
    </div>
</main>
