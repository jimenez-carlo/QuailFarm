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
        return array('dashboard', 'users', 'products', 'inventory', 'system');
      case 2:
        return array('dashboard', 'products', 'inventory');
      case 3:
        return array('dashboard', 'products');
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
      case 'products':
        return '../layout/user-page/content/products.php';
      case 'inventory':
        return '../layout/user-page/content/inventory.php';
      case 'system':
        return '../layout/user-page/content/system.php';
      case 'denied':
        return '../layout/user-page/content/access_denied.php';
      default:
        return '../layout/user-page/content/not_found.php';
    }
  }
}
class Modal
{

  private $conn;
  public static $counter = 0;
  public  $title = 'Modal_Title';
  public  $id = 'modal_id_';
  public  $form_name = 'form_name_';
  public  $submit_id   = 'submit_id_';
  public  $submit_text = 'Submit';
  public  $cancel_id = 'cancel_id_';
  public  $cancel_text = 'Cancel';
  public  $method = 'POST';

  public function __construct($db)
  {
    self::$counter++;
    $this->form_name = $this->form_name . self::$counter;
    $this->conn = $db;
  }

  public function create_modal($url)
  {


    $modal = '<div class="modal fade" id="' . $this->id . '" tabindex="-1" aria-labelledby="modalLoginLabel" aria-hidden="true">
          <form name="' . $this->form_name . '" method="' . $this->method . '">
         <div class="modal-dialog modal-dialog-centered">
           <div class="modal-content">
             <div class="modal-header bg-dark text-white">
               <h5 class="modal-title" >' . $this->title . '</h5>
               <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">';
    $modal   .= get_contents($url);
    $modal   .= '</div>
             <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-dark" data-bs-dismiss="modal"> ' . $this->cancel_text . ' <i class="fa fa-close"></i></button>
                <button type="submit" class="btn btn-sm btn-warning">' . $this->submit_text . ' <i class="fa fa-check"></i></button>
            </div>
          </div>
        </div>
      </form>
      </div>';
    return $modal;
  }
}

class Kernel
{
  private $conn;
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function get_list($sql)
  {
    $data = array();
    $result = mysqli_query($this->conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = $row;
    }
    return $data;
  }
}
