<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset("img/icon.png")}}" type="image/x-icon">
        <title>Phone Book</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{url("css/style.css")}}">
    </head>
    <body class="antialiased">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark   rounded-3">

            <div class="container-fluid">
                <a class="navbar-brand" href="#">Contacts <i class="bi bi-person-rolodex"></i></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <!-- Button trigger modal -->

                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>


        <div class="d-flex justify-content-center " >
            <button type="button" id="new-user" class="btn btn-warning " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-plus"></i>
            </button>
                <a id="delete" href="deleteAll" class="btn btn-danger mx-5">
                    <i class="bi bi-trash"></i>
                </a>

            <div class="row w-100 mt-2">
                <div class="col">
                    <ul class="list-group">
                        @foreach($contacts as $contact)
                            <li class="list-group-item d-flex justify-content-center" style="padding-left: 0px !important;">
                                <div class=" ">
                                    <?php if($contact["gender"] == 1)
                                        echo "<img class=border-end border-dark src=img/man.png width=55px class=rounded>";
                                    else
                                        echo "<img class=border-end border-dark src=img/woman.png width=55px class=rounded>";
                                    ?>
                                </div>
                                <div class="ps-3 ">
                                    <div class="fw-bold ">Name:
                                    </div>
                                    <?php echo $contact["name"]; ?>

                                </div>
                                <div class="m-auto ">
                                    <div class="fw-bold">Phone:
                                    </div>
                                    <?php echo $contact["phone"]; ?>

                                </div>
                                <div class="m-auto">
                                    <div class="fw-bold">Email:
                                    </div>
                                    <?php echo $contact["email"]; ?>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Users</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="new-contact" method="POST">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" required name="name" id="floatingInput" placeholder="First Name">
                                <label for="floatingInput">Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" required name="phone" id="floatingInput" placeholder="Phone Number">
                                <label for="floatingInput">Phone Number</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" required name="email" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="form-check" >
                                <input class="form-check-input" value="1" type="radio" name="gender" id="flexRadioDefault1"checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="0" type="radio" name="gender" id="flexRadioDefault2" >
                                <label class="form-check-label" for="flexRadioDefault2">
                                    female
                                </label>
                            </div>
                            <div class="">
                                <button style="width: 100% !important;" type="submit" class="btn btn-primary mt-2">SAVE</button>
                            </div>
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                        </form>
                    </div>

                </div>

            </div>
        </div>



    </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    </body>
</html>
