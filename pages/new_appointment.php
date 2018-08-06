<div class="card">
    <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
        <h4 class="card-title">New Appointment Form</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="process.php?action=new_appointment" autocomplete="off">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Patient</label>
                        <select class="form-control" name="patient_id" required>
                            <option value="">--Select Patient--</option>
                            <?php foreach(patient()->list() as $row) {?>
                              <option value="<?=$row->patient_id;?>"><?=$row->full_name;?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="bmd-label-floating">Date</label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="bmd-label-floating">Time</label>
                        <input type="time" name="time" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                      <label class="bmd-label-floating">Recommendation</label>
                      <input type="text" name="recommendation" class="form-control">
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right" style="<?=button_color()[4]?>">Save</button>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
