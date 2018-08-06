<?php
$patientId = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patientId'");
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center"  style="<?=button_color()[4]?>">
            <h4 class="card-title ">COMPLETE BLOOD COUNT</h4>
            <p class="card-category">Hematology Section</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
							<table class="table">
								<tr>
									<td><b><b>Patient ID :</b></b> <?=$patientId;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
											<b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?>
									<td><b><b>Room:</b></b> OPD  <br>
											<b><b>Req. Doc:</b></b> PHYSICIAN SCHOOL <br>
											<b><b>Specimen:</b></b> Blood <br>
							</table>
							<hr>
		            <form method="POST" action="process.php?action=cbc" autocomplete="off">
									<input type="hidden" name="patient_id" value="<?=$patientId;?>">
                <table class="table">
                    <thead class=" text-primary" align="center">
                        <th>
                            Test Requested
                        </th>
                        <th>
                            Result
                        </th>
                        <th>
                            Normal Values
                        </th>
                    </thead>
                    <tbody>

                        <tr align="center">
                            <td>
															Hemoglobin
                            </td>
                            <td>
                                <input type="text" name="hemoglobin_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="hemoglobin_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Hematocrit
                            </td>
                            <td>
                                <input type="text" name="hematocrit_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="hematocrit_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															RBC Count
                            </td>
                            <td>
                                <input type="text" name="rbc_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="rbc_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															WBC Count
                            </td>
                            <td>
                                <input type="text" name="wbc_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="wbc_nv" class="col-md-6">
                            </td>
                        </tr>
	                      <tr align="left">
	                          <th colspan="3">
															Differential Count :
	                          </th>
	                      </tr>

                        <tr align="center">
                            <td>
															Neutrophil
                            </td>
                            <td>
                                <input type="text" name="neutrophil_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="neutrophil_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Lymphocyte
                            </td>
                            <td>
                                <input type="text" name="lymphocyte_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="lymphocyte_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Eosinophil
                            </td>
                            <td>
                                <input type="text" name="eosinophil_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="eosinophil_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Monocytes
                            </td>
                            <td>
                                <input type="text" name="monocytes_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="monocytes_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Basophil
                            </td>
                            <td>
                                <input type="text" name="basophil_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="basophil_nv" class="col-md-6">
                            </td>
                        </tr>

	                      <tr align="left">
	                          <th colspan="3">
															&nbsp;
	                          </th>
	                      </tr>

                        <tr align="center">
                            <td>
															MCH
                            </td>
                            <td>
                                <input type="text" name="mch_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="mch_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MCHC
                            </td>
                            <td>
                                <input type="text" name="mchc_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="mchc_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MCV
                            </td>
                            <td>
                                <input type="text" name="mcv_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="mcv_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															RDW - CV
                            </td>
                            <td>
                                <input type="text" name="rdw_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="rdw_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MPV
                            </td>
                            <td>
                                <input type="text" name="mpv_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="mpv_nv" class="col-md-6">
                            </td>
                        </tr>

	                      <tr align="left">
	                          <th colspan="3">
															&nbsp;
	                          </th>
	                      </tr>

                        <tr align="center">
                            <td>
															Platelet
                            </td>
                            <td>
                                <input type="text" name="platelet_r" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="platelet_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Time Taken
                            </td>
                            <td>
                                <input type="text" name="time_taken" class="col-md-6">
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

	                      <tr align="right">
	                          <th colspan="3">
															<button class="btn btn-primary"  style="<?=button_color()[4]?>" type="submit">Save Test Result</button>
	                          </th>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
