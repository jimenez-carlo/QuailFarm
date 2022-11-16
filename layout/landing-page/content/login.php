<div class="row">
  <div class="col-md-3">
  </div>
  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        <br>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link font-bold active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Login</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link font-bold" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup" type="button" role="tab" aria-controls="signup" aria-selected="false">Sign Up</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
            <form method="post" name="login">
              <div class="alert alert-danger" role="alert" style="display: none;">
              </div>
              <div class="mb-3 mt-3">
                <label for="login_username" class="form-label">*Username</label>
                <input type="text" class="form-control form-control-sm" id="login_username" name="login_username" placeholder="user@example.com">
              </div>
              <div class="mb-3">
                <label for="login_text" class="form-label">*Password</label>
                <input type="password" class="form-control form-control-sm" id="login_password" name="login_password" placeholder="password">
              </div>
              <div class="pull-right">
                <button type="submit" class="btn btn-sm btn-primary">Login <i class="fa fa-check"></i></button>
              </div>
            </form>
          </div>
          <div class="tab-pane container fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
            <form method="post" name="signup">
              <div class="alert alert-danger" role="alert" style="display: none;">
                <i class="fa fa-exclamation-triangle"></i>
              </div>
              <!-- <div class="row mt-3"> -->
              <div class="col-md-12">
                <label for="password" class="form-label">*Username</label>
                <input type="text" class="form-control form-control-sm" id="username" name="username" placeholder="Username" requireds>
              </div>
              <div class="col-md-12">
                <label for="firstname" class="form-label">*First Name</label>
                <input type="text" class="form-control form-control-sm" id="firstname" name="firstname" placeholder="firstname">
              </div>
              <div class="col-md-12">
                <label for="lastname" class="form-label">*Last Name</label>
                <input type="text" class="form-control form-control-sm" id="lastname" name="lastname" placeholder="lastname">
              </div>
              <div class="col-md-12">
                <label for="password" class="form-label">*Password</label>
                <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder="password" requireds>
              </div>
              <div class="col-md-12">
                <label for="password_retype" class="form-label">*Re-Type Password</label>
                <input type="password" class="form-control form-control-sm" id="password_retype" name="password_retype" placeholder="re-type password" requireds>
              </div>
              <div class="col-md-12">
                <label for="contact" class="form-label">*Contact No</label>
                <input type="text" class="form-control form-control-sm" id="contact" name="contact" placeholder="09xxxxxxxxx" requireds>
              </div>
              <div class="col-md-12">
                <label for="address" class="form-label">*Address</label>
                <textarea class="form-control form-control-sm" id="address" name="address" rows="4"></textarea>
              </div>
              <div class="col-md-12">
                <label for="contact" class="form-label">*Gender</label>
                <select class="form-select form-select-sm mb-3" aria-label=".form-select-lg example" id="gender" name="gender" required style="width: 100%;">
                  <option selected value="">Select Gender</option>
                  <?php foreach ($gender_list as $res) {
                    echo '<option value="' . $res['id'] . '">' . $res['gender'] . '</option>';
                  } ?>
                </select>
              </div>
              <!-- </div> -->
              <div class="pull-right">
                <button type="submit" class="btn btn-sm btn-primary">Sign Up <i class="fa fa-check"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>