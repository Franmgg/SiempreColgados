<div class="modal fade" id="post-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
                <form name="userForm" class="form-horizontal">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name" class="col-sm-2">Nombre</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce el nombre">
                            <span id="nombreError" class="alert-message"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2">Correo</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="correo" name="correo" placeholder="Introduce el correo">
                            <span id="correoError" class="alert-message"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2">DNI</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="Introduce el dni">
                            <span id="dniError" class="alert-message"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2">Telefono</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Introduce el telefono">
                            <span id="telefonoError" class="alert-message"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="createPost()">Guardar</button>
            </div>
        </div>
    </div>
</div>
