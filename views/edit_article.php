
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
      main{
        height: 550px;
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

    <main class='col-8 px-5 py-4 shadow-sm'>
    <div class='new_article'>
        <form class="row g-3 col-10 mx-auto" action='' method='POST' enctype="multipart/form-data">
          <div class="col-md-12 mb-1">
            <label class="form-label fw-semibold">Title</label>
            <input type="text" class="form-control" name='titre' value='<?php echo $article['titre'] ?>'>
          </div>
          <div class="col-md-12 mb-1">
            <label class="form-label fw-semibold">picture url</label>
            <input type="text" class="form-control mb-3"  name='image' value='<?php echo $article['image'] ?>'>
            <img src="<?php echo $article['image'] ?>" alt="" class='img-fluid w-25'>
          </div>
          <div class="col-md-12 mb-1">
            <label class="form-label fw-semibold">Description</label>
            <textarea name="description" class="form-control" rows="4" ><?php echo $article['description'] ?></textarea>
          </div>
          <?php 
          if(!empty($_SESSION['succes_msg'])){ ?>
          <p class='text-succes text-center'><?php echo $_SESSION['succes_msg'] ?></p>
          <?php } else if(!empty($_SESSION['error_msg'])) {?>
            <p class='text-danger text-center'><?php echo $_SESSION['error_msg'] ?></p>
            <?php } ?>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </main>

  </section>




<?php include 'footer.php'?>

</body>
</html>
