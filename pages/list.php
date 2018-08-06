<?php
$code = (isset($_GET['code']) && $_GET['code'] != '') ? $_GET['code'] : '';
$sub_section = sub_section()->get("code='$code'");
$section = section()->get("code='$sub_section->section_code'");

switch ($code) {

	case 'CBC' :
		$records 	= cbc();
		break;

	case 'UA' :
		$records 	= ua();
		break;

	case 'SQAR' :
		$records 	= sqar();
		break;

	case 'CSC' :
		$records 	= csc();
		break;

	case 'HIV' :
		$records 	= hiv();
		break;

	case 'KSA' :
		$records 	= ksa();
		break;

	default:
}

?>
<div class="col-md-12">

<?php if ($user->level=="MT") {?>
	<button class="btn" onclick="location.href='?view=choose_patient&code=<?=$code;?>'">Add New Test Result</button>
<?php } ?>
    <div class="card">
        <div class="card-header card-header-primary" style="<?=button_color()[4]?>">
            <h4 class="card-title "><?=$sub_section->name;?></h4>
            <p class="card-category"><?=$section->name;?></p>
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
                            Patient
                        </th>
                        <th>
                            Med Tech
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            &nbsp
                        </th>
                    </thead>
                    <tbody>

											<?php if ($records->count()>0) {
														$count = 0;
												 		foreach($records->list() as $row) {
															$patient = patient()->get("patient_id='$row->patient_id'");
															$count +=1;
															?>
				                        <tr>
				                            <td>
																			<?=$count;?>
				                            </td>
				                            <td>
				                                <?=$row->date;?>
				                            </td>
				                            <td>
				                                <?=$patient->full_name;?> (<?=$patient->patient_id;?>)
				                            </td>
				                            <td>
				                                <?=$row->med_tech;?>
				                            </td>
				                            <td>

																			<?php
																				if ($row->status=="Approved"){
																			?>
							                                <button class="btn btn-info"><?=$row->status;?></button>
																			<?php
																			}
																				else if ($row->status=="Denied"){
																			?>
						                                <button class="btn btn-danger"><?=$row->status;?></button>
																		<?php
																		}
																			else {
																		?>

																					<button class="btn btn-warning"><?=$row->status;?></button>
																		<?php if ($user->level=="PA") {?>
																			<button class="btn btn-info btn-round btn-fab"
																				onclick="location.href='process.php?action=approve_<?=$code;?>&Id=<?=$row->Id;?>'"
																			>
																				<i class="material-icons">check</i>
																			</button>
																			<button class="btn btn-danger btn-round btn-fab"
																				onclick="location.href='process.php?action=deny_<?=$code;?>&Id=<?=$row->Id;?>'"
																			>
																				<i class="material-icons">close</i>
																			</button>
																		<?php } ?>

																	<?php
																		} ?>



				                            </td>
				                            <td align="right">
																			<button class="btn btn-round" style="<?=button_color()[2]?>"
																					onclick="location.href='?view=<?=$code;?>_display&Id=<?=$row->Id;?>'"
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
