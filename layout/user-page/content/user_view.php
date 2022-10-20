<h2><i class="fa fa-user"></i> User ID#<?php echo $profile->id; ?></h2>
<input type="hidden" id="user_id" name="user_id" requireds value="<?php echo $profile->id; ?>">
<div class="card">
  <div class="card-header bg-dark text-warning">
    <i class="fa fa-user"></i> User Profile
    <button type="button" class="btn btn-sm btn-warning pull-right btn-edit" name="user_edit" value="<?php echo $profile->id; ?>">Edit <i class="fa fa-edit"></i></button>
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <label for="password" class="form-label">*User Access</label>
          <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="access" name="access" requireds style="width: 100%;" disabled>
            <?php foreach ($access_list as $res) {
              if ($profile->access_id == $res['id']) {
                echo '<option value="' . $res['id'] . '" selected>' . $res['access'] . '</option>';
              } else {
                echo '<option value="' . $res['id'] . '">' . $res['access'] . '</option>';
              }
            } ?>
          </select>
        </div>
        <div class="col-md-6">
          <label for="password" class="form-label">*Username</label>
          <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Username" requireds value="<?php echo $profile->username; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="email" class="form-label">*Email Address</label>
          <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="user@example.com" requireds value="<?php echo $profile->email; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="firstname" class="form-label">*First Name</label>
          <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="firstname" value="<?php echo $profile->first_name; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="lastname" class="form-label">*Last Name</label>
          <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="lastname" value="<?php echo $profile->last_name; ?>" disabled>
        </div>
        <div class="col-md-6">
          <label for="address" class="form-label">*Address</label>
          <textarea class="form-control form-control-sm" id="address" name="address" rows="4" disabled><?php echo $profile->address; ?></textarea>
        </div>
        <div class="col-md-6">
          <label for="contact" class="form-label">*Contact No</label>
          <input type="text" class="form-control form-control-sm" id="contact" name="contact" placeholder="09xxxxxxxxx" requireds value="<?php echo $profile->contact_no; ?>" disabled>
          <label for="contact" class="form-label">*Gender</label>
          <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="gender" name="gender" requireds style="width: 100%;" disabled>
            <?php foreach ($gender_list as $res) {
              if ($profile->gender_id == $res['id']) {
                echo '<option value="' . $res['id'] . '" selected>' . $res['gender'] . '</option>';
              } else {
                echo '<option value="' . $res['id'] . '">' . $res['gender'] . '</option>';
              }
            } ?>
          </select>
        </div>

      </div>
    </div>

  </div>
</div>