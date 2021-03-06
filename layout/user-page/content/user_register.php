<h2><i class="fa fa-user-plus"></i> Account Creation</h2>
<form method="post" name="register_user">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-user"></i> User Profile
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <label for="password" class="form-label">*User Access</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="access" name="access" requireds style="width: 100%;">
              <?php foreach ($access_list as $res) {
                echo '<option value="' . $res['id'] . '">' . $res['access'] . '</option>';
              } ?>
            </select>
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">*Username</label>
            <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="John Doe" requireds>
          </div>
          <div class="col-md-6">
            <label for="email" class="form-label">*Email Address</label>
            <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="user@example.com" requireds>
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">*Password</label>
            <input type="password" class="form-control form-control-sm" id="new_password" name="new_password" placeholder="password" requireds>
          </div>
          <div class="col-md-6">
            <label for="password_retype" class="form-label">*Re-Type Password</label>
            <input type="password" class="form-control form-control-sm" id="re_password" name="re_password" placeholder="re-type password" requireds>
          </div>
          <div class="col-md-6">
            <label for="firstname" class="form-label">*First Name</label>
            <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="firstname">
          </div>
          <div class="col-md-6">
            <label for="lastname" class="form-label">*Last Name</label>
            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="lastname">
          </div>
          <div class="col-md-6">
            <label for="address" class="form-label">*Address</label>
            <textarea class="form-control form-control-sm" id="address" name="address" rows="4"></textarea>
          </div>
          <div class="col-md-6">
            <label for="contact" class="form-label">*Contact No</label>
            <input type="text" class="form-control form-control-sm" id="contact" name="contact" placeholder="09xxxxxxxxx" requireds>
            <label for="contact" class="form-label">*Gender</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="gender" name="gender" requireds style="width: 100%;">
              <?php foreach ($gender_list as $res) {
                echo '<option value="' . $res['id'] . '">' . $res['gender'] . '</option>';
              } ?>
            </select>

          </div>
          <div class="col-md-12 mt-3">
            <div class="pull-right">
              <button type="button" class="btn btn-sm btn-dark"> Back <i class="fa fa-close"></i></button>
              <button type="submit" class="btn btn-sm btn-warning">Register <i class="fa fa-save"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>