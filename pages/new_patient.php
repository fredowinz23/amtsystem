<div class="card">
    <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
        <h4 class="card-title">New Patient Form</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="process.php?action=new_patient" autocomplete="off">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="bmd-label-floating">Full Name</label>
                    <input type="text" name="full_name" class="form-control" required>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Birthday</label>
                        <input type="date" name="birthday" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="bmd-label-floating">Age</label>
                        <input type="number" name="age" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="bmd-label-floating">Sex</label>
                        <select class="form-control" name="sex" required>
                            <option value="">--Gender--</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                      <label class="bmd-label-floating">Address</label>
                      <input type="text" name="address" class="form-control">
                  </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right" style="<?=button_color()[4]?>">Save</button>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
