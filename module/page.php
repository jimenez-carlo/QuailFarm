<?php
require_once('../db/database.php');
require_once('common.php');
if (!$_GET || !isset($_GET['page'])) {
  echo get_contents('../layout/user-page/content/not_found.php');
  die;
}




$page = $_GET['page'];
$access = $_SESSION['user']->access_id;
$pages = get_access($access);

if (in_array($page, $pages)) {
  $data = array();
  $request = new Kernel($conn);
  switch ($page) {
    case 'products':
      $data['products'] = $request->get_list("select * from tbl_product");
      break;
    case 'inventory':
      $data['inventory'] = $request->get_list("select i.qty,p.* from tbl_product p inner join tbl_inventory i on i.product_id = p.id");
      break;
    case 'shop':
      $data['products'] = $request->get_list("select * from tbl_product");
      $data['inventory'] = $request->get_list("select i.qty,p.* from tbl_product p inner join tbl_inventory i on i.product_id = p.id");
      break;
    case 'users':
      $data['users'] = $request->get_list("select g.gender,UPPER(a.name) as 'access',ui.*,u.* from tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id inner join tbl_gender g on g.id = ui.gender_id");
      break;
  }
  echo get_contents(page_url($page), $data);
  die;
} else {
  echo get_contents(page_url('denied'));
  die;
}
