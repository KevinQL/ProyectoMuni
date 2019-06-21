<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PUYHUALLA</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fonts icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="../css/estilos-encabezado.css">
    <link rel="stylesheet" href="../css/navegacioncss2.css">
    <link rel="stylesheet" href="../css/k-stilos.css">
    <link rel="stylesheet" href="../css/rs-estilos.css">

        <link rel="stylesheet" href="../css/estyle-andarapa.css"> <!-- último css agregado -->

</head>
<body>

    <div class="cotenedor-navegacion  sticky-top" style="background: royalblue;">
        
        <!-- NAVEGACIÓN-->         
        <?php include('navegar.php'); ?>
    </div>

    
    <section class="title-galeria bg-titulo-galery">
        <div class="container text-center p-4">
            <h3 class="">GALERÍA PUYHUALLA </h3>
            <p class="text-white lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, possimus delectus minus dolor obcaecati incidunt tenetur odit qui sunt ab.</p>
        </div>
    </section>


    <section class="my-2 ">
        <div class="container">

<!-- Modae four -->
<div class="col-md-12 p-0 m-0 mb-1">
  <!-- La imgen en la página -->
  <a href="#" data-toggle="modal" data-target=".modal-xl-one">
    <img src="../file-ignore/andarapa/DSC_0146.jpg" alt="" class="img-fluid rounded-lg" height="" style="width: 100%">
  </a>
  <!-- Todo el modal -->
  <div class="modal fade modal-xl-one" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <!-- Boton cerrar -->
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <!-- Imagen modal en tamaño largo y centrado -->
    <div class="modal-dialog modal-dialog-centered modal-xl">        
      <div class="modal-content">
        <img src="../file-ignore/andarapa/DSC_0146.jpg" alt="" class="img-fluid" style="width: 100%">
      </div>
    </div>
  </div>
</div>


<!-- varias imagenes con modales -->

<div class="">
  <div class="row px-md-3">
    <div class="col-md-4 p-md-0">                      

      <!-- La imgen en la página -->
      <a href="#" data-toggle="modal" data-target=".modal-xl-two">
        <img src="../file-ignore/andarapa/img.jpg" class="img-fluid" style="width: 100%" alt="">
      </a>
      <!-- Todo el modal -->
      <div class="modal fade modal-xl-two" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <!-- Boton cerrar -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- Imagen modal en tamaño largo y centrado -->
        <div class="modal-dialog modal-dialog-centered modal-xl">        
          <div class="modal-content">
            <img src="../file-ignore/andarapa/img.jpg" class="img-fluid" style="width: 100%" alt="">          
          </div>
        </div>
      </div>
      <!-- fin model -->

    </div>

    <div class="col-md-4 p-md-0">

      <a href="#" data-toggle="modal" data-target=".modal-xl-three">
        <img src="../file-ignore/andarapa/DSC_0128.jpg" class="img-fluid" style="width: 100%" alt="">
      </a>

      <!-- Todo el modal -->
      <div class="modal fade modal-xl-three" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <!-- Boton cerrar -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- Imagen modal en tamaño largo y centrado -->
        <div class="modal-dialog modal-dialog-centered modal-lg">        
          <div class="modal-content">
            <img src="../file-ignore/andarapa/DSC_0128.jpg" class="img-fluid" style="width: 100%" alt="">          
            <div class="overlay-text p-1 p-md-5 text-sm">
              <h2>My Title of test</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis molestias dicta placeat!</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="col-md-4 p-md-0">
      
      <a href="#" data-toggle="modal" data-target=".modal-xl-four">
        <img src="../file-ignore/andarapa/DSC_0154.jpg" class="img-fluid" style="width: 100%" alt="">
      </a>

      <!-- Todo el modal -->
      <div class="modal fade modal-xl-four" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <!-- Boton cerrar -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <!-- Imagen modal en tamaño largo y centrado -->
        <div class="modal-dialog modal-dialog-centered modal-lg">        
          <div class="modal-content">
            <img src="../file-ignore/andarapa/DSC_0154.jpg" class="img-fluid" style="width: 100%" alt="">          
            <div class="overlay-text p-1 p-md-5 text-sm">
              <h2>My Title of test</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis molestias dicta placeat!</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

        <!-- DESCRIPCIÓN DE LA GALERÍA DE IMG -->
        <section class="p-5 bg-light">
          <div class="overlay-text text-sm">
              <h2>Título Descripción</h2>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis molestias dicta placeat!
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed alias eaque aspernatur corrupti distinctio quibusdam aliquid non voluptatibus eum eius?
              </p>
<!-- fb comment -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.3"></script>              

<div class="fb-comments" data-href="http://localhost/proyectoMuni/DEMO-CABEZA/demo/galeria-turismo.php?turismos=provincia1" data-width="100%" data-numposts="5"></div>
<!--  fin fb comment -->

            </div>
        </section>
        </div>
    </section>

    <!-- Footer Pie de página Copy Rezuam -->
    <?php include('../pie-page.php'); ?>    

    <!-- jsBootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>