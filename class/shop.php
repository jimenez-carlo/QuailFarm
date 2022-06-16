<?php
class Shop
{
  private $conn;
  public function __construct($db)
  {
    $this->conn = $db;
  }

  public function add_to_cart($product_id, $qty, $price)
  {
    $qty = mysqli_real_escape_string($this->conn, intval($qty));
    $price = mysqli_real_escape_string($this->conn, intval($price));
    $product_id = mysqli_real_escape_string($this->conn, $product_id);

    $result = def_response();

    $customer_id = $_SESSION['user']->id;
    $stocks = $this->get_one("select qty from tbl_inventory where id='$product_id' limit 1");
    if (!empty($stocks) && isset($stocks->qty)) {
      if ($qty > $stocks->qty) {
        $result->result = error_msg("Not Enough Stocks.");
      } else {
        $draft = $this->get_one("select id,qty from tbl_transactions where product_id='$product_id' and buyer_id = '$customer_id' and status_id = 1 limit 1");

        if (isset($draft->qty) && isset($draft->id) && !empty($draft->qty) && !empty($draft->id)) {
          $total_qty = intval($draft->qty) + $qty;
          $total_price = $total_qty * $price;
          $id = $draft->id;
          $sql = "update tbl_transactions set qty = '$total_qty', price = '$total_price' where id = '$id'";
          mysqli_query($this->conn, $sql);
        } else {
          $total_price = $qty * intval($price);
          mysqli_query($this->conn, "insert into tbl_transactions (price,qty,product_id,buyer_id,status_id) VALUES ('$total_price', '$qty', '$product_id', '$customer_id', 1) ");
          $last_id = mysqli_insert_id($this->conn);
          mysqli_query($this->conn, "insert into tbl_status_history (transaction_id,status_id,created_by) VALUES ('$last_id', 1, '$customer_id') ");
        }
        $result->status = true;
        $result->result = success_msg("Product Added To Cart Successfully!");
      }
    } else {
      $result->result = error_msg("Product Out Of Stock.");
    }
    return $result;
  }

  public function get_cart_count()
  {
    $customer_id = $_SESSION['user']->id;
    $result = def_response();
    $sql = "select count(product_id) as count from tbl_transactions where status_id = 1 and buyer_id = '$customer_id' group by buyer_id";
    $count = $this->get_one($sql);

    $result->status = true;
    $result->result = (isset($count->count)) ? $count->count : 0;
    return $result;
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
