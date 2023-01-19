<?php include_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
            height:450px;
        }
        .article_img{
            border-radius: 5px;
            width: 100%;
        }
        .article_img img{
            border-radius: 5px 5px 0px 0px;
            width: 100%;
            height:230px;
        }
        a{
            text-decoration: none;
        }
        .desc{
            text-align: justify;
            line-height: 1.5;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'?>
    <main>
        <section class="article_container row g-5"> 
            <?php foreach ($rows as  $value) { ?>
                <div class='col-xl-4 col-md-6 col-sm-8 col-10 mx-auto'>
                    <div class='my_article mx-auto'>
                        <div class="article_img">
                            <a href="<?php echo "details&id=".$value["id"] ?>"><img  src="<?php echo $value["image"] ?>" alt="" class=''></a>
                        </div>
                        <div class="p-3">
                            <a href="<?php echo "details&id=".$value["id"] ?>" class='text-dark text-center'><h4><?php echo $value["titre"] ?></h4></a>
                            <p class='py-3 desc'><?php echo substr($value["description"], 0, 100) . "..." ?></p>
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