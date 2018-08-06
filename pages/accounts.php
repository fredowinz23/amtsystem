<div class="col-md-12">
	<button class="btn" onclick="location.href='?view=new_user'">Add New User</button>
    <div class="card">
        <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
            <h4 class="card-title ">List of users</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
										<thead>
												<tr class=" text-primary">
														<th> #
														<th> Level
														<th> username
														<th> name
														<th> &nbsp
												</tr>
										</thead>
                    <tbody>

											<?php if (user()->count()>0) {
														$count = 0;
												 		foreach(user()->list() as $row) {
															$count +=1;
															?>
				                        <tr>
				                            <td>
																			<?=$count;?>
				                            </td>
				                            <td>
				                                <?=$row->level;?>
				                            </td>
				                            <td>
				                                <?=$row->full_name;?>
				                            </td>
				                            <td>
				                                <?=$row->username;?>
				                            </td>
																		<td align="center">
																			<?php if ($row->username!="admin") {?>
																				<button class="btn btn-warning btn-round btn-fab"
																					onclick="location.href='index.php?view=update_user&Id=<?=$row->Id;?>'"
																				>
																					<i class="material-icons">edit</i>
																				</button>
																			<?php } ?>
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
