<?php
$patient_id = (isset($_GET['patient']) && $_GET['patient'] != '') ? $_GET['patient'] : '';
$patient = patient()->get("patient_id='$patient_id'");

?>
<div class="col-md-6 col-sm-6 ml-auto mr-auto">
    <div class="card">
        <div class="card-header card-header-primary"  style="<?=button_color()[4]?>">
            <h4 class="card-title "><?=$patient->full_name;?>'s History</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class=" text-primary">
                        <th>
                            #
                        </th>
                        <th>
                            Date
                        </th>
                        <th>
                            Test
                        </th>
                        <th>
                            &nbsp
                        </th>
                    </thead>
                    <tbody>

											<?php
                        $count = 0;
                       if (cbc()->count("patient_id='$patient_id'")>0) {
												 		foreach(cbc()->list("patient_id='$patient_id'") as $row) {
																	$count += 1;
															?>
				                        <tr>
				                            <td>
																			<?=$count;?>
				                            </td>
				                            <td>
				                                <?=$row->date;?>
				                            </td>
				                            <td>
				                                Complete Blood Counts
				                            </td>

				                            </td>
				                            <td align="right">
																			<button class="btn btn-round" style="<?=button_color()[2]?>"
																					onclick="location.href='?view=my_CBC_display&Id=<?=$row->Id;?>'"
																				>
													              <i class="material-icons">visibility</i> View
													            </button>
				                            </td>
				                        </tr>
															<?php }
														}
														?>

													<?php if (csc()->count("patient_id='$patient_id'")>0) {
														 		foreach(csc()->list("patient_id='$patient_id'") as $row) {
																			$count += 1;
																	?>
						                        <tr>
						                            <td>
																					<?=$count;?>
						                            </td>
						                            <td>
						                                <?=$row->date;?>
						                            </td>
						                            <td>
						                                Culture and Sensitivity
						                            </td>

						                            </td>
						                            <td align="right">
																					<button class="btn btn-round" style="<?=button_color()[2]?>"
																							onclick="location.href='?view=my_CSC_display&Id=<?=$row->Id;?>'"
																						>
															              <i class="material-icons">visibility</i> View
															            </button>
						                            </td>
						                        </tr>
																	<?php }
																}
																?>

														<?php if (ua()->count("patient_id='$patient_id'")>0) {
															 		foreach(ua()->list("patient_id='$patient_id'") as $row) {
																				$count += 1;
																		?>
							                        <tr>
							                            <td>
																						<?=$count;?>
							                            </td>
							                            <td>
							                                <?=$row->date;?>
							                            </td>
							                            <td>
							                                Uric Acid
							                            </td>

							                            </td>
							                            <td align="right">
																						<button class="btn btn-round" style="<?=button_color()[2]?>"
																								onclick="location.href='?view=my_UA_display&Id=<?=$row->Id;?>'"
																							>
																              <i class="material-icons">visibility</i> View
																            </button>
							                            </td>
							                        </tr>
																		<?php }
																	}
																	?>

															<?php if (sqar()->count("patient_id='$patient_id'")>0) {
																 		foreach(sqar()->list("patient_id='$patient_id'") as $row) {
																					$count += 1;
																			?>
								                        <tr>
								                            <td>
																							<?=$count;?>
								                            </td>
								                            <td>
								                                <?=$row->date;?>
								                            </td>
								                            <td>
								                                Semen Analysis
								                            </td>

								                            </td>
								                            <td align="right">
																							<button class="btn btn-round" style="<?=button_color()[2]?>"
																									onclick="location.href='?view=my_SQAR_display&Id=<?=$row->Id;?>'"
																								>
																	              <i class="material-icons">visibility</i> View
																	            </button>
								                            </td>
								                        </tr>
																			<?php }
																		}
																		?>



														<?php if (hiv()->count("patient_id='$patient_id'")>0) {
																	foreach(hiv()->list("patient_id='$patient_id'") as $row) {
																				$count += 1;
																		?>
																			<tr>
																					<td>
																						<?=$count;?>
																					</td>
																					<td>
																							<?=$row->date;?>
																					</td>
																					<td>
																							HIV
																					</td>

																					</td>
																					<td align="right">
																						<button class="btn btn-round" style="<?=button_color()[2]?>"
																								onclick="location.href='?view=my_HIV_display&Id=<?=$row->Id;?>'"
																							>
																							<i class="material-icons">visibility</i> View
																						</button>
																					</td>
																			</tr>
																		<?php }
																	}
																	?>



															<?php if (ksa()->count("patient_id='$patient_id'")>0) {
																		foreach(ksa()->list("patient_id='$patient_id'") as $row) {
																					$count += 1;
																			?>
																				<tr>
																						<td>
																							<?=$count;?>
																						</td>
																						<td>
																								<?=$row->date;?>
																						</td>
																						<td>
																								Kidney Stone Analysis
																						</td>

																						</td>
																						<td align="right">
																							<button class="btn btn-round" style="<?=button_color()[2]?>"
																									onclick="location.href='?view=my_KSA_display&Id=<?=$row->Id;?>'"
																								>
																								<i class="material-icons">visibility</i> View
																							</button>
																						</td>
																				</tr>
																			<?php }
																		}
																		?>





  															<?php if (appointment()->count("patient_id='$patient_id'")>0) {
  																		foreach(appointment()->list("patient_id='$patient_id'") as $row) {
  																					$count += 1;
  																			?>
  																				<tr>
  																						<td>
  																							<?=$count;?>
  																						</td>
  																						<td>
  																								<?=$row->date;?>
  																						</td>
  																						<td>
  																								Appointment
  																						</td>

  																						</td>
  																						<td align="right">
  																							<button class="btn btn-round" style="<?=button_color()[4]?>"
  																									onclick="location.href='?view=my_appointment&Id=<?=$row->Id;?>'"
  																								>
  																								<i class="material-icons">visibility</i> View
  																							</button>
  																						</td>
  																				</tr>
  																			<?php }
  																		}
  																		?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
