<main>
    <div class="form container d-flex justify-content-center bg-body">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="inputEmail4" />
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword4" />
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" />
            </div>

            <div class="col-md-6">
                <label for="inputCity" class="form-label">Localidad</label>
                <input type="text" class="form-control" id="inputCity" />
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Provincia</label>
                <select id="inputState" class="form-select">
                    <option selected>Seleccione</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Codigo Postal</label>
                <input type="text" class="form-control" id="inputZip" />
            </div>

            <div class="d-flex mt-4" style="justify-content: center; gap: 1rem;">
                <button type="reset" class="btn btn-outline-danger">
                    <!-- <i class="fa-solid fa-trash"></i> -->
                    Borrar
                </button>
                <button type="submit" class="btn btn-success">
                    <!-- <i class="fa-solid fa-seedling" style="color: gree;"></i> -->
                    Enviar
                </button>
            </div>
        </form>
    </div>
</main>