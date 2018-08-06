<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$ua = ua()->get("Id='$Id'");
$patient = patient()->get("patient_id='$ua->patient_id'");
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">URIC ACID</h4>
            <p class="card-category">Clinical Chemistry  Section</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
							<table class="table">
								<tr>
									<td><b><b>Patient ID :</b></b> <?=$patient->patient_id;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
									<td>
                      <b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?> <br>
                      <b><b>Room:</b></b> OPD  <br>
											<b><b>Specimen:</b></b> Urine <br>
							</table>
							<hr>
		            <form method="POST" action="process.php?action=ua" autocomplete="off">
									<input type="hidden" name="patient_id" value="<?=$patientId;?>">
                <table class="table">
                    <thead class=" text-primary" align="center">
                        <th>
                            Test Name
                        </th>
                        <th>
                            Result
                        </th>
                        <th>
                            Flag
                        </th>
                        <th>
                            Reference Range
                        </th>
                        <th>
                            Lab
                        </th>
                    </thead>
                    <tbody>

                        <tr align="center">
                            <td>
															Uric Acid
                            </td>
                            <td>
                                <?=$ua->result;?>
                            </td>
                            <td>
                                <?=$ua->flag;?>
                            </td>
                            <td>
                                <?=$ua->reference_range;?>
                            </td>
                            <td>
                                <?=$ua->lab;?>
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">
                              Therapeutic target for gout patients: <?=$ua->therapeutic;?>
                            </th>
                        </tr>

                        <tr>
                            <td colspan="5">
                              <b><b>Comments: </b></b><?=$ua->comment;?>
                            </td>
                        </tr>

	                      <tr>
	                          <td colspan="5">
                              <br>
                              <b><b>Medical Technologist:</b></b> <?=full_name($ua->med_tech);?> <br>
                                <b><b>Pathologist:</b></b> <?=full_name($ua->pathologist);?> <br> <br>
	                          </td>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
