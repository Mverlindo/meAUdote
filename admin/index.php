<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Murilo Verlindo e Gabrila Machado">
    <meta name="description" content="Trabalho Final POOII">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/indexadm.css">
    <title>MeAudote</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand text-white fs-1" href="../index.php">meAUdote</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ">
                            <a class="nav-link text-white fs-4" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white fs-4" href="adote.php">Adote</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container">

        <nav class="navbar navbar-expand-lg bg-light bg-transparent">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Localização
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Especie
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Sexo
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Porte
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Idade
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="row justify-content-center mt-4">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="images/gato.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Gato</h5>
                            <!-- Product price-->
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Gato">Informações</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Gato" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Gato</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body d-flex">
                                    <div class="col-6">
                                        <img class="img-fluid" src="images/gato.png">
                                    </div>
                                    <div class="col-6">
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rerum, libero et placeat hic nisi quibusdam asperiores. Animi architecto excepturi, deleniti repellat, eius, eum iure inventore aspernatur nemo dolore necessitatibus.</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="images/Dog1.png" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Dog</h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Dog">Informações</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Dog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Dog</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body d-flex">
                                    <div class="col-6">
                                        <img class="img-fluid" src="images/Dog1.png">
                                    </div>
                                    <div class="col-6">
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rerum, libero et placeat hic nisi quibusdam asperiores. Animi architecto excepturi, deleniti repellat, eius, eum iure inventore aspernatur nemo dolore necessitatibus.</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">

                    <!-- Product image-->
                    <img class="card-img-top" src="images/Dog2" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Other Dog</h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Other_Dog">Informações</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Other_Dog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Other Dog</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body d-flex">
                                    <div class="col-6">
                                        <img class="img-fluid" src="images/Dog2">
                                    </div>
                                    <div class="col-6">
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rerum, libero et placeat hic nisi quibusdam asperiores. Animi architecto excepturi, deleniti repellat, eius, eum iure inventore aspernatur nemo dolore necessitatibus.</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="images/Dog3.jpeg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Other Other Dog</h5>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Other_Other_Dog">
                            Informações
                        </button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="Other_Other_Dog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Other Other Dog</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body d-flex">
                                    <div class="col-6">
                                        <img class="img-fluid" src="images/Dog3.jpeg">
                                    </div>
                                    <div class="col-6">
                                        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem rerum, libero et placeat hic nisi quibusdam asperiores. Animi architecto excepturi, deleniti repellat, eius, eum iure inventore aspernatur nemo dolore necessitatibus.</span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer id="rodape">
        <p><small>&copy; 2022 <a href="#">Murilo Verlindo & Gabriela Machado</a>. All Rights Reserved.
    </footer>
</body>

</html>