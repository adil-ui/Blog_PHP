<?php include_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
      main{
        height:75vh;
      }
    </style>
</head>
<body>
<main >
    <form action='' method='POST' class="row g-3 col-3 mx-auto mt-5 pt-5"  enctype="multipart/form-data">
        <div class="mb-2 ">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"  name='email' required>
        </div>
        <div class="">
            <label class="form-label">Password</label>
            <input type="password" class="form-control"  name='mot_passe' required>
        </div>
        <?php 
            if(isset($_SESSION['error_msg'])){ ?>
            <p class='text-danger text-center '><?php echo $_SESSION['error_msg'] ?></p>
        <?php } ?>
        <div class="mt-4">
            <button type="submit" class="btn btn-primary">Connect</button>
        </div>
    </form>


    </main>
    <?php include 'footer.php'?>

</body>
</html>