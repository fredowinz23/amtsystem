<?php
$Id = (isset($_GET['Id']) && $_GET['Id'] != '') ? $_GET['Id'] : '';
$sqar = sqar()->get("Id='$Id'");
$patient = patient()->get("patient_id='$sqar->patient_id'");
?>
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">SEMEN QUALITATIVE ANALYSIS REPORT</h4>
            <p class="card-category">Clinical Microscopy Section</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
							<table class="table">
								<tr>
									<td><b><b>Patient ID :</b></b> <?=$patient->patient_id;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
									<td>
                      <b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?> <br>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
							</table>

              <form method="POST" action="process.php?action=sqar" autocomplete="off">
  							<table class="table">
  								<tr>
  									<th width="18%">Time of Collection :
                    <td> <?=$sqar->toc;?>
  								<tr>
  									<th width="18%">Method of Collection :
                    <td> <?=$sqar->moc;?>
  								<tr>
  									<th width="18%">Abstinence :
                    <td> <?=$sqar->abstinence;?>
  							</table>

							<hr>
									<input type="hidden" name="patient_id" value="<?=$patientId;?>">
                <table class="table">
                    <thead class=" text-primary" align="center">
                        <th>
                            Physical Examination
                        </th>
                        <th>
                            Patients Value
                        </th>
                        <th>
                            Normal Value
                        </th>
                    </thead>
                    <tbody>

                        <tr align="center">
                            <td>
															Quantity (Volume):
                            </td>
                            <td>
                                <?=$sqar->quantity_pv;?>
                            </td>
                            <td>
                                <?=$sqar->quantity_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Appearance :
                            </td>
                            <td>
                                <?=$sqar->appearance_pv;?>
                            </td>
                            <td>
                                <?=$sqar->appearance_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Liquefaction :
                            </td>
                            <td>
                                <?=$sqar->liquefaction_pv;?>
                            </td>
                            <td>
                                <?=$sqar->liquefaction_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Viscosity :
                            </td>
                            <td>
                                <?=$sqar->viscosity_pv;?>
                            </td>
                            <td>
                                <?=$sqar->viscosity_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td colspan="3">
															&nbsp;
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Chemical Examination Fructose  :
                            </td>
                            <td>
                                <?=$sqar->cef_pv;?>
                            </td>
                            <td>
                                <?=$sqar->cef_nv;?>
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															PH :
                            </td>
                            <td>
                                <?=$sqar->ph_pv;?>
                            </td>
                            <td>
                                <?=$sqar->ph_nv;?>
                            </td>
                        </tr>
                  </table>

                <table class="table">
                        <tr>
                            <td colspan="2">
                              Microscopic Examination:
                            </td>
                        </tr>

                        <tr>
                            <td width="30%">
                              Sperm count:
                            </td>
                            <td>
                              <?=$sqar->sperm_count;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Sperm motility (%):
                            </td>
                            <td>
                              <?=$sqar->sperm_montility;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rapid Linear Progressive (Gr IV) :
                            </td>
                            <td>
                              <?=$sqar->rlp;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sluggish Linear Progressive (Gr III) :
                            </td>
                            <td>
                              <?=$sqar->slp;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Gr IV) + (Gr III) :
                            </td>
                            <td>
                              <?=$sqar->gr;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Non-Progressive (Gr II) :
                            </td>
                            <td>
                              <?=$sqar->np;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Non-motile (Gr I) :
                            </td>
                            <td>
                              <?=$sqar->nm;?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                              Sperm Morphology (%)
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Normal forms :
                            </td>
                            <td>
                              <?=$sqar->nf;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Abnormal forms :
                            </td>
                            <td>
                              <?=$sqar->af;?>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                              &nbsp;
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Immature Germ cells  :
                            </td>
                            <td>
                              <?=$sqar->immature;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Leucocytes :
                            </td>
                            <td>
                              <?=$sqar->leucocytes;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              RBC’s :
                            </td>
                            <td>
                              <?=$sqar->rbc;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Agglutination :
                            </td>
                            <td>
                              <?=$sqar->agglutination;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Aggregation :
                            </td>
                            <td>
                              <?=$sqar->aggregation;?>
                            </td>
                        </tr>

                        <tr>
                            <td>
                              L :
                            </td>
                            <td>
                              <?=$sqar->l;?>
                            </td>
                        </tr>



                        <tr>
                            <td colspan="5">
                              <b><b>Comments:</b></b>
                            </td>
                        </tr>

	                      <tr>
	                          <td colspan="5">
                              <br>
                              <b><b>Medical Technologist:</b></b> <?=full_name($sqar->med_tech);?> <br>
                                <b><b>Pathologist:</b></b> <?=full_name($sqar->pathologist);?> <br> <br>
	                          </td>
	                      </tr>
                    </tbody>
                </table>
							</form>
            </div>
        </div>
    </div>
</div>
