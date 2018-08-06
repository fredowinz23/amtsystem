<div class="col-md-12">
	<button class="btn" onclick="location.href='?view=new_appointment'">Add New Appointment</button>
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">List of appointments</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
										<thead>
												<tr class=" text-primary">
														<th> #
														<th> Patient
														<th> Schedule
														<th> Recommendation
												</tr>
										</thead>
                    <tbody>

											<?php if (appointment()->count()>0) {
														$count = 0;
												 		foreach(appointment()->list("Id>0 order by Id desc") as $row) {
															$count +=1;
															?>
				                        <tr>
				                            <td>
																			<?=$count;?>
				                            </td>
				                            <td>
				                                <?=$row->patient_id;?>
				                            </td>
				                            <td>
				                                <?=$row->date;?> @  <?=$row->time;?>
				                            </td>
				                            <td>
				                                <?=$row->recommendation;?>
				                            </td>
				                        </tr>
															<?php }
														}
														else{ ?>
																	<tr>
																			<td colspan="6" align="center"> No result found here
																			</td>
																	</tr>
														<?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
