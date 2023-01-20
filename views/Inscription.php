
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      main{
        height:65vh;
      }
    </style>
    <title>Sign up</title>
</head>
<body>
<?php include 'navbar.php'?>

<main>
  <form class="row g-3 col-4 mx-auto mt-5" action='' method='POST' enctype="multipart/form-data">
    <div class="col-md-6 mb-3">
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name='prenom'>
    </div>
    <div class="col-md-6 mb-3">
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name='nom'>
    </div>
    <div class="col-md-12 mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control"  name='email'>
    </div>
    <div class="col-md-12 mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control"  name='mot_passe'>
    </div>
    
    <?php if(isset($_SESSION['error_msg'])) {?>
      <p class='text-danger text-center'><?php echo $_SESSION['error_msg'] ?></p>
      <?php } ?>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</main>

<?php include 'footer.php'?>

</body>
</html>