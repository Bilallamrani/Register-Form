<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<?php

$bg_image = "/Form/image/img3.jpg";
// $page3 = "/Form/form.php";

?>

<body style="background-image: url(<?php echo $bg_image; ?>); background-size: cover; background-repeat: no-repeat">

<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
            <a class="navbar-brand mx-3">Wallet Coin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-4">
                    <a class="nav-link active" aria-current="page" href="#">New Account</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Log In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <div class="row">
        <div class = "col-sm-6 col-md-6 col-lg-6 pr-2 justify-content-start">
            <?php $image1 = "/Form/image/img2.webp";?>
                <img src= "<?php echo $image1; ?>" alt="image" class="img-fluid enlarged-image">
        </div>
        <!-- <div class="col-sm-6 col-md-2 col-lg-2"></div> -->
        <div class="col-sm-3 col-md-6 col-lg-6 pr-5 pt-3 justify-content-center">
            <div class="w-100 pl-5">
                <h1 class=""> Create your account </h1>

<?php

if(isset($_POST['log'])){
     if(isset($_POST['pseudo']) AND isset($_POST['email']) AND isset($_POST['confemail']) AND isset($_POST['password']) AND isset($_POST['confpassword'])){

            // défini les variables

                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $confemail = $_POST['confemail'];
                $password = $_POST['password'];
                $confpassword = $_POST['confpassword'];

        if(!empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['confemail']) AND !empty($_POST['password']) AND !empty($_POST['confpassword'])){

            //sécuriser les champs et cripté password

                $pseudo = htmlspecialchars($_POST['pseudo']);
                $email = htmlspecialchars($_POST['email']);
                $confemail = htmlspecialchars($_POST['confemail']);
                $password = sha1($_POST['password']);
                $confpassword = sha1($_POST['confpassword']);

                $emailMatch = ($email === $confemail);
                $passwordMatch = ($password === $confpassword);

                switch (true) {
                    case !$emailMatch:
                      echo "Email addresses do not match.";
                      break;
                    case !$passwordMatch:
                      echo "Password do not match.";
                      break;
                    default:
                      echo "Thank you for signing up!";
                      break;
                  }
                
                } else {
                  echo '<p style="color: red;">Please complete all fields.</p>';
                }
            }
    }

?>

        <form method="POST" class="pr-5" action="">
    
            <label for="name">Pseudo*</label>
            </br>
            <input type="text" class="form-control col-md-8" name="pseudo" placeholder="Enter your pseudo" >
            </br>
            <label for="mail">E-mail*</label>
            </br>
            <input type="email" class="form-control col-md-8" name="email" placeholder="Enter your E-mail" >
            </br>
            <label for="mail">Confirm E-mail*</label>
            </br>
            <input type="email" class="form-control col-md-8" name="confemail" placeholder="Confirm your E-mail" >
            </br>
            <label for="password">Password*</label>
            </br>
            <input type="password" class="form-control col-md-8" name="password" placeholder="Enter your password" >
            </br>
            <label for="password">Confirm password*</label>
            </br>
            <input type="password" class="form-control col-md-8" name="confpassword" placeholder="Confirm your password" >
            </br>
            <button type="submit" class="btn btn-primary" name="log">Create account</button>
            <p> Already have an account ? <a href="#">Log in</a></p>
            

            </div>
        </div>
    </div>
</div>

<?php

echo' <style>

.navbar-brand {
    font-size: 25px;
    font-weight: bold;
    color:white;
}
.navbar-nav .nav-item .nav-link {
    color: white;
    font-size: 20px;
}
  
h1{
    color:white;
}

</style>';
?>

</body>
</html>

