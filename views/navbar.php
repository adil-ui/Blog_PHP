<head>
    <style>
        .my_container{
            width:80%;
            margin: auto
        }
    </style>
</head>
<header>
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid my_container">
                <a class="navbar-brand fw-semibold" href="home">My Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item ">
                            <a class="nav-link" href="home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
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
                                    <li><a class="dropdown-item" href="admin">Profile</a></li>
                                <?php  } ?>          
                            </ul>
                            <?php if(isset($_SESSION['nom']) && isset($_SESSION['prenom'])){ ?>
                                    <li class='nav-item'>
                                        <p class="nav-link">Hi, <?php echo $_SESSION['prenom'] ,' ', $_SESSION['nom']?></p>
                                    </li>
                                <?php  } ?>
                        </li>

                    </ul>          
                </div>
            </div>
        </nav>
    </header>
