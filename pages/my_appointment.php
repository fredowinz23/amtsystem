<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$app = appointment()->get("Id='$Id'");

?>
<div class="col-md-6 col-sm-6 ml-auto mr-auto">
    <div class="card">
        <div class="card-header card-header-primary"  style="<?=button_color()[4]?>">
            <h4 class="card-title " align="center">My Appointment</h4>
        </div>
        <div class="card-body">
                      <b><b>Appointment Schedule:</b></b> <?=$app->date;?> @ <?=$app->time;?> <br><br>

                        <center>
                      <b><b>Recommendation:</b></b> <br> <?=$app->recommendation;?>
                </center>
                </table>
            </div>
        </div>
    </div>
</div>
