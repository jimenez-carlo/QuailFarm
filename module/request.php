<?php
require('../database/connection.php');
require_once('../class/user.php');
require_once('../class/shop.php');
require_once('../class/product.php');
require_once('../class/category.php');
require_once('common.php');

$result = def_response();

if (!$_POST || !isset($_POST['form'])) {
  echo json_encode($result);
  die;
}

$form = $_POST['form'];
$user = new User($conn);
$shop = new Shop($conn);
$product = new Product($conn);
$category = new Category($conn);

switch ($form) {
    // Customer
  case 'add_to_cart':
    $result = $shop->add_to_cart();
    break;
  case 'update_cart_count':
    $result = $shop->get_cart_count();
    break;
  case 'remove_from_cart':
    $result = $shop->remove_from_cart();
    break;
  case 'update_cart':
    $result = $shop->update_cart();
    break;
  case 'checkout_cart':
    $result = $shop->check_out_cart();
    break;
  case 'update_transaction':
    $result = $shop->update_transaction($_POST['id'], $_POST['status']);
    break;
  case 'update_transaction_view':
    $result = $shop->update_transaction($_POST['id'], $_POST['status']);
    break;
  case 'update_order_transaction':
    $result = $shop->update_transaction($_POST['id'], $_POST['status']);
    break;

  case 'update_order':
    $result = $shop->update_order($_POST['id'], $_POST['status']);
    break;
  case 'update_orders_view':
    $result = $shop->update_order($_POST['id'], $_POST['status']);
    break;

  case 'customer_update':
    $result = $user->customer_update();
    break;
  case 'customer_change_password':
    $result = $user->customer_change_password();
    break;
    //  Admin
  case 'register_user':
    $result = $user->register_user();
    break;
  case 'update_user':
    $result = $user->update_user();
    break;
  case 'add_category':
    $result = $category->add_category();
    break;
  case 'update_category':
    $result = $category->update_category();
    break;
  case 'add_product':
    $result = $product->add_product();
    break;
  case 'update_product':
    $result = $product->update_product();
    break;
  default:
    # code...
    break;
}
echo json_encode($result);
die;
