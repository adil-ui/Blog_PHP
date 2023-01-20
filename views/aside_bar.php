<head>
<head>
  <style>
    .aside_link{
        text-decoration:none;
        color:black;
        font-size: 17px;
        font-weight:500;
        transition: .5s;
        display: block;
        padding: 15px 0;
      }
      .aside_item{
        transition: .5s;
      }
      .aside_item:hover{
        background-color: #f0f0f0;
      }
  </style>
</head>
    <?php if($_SESSION['role'] == 'admin'){ ?>
      <div class='aside_item '>
        <a href="admin" class='aside_link px-5'>List of articles</a>
      </div>
      <div class='aside_item'>
        <a href="new-article" class='aside_link px-5'>New article</a>
      </div>
      <div class='aside_item'>
        <a href="user-data" class='aside_link px-5'>My Information</a>
      </div>
    <?php }else{ ?>
      <div class='aside_item'>
        <a href="user-data" class='aside_link px-5'>My Information</a>
      </div>
    <?php } ?>
 