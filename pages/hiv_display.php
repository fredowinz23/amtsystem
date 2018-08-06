<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$hiv = hiv()->get("Id='$Id'");
$patient = patient()->get("patient_id='$hiv->patient_id'");
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">HIV-1 ANTIGEN and ANTIBODY / HIV-2 ANTIBODY SCREENING TEST</h4>
            <p class="card-category">Immunoserology Section</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
							<table class="table">
								<tr>
									<td><b><b>Patient ID :</b></b> <?=$patient->patient_id;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
                  <td>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
											<b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?>
							</table>

                <form method="POST" action="process.php?action=hiv" autocomplete="off">
  							<table class="table">
  								<tr>
  									<th width="18%">Room :
                    <td> <?=$hiv->room;?>
  								<tr>
  									<th width="18%">Specimen No. :
                    <td> <?=$hiv->specimen_no;?>
  								<tr>
                  <tr>
                    <th width="18%">Specimen :
                    <td> <?=$hiv->specimen;?>
                  <tr>
                  <tr>
                    <th width="18%">Medical Technologist HIV License No. :
                    <td> <?=$hiv->license_no;?>
                  <tr>
  							</table>

							<hr>
									<input type="hidden" name="patient_id" value="<?=$patientId;?>">
                <table class="table">
                    <thead class=" text-primary" align="center">
                        <th>
                            Test
                        </th>
                        <th>
                            Result
                        </th>
                    </thead>
                    <tbody>

                        <tr align="center">
                            <td>
                              HIV-1 Antigen and Antibody / <br>
                                HIV-2 Antibody Screening Test

                            </td>
                            <td>
                                <?=$hiv->result;?>
                            </td>
                        </tr>


                          <tr>
                              <td colspan="2">
                                  <b><b>Comments:</b></b> <?=$hiv->comment;?>
                              </td>
                          </tr>

  	                      <tr>
  	                          <td colspan="2">
                                <br>
                                <b><b>Medical Technologist:</b></b> <?=full_name($hiv->med_tech);?> <br>
                                  <b><b>Pathologist:</b></b> <?=full_name($hiv->pathologist);?> <br> <br>
  	                          </td>
  	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
