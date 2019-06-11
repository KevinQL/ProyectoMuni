<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Turismo</title>

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

    <!-- SECCIÓN SALUDO ALCALDE  -->
    <section class="bg-light" id="alcalde-regidores">
        <div class="container py-4 text-center lead text-muted">
            <h3>Turismo</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, amet.</p>
        </div>
    </section>

        <!-- Sección Turismo mages   -->
    <section>
        <div class="container py-3">

            <div class="text-center">
                <div class="container">
                    <div class="row py-1">
                        <div class="col-md-4 pt-3">
                            <a href="#" data-toggle="modal" data-target="#modal-turistico1">
                                <img src="img/img6.jpg" class="rounded-circle rounded bg-light" height="200px" width="200px" alt="">
                            </a>
                            <!-- Datos Lugar turístico -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal turismo vista-->
                            <div class="modal fade" id="modal-turistico1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-12">
                                            <img src="img/img6.jpg" class="img-fluid m-auto h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <h5>Nombre lugar turistico</h5>
                                            <small>Andarapa</small>
                                            <p>
                                                Descripción lugar turístico Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.
                                            </p>
                                            <div class="modal-content bg-modal-pie-tursmo">
                                                <a href="galeria-turismo.php?turismos=provincia1" class="btn btn-lg btn-outline-warning bt-block">
                                                    VER MAS
                                                </a>
                                                                                         
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>

                        <div class="col-md-4 pt-3">
                            <a href="#" data-toggle="modal" data-target="#modal-turistico2">
                                <img src="img/img6.jpg" class="rounded-circle rounded bg-light" height="200px" width="200px" alt="">
                            </a>
                            <!-- Datos Lugar turístico -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal turismo vista-->
                            <div class="modal fade" id="modal-turistico2" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-12">
                                            <img src="img/img6.jpg" class="img-fluid m-auto h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <h5>Nombre lugar turistico 2</h5>
                                            <small>Andarapa</small>
                                            <p>
                                                Descripción lugar turístico Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.
                                            </p>
                                            <div class="modal-content bg-modal-pie-tursmo">
                                                <a href="galeria-turismo.php?turismos=provincia2" class="btn btn-lg btn-outline-warning bt-block">
                                                    VER MAS
                                                </a>
                                                                                         
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>
                        
                        <div class="col-md-4 pt-3">
                            <a href="#" data-toggle="modal" data-target="#modal-turistico3">
                                <img src="img/img6.jpg" class="rounded-circle rounded bg-light" height="200px" width="200px" alt="">
                            </a>
                            <!-- Datos Lugar turístico -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal turismo vista-->
                            <div class="modal fade" id="modal-turistico3" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-12">
                                            <img src="img/img6.jpg" class="img-fluid m-auto h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <h5>Nombre lugar turistico 3</h5>
                                            <small>Andarapa</small>
                                            <p>
                                                Descripción lugar turístico Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.
                                            </p>
                                            <div class="modal-content bg-modal-pie-tursmo">
                                                <a href="galeria-turismo.php?turismos=provincia3" class="btn btn-lg btn-outline-warning bt-block">
                                                    VER MAS
                                                </a>
                                                                                         
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>

                        <div class="col-md-4 pt-3">
                            <a href="#" data-toggle="modal" data-target="#modal-turistico4">
                                <img src="img/img6.jpg" class="rounded-circle rounded bg-light" height="200px" width="200px" alt="">
                            </a>
                            <!-- Datos Lugar turístico -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal turismo vista-->
                            <div class="modal fade" id="modal-turistico4" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-12">
                                            <img src="img/img6.jpg" class="img-fluid m-auto h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <h5>Nombre lugar turistico 4</h5>
                                            <small>Andarapa</small>
                                            <p>
                                                Descripción lugar turístico Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.
                                            </p>
                                            <div class="modal-content bg-modal-pie-tursmo">
                                                <a href="galeria-turismo.php?turismos=provincia4" class="btn btn-lg btn-outline-warning bt-block">
                                                    VER MAS
                                                </a>
                                                                                         
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>  

                        <div class="col-md-4 pt-3">
                            <a href="#" data-toggle="modal" data-target="#modal-turistico5">
                                <img src="img/img6.jpg" class="rounded-circle rounded bg-light" height="200px" width="200px" alt="">
                            </a>
                            <!-- Datos Lugar turístico -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal turismo vista-->
                            <div class="modal fade" id="modal-turistico5" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-12">
                                            <img src="img/img6.jpg" class="img-fluid m-auto h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <h5>Nombre lugar turistico 5</h5>
                                            <small>Andarapa</small>
                                            <p>
                                                Descripción lugar turístico Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.
                                            </p>
                                            <div class="modal-content bg-modal-pie-tursmo">
                                                <a href="galeria-turismo.php?turismos=provincia5" class="btn btn-lg btn-outline-warning bt-block">
                                                    VER MAS
                                                </a>
                                                                                         
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>  

                        <div class="col-md-4 pt-3">
                            <a href="#" data-toggle="modal" data-target="#modal-turistico6">
                                <img src="img/img6.jpg" class="rounded-circle rounded bg-light" height="200px" width="200px" alt="">
                            </a>
                            <!-- Datos Lugar turístico -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal turismo vista-->
                            <div class="modal fade" id="modal-turistico6" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-12">
                                            <img src="img/img6.jpg" class="img-fluid m-auto h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-12 pt-5">
                                            <h5>Nombre lugar turistico 6</h5>
                                            <small>Andarapa</small>
                                            <p>
                                                Descripción lugar turístico Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.
                                            </p>
                                            <div class="modal-content bg-modal-pie-tursmo">
                                                <a href="galeria-turismo.php?turismos=provincia6" class="btn btn-lg btn-outline-warning bt-block">
                                                    VER MAS
                                                </a>
                                                                                         
                                            </div>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>  

                    </div>

                </div>                
            </div>
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