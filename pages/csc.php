<?php
$patientId = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patientId'");
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
									<td><b><b>Patient ID :</b></b> <?=$patientId;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
                  <td>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
											<b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?>
							</table>

                <form method="POST" action="process.php?action=csc" autocomplete="off">
  							<table class="table">
  								<tr>
  									<th width="18%">Organism Isolated :
                    <td> <input type="text" name="organism" class="col-md-6">
  								<tr>
  									<th width="18%">Source :
                    <td> <input type="text" name="source" class="col-md-6">
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
                                <input type="text" name="amikacin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amikacin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amikacin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amikacin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amikacin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															AMPILLICIN
                            </td>
                            <td>
                                <input type="text" name="ampillicin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ampillicin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ampillicin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ampillicin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ampillicin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															PIPERACILLIN+TAZOBACTAM
                            </td>
                            <td>
                                <input type="text" name="piperacillin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="piperacillin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="piperacillin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="piperacillin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="piperacillin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CEFOPERAZONE+SULBACTAM
                            </td>
                            <td>
                                <input type="text" name="cefoperazone_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefoperazone_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefoperazone_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefoperazone_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefoperazone_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															IMIPENEM
                            </td>
                            <td>
                                <input type="text" name="imipenem_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="imipenem_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="imipenem_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="imipenem_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="imipenem_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															MEROPENEM
                            </td>
                            <td>
                                <input type="text" name="meropenem_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="meropenem_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="meropenem_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="meropenem_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="meropenem_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															COLISTIN
                            </td>
                            <td>
                                <input type="text" name="colistin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="colistin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="colistin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="colistin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="colistin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															TIGECYCLINE
                            </td>
                            <td>
                                <input type="text" name="tigecycline_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="tigecycline_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="tigecycline_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="tigecycline_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="tigecycline_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															TRIMETHOPRIN/SULFAMETHOXAZOLE
                            </td>
                            <td>
                                <input type="text" name="trimethoprin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="trimethoprin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="trimethoprin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="trimethoprin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="trimethoprin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															AMOXYCLAV
                            </td>
                            <td>
                                <input type="text" name="amoxyclav_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amoxyclav_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amoxyclav_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amoxyclav_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="amoxyclav_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CIPROFLOXACIN
                            </td>
                            <td>
                                <input type="text" name="ciprofloxacin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ciprofloxacin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ciprofloxacin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ciprofloxacin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ciprofloxacin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															NALIDIXIC ACID
                            </td>
                            <td>
                                <input type="text" name="nalidixic_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nalidixic_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nalidixic_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nalidixic_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nalidixic_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CEFEPIME
                            </td>
                            <td>
                                <input type="text" name="cefepime_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefepime_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefepime_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefepime_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefepime_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															GENTAMICIN
                            </td>
                            <td>
                                <input type="text" name="gentamicin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="gentamicin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="gentamicin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="gentamicin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="gentamicin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															ERTAPENEM
                            </td>
                            <td>
                                <input type="text" name="ertapenem_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ertapenem_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ertapenem_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ertapenem_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ertapenem_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															NITROFURANTOIN
                            </td>
                            <td>
                                <input type="text" name="nitrofurantoin_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nitrofurantoin_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nitrofurantoin_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nitrofurantoin_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="nitrofurantoin_r" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															CEFUROXIME
                            </td>
                            <td>
                                <input type="text" name="cefuroxime_in" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefuroxime_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefuroxime_s" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefuroxime_i" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cefuroxime_r" class="col-md-6">
                            </td>
                        </tr>

                          <tr>
                              <th colspan="6">
                                <textarea rows="6" class="form-control" name="comment" placeholder="Write comment here..."></textarea>
                              </th>
                          </tr>

	                      <tr align="right">
	                          <th colspan="6">
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
