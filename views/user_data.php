  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      .navbar{
        background-color: white !important;
      }
      body{
        background-color: #f0f0f0;
      }
      main{
        height: 550px;
      }
      .admin_container{
        width:80%;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
      }
      aside, main{
        border-radius: 6px;
        background-color: white;
        overflow: hidden;
      }
    </style>
    <title>Profile</title>
</head>
<body>
<?php include 'navbar.php'?>
  <section class='admin_container row mt-4'>

    <aside class='col-3 px-0 py-1  shadow-sm'>
      <?php include 'aside_bar.php' ?>
    </aside>

    <main class='col-8 p-5 shadow-sm'>
      <div class='user_information'>
        <form class="row g-3 col-10 mx-auto mt-2" action='' method='POST' enctype="multipart/form-data">
          <div class="col-md-6 mb-3">
            <label class="form-label">First Name</label>
            <input type="text" class="form-control" name='prenom' value='<?php echo $user['prenom'] ?>'>
          </div>
          <div class="col-md-6 mb-3">
            <label class="form-label">Last Name</label>
            <input type="text" class="form-control" name='nom' value='<?php echo $user['nom'] ?>'>
          </div>
          <div class="col-md-12 mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control"  name='email' value='<?php echo $user['email'] ?>'>
          </div>
          <div class="col-md-12 mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control"  name='mot_passe' value='<?php echo $user['mot_passe'] ?>'>
          </div>
          
          <?php if(isset($_SESSION['error_msg'])) {?>
            <p class='text-danger text-center'><?php echo $_SESSION['error_msg'] ?></p>
            <?php } ?>
          <div class="col-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-success px-4 fw-semibold">update</button>
          </div>
        </form>
      </div>
    </main>

  </section>




<?php include 'footer.php'?>

</body>
</html>