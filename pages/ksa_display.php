<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$ksa = ksa()->get("Id='$Id'");
$patient = patient()->get("patient_id='$ksa->patient_id'");
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">KIDNEY STONE ANALYSIS</h4>
            <p class="card-category">Histopathology Section</p>
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

                <form method="POST" action="process.php?action=ksa" autocomplete="off">

									<input type="hidden" name="patient_id" value="<?=$patientId;?>">
                <table class="table">
                    <thead class=" text-primary" align="center">
                        <th>
                            Kidney Stones
                        </th>
                        <th colspan="3">
                            Components
                        </th>
                    </thead>
                        <thead class=" text-primary" align="center">
                            <th>
                                Chemical Analysis
                            </th>
                            <th>
                                Major
                            </th>
                            <th>
                                Minor
                            </th>
                            <th>
                                Total
                            </th>
                        </thead>
                    <tbody>

                        <tr align="center">
                            <td>
                              Calcium
                            </td>
                            <td>
                                <?=$ksa->calcium_ma;?>
                            </td>
                            <td>
                                <?=$ksa->calcium_mi;?>
                            </td>
                            <td>
                                <?=$ksa->calcium_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Oxalate
                            </td>
                            <td>
                                <?=$ksa->oxalate_ma;?>
                            </td>
                            <td>
                                <?=$ksa->oxalate_mi;?>
                            </td>
                            <td>
                                <?=$ksa->oxalate_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Phosphate
                            </td>
                            <td>
                                <?=$ksa->phosphate_ma;?>
                            </td>
                            <td>
                                <?=$ksa->phosphate_mi;?>
                            </td>
                            <td>
                                <?=$ksa->phosphate_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Carbonate
                            </td>
                            <td>
                                <?=$ksa->carbonate_ma;?>
                            </td>
                            <td>
                                <?=$ksa->carbonate_mi;?>
                            </td>
                            <td>
                                <?=$ksa->carbonate_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Urate
                            </td>
                            <td>
                                <?=$ksa->urate_ma;?>
                            </td>
                            <td>
                                <?=$ksa->urate_mi;?>
                            </td>
                            <td>
                                <?=$ksa->urate_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Magnesium
                            </td>
                            <td>
                                <?=$ksa->magnesium_ma;?>
                            </td>
                            <td>
                                <?=$ksa->magnesium_mi;?>
                            </td>
                            <td>
                                <?=$ksa->magnesium_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Cystine
                            </td>
                            <td>
                                <?=$ksa->cystine_ma;?>
                            </td>
                            <td>
                                <?=$ksa->cystine_mi;?>
                            </td>
                            <td>
                                <?=$ksa->cystine_to;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Ammonium
                            </td>
                            <td>
                                <?=$ksa->ammonium_ma;?>
                            </td>
                            <td>
                                <?=$ksa->ammonium_mi;?>
                            </td>
                            <td>
                                <?=$ksa->ammonium_to;?>
                            </td>
                        </tr>
                    </tbody>

                    <thead class=" text-primary" align="center">
                        <th>
                            Morphological Analysis
                        </th>
                        <th>
                            Major
                        </th>
                        <th>
                            Minor
                        </th>
                        <th>
                            Total
                        </th>
                    </thead>
                    <tbody>

                      <tr align="center">
                          <td>
                            COM
                          </td>
                          <td>
                              <?=$ksa->com_ma;?>
                          </td>
                          <td>
                              <?=$ksa->com_mi;?>
                          </td>
                          <td>
                              <?=$ksa->com_to;?>
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            COD
                          </td>
                          <td>
                              <?=$ksa->cod_ma;?>
                          </td>
                          <td>
                              <?=$ksa->cod_mi;?>
                          </td>
                          <td>
                              <?=$ksa->cod_to;?>
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Uric Acid and Urate
                          </td>
                          <td>
                              <?=$ksa->uric_ma;?>
                          </td>
                          <td>
                              <?=$ksa->uric_mi;?>
                          </td>
                          <td>
                              <?=$ksa->uric_to;?>
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Calcium and Magnesium Phospate
                          </td>
                          <td>
                              <?=$ksa->cmp_ma;?>
                          </td>
                          <td>
                              <?=$ksa->cmp_mi;?>
                          </td>
                          <td>
                              <?=$ksa->cmp_to;?>
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Cystine
                          </td>
                          <td>
                              <?=$ksa->pc_ma;?>
                          </td>
                          <td>
                              <?=$ksa->pc_mi;?>
                          </td>
                          <td>
                              <?=$ksa->pc_to;?>
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Protein
                          </td>
                          <td>
                              <?=$ksa->protein_ma;?>
                          </td>
                          <td>
                              <?=$ksa->protein_mi;?>
                          </td>
                          <td>
                              <?=$ksa->protein_to;?>
                          </td>
                      </tr>


                        <tr>
                            <td colspan="4">
                                <b><b>Comments:</b></b> <?=$ksa->comment;?>
                            </td>
                        </tr>

	                      <tr>
	                          <td colspan="4">
                              <br>
                              <b><b>Medical Technologist:</b></b> <?=full_name($ksa->med_tech);?> <br>
                                <b><b>Pathologist:</b></b> <?=full_name($ksa->pathologist);?> <br> <br>
	                          </td>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
