<?php
require('db/database.php');
require('module/common.php');

if (isset($_SESSION['is_logged_in'])) {
  include('layout/user-page/header.php');
  include('layout/user-page/body.php');

  $modal = new Modal($conn);
  $modal->id = 'modal_id_1';
  $modal->title = 'Logout';
  echo $modal->create_modal('layout/user-page/modal/logout.php');

  include('layout/user-page/footer.php');
} else {
  $gender = new Kernel($conn);
  $gender_list = $gender->get_list("select id,UPPER(gender) as 'gender' from tbl_gender");
  include('layout/landing-page/header.php');
  include('layout/landing-page/body.php');
  include('layout/landing-page/footer.php');
}
