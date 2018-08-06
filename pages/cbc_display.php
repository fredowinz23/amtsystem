<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$cbc = cbc()->get("Id='$Id'");
$patient = patient()->get("patient_id='$cbc->patient_id'");
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
									<td><b><b>Patient ID :</b></b> <?=$patient->patient_id;?> <br>
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
                                <?=$cbc->hemoglobin_r;?>
                            </td>
                            <td>
                                <?=$cbc->hemoglobin_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Hematocrit
                            </td>
                            <td>
                                <?=$cbc->hematocrit_r;?>
                            </td>
                            <td>
                                <?=$cbc->hematocrit_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															RBC Count
                            </td>
                            <td>
                                <?=$cbc->rbc_r;?>
                            </td>
                            <td>
                                <?=$cbc->rbc_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															WBC Count
                            </td>
                            <td>
                                <?=$cbc->wbc_r;?>
                            </td>
                            <td>
                                <?=$cbc->wbc_nv;?>
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
                                <?=$cbc->neutrophil_r;?>
                            </td>
                            <td>
                                <?=$cbc->neutrophil_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Lymphocyte
                            </td>
                            <td>
                                <?=$cbc->lymphocyte_r;?>
                            </td>
                            <td>
                                <?=$cbc->lymphocyte_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Eosinophil
                            </td>
                            <td>
                                <?=$cbc->eosinophil_r;?>
                            </td>
                            <td>
                                <?=$cbc->eosinophil_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Monocytes
                            </td>
                            <td>
                                <?=$cbc->monocytes_r;?>
                            </td>
                            <td>
                                <?=$cbc->monocytes_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Basophil
                            </td>
                            <td>
                                <?=$cbc->basophil_r;?>
                            </td>
                            <td>
                                <?=$cbc->basophil_nv;?>
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
                                <?=$cbc->mch_r;?>
                            </td>
                            <td>
                                <?=$cbc->mch_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MCHC
                            </td>
                            <td>
                                <?=$cbc->mchc_r;?>
                            </td>
                            <td>
                                <?=$cbc->mchc_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MCV
                            </td>
                            <td>
                                <?=$cbc->mcv_r;?>
                            </td>
                            <td>
                                <?=$cbc->mcv_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															RDW - CV
                            </td>
                            <td>
                                <?=$cbc->rdw_r;?>
                            </td>
                            <td>
                                <?=$cbc->rdw_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MPV
                            </td>
                            <td>
                                <?=$cbc->mpv_r;?>
                            </td>
                            <td>
                                <?=$cbc->mpv_nv;?>
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
                                <?=$cbc->platelet_r;?>
                            </td>
                            <td>
                                <?=$cbc->platelet_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Time Taken
                            </td>
                            <td>
                                <?=$cbc->time_taken;?>
                            </td>
                            <td>
                                &nbsp;
                            </td>
                        </tr>

	                      <tr align="left">
	                          <td colspan="3">
                              <br>
                              <b><b>Medical Technologist:</b></b> <?=full_name($cbc->med_tech);?> <br>
                                <b><b>Pathologist:</b></b> <?=full_name($cbc->pathologist);?> <br> <br>
	                          </td>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
