<?php
if (!function_exists('clean_data')) {
  function clean_data($value)
  {
    $value = trim($value);
    $value = stripslashes($value);
    // $value = htmlspecialchars($value);
    return $value;
  }
}

if (!function_exists('get_contents')) {
  function get_contents($url, $data = array())
  {
    extract($data);
    ob_start();
    include($url);
    return ob_get_clean();
  }
}

if (!function_exists('get_access')) {
  function get_access($access)
  {
    switch ($access) {
      case 1: //admin
      case 5: //admin
        return array(
          'dashboard',
          'customers',
          'customer_register',
          'customer_edit',
          'users',
          'user_register',
          'user_edit',
          'user_view',
          'categories',
          'category_add',
          'category_edit',
          'products',
          'product_add',
          'product_edit',
          'inventory',
          'inventory_edit',
          'transactions',
          'transaction_view',
          'orders',
          'orders_view',
          'customer_view',
          'system'
        );
      case 2: //Salesclerk
        return array(
          'dashboard',
          'products',
          'product_add',
          'product_edit',
          'inventory',
          'inventory_edit',
          'transactions',
          'transaction_view',
          'orders',
          'orders_view',
          'customer_view'
        );
      case 3: //customer
        return array(
          'dashboard',
          'home',
          'shop',
          'cart',
          'customer_profile',
          'customer_orders',
          'customer_category'
        );
      case 4: //inventory clerk
        return array(
          'dashboard',
          'products',
          'product_add',
          'product_edit',
          'inventory',
          'inventory_edit',
          'transactions',
          'transaction_view',
          'orders',
          'orders_view',
          'customer_view',
          'system'
        );

      default:
        return array();
    }
  }
}

if (!function_exists('page_url')) {
  function page_url($page)
  {
    switch ($page) {
      case 'customer_view':
        return '../layout/user-page/content/customer_view.php';
      case 'dashboard':
        return '../layout/user-page/content/dashboard.php';
      case 'customers':
        return '../layout/user-page/content/customers.php';
      case 'customer_register':
        return '../layout/user-page/content/customer_register.php';
      case 'customer_edit':
        return '../layout/user-page/content/customer_edit.php';
      case 'users':
        return '../layout/user-page/content/users.php';
      case 'user_register':
        return '../layout/user-page/content/user_register.php';
      case 'user_edit':
        return '../layout/user-page/content/user_edit.php';
      case 'user_view':
        return '../layout/user-page/content/user_view.php';
      case 'categories':
        return '../layout/user-page/content/category.php';
      case 'category_add':
        return '../layout/user-page/content/category_add.php';
      case 'category_edit':
        return '../layout/user-page/content/category_edit.php';
      case 'products':
        return '../layout/user-page/content/products.php';
      case 'product_add':
        return '../layout/user-page/content/product_add.php';
      case 'product_edit':
        return '../layout/user-page/content/product_edit.php';
      case 'inventory':
        return '../layout/user-page/content/inventory.php';
      case 'inventory_edit':
        return '../layout/user-page/content/inventory_edit.php';
      case 'system':
        return '../layout/user-page/content/system.php';
      case 'transactions':
        return '../layout/user-page/content/transactions.php';
      case 'transaction_view':
        return '../layout/user-page/content/transaction_view.php';
      case 'orders':
        return '../layout/user-page/content/orders.php';
      case 'orders_view':
        return '../layout/user-page/content/orders_view.php';
        #Customer
      case 'home':
        return '../layout/customer-page/content/home.php';
      case 'shop':
        return '../layout/customer-page/content/shop.php';
      case 'cart':
        return '../layout/customer-page/content/cart.php';
      case 'customer_profile':
        return '../layout/customer-page/content/profile.php';
      case 'customer_orders':
        return '../layout/customer-page/content/orders.php';
      case 'customer_category':
        return '../layout/customer-page/content/category.php';
        // case 'shop':
        //   return '../layout/user-page/content/shop.php';
      case 'denied':
        return '../layout/user-page/content/access_denied.php';
      default:
        return '../layout/user-page/content/not_found.php';
    }
  }
}

if (!function_exists('error_msg')) {
  function error_msg($message = "Oops Something Went Wrong!", $title = "Error! ")
  {
    $result = '<div class="alert alert-danger mt-3 mb-0" role="alert">
        <i class="fa fa-exclamation-triangle"></i>
        <strong>' . $title . '</strong>
        ' . $message . '
        <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    return $result;
  }
}

if (!function_exists('success_msg')) {
  function success_msg($message = "Action Successfull!", $title = "Successfull! ")
  {
    $result = '<div class="alert alert-success mt-3 mb-0" role="alert">
        <i class="fa fa-check"> </i>
        <strong>' . $title . '</strong>
        ' . $message . '
         <button type="button" class="btn-close pull-right" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    return $result;
  }
}


if (!function_exists('def_response')) {
  function def_response()
  {
    $result = new stdClass();
    $result->status = false;
    $result->result = error_msg();
    $result->items = '';
    return $result;
  }
}
