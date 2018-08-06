<div class="card">
    <div class="card-header card-header-primary" align="center" style="<?=button_color()[4]?>">
        <h4 class="card-title">Register a new user</h4>
    </div>
    <div class="card-body">
        <form method="POST" action="process.php?action=new_user" autocomplete="off">
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
                        <label class="bmd-label-floating">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="bmd-label-floating">Account Type</label>
                        <select class="form-control" name="level" required>
                            <option value="">--Choose account type--</option>
                            <option value="MT">Medical Technologist</option>
                            <option value="PA">Pathologist</option>
                            <option value="DR">Doctor</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        Please advice the new user to use the temporary password: <b><b>temppw</b></b>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right" style="<?=button_color()[4]?>">Save</button>
            <div class="clearfix"></div>
        </form>
    </div>
</div>
