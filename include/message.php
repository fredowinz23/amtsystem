<?php
$success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
$error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
?>

<?php if($success){?>
  <div class="alert alert-success alert-with-icon" data-notify="container">
      <i class="material-icons" data-notify="icon">add_alert</i>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close_notif();">
          <i class="material-icons">close</i>
      </button>
      <span data-notify="message"><?=$success;?></span>
  </div>
<?php } ?>

<?php if($error){?>
  <div class="alert alert-danger alert-with-icon" data-notify="container">
      <i class="material-icons" data-notify="icon">add_alert</i>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close_notif();">
          <i class="material-icons">close</i>
      </button>
      <span data-notify="message"><?=$error;?></span>
  </div>
<?php } ?>
