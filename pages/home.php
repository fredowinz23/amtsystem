<?php
$cbc = cbc()->count("status='Approved'");
$cbcAll = cbc()->count();

$ua = ua()->count("status='Approved'");
$uaAll = ua()->count();

$sqar = sqar()->count("status='Approved'");
$sqarAll = sqar()->count();

$csc = csc()->count("status='Approved'");
$cscAll = csc()->count();

$hiv = hiv()->count("status='Approved'");
$hivAll = hiv()->count();

$ksa = ksa()->count("status='Approved'");
$ksaAll = ksa()->count();


?>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon"  style="<?=button_color()[4]?>">
                Hermatology
            </div>
            <p class="card-category">Total</p>
            <h3 class="card-title"><?=$cbc;?>/<?=$cbcAll;?>
            </h3>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon"  style="<?=button_color()[4]?>">
                Clinical Chemistry
            </div>
            <p class="card-category">Total</p>
            <h3 class="card-title"><?=$ua;?>/<?=$uaAll;?>
            </h3>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon"  style="<?=button_color()[4]?>">
                Clinical Microscopy
            </div>
            <p class="card-category">Total</p>
            <h3 class="card-title"><?=$sqar;?>/<?=$sqarAll;?>
            </h3>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>
<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon" style="<?=button_color()[4]?>">
                  Bacteriology
            </div>
            <p class="card-category">Total</p>
            <h3 class="card-title"><?=$csc;?>/<?=$cscAll;?>
            </h3>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon" style="<?=button_color()[4]?>">
                Blood Bank Serology
            </div>
            <p class="card-category">Total</p>
            <h3 class="card-title"><?=$hiv;?>/<?=$hivAll;?>
            </h3>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="card card-stats">
        <div class="card-header card-header-warning card-header-icon">
            <div class="card-icon" style="<?=button_color()[4]?>">
                Histopathology
            </div>
            <p class="card-category">Total</p>
            <h3 class="card-title"><?=$ksa;?>/<?=$ksaAll;?>
            </h3>
        </div>
        <div class="card-footer">
        </div>
    </div>
</div>
