<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <style>
        main{
            width: 60%;
            margin: auto;
        }
        .my_details, .comment_container{
            width: 80%;
            margin: auto;
        }
        .details_img{
            width: 100%;
            height: 420px;
        }
        .details_img img{
            border-radius: 5px 5px 0px 0px;
            width: 100%;
            height: 420px;

        }
        .desc{
            text-align: justify;
            line-height: 2;
        }
    </style>
  <title>Details</title>
</head>

<body>
  <?php include 'navbar.php'?>
  <main>
    <section class="details_container row">
        <div class='my_details mx-auto'>
        <a href="details" class='text-dark text-center'><h4><?php echo $article["titre"] ?></h4></a>
          <div class="details_img mt-4">
            <a href="details"><img src="<?php  echo $article["image"] ?>" alt="" class=''></a>
          </div>
          <div class="p-3">
          <div class="d-flex justify-content-between align-items-center">
              <h5><?php echo $article["auteur"] ?></h5>
              <p><?php echo $article["date_publication"] ?></p>
            </div>
            <p class='py-3 desc fs-5'><?php echo $article["description"] ?></p>          
          </div>
        </div>
    </section>

    <section class='comment_container mt-4 ps-3'>
      <h2>Comment</h2>
      <?php if($comment->rowCount() != 0){
       foreach ($comment as  $value){
         ?>
        <div class='mt-4'>
          <h5><?php echo $value['auteur'] ?></h5>
          <i class='text-secondary'><?php echo $value['date_publication'] ?></i>
          <p class='mt-2'><?php echo $value['description'] ?></p>
        </div>
      <?php } } else {?>
        <p class='mb-5 mt-4'>This article has no comments yet.</p>
      <?php }?>
     <div class='mt-4'>
      <h2>Add Comment</h2>
      <form class="row g-3 col-8 mt-2 " action='' method='POST' enctype="multipart/form-data">
          <div class="col-md-12 mb-1">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name='auteur'>
          </div>
          <div class="col-md-12 mb-1">
            <label class="form-label">Message</label>
            <textarea name="description" class="form-control" rows="5"></textarea>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Comment</button>
          </div>
        </form>
      </div>
     
    </section>
  </main>
<?php include 'footer.php'?>
<?php echo $comment->rowCount()?>
</body>
</html>