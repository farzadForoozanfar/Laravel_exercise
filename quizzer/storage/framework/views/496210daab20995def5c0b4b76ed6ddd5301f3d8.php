<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo e(asset("img/logo.png")); ?>" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Quizzer">
    <meta name="keywords" content="quizzer, online test, online quiz,quiz online">
    <meta name="author" content="farzad foroozanfar">
    <title>Quizzer</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light navbar-light   rounded-3">

        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/quiz-logo-icon-vector-40094461-removebg-preview.png" width="80px"> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#exampleModal">Login admin panel</span>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="mailto:foruozanfar2000f@gmail.com" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="mailto:foruozanfar2000f@gmail.com">contact us</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- Button trigger modal -->

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h3>Welcome To Quizzer</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title">This Quiz has <?php echo e($question_count); ?> questions</h5>
                    <p class="card-text">test time is <?php echo e($question_count / 2); ?> minutes</p>
                    <a href="/question/1"><button class="button-28" role="button">Lets Go</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="login" action="/validate" method="post" class="row g-3 needs-validation">
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">username</label>
                        <input name="username" type="text" class="form-control" id="validationCustom01" placeholder="username" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">password</label>
                        <input name="password" type="password" class="form-control" id="validationCustom02" placeholder="****" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" form="login" class="btn btn-primary">Login</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\win10\Desktop\New folder\quizzer\resources\views/index.blade.php ENDPATH**/ ?>