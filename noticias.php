<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Noticias</title>

    <!-- Css Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Fonts icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">    
    <!-- CSS PROPIOS -->
    <link rel="stylesheet" href="css/estilos-encabezado.css">
    <link rel="stylesheet" href="css/navegacioncss2.css">
    <link rel="stylesheet" href="css/k-stilos.css">
    <link rel="stylesheet" href="css/rs-estilos.css">

        <link rel="stylesheet" href="css/estyle-andarapa.css"> <!-- último css agregado -->
</head>
<body>


    <div class="cotenedor-navegacion  sticky-top" style="background: royalblue;">
        
        <!-- NAVEGACIÓN-->
        <?php include('navegar.php'); ?>
    </div>    

    <!-- CUERPO NOTICIAS -->
    <section class="bg-warning">
        <div class="container p-4 text-center text-white lead">
            <h2>Sección Noticias</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur mollitia doloremque ea eveniet optio cum quisquam quibusdam a repellendus repudiandae?</p>
        </div>
    </section>

    <section class="noticias-principal py-3">
        <div class="container bg-light py-1">
            <div class="row">
                
                <?php
                require_once('Conexion.php');
                // echo (!empty($_GET['ntc']))."LOALA ".($_GET['ntc'] >= 0); //Prueba valor boolean 
                $ntc = (!empty($_GET['ntc']) && ($_GET['ntc'] >= 0))?$_GET['ntc'] : 0 ;
                $not_init = ($ntc != 0)? $ntc*4 : 0;
                // echo $not_init;
                // echo "valor ntc ".$ntc; //Prueba viendo valor del ntc 
                $result = $mysqli->query("SELECT * FROM noticias LIMIT $not_init, 4");
                $arr_notice = [];
                $cant_noticia = 0;
                while($reg_notice = $result->fetch_assoc()){
                    $arr_notice[] = $reg_notice;
                    $cant_noticia++;
                }

                //Redirecciona a index.php cuando no hay más noticias
                if($cant_noticia==0){
                    // header('Location: index.php');
                    // die();
                    
                    echo'<script type="text/javascript"> alert("NO HAY MÁS NOTICIAS!!");
                    window.location.href="noticias";</script>';                   

                    // echo "No hay noticia";
                }
                
                foreach($arr_notice as $noticia){
                    // echo $noticia['id'];
                
                ?>

                <div class="col-lg-6">
                    <div class="card border-light px-1 mb-3">
                        <img src="img/img3.jpg" class="card-img-top rounded-lg" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $noticia['titulo_noti']; ?></h5>
                            <p class="card-text">
                                <?php
                                    echo $noticia['introduccion_noti'];
                                ?>
                                <a href="#" class="badge badge-info" data-toggle="modal" data-target="#idnoticia<?php echo $noticia['id_noticias']; ?>">
                                    VER MAS
                                </a>                                
                            </p>
                            <p class="card-text"><small class="text-muted">
                                Last updated 3 mins ago
                                <?php echo $noticia['fecha_publi']; ?>
                            </small></p>
                        </div>
                    </div> 
                    <!-- Card noticia fin -->

                    <!-- Modal noticia-->
                    <div class="modal fade bd-example-modal-xl" id="idnoticia<?php echo $noticia['id_noticias']; ?>" tabindex="-1" role="dialog" aria-labelledby="idnoticia1" aria-hidden="true">
                            
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content border border-secondary bg-secondary">

                                <img src="img/img3.jpg" class="img-fluid" alt="">                                            
                                <div class="text-muted p-3">
                                    <h4 class="text-center display-3 lead text-white">
                                        <?php echo $noticia['titulo_noti']; ?>
                                    </h4>
                                    <p class="display-5 text-white lead font-weight-normal px-2">
                                        <?php 
                                            echo $noticia['contenido'];
                                        ?>                                        
                                    </p>                                            
                                </div>

                                <button class="btn btn-lg btn-warning m-4 lead" data-dismiss="modal">
                                    Leido
                                </button>

                            </div>
                        </div>
                    </div>
                    <!-- Fin modal noticia -->
                </div>

                <?php }?>

                <!-- <div class="col-lg-6">
                    <div class="card border-light px-1 mb-3">
                        <img src="img/img1.jpg" class="card-img-top rounded-lg " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nombre noticia</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div> -->
 

            </div>
            <!-- PÁGINACIÓN DE LAS NOTICIAS -->
<nav aria-label="Page navigation example" class="pt-2">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="noticias?ntc=<?php 
            $prev = ($ntc > 0)? $ntc-1 : 0 ;
            echo $prev; 
        ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item <?php echo ($ntc == 0)?"active":""; ?>"><a class="page-link" href="noticias?ntc=0">1</a></li>
    <li class="page-item <?php echo ($ntc == 1)?"active":""; ?>"><a class="page-link" href="noticias?ntc=1">2</a></li>
    <li class="page-item <?php echo ($ntc == 2)?"active":""; ?>"><a class="page-link" href="noticias?ntc=2">3</a></li>
    <li class="page-item <?php echo ($ntc >= 3)?"active":""; ?>">
      <a class="page-link" href="noticias?ntc=<?php echo $ntc+1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>  

        </div>
    </section>

    <!-- Footer Pie de página Copy Rezuam -->
    <?php include('pie-page.php'); ?>
    
    <!-- jsBootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>