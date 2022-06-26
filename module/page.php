<?php
require('../database/connection.php');
require_once('../class/main.php');
require_once('../class/shop.php');
require_once('common.php');
if (!$_GET || !isset($_GET['page'])) {
  echo get_contents('../layout/user-page/content/not_found.php');
  die;
}

$page = $_GET['page'];
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$access = $_SESSION['user']->access_id;
$customer_id = $_SESSION['user']->id;
$pages = get_access($access);

if (in_array($page, $pages)) {
  $data = array();
  $request = new Main($conn);
  $shop = new Shop($conn);
  switch ($page) {
      // Admin
    case 'users':
      $data['users'] = $request->get_list("select g.gender,UPPER(a.name) as 'access',ui.*,u.* from tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id inner join tbl_gender g on g.id = ui.gender_id and u.is_deleted = 0");
      break;
    case 'user_register':
      $data['access_list'] = $request->get_list("select id,UPPER(name) as 'access' from tbl_access");
      $data['gender_list'] = $request->get_list("select id,UPPER(gender) as 'gender' from tbl_gender");
      break;
    case 'user_edit':
      $data['profile'] = $request->get_one("select g.gender,UPPER(a.name) as 'access',ui.*,u.* from tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id inner join tbl_gender g on g.id = ui.gender_id WHERE u.id = " . $id);
      $data['access_list'] = $request->get_list("select id,UPPER(name) as 'access' from tbl_access");
      $data['gender_list'] = $request->get_list("select id,UPPER(gender) as 'gender' from tbl_gender");
      break;
    case 'products':
      $data['products'] = $request->get_list("select p.*,concat('(#',i.id,') ',i.last_name,', ',i.first_name) as created_by  from tbl_product p left join tbl_users_info i on i.id = p.created_by");
      break;
    case 'product_edit':
      $data['profile'] = $request->get_one("select * from tbl_product p WHERE is_deleted = 0 and p.id = " . $id);
      break;
    case 'inventory':
      $data['inventory'] = $request->get_list("select i.qty,p.* from tbl_product p inner join tbl_inventory i on i.product_id = p.id");
      break;
    case 'shop':
      $data['products'] = $request->get_list("select * from tbl_product");
      $data['inventory'] = $request->get_list("select i.qty,p.* from tbl_product p inner join tbl_inventory i on i.product_id = p.id");
      break;
    case 'admin_profile':
      $data['gender_list'] = $request->get_list("select id,UPPER(gender) as 'gender' from tbl_gender");
      $data['profile'] = $request->get_one("select g.gender,UPPER(a.name) as 'access',ui.*,u.* from tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id inner join tbl_gender g on g.id = ui.gender_id WHERE u.id = " . $_SESSION['user']->id);
      break;
    case 'orders':
      $data['orders'] = $request->get_list("select t.date_updated,t.id,t.price as `total_price`,t.qty,i.invoice,p.name,p.price,t.status_id,ss.status,concat('(#',b.id,') ',b.last_name,', ',b.first_name) as buyer_name ,concat('(#',s.id,') ',s.last_name,', ',s.first_name) as seller_name FROM tbl_transactions t left join tbl_invoice i on i.id = t.invoice_id inner join tbl_product p on p.id = t.product_id inner join tbl_users_info b on b.id = t.buyer_id left join tbl_users_info s on s.id = t.seller_id inner join tbl_status ss on ss.id = t.status_id where t.status_id > 1 and t.is_deleted = 0 order by t.date_updated desc");
      break;
      // Customers
    case 'cart':
      $data['cart'] = $request->get_list("select t.id,t.price as sum_price,t.qty,t.product_id,p.name,p.description,p.price from tbl_transactions t inner join tbl_product p on p.id = t.product_id where t.buyer_id = '$customer_id' and t.status_id = 1 and t.is_deleted = 0");
      break;
    case 'customer_profile':
      $data['gender_list'] = $request->get_list("select id,UPPER(gender) as 'gender' from tbl_gender");
      $data['profile'] = $request->get_one("select g.gender,UPPER(a.name) as 'access',ui.*,u.* from tbl_users u inner join tbl_users_info ui on ui.id = u.id inner join tbl_access a on a.id = u.access_id inner join tbl_gender g on g.id = ui.gender_id WHERE u.id = " . $_SESSION['user']->id);
      break;
    case 'customer_orders':
      $tmp = array();
      $tmp_res = $request->get_list("select t.id,t.qty,s.status,t.date_updated,t.status_id,i.invoice, i.date_created as invoice_date,p.name,p.price as product_price from tbl_transactions t inner join tbl_status s on s.id = t.status_id inner join tbl_invoice i on i.id = t.invoice_id  inner join tbl_product p on p.id = t.product_id where t.is_deleted = 0 and t.status_id > 1 and buyer_id = '$customer_id' order by t.date_created desc");

      foreach ($tmp_res as $res) {
        $tmp['invoice'][$res['invoice']][$res['id']] = $res;
      }
      $data['orders'] = $tmp;
      break;
  }
  echo get_contents(page_url($page), $data);
  die;
} else {
  echo get_contents(page_url('denied'));
  die;
}
