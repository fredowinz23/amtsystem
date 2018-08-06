<?php
$patientId = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patientId'");
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
									<td><b><b>Patient ID :</b></b> <?=$patientId;?> <br>
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
                                <input type="text" name="calcium_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="calcium_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="calcium_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Oxalate
                            </td>
                            <td>
                                <input type="text" name="oxalate_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="oxalate_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="oxalate_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Phosphate
                            </td>
                            <td>
                                <input type="text" name="phosphate_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="phosphate_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="phosphate_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Carbonate
                            </td>
                            <td>
                                <input type="text" name="carbonate_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="carbonate_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="carbonate_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Urate
                            </td>
                            <td>
                                <input type="text" name="urate_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="urate_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="urate_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Magnesium
                            </td>
                            <td>
                                <input type="text" name="magnesium_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="magnesium_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="magnesium_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Cystine
                            </td>
                            <td>
                                <input type="text" name="cystine_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cystine_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="cystine_to" class="col-md-6">
                            </td>
                        </tr>

                        <tr align="center">
                            <td>
                              Ammonium
                            </td>
                            <td>
                                <input type="text" name="ammonium_ma" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ammonium_mi" class="col-md-6">
                            </td>
                            <td>
                                <input type="text" name="ammonium_to" class="col-md-6">
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
                              <input type="text" name="com_ma" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="com_mi" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="com_to" class="col-md-6">
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            COD
                          </td>
                          <td>
                              <input type="text" name="cod_ma" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="cod_mi" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="cod_to" class="col-md-6">
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Uric Acid and Urate
                          </td>
                          <td>
                              <input type="text" name="uric_ma" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="uric_mi" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="uric_to" class="col-md-6">
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Calcium and Magnesium Phospate
                          </td>
                          <td>
                              <input type="text" name="cmp_ma" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="cmp_mi" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="cmp_to" class="col-md-6">
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Cystine
                          </td>
                          <td>
                              <input type="text" name="pc_ma" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="pc_mi" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="pc_to" class="col-md-6">
                          </td>
                      </tr>

                      <tr align="center">
                          <td>
                            Protein
                          </td>
                          <td>
                              <input type="text" name="protein_ma" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="protein_mi" class="col-md-6">
                          </td>
                          <td>
                              <input type="text" name="protein_to" class="col-md-6">
                          </td>
                      </tr>


                          <tr>
                              <th colspan="4">
                                <textarea class="form-control" name="comment" placeholder="Write comment here..."></textarea>
                              </th>
                          </tr>

	                      <tr align="right">
	                          <th colspan="4">
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
