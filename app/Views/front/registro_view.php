<!-- Formulario de Registro -->
<main>
    <div class="container py-4">
        <form class="row g-3">
            <div class="col-12 col-md-6">
                <label for="inputEmail4" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="inputEmail4" />
            </div>
            <div class="col-12 col-md-6">
                <label for="inputPassword4" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword4" />
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
            </div>

            <div class="col-12 col-md-6">
                <label for="inputCity" class="form-label">Localidad</label>
                <input type="text" class="form-control" id="inputCity" />
            </div>
            <div class="col-12 col-md-4">
                <label for="inputState" class="form-label">Provincia</label>
                <select id="inputState" class="form-select">
                    <option selected>Seleccione</option>
                    <option>Buenos Aires</option>
                    <option>Córdoba</option>
                </select>
            </div>
            <div class="col-12 col-md-2">
                <label for="inputZip" class="form-label">Código Postal</label>
                <input type="text" class="form-control" id="inputZip" />
            </div>

            <div class="col-12 d-flex justify-content-center gap-3 mt-4">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-outline-danger">Borrar</button>
            </div>
        </form>
    </div>
</main>