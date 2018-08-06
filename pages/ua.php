<?php
$patientId = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patientId'");
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
									<td><b><b>Patient ID :</b></b> <?=$patientId;?> <br>
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
                                <input type="text" name="result" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="flag" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="reference_range" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="lab" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <th colspan="5">
                              Therapeutic target for gout patients: <input type="text" name="therapeutic" class="col-md-3">
                            </th>
                        </tr>

                        <tr>
                            <th colspan="5">
                              <textarea rows="5" class="form-control" name="comment" placeholder="Write comment here..."></textarea>
                            </th>
                        </tr>

	                      <tr align="right">
	                          <th colspan="5">
															<button class="btn btn-primary" style="<?=button_color()[4]?>" type="submit">Save Test Result</button>
	                          </th>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
