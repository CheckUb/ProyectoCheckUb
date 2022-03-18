
<div class="modal modal-signin position-static d-block py-3" tabindex="-1" role="dialog" id="modalSignin">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-5 shadow">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h2 class="fw-bold mb-0 text-dark">Inicio de Sesion</h2>
            </div>
            <div class="modal-body p-5 pt-0">
                <form action="Back/Funciones/LoginFx.php" onsubmit="return validar()" method="POST" name="valido">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-4" name="correo" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-secondary">Correo</label>
                        <div aling="left" id="respuestaCorreo"></div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control rounded-4" name="pass" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-secondary">Contraseña</label>
                        <div aling="left" id="respuestaPass"></div>
                    </div>
                    <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name='submit'>Iniciar</button>
                </form>
                <hr class="my-4">
            </div>
        </div>
    </div>
</div>
<script src="Front/js/Validar.js"></script>