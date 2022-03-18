<?php include_once "Front/includes/header.php" ?>
<form action="comunas.php" method="POST">
    <!-- INICIO CARDS REGIONES  -->
    
  <div class="album py-5 bg-light">
    <div class="container">

    <h2 class="pb-2 border-bottom"> Selecciona una región</h2>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
      <!-- <img src="..." class="img-fluid" alt="..."> --> 
      
        <button type="input" style="background-color: Transparent; border: none" name="arica"><div class="col ">
        <div class="card shadow-sm">
          <img type="button" src="https://www.diarioconstitucional.cl/wp-content/uploads/2021/04/f130633-1-h.jpeg" class="rounded mx-1 my-1 zoom " >
          <p class="text-sobre text-white rounded">ARICA Y PARINACOTA</p>         
        </div>
      </div></button>


      <button type="input" style="background-color: Transparent; border: none" name="tarapaca"><div class="col">
          <div class="card shadow-sm">
          <img src="https://chileandtravelmagazine.com/wp-content/uploads/2017/11/IQUIQUE-1-web.jpg" class="rounded mx-1 my-1 zoom " >                     
              <p class="text-sobre text-white rounded">REGION DE TARAPACA ""</p>     
          </div></div></button>
          

          <button type="input" style="background-color: Transparent; border: none" name="antofagasta"><div class="col ">
          <div class="card shadow-sm">
          <img src="https://www.quehacerenchile.cl/wp-content/uploads/2018/05/4-1.jpg" class="rounded mx-1 my-1  zoom" >                  
              <p class="text-sobre text-white rounded">REGION DE ANTOFAGASTA</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="atacama"><div class="col">
          <div class="card shadow-sm">
          <img src="https://chileandtravelmagazine.com/wp-content/uploads/2017/11/copiapo-web-900-600.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION DE ATACAMA</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="coquimbo"><div class="col">
          <div class="card shadow-sm">
          <img src="Front/img/regiones/coquimbo.jpg " class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION DE COQUIMBO</p> 
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="valparaiso"><div class="col">
          <div class="card shadow-sm">
          <img src="https://pbs.twimg.com/media/DZKx0STXkAEQhKV?format=jpg&name=large" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION DE VALPARAISO</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="metropolitana">
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://www.tangol.com/blog/Fotos/que-hacer-en-santiago-de-chile_0_201707270846390.JPG" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION METROPOLITANA</p>
            </div>
          </div>
        </button>

        <button type="input" style="background-color: Transparent; border: none" name="ohiggins"><div class="col">
          <div class="card shadow-sm">
          <img src="https://imgs-akamai.mnstatic.com/11/05/11050ffb6e3730ff29c36921326777fb.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION DEL LIBERTADOR BERNARDO O'HIGGINS</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="maule"><div class="col">
          <div class="card shadow-sm">
          <img src="https://m.elmostrador.cl/media/2014/04/talca.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION DEL MAULE</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="biobio"><div class="col">
          <div class="card shadow-sm">
          <img src="https://www.cideu.org/wp-content/uploads/2019/12/concepcion-3-1.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="text-sobre text-white rounded">REGION DEL BIOBIO</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="araucania"><div class="col">
          <div class="card shadow-sm">
          <img src="http://2.bp.blogspot.com/-X02o18Jl_TY/Ut6p45LZMLI/AAAAAAAAAQY/QNH2uPAPxiQ/s1600/puc%C3%B3n+lago+villarrica.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="card-text text-sobre text-white rounded">REGION DE LA ARAUCANIA</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="rios"><div class="col">
          <div class="card shadow-sm">
          <img src="https://www.cabanaschile.cl/wp-content/uploads/2013/05/Valdivia-Caba%C3%B1as-en-la-region-de-Los-Rios.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="card-text text-sobre text-white">REGION DE LOS RIOS</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="lagos"><div class="col">
          <div class="card shadow-sm">
          <img src="https://www.eha.cl/upload/noticias/cropping/base/estudio-situa-a-region-de-los-lagos-como-principal-destino-turistico-del-pais-6a6e50dff56b51ddbd0637f6b63070ec.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
          <p class="text-sobre text-white rounded">REGION DE LOS LAGOS</p>
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="aysen"><div class="col">
          <div class="card shadow-sm">
          <img src="https://aysenpatagonia.cl/aysen-patagonia/img/2020/destinos/aysen-coyhaique/DJI_0362_puente.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="card-text text-sobre text-white">REGION DE AYSEN</p>       
          </div>
        </div></button>

        <button type="input" style="background-color: Transparent; border: none" name="magallanes"><div class="col">
          <div class="card shadow-sm">
          <img src="https://turismoi.cl/uploads/cl/city/image/21954/medium_Ch_2929_Punta_Arenas_-_copia.jpg" class="rounded mx-1 my-1 im-sm zoom" >            
              <p class="card-text text-sobre text-white">REGION DE MAGALLANES</p>
          </div>
        </div></button>

      </div>
    </div>
  </div> 
  <!-- FIN CARDS REGIONES  -->
</form>


    
<?php include_once "Front/includes/footer.php" ?>

