<?php include_once "Front/includes/header.php" ?>


<style>
.menu-item,
.menu-open-button {
   background: #eeeeee00;
   border-radius: 100%;
   width: 90px;
   height: 90px;
   margin-left: 0px;
   position: fixed;
   color: #f5f5f5;
   text-align: center;
   line-height: 80px;
   -webkit-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
   -webkit-transition: -webkit-transform ease-out 200ms;
   transition: -webkit-transform ease-out 200ms;
   transition: transform ease-out 200ms;
   transition: transform ease-out 200ms, -webkit-transform ease-out 200ms;
}

.menu-open {
   display: none;
}

.lines {
   width: 25px;
   height: 3px;
   background: #59677800;
   display: block;
   position: absolute;
   top: 50%;
   left: 50%;
   margin-left: -12.5px;
   margin-top: -1.5px;
   -webkit-transition: -webkit-transform 200ms;
   transition: -webkit-transform 200ms;
   transition: transform 200ms;
   transition: transform 200ms, -webkit-transform 200ms;
}

.line-1 {
   -webkit-transform: translate3d(0, -8px, 0);
   transform: translate3d(0, -8px, 0);
}

.line-2 {
   -webkit-transform: translate3d(0, 0, 0);
   transform: translate3d(0, 0, 0);
}

.line-3 {
   -webkit-transform: translate3d(0, 8px, 0);
   transform: translate3d(0, 8px, 0);
}

.menu-open:checked + .menu-open-button .line-1 {
   -webkit-transform: translate3d(0, 0, 0) rotate(45deg);
   transform: translate3d(0, 0, 0) rotate(45deg);
}

.menu-open:checked + .menu-open-button .line-2 {
   -webkit-transform: translate3d(0, 0, 0) scale(0.1, 1);
   transform: translate3d(0, 0, 0) scale(0.1, 1);
}

.menu-open:checked + .menu-open-button .line-3 {
   -webkit-transform: translate3d(0, 0, 0) rotate(-45deg);
   transform: translate3d(0, 0, 0) rotate(-45deg);
}

.menu {
   margin: auto;
   position: relative;
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   width: 80px;
   height: 80px;
   text-align: center;
   box-sizing: border-box;
   font-size: 26px;
}

.menu-item:hover {
   background: #EEEEEE;
   color: #3290B1;
}

.menu-item:nth-child(3) {
    /*arriba cerrar (1) */ 
   -webkit-transition-duration: 150ms;
   transition-duration: 150ms;
}

.menu-item:nth-child(4) {
    /*diagonal arriba derecho (2) cerrar*/ 
   -webkit-transition-duration: 180ms;
   transition-duration: 180ms;
}

.menu-item:nth-child(5) {
    /* diagonal abajo derecho (3) cerrar */
   -webkit-transition-duration: 240ms;
   transition-duration: 240ms;
}

.menu-item:nth-child(6) {
    /*abajo cerrar (4)*/
   -webkit-transition-duration: 270ms;
   transition-duration: 270ms;
}

.menu-item:nth-child(7) {
    /* diagonal izquierdo abajo cerrar (5) */
   -webkit-transition-duration: 300ms;
   transition-duration: 300ms;
}

.menu-item:nth-child(8) {
    /* doagonal iz arriba cerrar (6) */
   -webkit-transition-duration: 330ms;
   transition-duration: 330ms;
}



.menu-open-button {
   z-index: 2;
   -webkit-transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
   transition-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1.275);
   -webkit-transition-duration: 400ms;
   transition-duration: 400ms;
   -webkit-transform: scale(1.1, 1.1) translate3d(0, 0, 0);
   transform: scale(1.1, 1.1) translate3d(0, 0, 0);
   cursor: pointer;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
}

.menu-open-button:hover {
   -webkit-transform: scale(1.2, 1.2) translate3d(0, 0, 0);
   transform: scale(1.2, 1.2) translate3d(0, 0, 0);
}

.menu-open:checked + .menu-open-button {
   -webkit-transition-timing-function: linear;
   transition-timing-function: linear;
   -webkit-transition-duration: 200ms;
   transition-duration: 200ms;
   -webkit-transform: scale(0.8, 0.8) translate3d(0, 0, 0);
   transform: scale(0.8, 0.8) translate3d(0, 0, 0);
}

.menu-open:checked ~ .menu-item {
   -webkit-transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
   transition-timing-function: cubic-bezier(0.935, 0, 0.34, 1.33);
}

.menu-open:checked ~ .menu-item:nth-child(3) {
   transition-duration: 180ms;
   -webkit-transition-duration: 180ms;
   -webkit-transform: translate3d(0.08361px, -104.99997px, 0);
   transform: translate3d(0.08361px, -104.99997px, 0);
}

