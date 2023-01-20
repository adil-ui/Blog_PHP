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