<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <title>Back Office Powerkerto</title>
  </head>
  <body>
    <div class="lp">
        <div class="leftside">
            <p>Selamat datang di pwkbackoffice.com</p>
            <h1>KREATIF INOVATIF SOLUTIF</h1>
            <p>Silahkan login untuk melanjutkan</p>
            <button type="button" class="btn btn-primary costume" data-bs-toggle="modal" data-bs-target="#login">
                Login
            </button>
        </div>
        <img src="img/vectary.png" alt="">
    </div>

    <div class="modal fade" tabindex="-1" id="login">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('user.login') }}" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-user icn-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" name="username" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i class="fas fa-unlock-alt"></i></i></span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" name="password" aria-describedby="basic-addon3">
                    </div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </div>
        </div>
    </div>
    <!-- halo0 -->

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4096ccc916.js" crossorigin="anonymous"></script>
    <!-- End -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
