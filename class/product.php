<?php
class Product
{
  private $conn;
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function add_product()
  {
    $product_name = mysqli_real_escape_string($this->conn, $_POST['product_name']);
    $price = mysqli_real_escape_string($this->conn, $_POST['price']);
    $description = mysqli_real_escape_string($this->conn, $_POST['description']);
    $image_name = 'default.png';
    $created_by = $_SESSION['user']->id;

    $result = def_response();
    $blank = 0;
    $errors = array();
    $msg = '';

    if (empty($product_name)) {
      $errors[] = 'product_name';
      $blank++;
    }
    if (empty($price)) {
      $errors[] = 'price';
      $blank++;
    }
    if (empty($description)) {
      $errors[] = 'description';
      $blank++;
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = error_msg($msg);
      $result->items = implode(',', $errors);
      return $result;
    }

    if ($_FILES['image']['error'] == 0) {
      $image_name = 'image_' . date('YmdHis') . '.jpeg';
      move_uploaded_file($_FILES["image"]["tmp_name"],   '../images/products/' . $image_name);
    }


    mysqli_query($this->conn, "INSERT INTO tbl_product (`name`,`description`,`image`,price,created_by) values ('$product_name', '$description', '$image_name', '$price', '$created_by')");
    $last_id = mysqli_insert_id($this->conn);
    mysqli_query($this->conn, "INSERT INTO tbl_inventory (product_id,qty) VALUES ('$last_id', 0)");

    $result->status = true;
    $result->result = success_msg("New Product Added!");

    return $result;
  }


  public function customer_update()
  {
    $customer_id = $_SESSION['user']->id;
    $username = mysqli_real_escape_string($this->conn, $_POST['username']);
    $email = mysqli_real_escape_string($this->conn, $_POST['email']);
    $firstname = mysqli_real_escape_string($this->conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($this->conn, $_POST['lastname']);
    $address = mysqli_real_escape_string($this->conn, $_POST['address']);
    $contact = mysqli_real_escape_string($this->conn, $_POST['contact']);
    $gender = mysqli_real_escape_string($this->conn, $_POST['gender']);

    $result = def_response();
    $blank = 0;
    $errors = array();
    $msg = '';
    $check_username = $this->get_one("select count(username) as `exists` from tbl_users where username = '$username' and id != '$customer_id' group_by username limit 1");
    $check_email = $this->get_one("select count(email) as `exists` from tbl_users where email = '$email' and id != '$customer_id' group_by username limit 1");

    if (empty($username)) {
      $errors[] = 'username';
      $blank++;
    }
    if (empty($email)) {
      $errors[] = 'email';
      $blank++;
    }
    if (empty($firstname)) {
      $errors[] = 'firstname';
      $blank++;
    }
    if (empty($lastname)) {
      $errors[] = 'lastname';
      $blank++;
    }
    if (empty($address)) {
      $errors[] = 'address';
      $blank++;
    }
    if (empty($contact)) {
      $errors[] = 'contact';
      $blank++;
    }
    if (empty($address)) {
      $errors[] = 'address';
      $blank++;
    }

    if (isset($check_username->exists) && !empty($check_username->exists)) {
      $msg .= "Username Already In-Used!";
      $errors[] = 'username';
    }

    if (isset($check_email->exists) && !empty($check_email->exists)) {
      $msg .= "Email Already In-Used!";
      $errors[] = 'email';
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = error_msg($msg);
      $result->items = implode(',', $errors);
      return $result;
    }

    mysqli_query($this->conn, "UPDATE tbl_users_info set first_name = '$firstname', last_name = '$lastname', contact_no = '$contact', `address`= '$address', gender_id = '$gender' where id = '$customer_id'");
    mysqli_query($this->conn, "UPDATE tbl_users set username = '$username', email = '$email' where id = '$customer_id'");

    $result->status = true;
    $result->result = success_msg("Profile Updated!");

    return $result;
  }

  public function customer_change_password()
  {
    $result = def_response();
    $blank = 0;
    $errors = array();
    $msg = '';
    $customer_id = $_SESSION['user']->id;
    $old_password = mysqli_real_escape_string($this->conn, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($this->conn, $_POST['new_password']);
    $re_password = mysqli_real_escape_string($this->conn, $_POST['re_password']);


    if (empty($old_password)) {
      $errors[] = 'old_password';
      $blank++;
    }

    if (empty($new_password)) {
      $errors[] = 'new_password';
      $blank++;
    }

    if (empty($re_password)) {
      $errors[] = 're_password';
      $blank++;
    }

    $check_password = password_verify($old_password, $_SESSION['user']->password);
    if (!empty($old_password) && $check_password == false) {
      $msg .= "Entered Wrong Old Password!";
      $errors[] = 'old_password';
    }

    if (!empty($new_password) && !empty($re_password) && $new_password != $re_password) {
      $msg .= "New Password & Re-Type New Password Doest Not Match!";
      $errors[] = 'new_password';
      $errors[] = 're_password';
    }

    if (!empty($errors)) {
      $msg .= "Please Fill Blank Fields!";
      $result->result = error_msg($msg);
      $result->items = implode(',', $errors);
      return $result;
    }

    $password = password_hash($new_password, PASSWORD_DEFAULT);
    mysqli_query($this->conn, "UPDATE tbl_users set password = '$password' where id = '$customer_id'");

    $result->status = true;
    $result->result = success_msg("Password Updated!");

    return $result;
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

  public function get_one($sql)
  {
    if ($result = mysqli_query($this->conn, $sql)) {
      $obj = mysqli_fetch_object($result);
      return $obj;
    }
    return false;
  }
}
