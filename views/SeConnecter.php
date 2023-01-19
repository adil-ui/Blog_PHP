<?php include_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <style>
      main{
        height:65vh;
      }
    </style>
</head>
<body>
<?php include 'navbar.php'?>
<main>
<form action='' method='POST' class="row g-3 col-4 mx-auto mt-5 pt-4"  enctype="multipart/form-data">
        <div class="col-md-8 mb-2">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"  name='email'>
        </div>
        <div class="col-md-8">
            <label class="form-label">Password</label>
            <input type="password" class="form-control"  name='mot_passe'>
        </div>
        <?php 
            if(isset($_SESSION['error_msg'])){ ?>
            <p class='text-danger'><?php echo $_SESSION['error_msg'] ?></p>
        <?php } ?>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>
    </form>


    </main>
    <?php include 'footer.php'?>

</body>
</html>