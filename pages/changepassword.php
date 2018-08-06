<?php
  $username = (isset($_GET['username']) && $_GET['username'] != '') ? $_GET['username'] : '';
  $error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>
<br><br><br>&nbsp;
<div class="col-md-4 col-sm-6 ml-auto mr-auto">

  <?php if ($error) { ?>
    <div class="alert alert-danger alert-with-icon" data-notify="container">
        <i class="material-icons" data-notify="icon">error_outline</i>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close_notif();">
            <i class="material-icons">close</i>
        </button>
        <span data-notify="message"><?=$error;?></span>
    </div>
  <?php }?>

    <div class="card">
        <div class="card-header card-header-primary text-center">
            <h4 class="card-title">Change Password</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="process.php?action=changepassword&username=<?=$username;?>" autocomplete="off">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">New Password:</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="bmd-label-floating">Retype new Password:</label>
                            <input type="password" name="password2" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Let's go</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
