<div class="modal modal-signin position-static d-block py-5 " tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog " role="document">
        <div class="modal-content rounded-5 shadow ">
            <div class="modal-header p-5 pb-4 border-bottom-0 ">
                <h2 class="fw-bold mb-0 text-dark">Registrate</h2>
            </div>
            <div class="modal-body p-5 pt-0 ">
                <form action="Back/funciones/RegistroFx.php" name="registro" onsubmit="return ValidarRegistro()" method="POST">
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control rounded-4" name="nombre" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-secondary">Nombre</label>
                        <div aling="left" id="resCorreo"></div>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="text" class="form-control rounded-4" name="apellidos" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-secondary">Apellidos</label>
                        <div aling="left" id="resCorreo"></div>
                    </div>
                    <div class="form-floating mb-3 ">
                        <input type="email" class="form-control rounded-4" name="correo" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-secondary">Email address</label>
                        <div aling="left" id="resCorreo"></div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" name="pass" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-secondary">Password</label>
                        <div aling="left" id="resPass"></div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" name="Cpass" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-secondary">Confirmar Password</label>
                        <div aling="left" id="resCpass"></div>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name="registro"> Confirmar </button>
                </form>
                <hr class="my-4">
            </div>
        </div>
    </div>
</div>
<script src="Front/js/Validar.js"></script>