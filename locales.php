<?php include_once "Front/includes/header.php" ?>

<?php 

if (isset($_POST["restaurant"])){


} elseif(isset($_POST["tarapaca"])){
   include_once "Front/includes/comunas/tarapaca.php";

}





?>


<?php $categoria="Restaurantes"; 
 $nombreres="Bomboburger"; 
 $nombreres2="Normita2"; 
 $nombreres3="sushi paradise"; 
 $nombreres4="sushikito"; 
 $horario="10:00 - 00:00"; 
 $estado="Abierto";
 $estado2="Cerrado"; ?>


<!-- si selecciona una region una comuna y una categoria se mostrara solo los locales de esa comuna y de esa categoria -->

<form action="vistaLocal.php" method="POST">

<div class="container px-4 py-5" id="custom-cards">
    <h2 class="pb-2 border-bottom"><?php echo $categoria;?> abiertos</h2>
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg zoom ">
        <button type="input" style="background-color: Transparent; border: none" name="<?$nombreres?>">
          <div class="d-flex flex-column h-100 p-1 pb-2 text-white text-shadow-1">
            <img src="Front/img/fotolocal/descargar.png" alt="Bootstrap"  width="470" height="200" style="background-repeat: no-repeat;">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto ms-4 my-auto">
                <h4><?php echo $nombreres;?></h4>
              </li>
              <li class="d-flex align-items-center me-4">
                <small><?php echo $estado;?></small>
              </li>
              <li class="d-flex align-items-center me-3 my-3">
                <small><?php echo $horario;?></small>
              </li>
            </ul>
          </div>
        </button>
      </div>
    </div>

    <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg zoom ">
        <button type="input" style="background-color: Transparent; border: none" name="<?$nombreres?>">
          <div class="d-flex flex-column h-100 p-1 pb-2 text-white text-shadow-1">
            <img src="Front/img/fotolocal/descargar.png" alt="Bootstrap"  width="470" height="200" style="background-repeat: no-repeat;">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto ms-4 my-auto">
                <h4><?php echo $nombreres;?></h4>
              </li>
              <li class="d-flex align-items-center me-4">
                <small><?php echo $estado;?></small>
              </li>
              <li class="d-flex align-items-center me-3 my-3">
                <small><?php echo $horario;?></small>
              </li>
            </ul>
          </div>
        </button>
      </div>
    </div>

      

  </div>

  <h2 class="pb-2 border-bottom"><?php echo $categoria;?> Cerrados</h2>
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">

  <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg zoom ">
        <button type="input" style="background-color: Transparent; border: none" name="<?$nombreres?>">
          <div class="d-flex flex-column h-100 p-1 pb-2 text-white text-shadow-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTQqsW1h-bC0mDLujrSUgAfNkprD9ae8JB6PksZDEgnOv_Ih9z_O07kYEFSMJjakWrZYU&usqp=CAU" width="470" height="200" alt="Bootstrap"  style=" background-repeat: no-repeat;">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto ms-4 my-auto">
                <h4><?php echo $nombreres3;?></h4>
              </li>
              <li class="d-flex align-items-center me-4">
                <small><?php echo $estado2;?></small>
              </li>
              <li class="d-flex align-items-center me-3 my-3">
                <small><?php echo $horario;?></small>
              </li>
            </ul>
          </div>
        </button>
      </div>
    </div>

  <div class="col">
      <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg zoom ">
        <button type="input" style="background-color: Transparent; border: none" name="<?$nombreres?>">
          <div class="d-flex flex-column h-100 p-1 pb-2 text-white text-shadow-1">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTQqsW1h-bC0mDLujrSUgAfNkprD9ae8JB6PksZDEgnOv_Ih9z_O07kYEFSMJjakWrZYU&usqp=CAU" width="470" height="200" alt="Bootstrap"  style=" background-repeat: no-repeat;">
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto ms-4 my-auto">
                <h4><?php echo $nombreres2;?></h4>
              </li>
              <li class="d-flex align-items-center me-4">
                <small><?php echo $estado2;?></small>
              </li>
              <li class="d-flex align-items-center me-3 my-3">
                <small><?php echo $horario;?></small>
              </li>
            </ul>
          </div>
        </button>
      </div>
    </div>

  </div>
</div>

</form>








<?php include_once "Front/includes/footer.php" ?>
