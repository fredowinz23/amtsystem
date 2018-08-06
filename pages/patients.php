<div class="col-md-12">
	<button class="btn" onclick="location.href='?view=new_patient'">Add New Patient</button>
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">List of patients</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
										<thead>
												<tr class=" text-primary">
														<th> #
														<th> ID
														<th> Name
														<th> Age/Gender
														<th> Address
														<th> &nbsp
												</tr>
										</thead>
                    <tbody>

											<?php if (patient()->count()>0) {
														$count = 0;
												 		foreach(patient()->list() as $row) {
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
				                                <?=$row->full_name;?>
				                            </td>
				                            <td>
				                                <?=$row->age;?> / <?=$row->sex;?>
				                            </td>
				                            <td>
				                                <?=$row->address;?>
				                            </td>
																		<td align="right" width="15%">
  																			<button class="btn btn-round" style="<?=button_color()[2]?>"
  																					onclick="location.href='?view=history_list&patient=<?=$row->patient_id;?>'"
  																				>
  													              <i class="material-icons">visibility</i> View
  													            </button>
																		</td>
				                        </tr>
															<?php }
														}
														else{ ?>
																	<tr>
																			<td colspan="6" align="center"> No test result found here
																			</td>
																	</tr>
														<?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
