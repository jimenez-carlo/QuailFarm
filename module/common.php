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
        return array('dashboard', 'home', 'shop', 'cart', 'customer_profile');
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
        // case 'shop':
        //   return '../layout/user-page/content/shop.php';
      case 'denied':
        return '../layout/user-page/content/access_denied.php';
      default:
        return '../layout/user-page/content/not_found.php';
    }
  }
}
