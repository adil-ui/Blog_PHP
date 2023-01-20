
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
      .profile_article_img{
        width: 30px;
        height: 30px;
        text-align: center;
      }
      .profile_article_img img{
        height: 40px;
        width: 50px;
        border-radius: 5px
      }
      .my_table{
        height: 50px !important;
        overflow: scroll;
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
    <?php if($_SESSION['role'] == 'admin'){ 
      include 'all_article.php';
     }else{
      include 'role_data.php';
     } ?>
    </main>

  </section>




<?php include 'footer.php'?>

</body>
</html>