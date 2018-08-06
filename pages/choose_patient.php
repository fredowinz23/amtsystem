<?php
$code = (isset($_GET['code']) && $_GET['code'] != '') ? $_GET['code'] : '';
?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary" align="center"  style="<?=button_color()[4]?>">
            <h4 class="card-title ">Select Existing Patient</h4>
            <p class="card-category">or add new patient <a href="?view=new_patient">here</a></p>
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
																		<td align="right">
																				<button class="btn"  style="<?=button_color()[4]?>" onclick="location.href='?view=<?=$code;?>&patient=<?=$row->patient_id;?>'">select</button>
																		</td>
				                        </tr>
															<?php }
														}
														else{ ?>
																	<tr>
																			<td colspan="2" align="center"> No test result found here
																			</td>
																	</tr>
														<?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
