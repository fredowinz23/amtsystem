<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$csc = csc()->get("Id='$Id'");
$patient = patient()->get("patient_id='$csc->patient_id'");
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">BACTERIOLOGY-CULTURE AND SENSITIVITY COLONY COUNT</h4>
            <p class="card-category">Bacteriology Section</p>
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

                <form method="POST" action="process.php?action=csc" autocomplete="off">
  							<table class="table">
  								<tr>
  									<th width="18%">Organism Isolated :
                    <td> <?=$csc->organism;?>
  								<tr>
  									<th width="18%">Source :
                    <td> <?=$csc->source;?>
  								<tr>
  							</table>

							<hr>
									<input type="hidden" name="patient_id" value="<?=$patientId;?>">
                <table class="table">
                    <thead class=" text-primary" align="center">
                        <th width="30%">
                            Antibiotics <br> &nbsp; <br> &nbsp; <br> &nbsp;
                        </th>
                        <th>
                            Interpretation <br> &nbsp; <br> &nbsp; <br> &nbsp;
                        </th>
                        <th>
                            MIC Values <br> (Mg/mL) <br> &nbsp; <br> &nbsp;
                        </th>
                        <th colspan="3">
                            MIC Ref Range <br>
                            <table width="100%">
                              <tr>
                                <td align="center">S <br> ( < / = ) </td>
                                <td align="center">I </td>
                                <td align="center">R <br> ( > / = ) </td>
                            </table>
                        </th>
                    </thead>
                    <tbody>

                        <tr align="center">
                            <td>
															AMIKACIN
                            </td>
                            <td>
                                <?=$csc->amikacin_in;?>
                            </td>
                            <td>
                                <?=$csc->amikacin_mi;?>
                            </td>
                            <td>
                                <?=$csc->amikacin_s;?>
                            </td>
                            <td>
                                <?=$csc->amikacin_i;?>
                            </td>
                            <td>
                                <?=$csc->amikacin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															AMPILLICIN
                            </td>
                            <td>
                                <?=$csc->ampillicin_in;?>
                            </td>
                            <td>
                                <?=$csc->ampillicin_mi;?>
                            </td>
                            <td>
                                <?=$csc->ampillicin_s;?>
                            </td>
                            <td>
                                <?=$csc->ampillicin_i;?>
                            </td>
                            <td>
                                <?=$csc->ampillicin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															PIPERACILLIN+TAZOBACTAM
                            </td>
                            <td>
                                <?=$csc->piperacillin_in;?>
                            </td>
                            <td>
                                <?=$csc->piperacillin_mi;?>
                            </td>
                            <td>
                                <?=$csc->piperacillin_s;?>
                            </td>
                            <td>
                                <?=$csc->piperacillin_i;?>
                            </td>
                            <td>
                                <?=$csc->piperacillin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CEFOPERAZONE+SULBACTAM
                            </td>
                            <td>
                                <?=$csc->cefoperazone_in;?>
                            </td>
                            <td>
                                <?=$csc->cefoperazone_mi;?>
                            </td>
                            <td>
                                <?=$csc->cefoperazone_s;?>
                            </td>
                            <td>
                                <?=$csc->cefoperazone_i;?>
                            </td>
                            <td>
                                <?=$csc->cefoperazone_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															IMIPENEM
                            </td>
                            <td>
                                <?=$csc->imipenem_in;?>
                            </td>
                            <td>
                                <?=$csc->imipenem_mi;?>
                            </td>
                            <td>
                                <?=$csc->imipenem_s;?>
                            </td>
                            <td>
                                <?=$csc->imipenem_i;?>
                            </td>
                            <td>
                                <?=$csc->imipenem_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MEROPENEM
                            </td>
                            <td>
                                <?=$csc->meropenem_in;?>
                            </td>
                            <td>
                                <?=$csc->meropenem_mi;?>
                            </td>
                            <td>
                                <?=$csc->meropenem_s;?>
                            </td>
                            <td>
                                <?=$csc->meropenem_i;?>
                            </td>
                            <td>
                                <?=$csc->meropenem_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															COLISTIN
                            </td>
                            <td>
                                <?=$csc->colistin_in;?>
                            </td>
                            <td>
                                <?=$csc->colistin_mi;?>
                            </td>
                            <td>
                                <?=$csc->colistin_s;?>
                            </td>
                            <td>
                                <?=$csc->colistin_i;?>
                            </td>
                            <td>
                                <?=$csc->colistin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															TIGECYCLINE
                            </td>
                            <td>
                                <?=$csc->tigecycline_in;?>
                            </td>
                            <td>
                                <?=$csc->tigecycline_mi;?>
                            </td>
                            <td>
                                <?=$csc->tigecycline_s;?>
                            </td>
                            <td>
                                <?=$csc->tigecycline_i;?>
                            </td>
                            <td>
                                <?=$csc->tigecycline_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															TRIMETHOPRIN/SULFAMETHOXAZOLE
                            </td>
                            <td>
                                <?=$csc->trimethoprin_in;?>
                            </td>
                            <td>
                                <?=$csc->trimethoprin_mi;?>
                            </td>
                            <td>
                                <?=$csc->trimethoprin_s;?>
                            </td>
                            <td>
                                <?=$csc->trimethoprin_i;?>
                            </td>
                            <td>
                                <?=$csc->trimethoprin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															AMOXYCLAV
                            </td>
                            <td>
                                <?=$csc->amoxyclav_in;?>
                            </td>
                            <td>
                                <?=$csc->amoxyclav_mi;?>
                            </td>
                            <td>
                                <?=$csc->amoxyclav_s;?>
                            </td>
                            <td>
                                <?=$csc->amoxyclav_i;?>
                            </td>
                            <td>
                                <?=$csc->amoxyclav_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CIPROFLOXACIN
                            </td>
                            <td>
                                <?=$csc->ciprofloxacin_in;?>
                            </td>
                            <td>
                                <?=$csc->ciprofloxacin_mi;?>
                            </td>
                            <td>
                                <?=$csc->ciprofloxacin_s;?>
                            </td>
                            <td>
                                <?=$csc->ciprofloxacin_i;?>
                            </td>
                            <td>
                                <?=$csc->ciprofloxacin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															NALIDIXIC ACID
                            </td>
                            <td>
                                <?=$csc->nalidixic_in;?>
                            </td>
                            <td>
                                <?=$csc->nalidixic_mi;?>
                            </td>
                            <td>
                                <?=$csc->nalidixic_s;?>
                            </td>
                            <td>
                                <?=$csc->nalidixic_i;?>
                            </td>
                            <td>
                                <?=$csc->nalidixic_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CEFEPIME
                            </td>
                            <td>
                                <?=$csc->cefepime_in;?>
                            </td>
                            <td>
                                <?=$csc->cefepime_mi;?>
                            </td>
                            <td>
                                <?=$csc->cefepime_s;?>
                            </td>
                            <td>
                                <?=$csc->cefepime_i;?>
                            </td>
                            <td>
                                <?=$csc->cefepime_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															GENTAMICIN
                            </td>
                            <td>
                                <?=$csc->gentamicin_in;?>
                            </td>
                            <td>
                                <?=$csc->gentamicin_mi;?>
                            </td>
                            <td>
                                <?=$csc->gentamicin_s;?>
                            </td>
                            <td>
                                <?=$csc->gentamicin_i;?>
                            </td>
                            <td>
                                <?=$csc->gentamicin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															ERTAPENEM
                            </td>
                            <td>
                                <?=$csc->ertapenem_in;?>
                            </td>
                            <td>
                                <?=$csc->ertapenem_mi;?>
                            </td>
                            <td>
                                <?=$csc->ertapenem_s;?>
                            </td>
                            <td>
                                <?=$csc->ertapenem_i;?>
                            </td>
                            <td>
                                <?=$csc->ertapenem_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															NITROFURANTOIN
                            </td>
                            <td>
                                <?=$csc->nitrofurantoin_in;?>
                            </td>
                            <td>
                                <?=$csc->nitrofurantoin_mi;?>
                            </td>
                            <td>
                                <?=$csc->nitrofurantoin_s;?>
                            </td>
                            <td>
                                <?=$csc->nitrofurantoin_i;?>
                            </td>
                            <td>
                                <?=$csc->nitrofurantoin_r;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CEFUROXIME
                            </td>
                            <td>
                                <?=$csc->cefuroxime_in;?>
                            </td>
                            <td>
                                <?=$csc->cefuroxime_mi;?>
                            </td>
                            <td>
                                <?=$csc->cefuroxime_s;?>
                            </td>
                            <td>
                                <?=$csc->cefuroxime_i;?>
                            </td>
                            <td>
                                <?=$csc->cefuroxime_r;?>
                            </td>
                        </tr>

                          <tr>
                              <td colspan="6">
                                  <b><b>Comments:</b></b> <?=$csc->comment;?>
                              </td>
                          </tr>

	                      <tr>
	                          <td colspan="6">
                              <br>
                              <b><b>Medical Technologist:</b></b> <?=full_name($csc->med_tech);?> <br>
                                <b><b>Pathologist:</b></b> <?=full_name($csc->pathologist);?> <br> <br>
	                          </td>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
