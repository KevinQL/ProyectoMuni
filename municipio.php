<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Misión y visión</title>

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
            <h3>Alcalde y regidores</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, amet.</p>
        </div>
    </section>

        <!-- Sección nueva  -->
    <section>
        <div class="container py-3">
            <div class="">
                <div class="text-center">
                    <a href="#" data-toggle="modal" data-target="#modal-alcalde">
                        <img src="img/alcalde escritorio.jpg" class="rounded rounded-circle bg-light" height="220px" width="220px" alt="">
                    </a>
                    <!-- Datos alcalde -->
                    <h4>Mi nombre y apellidos</h4>
                    <span>Gestion 2019-2023</span>

                    <!-- Modal alcalde-->
                    <div class="modal fade" id="modal-alcalde" tabindex="-1" role="dialog" aria-labelledby="modal-alcalde" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                            
                            <div class="row text-white lead pt-5">
                                <div class="col-md-4">
                                    <img src="img/alcalde.jpg" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                </div>
                                <div class="col-md-8 py-5">
                                    <img src="img/alcalde escritorio.jpg" class="m-auto rounded-circle" width="200px" height="200px" alt="">
                                    <h5>Saludo alcalde</h5>
                                    <small>Nombre alcalde </small>
                                    <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="container">
                    <div class="row py-3">
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modal-regidor1">
                                <img src="img/person.png" class="rounded-circle rounded bg-light" height="200px" width="190px" alt="">
                            </a>
                            <!-- Datos básicos regidor -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal regidor-->
                            <div class="modal fade" id="modal-regidor1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-4">
                                            <img src="https://lorempixel.com/250/500" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-8 pt-5">
                                            <h5>Saludo Regidor</h5>
                                            <small>Name Regidor </small>
                                            <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>

                        </div>
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modal-regidor1">
                                <img src="img/person.png" class="rounded-circle rounded bg-light" height="200px" width="190px" alt="">
                            </a>
                            <!-- Datos básicos regidor -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal regidor-->
                            <div class="modal fade" id="modal-regidor1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-4">
                                            <img src="https://lorempixel.com/250/500" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-8 pt-5">
                                            <h5>Saludo Regidor</h5>
                                            <small>Name Regidor </small>
                                            <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modal-regidor1">
                                <img src="img/person.png" class="rounded-circle rounded bg-light" height="200px" width="190px" alt="">
                            </a>
                            <!-- Datos básicos regidor -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal regidor-->
                            <div class="modal fade" id="modal-regidor1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-4">
                                            <img src="https://lorempixel.com/250/500" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-8 pt-5">
                                            <h5>Saludo Regidor</h5>
                                            <small>Name Regidor </small>
                                            <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>
                        </div>
                    </div>

                    <div class="row py-3">
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modal-regidor1">
                                <img src="img/person.png" class="rounded-circle rounded bg-light" height="200px" width="190px" alt="">
                            </a>
                            <!-- Datos básicos regidor -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal regidor-->
                            <div class="modal fade" id="modal-regidor1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-4">
                                            <img src="https://lorempixel.com/250/500" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-8 pt-5">
                                            <h5>Saludo Regidor</h5>
                                            <small>Name Regidor </small>
                                            <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modal-regidor1">
                                <img src="img/person.png" class="rounded-circle rounded bg-light" height="200px" width="190px" alt="">
                            </a>
                            <!-- Datos básicos regidor -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal regidor-->
                            <div class="modal fade" id="modal-regidor1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-4">
                                            <img src="https://lorempixel.com/250/500" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-8 pt-5">
                                            <h5>Saludo Regidor</h5>
                                            <small>Name Regidor </small>
                                            <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
                                        </div>
                                    </div>                                       
                                </div>                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="#" data-toggle="modal" data-target="#modal-regidor1">
                                <img src="img/person.png" class="rounded-circle rounded bg-light" height="200px" width="190px" alt="">
                            </a>
                            <!-- Datos básicos regidor -->
                            <div>
                                <h4>Lorem, ipsum dolor.</h4>                                
                                <span>Lorem, ipsum dolor. Lorem ipsum dolor sit amet consectetur.</span>
                            </div>

                            <!-- Modal regidor-->
                            <div class="modal fade" id="modal-regidor1" tabindex="-1" role="dialog" aria-labelledby="modal-regidor1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                    
                                    <div class="row text-white lead pt-5">
                                        <div class="col-md-4">
                                            <img src="https://lorempixel.com/250/500" class="img-fluid m-auto rounded-pill h-100 w-100" alt="">
                                        </div>
                                        <div class="col-md-8 pt-5">
                                            <h5>Saludo Regidor</h5>
                                            <small>Name Regidor </small>
                                            <p>Saludo alcalde... Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dicta ipsa beatae dolore. Velit, reprehenderit esse assumenda fugit deserunt numquam officiis explicabo odit nesciunt dolorem amet eveniet aliquam reiciendis ipsam.</p>
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

    <!-- SECCIÓN DE MISIÓN VISIÓN -->
    <section class="inicio-organizacion" id="mision-vision">
        <div class="opacidad-org">
            <div class="container text-center py-4 lead text-white">
                <h4>Misión y Visión</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident corrupti quos dolorem voluptates veniam vel voluptas veritatis?</p>
            </div>
        </div>
        </section>

    <section class="bg-light inicio-organizacion">
        <div class="opacidad-org">
            <div class="container text-center py-4 lead text-white">
                <div class="row mt-3">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <h3>MISIÓN</h3>
                        <i class="fas fa-mountain fa-4x color-icono"></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aliquam perspiciatis asperiores expedita dolorum voluptatibus impedit est nihil distinctio dolore.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aliquam perspiciatis 
                        </p>                    
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-light inicio-organizacion">
        <div class="opacidad-org">

            <div class="container text-center py-4 lead text-white">
                <div class="row mt-3">
                    <div class="col-md-8">
                        <h3>VISIÓN</h3>
                        <i class="fas fa-eye fa-4x color-icono"></i>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique aliquam perspiciatis asperiores expedita dolorum voluptatibus impedit est nihil distinctio dolore.
                            cessitatibus recusandae non quo iste temporibus odit distinctio vitae, unde eaque enim!
                        </p>                    
                    </div>
                </div>
            </div>
        </div>
    </section>    


    <!-- Sección organigrama -->
    <section class="inicio-organizacion" id="organigrama">
        <div class="opacidad-org">
            <div class="container py-4 text-center text-white lead">
                <h3>Organigrama</h3>
                <i class="fas fa-sitemap fa-4x color-icono"></i>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim illum nesciunt aperiam veniam, error ab, fugit veritatis sed quas, illo eum culpa porro quae atque?</p>
            </div>
        </div>
    </section>

    <section class="inicio-organizacion">
        <div class="opacidad-org">

            <div class="container p-4 text-center">
                <img src="img/organigrama1.png" class="img-fluid border-secondary rounded-sm" alt="">
            </div>
        </div>
    </section>


    <!-- Plan de desarrollo -->
    <section class="bg-light" id="section-plan">
        <div class="container text-center py-4 text-muted">
            <h3>Plan de desarrollo</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet rerum commodi eius! Consequatur, error voluptate explicabo asperiores sit expedita laboriosam ut nostrum eligendi.</p>
        </div>
    </section>

    <section class="bg-light">
        <div class="container p-2 lead">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, facere. Et, reiciendis ducimus accusamus beatae quas illum, itaque minus eum quia modi blanditiis reprehenderit alias est velit eius. Laudantium quibusdam placeat recusandae alias corrupti ad nesciunt tempora repellendus magnam iure.</p>
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