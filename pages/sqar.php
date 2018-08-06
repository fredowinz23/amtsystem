<?php
$patientId = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patientId'");
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
									<td><b><b>Patient ID :</b></b> <?=$patientId;?> <br>
											<b><b>Patient Name:</b></b> <?=$patient->full_name;?><br>
									<td>
                      <b><b>Age/Gender:</b></b> <?=$patient->age;?>/<?=$patient->sex;?> <br>
											<b><b>Birth Date:</b></b> <?=$patient->birthday;?><br>
							</table>

              <form method="POST" action="process.php?action=sqar" autocomplete="off">
  							<table class="table">
  								<tr>
  									<th width="18%">Time of Collection :
                    <td> <input type="text" name="toc" class="col-md-3">
  								<tr>
  									<th width="18%">Method of Collection :
                    <td> <input type="text" name="moc" class="col-md-3">
  								<tr>
  									<th width="18%">Abstinence :
                    <td> <input type="text" name="abstinence" class="col-md-3">
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
                                <input type="text" name="quantity_pv" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="quantity_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Appearance :
                            </td>
                            <td>
                                <input type="text" name="appearance_pv" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="appearance_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Liquefaction :
                            </td>
                            <td>
                                <input type="text" name="liquefaction_pv" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="liquefaction_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															Viscosity :
                            </td>
                            <td>
                                <input type="text" name="viscosity_pv" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="viscosity_nv" class="col-md-6">
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
                                <input type="text" name="cef_pv" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cef_nv" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
															PH :
                            </td>
                            <td>
                                <input type="text" name="ph_pv" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ph_nv" class="col-md-6">
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
                              <input type="text" name="sperm_count" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Sperm motility (%):
                            </td>
                            <td>
                              <input type="text" name="sperm_montility" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rapid Linear Progressive (Gr IV) :
                            </td>
                            <td>
                              <input type="text" name="rlp" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sluggish Linear Progressive (Gr III) :
                            </td>
                            <td>
                              <input type="text" name="slp" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; (Gr IV) + (Gr III) :
                            </td>
                            <td>
                              <input type="text" name="gr" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Non-Progressive (Gr II) :
                            </td>
                            <td>
                              <input type="text" name="np" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Non-motile (Gr I) :
                            </td>
                            <td>
                              <input type="text" name="nm" class="col-md-6">
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
                              <input type="text" name="nf" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Abnormal forms :
                            </td>
                            <td>
                              <input type="text" name="af" class="col-md-6">
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
                              <input type="text" name="immature" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Leucocytes :
                            </td>
                            <td>
                              <input type="text" name="leucocytes" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              RBC’s :
                            </td>
                            <td>
                              <input type="text" name="rbc" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Agglutination :
                            </td>
                            <td>
                              <input type="text" name="agglutination" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              Aggregation :
                            </td>
                            <td>
                              <input type="text" name="aggregation" class="col-md-6">
                            </td>
                        </tr>

                        <tr>
                            <td>
                              L :
                            </td>
                            <td>
                              <input type="text" name="l" class="col-md-6">
                            </td>
                        </tr>



                        <tr>
                            <th colspan="5">
                              <textarea rows="5" class="form-control" name="comment" placeholder="Write comment here..."></textarea>
                            </th>
                        </tr>

	                      <tr align="right">
	                          <th colspan="5">
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
