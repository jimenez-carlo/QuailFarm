<h2><i class="fa fa-user"></i> Customer ID#<?php echo $profile->id; ?></h2>
<form method="post" name="update_user">
  <input type="hidden" id="user_id" name="user_id" requireds value="<?php echo $profile->id; ?>">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-user"></i> Customer Profile
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <label for="password" class="form-label">*Username</label>
            <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Username" requireds value="<?php echo $profile->username; ?>">
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">*Email Address</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="user@example.com" requireds value="<?php echo $profile->email; ?>">
          </div>
          <div class="col-md-6">
            <label for="firstname" class="form-label">*First Name</label>
            <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="firstname" value="<?php echo $profile->first_name; ?>">
          </div>
          <div class="col-md-6">
            <label for="lastname" class="form-label">*Last Name</label>
            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="lastname" value="<?php echo $profile->last_name; ?>">
          </div>
          <div class="col-md-6">
            <label for="address" class="form-label">*Address</label>
            <textarea class="form-control form-control-sm" id="address" name="address" rows="4"><?php echo $profile->address; ?></textarea>
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label">*Contact No</label>
            <input type="text" class="form-control form-control-sm" id="contact" name="contact" placeholder="09xxxxxxxxx" requireds value="<?php echo $profile->contact_no; ?>">
            <label for="contact" class="form-label">*Gender</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="gender" name="gender" requireds style="width: 100%;">
              <?php foreach ($gender_list as $res) {
                if ($profile->gender_id == $res['id']) {
                  echo '<option value="' . $res['id'] . '" selected>' . $res['gender'] . '</option>';
                } else {
                  echo '<option value="' . $res['id'] . '">' . $res['gender'] . '</option>';
                }
              } ?>
            </select>
          </div>
          <div class="col-md-12">
            <label for="address" class="form-label"><i class="fa fa-exclamation-circle"></i> <i>Reset password is 123456</i></label>
          </div>
          <div class="col-md-12 mt-3">
            <div class="pull-right">
              <button type="submit" class="btn btn-sm btn-dark" name="type" value="delete"> Delete <i class="fa fa-trash"></i></button>
              <button type="submit" class="btn btn-sm btn-dark" name="type" value="reset">Reset Password <i class="fa fa-lock"></i></button>
              <button type="submit" class="btn btn-sm btn-warning" name="type" value="update">Update <i class="fa fa-save"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>