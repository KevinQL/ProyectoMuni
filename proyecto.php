<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>

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

    <section class="bg-dark py-4" id="ejecutados">
        <div class="container text-center lead text-white">
            <h3>Obras y Proyectos</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates eligendi, aspernatur aperiam iure quidem accusantium provident necessitatibus ab iste quaerat?</p>
            <div class="d-flex justify-content-center">
            <form action="" class="form-inline">
                    <input type="search" class="form-control form-control-lg" placeholder="Buscar Proyecto">
                    <button class="btn btn-outline-danger btn-lg ml-0 mt-1 ml-sm-1 mt-sm-0 d-none d-sm-block">Buscar</button>
                    <button class="btn btn-danger btn-lg ml-0 mt-2 ml-sm-1 mt-sm-0 btn-block d-sm-none">Buscar</button>
            </form>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container py-4">
            
            <!-- <nav class="pb-4">
                <form action="" class="form-inline">
                    <input type="search" class="form-control form-control-lg" placeholder="Buscar Proyecto">
                    <button class="btn btn-outline-danger btn-lg ml-0 mt-1 ml-sm-1 mt-sm-0 d-none d-sm-block">Buscar</button>
                    <button class="btn btn-danger btn-lg ml-0 mt-2 ml-sm-1 mt-sm-0 btn-block d-sm-none">Buscar</button>
                </form>
            </nav> -->
            
            <h4 class="display-4 text-muted pt-4 pb-2">EJECUTADOS</h4> 

            <div class="row">
                <div class="col-lg-4 text-center">
                    <h4>Tilte proyect</h4>
                    <img src="images/img6.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h4>Tilte proyect</h4>
                    <img src="images/img6.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h4>Tilte proyect</h4>
                    <img src="images/img6.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark p-4" id="en-proceso">
        <div class="container text-center lead text-white">
            <h3>Obras y Proyectos</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates eligendi, aspernatur aperiam iure quidem accusantium provident necessitatibus ab iste quaerat?</p>
            <div class="d-flex justify-content-center">
                <form action="" class="form-inline">
                        <input type="search" class="form-control form-control-lg" placeholder="Buscar Proyecto">
                        <button class="btn btn-outline-danger btn-lg ml-0 mt-1 ml-sm-1 mt-sm-0 d-none d-sm-block">Buscar</button>
                        <button class="btn btn-danger btn-lg ml-0 mt-2 ml-sm-1 mt-sm-0 btn-block d-sm-none">Buscar</button>
                </form>
            </div>
        </div>
    </section>

    <section class="">
        <div class="container py-4">

            <h4 class="display-4 text-muted pt-4 pb-2">EN PROCESO</h4> 

            <div class="row">
                <div class="col-lg-4 text-center">
                    <h4>Tilte proyect</h4>
                    <img src="images/img5.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h4>Tilte proyect</h4>
                    <img src="images/img5.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <h4>Tilte proyect</h4>
                    <img src="images/img5.jpg" class="img-fluid" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                </div>
            </div>
        </div>
        </section>



        <section class="bg-dark p-4" id="proyectadas">
            <div class="container text-center lead text-white">
                <h3>Obras y Proyectos</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates eligendi, aspernatur aperiam iure quidem accusantium provident necessitatibus ab iste quaerat?</p>
                <div class="d-flex justify-content-center">
                    <form action="" class="form-inline">
                            <input type="search" class="form-control form-control-lg" placeholder="Buscar Proyecto">
                            <button class="btn btn-outline-danger btn-lg ml-0 mt-1 ml-sm-1 mt-sm-0 d-none d-sm-block">Buscar</button>
                            <button class="btn btn-danger btn-lg ml-0 mt-2 ml-sm-1 mt-sm-0 btn-block d-sm-none">Buscar</button>
                    </form>
                </div>
            </div>
        </section>
        
        <section class="">
            <div class="container py-4">

                <h4 class="display-4 text-muted pt-4 pb-2">PROYECTADAS</h4> 

                <div class="row">
                    <div class="col-lg-4 text-center">
                        <h4>Tilte proyect</h4>
                        <img src="images/img2.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4>Tilte proyect</h4>
                        <img src="images/img2.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4>Tilte proyect</h4>
                        <img src="images/img2.jpg" class="img-fluid" alt="">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, quod.</p>
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