.menu-open:checked ~ .menu-item:nth-child(4) {
   transition-duration: 280ms;
   -webkit-transition-duration: 280ms;
   -webkit-transform: translate3d(90.9466px, -52.47586px, 0);
   transform: translate3d(90.9466px, -52.47586px, 0);
}

.menu-open:checked ~ .menu-item:nth-child(5) {
   transition-duration: 380ms;
   -webkit-transition-duration: 380ms;
   -webkit-transform: translate3d(90.9466px, 52.47586px, 0);
   transform: translate3d(90.9466px, 52.47586px, 0);
}

.menu-open:checked ~ .menu-item:nth-child(6) {
   transition-duration: 480ms;
   -webkit-transition-duration: 480ms;
   -webkit-transform: translate3d(0.08361px, 104.99997px, 0);
   transform: translate3d(0.08361px, 104.99997px, 0);
}

.menu-open:checked ~ .menu-item:nth-child(7) {
   transition-duration: 580ms;
   -webkit-transition-duration: 580ms;
   -webkit-transform: translate3d(-90.86291px, 52.62064px, 0);
   transform: translate3d(-90.86291px, 52.62064px, 0);
}

.menu-open:checked ~ .menu-item:nth-child(8) {
   transition-duration: 680ms;
   -webkit-transition-duration: 680ms;
   -webkit-transform: translate3d(-91.03006px, -52.33095px, 0);
   transform: translate3d(-91.03006px, -52.33095px, 0);
}

.menu-open:checked ~ .menu-item:nth-child(9) {
   transition-duration: 780ms;
   -webkit-transition-duration: 780ms;
   -webkit-transform: translate3d(-0.25084px, -104.9997px, 0);
   transform: translate3d(-0.25084px, -104.9997px, 0);
}

.FireBrick {
   background-color: #B22222;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.FireBrick:hover {
   color: #B22222;
   text-shadow: none;
}

.green {
   background-color: #70CC72;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.green:hover {
   color: #70CC72;
   text-shadow: none;
}

.red {
   background-color: #FE4365;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.red:hover {
   color: #FE4365;
   text-shadow: none;
}

.purple {
   background-color: #C49CDE;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.purple:hover {
   color: #C49CDE;
   text-shadow: none;
}

.orange {
   background-color: #FC913A;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.orange:hover {
   color: #FC913A;
   text-shadow: none;
}

.crimsons {
   background-color: #DC143C;
   box-shadow: 3px 3px 0 0 rgba(0, 0, 0, 0.14);
   text-shadow: 1px 1px 0 rgba(0, 0, 0, 0.12);
}

.crimsons:hover {
   color: #DC143C;
   text-shadow: none;
}

.credit {
   margin: 24px 20px 120px 0;
   text-align: right;
   color: #EEEEEE;
}

.credit a {
   padding: 8px 0;
   color: #C49CDE;
   text-decoration: none;
   transition: all 0.3s ease 0s;
}

.credit a:hover {
   text-decoration: underline;
} 
</style>












<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
      <!-- <img src="..." class="img-fluid" alt="..."> -->
      
        
      <nav class="menu">
      <input type="checkbox" href="#" class="menu-open" name="menu-open" id="menu-open" />
      <img src="https://www.diarioconstitucional.cl/wp-content/uploads/2021/04/f130633-1-h.jpeg" class="rounded mx-1 my-1 zoom menu-open-button" style="z-index: 1; width: 240px;height: 240px;" > <a href="#" class="menu-item FireBrick"> icon </a>
            <a href="#" class="menu-item green"> icon </a>
            <a href="#" class="menu-item red"> icon </a>
            <a href="#" class="menu-item purple"> icon </a>
            <a href="#" class="menu-item orange"> icon</a>
            <a href="#" class="menu-item crimsons"> icon </a></a>
            <label class="menu-open-button" for="menu-open">
                <span class="lines line-1"></span>
                <span class="lines line-2"></span>
                <span class="lines line-3"></span>
            </label>

           
        </nav>

        

      

        <button type="input" style="background-color: Transparent; border: none" name="camarones"><div class="col ">
          <div class="card shadow-sm">
          <img src="https://www.diarioconstitucional.cl/wp-content/uploads/2021/04/f130633-1-h.jpeg" class="rounded mx-1 my-1 zoom " style="z-index: 1;" >          
              <p class="text-sobre text-white rounded">CAMARONES</p> 
          </div>
        </div></button> 

       

      </div>
    </div>
  </div> 












<?php include_once "Front/includes/footer.php" ?>