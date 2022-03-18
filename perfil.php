

<?php include_once "Front/includes/header.php" ?>


<Style>
    .eye {
        position: absolute;
        opacity: 0.1;
        top: 40px;
        left: 60px;
        z-index: 1;
    }

    .eye:hover {
        position: absolute;
        opacity: 1;
        top: 40px;
        left: 60px;
        z-index: 1;
    }

    .heaven {
        position: absolute;
        z-index: -1;
    }
</Style>

<?/*php echo $_SESSION['Perfil']['Foto'];*/ ?>
<div class="container marketing py-4">
    <div class="row">
        <div class="col-4 ">
            <div class="" style="position: relative; left: 0; top: 0;">
                <img alt="Foto de Perfil" src="Front/img/FotoP/default.jpg" width="160" height="160" class="rounded-circle mx-1 my-1 heaven"></a>
                <a class="" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="eye" viewBox="0 0 16 16">
                        <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"></path>
                        <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"></path>
                    </svg></a>
                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="border-radius:30px;">
                            <div class="modal-body text-center">
                                <h5 class="text-center py-2">Cambiar Foto de Perfil</h5>
                                <form action="Back/Funciones/PerfilFx.php" method="POST" enctype="multipart/form-data">
                                    <input type="file" style="opacity:0.0; position:absolute;" name="foto" id="foto" required="" accept=".jpg, .png, .jpeg">
                                    <hr class=" ">
                                    <label for="foto" class="btn text-primary aling-center" name="foto">Subir Foto</label> <br>
                                    <hr class=" ">
                                    <button type="submit" class="btn text-danger aling-center" name="agregar" id="agregar">Aceptar</button><br>
                                    <hr class=" ">
                                </form>
                                <button type="button" class="btn text-secondary aling-center" data-bs-dismiss="modal">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="text-bottom py-5">
                <h2 class="text-break"><?php /* $name = (isset($_SESSION['Perfil']['Nombre'])) ? $_SESSION['Perfil']['Nombre'] : $_SESSION['Perfil']['Correo'];
                                        echo $name; */?> nombre apellido</h2>
                <p><?php /* echo $_SESSION['Perfil']['Tipo']; */ ?> tipo de negocio </p>
                <p>Dirección: <?php /* $direccion = $_SESSION['Perfil']['Direccion'];
                                echo $direccion; */ ?></p>
                <p>Teléfono: <?php /* $telefono = $_SESSION['Perfil']['Telefono'];
                                echo $telefono; */ ?></p>
                <p>Horario: <?php /* echo $_SESSION['Perfil']['Fecha']; */?> </p>

                <p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Editar Perfil <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-fill mx-2" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                        </svg>
                    </button>
                    <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border-radius:10px;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Global Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="Back/Funciones/PerfilFx.php" method="POST" class="row g-3">
                                    <div class="col-md-6">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombre..." value="<?= $name ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Apellido" class="form-label">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" placeholder="apellido..." value="<?= $apellido ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="direccion" class="form-label">Direccion</label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" name="direccion" placeholder="direccion..." value="<?= $direccion ?>" aria-describedby="inputGroupPrepend">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="telefono" class="form-label">Telefono</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">+56</span>
                                            <input type="text" class="form-control" name="telefono" placeholder="123456789" value="<?= $telefono ?>" aria-describedby="inputGroupPrepend">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustomUsername" class="form-label">Correo</label>
                                        <div class="input-group has-validation">
                                        </div>
                                        <span class="input-group-text" id="inputGroupPrepend"><?php echo $_SESSION['Perfil']['Correo']; ?></span>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Contraactual" class="form-label">Contraseña Actual</label>
                                        <div class="input-group has-validation">
                                            <input type="password" class="form-control" name="Contraactual" placeholder="Contraseña actual..." aria-describedby="inputGroupPrepend" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit" name="editar">Guardar datos</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<hr class="my-4 mx-5">
<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-primary" type="button">
        <a saved-href="img/Terminos_Y_Condiciones.png" style=text-decoration:none;color:white; file-name="Terminos_Y_Condiciones.png" download="Terminos_Y_Condiciones.png" data-action="file" href="img/Terminos_Y_Condiciones.png">Descargar terminos y condiciones</a>
    </button>
</div>

<hr class="my-4 mx-5">



<?php include_once "Front/includes/footer.php" ?>