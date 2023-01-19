<?php include_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau Article</title>
    <style>
      main{
        height:70vh;
      }
    </style>
</head>
<body>
<?php include 'navbar.php'?>
<main>
<form class="row g-3 col-4 mx-auto mt-4" action='' method='POST' enctype="multipart/form-data">
  <div class="col-md-12 mb-1">
    <label class="form-label">Titre</label>
    <input type="text" class="form-control" name='titre'>
  </div>
  <div class="col-md-12 mb-1">
    <label class="form-label">Image</label>
    <input type="text" class="form-control"  name='image'>
  </div>
  <div class="col-md-12 mb-1">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="4"></textarea>
  </div>
  <div class="col-md-12 mb-1">
    <label class="form-label">Auteur</label>
    <input type="text" class="form-control"  name='auteur'>
  </div>
  <?php 
   if(!empty($_SESSION['succes_msg'])){ ?>
  <p class='text-succes text-center'><?php echo $_SESSION['succes_msg'] ?></p>
  <?php } else if(!empty($_SESSION['error_msg'])) {?>
    <p class='text-danger text-center'><?php echo $_SESSION['error_msg'] ?></p>
    <?php } ?>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>
</main>




<?php include 'footer.php'?>


</body>
</html>