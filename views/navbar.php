<?php include_once 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .my_container{
            width:80%;
            margin: auto
        }
    </style>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid my_container">
                <a class="navbar-brand fw-semibold" href="home">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item  py-1">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item py-1">
                            <a class="nav-link" href="addArticle">Add Article</a>
                        </li> 
                        <li class="nav-item dropdown py-1">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu">
                                <?php if(!empty($_SESSION['nom']) && !empty($_SESSION['prenom'])){ ?>
                                    <li><a class="dropdown-item" href="logout">Log Out</a></li>
                                <?php  } else{?>
                                    <li><a class="dropdown-item" href="connection">Login</a></li>
                                <?php  } ?> 
                                <li><a class="dropdown-item" href="inscription">Sign up</a></li>
                                <?php if(!empty($_SESSION['nom']) && !empty($_SESSION['prenom'])){ ?>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                <?php  } ?>          
                            </ul>
                            <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){ ?>
                                    <li class='nav-item py-1'>
                                        <p class="nav-link">Hi, <?php echo $_SESSION['prenom'] ,' ', $_SESSION['nom']?></p>
                                    </li>
                                <?php  } ?>
                        </li>

                    </ul>          
                </div>
            </div>
        </nav>
    </header>
</body>
</html>