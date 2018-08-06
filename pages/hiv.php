<?php
$patientId = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patientId'");
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
									<td><b><b>Patient ID :</b></b> <?=$patientId;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
                  <td>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
											<b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?>
							</table>

                <form method="POST" action="process.php?action=hiv" autocomplete="off">
  							<table class="table">
  								<tr>
  									<th width="18%">Room :
                    <td> <input type="text" name="room" class="col-md-6">
  								<tr>
  									<th width="18%">Specimen No. :
                    <td> <input type="text" name="specimen_no" class="col-md-6">
  								<tr>
                  <tr>
                    <th width="18%">Specimen :
                    <td> <input type="text" name="specimen" class="col-md-6">
                  <tr>
                  <tr>
                    <th width="18%">Medical Technologist HIV License No. :
                    <td> <input type="text" name="license_no" class="col-md-6">
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
                                <input type="text" name="result" class="col-md-6">
                            </td>
                        </tr>


                          <tr>
                              <th colspan="2">
                                <textarea class="form-control" name="comment" placeholder="Write comment here..."></textarea>
                              </th>
                          </tr>

	                      <tr align="right">
	                          <th colspan="2">
															<button class="btn btn-primary" type="submit" style="<?=button_color()[4]?>">Save Test Result</button>
	                          </th>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
