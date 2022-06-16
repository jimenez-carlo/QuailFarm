<?php
require('../database/connection.php');
require_once('../class/shop.php');
require_once('common.php');

$result = def_response();

if (!$_POST || !isset($_POST['form'])) {
  echo json_encode($result);
  die;
}

$form = $_POST['form'];
$shop = new Shop($conn);

switch ($form) {
  case 'add_to_cart':
    $result = $shop->add_to_cart($_POST['product_id'], $_POST['qty'], $_POST['price']);
    break;
  case 'update_cart_count':
    $result = $shop->get_cart_count();
    break;
  default:
    # code...
    break;
}
echo json_encode($result);
die;
