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
      case 1:
        return array('dashboard', 'users', 'user_register', 'products', 'inventory', 'system', 'shop');
      case 2:
        return array('dashboard', 'users', 'products', 'inventory');
      case 3:
        return array('dashboard', 'home', 'shop', 'cart', 'customer_profile', 'customer_orders');
      default:
        return array();
    }
  }
}

if (!function_exists('page_url')) {
  function page_url($page)
  {
    switch ($page) {
      case 'dashboard':
        return '../layout/user-page/content/dashboard.php';
      case 'users':
        return '../layout/user-page/content/users.php';
      case 'user_register':
        return '../layout/user-page/content/user_register.php';
      case 'products':
        return '../layout/user-page/content/products.php';
      case 'inventory':
        return '../layout/user-page/content/inventory.php';
      case 'system':
        return '../layout/user-page/content/system.php';
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
