<?php include_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Accueil</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .article_container{
            width: 80%;
            margin: auto;
        }
        .my_article{
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;
        }
        .article_img{
            border-radius: 5px;

        }
        .article_img img{
            border-radius: 5px 5px 0px 0px;

        }
        a{
            text-decoration: none;
        }
        .desc{
            text-align: justify;
            line-height: 1.8;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'?>
    <main>
        <section class="article_container row g-5"> 
            <?php foreach ($rows as  $value) { ?>
                <div class='col-4'>
                    <div class='my_article'>
                    <div class="article_img">
                        <img  src="<?php  echo $value["image"] ?>" alt="" class='img-fluid'>
                    </div>
                    <div class="p-3">
                        <a href="#" class='text-dark text-center'><h4><?php echo $value["titre"] ?></h4></a>
                        <p class='py-3' class='desc'><?php echo $value["description"] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <h5><?php echo $value["auteur"] ?></h5>
                            <p><?php echo $value["date_publication"] ?></p>
                        </div>
                    
                    </div>  
                    </div>
                               
                </div>
            <?php } ?>
        </section>
        
    </main>
  
    <?php include 'footer.php'?>

</body>
</html>