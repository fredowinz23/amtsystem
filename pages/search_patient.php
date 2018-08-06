<?php
  $error = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '';
  $success = (isset($_GET['success']) && $_GET['success'] != '') ? $_GET['success'] : '';
?>
<br><br><br>&nbsp;
<div class="col-md-4 col-sm-6 ml-auto mr-auto">

    <?php if ($success) { ?>
      <div class="alert alert-success alert-with-icon" data-notify="container">
          <i class="material-icons" data-notify="icon">error_outline</i>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="close_notif();">
              <i class="material-icons">close</i>
          </button>
          <span data-notify="message"><?=$success;?></span>
      </div>
    <?php }?>


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
        <div class="card-header card-header-primary text-center" style="<?=button_color()[4]?>">
            <h4 class="card-title">Enter Patient Reference Number</h4>
        </div>
        <div class="card-body">
            <form method="get" action="index.php" autocomplete="off">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="hidden" name="view" value="my_result">
                            <input type="text" name="patient" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right" style="<?=button_color()[4]?>">Search</button>
                <div class="clearfix"></div>
            </form>
        </div>
    </div>
</div>
