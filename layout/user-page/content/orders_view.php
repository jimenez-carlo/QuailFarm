<h2><i class="fa fa-archive"></i> Order #<?php echo reset($data['transactions'])['invoice']; ?></h2>
<div class="card">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-shopping-cart"></i> Cart Details
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-3">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-primary">
              <tr>
                <th scope="col">TXN#</th>
                <th scope="col">Status</th>
                <!-- <th scope="col">PID#</th> -->
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Qty</th>
                <th scope="col">Total Price</th>
                <th scope="col">Last Updated</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php
              $price = 0;
              $qty = 0;
              $total_price = 0;
              $approvable = 0;
              ?>
              <?php foreach ($transactions as $res) { ?>
                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo strtoupper($res['status']); ?></td>
                  <!-- <td><a href="#" class="a-view" name="product_edit" value="<?php echo $res['product_id']; ?>"><?php echo $res['product_id']; ?></a></td> -->
                  <td><?php echo $res['name']; ?></td>
                  <td class="text-end"><?php echo number_format($res['price'], 2); ?></td>
                  <td class="text-end"><?php echo $res['qty']; ?></td>
                  <td class="text-end"><?php echo number_format($res['total_price'], 2); ?></td>
                  <td><?php echo $res['date_updated']; ?></td>
                  <td> <?php if (in_array($res['status_id'], array(2))) { ?>
                      <form method="post" name="update_order_transaction">
                        <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                        <input type="hidden" name="invoice_id" value="<?php echo reset($data['transactions'])['invoice']; ?>">
                        <button type="submit" class="btn btn-sm btn-primary" name="status" value="3"> Approve <i class="fa fa-check"></i> </button>
                        <button type="submit" class="btn btn-sm btn-primary" name="status" value="6"> Reject <i class="fa fa-close"></i> </button>
                        <!-- <button type="button" class="btn btn-sm btn-primary btn-view" name="transaction_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button> -->
                      </form>
                      <?php $approvable++; ?>
                    <?php } else { ?>
                      <button type="button" class="btn btn-sm btn-primary" disabled> Approve <i class="fa fa-check"></i> </button>
                      <button type="button" class="btn btn-sm btn-primary" disabled> Reject <i class="fa fa-close"></i> </button>
                      <!-- <button type="button" class="btn btn-sm btn-primary btn-view" name="transaction_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button> -->
                    <?php } ?>
                  </td>
                </tr>
                <?php $price += $res['price']; ?>
                <?php $total_price += $res['total_price']; ?>
                <?php $qty += $res['qty']; ?>
              <?php } ?>
              <tr class="fw-bold">
                <td colspan="3">Grand Total</td>
                <td id="total_price" class="text-end"><?php //echo number_format($price, 2); 
                                                      ?></td>
                <td id="total_qty" class="text-end"><?php //echo $qty; 
                                                    ?></td>
                <td id="total_final_price" class="text-end"><?php echo number_format($total_price, 2); ?></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="" class="form-label">Total</label>
            <input type="text" class="form-control form-control-sm" disabled value="<?= $total_price ?>" id="total">
          </div>
          <div class="col-md-4">
            <label for="" class="form-label">Amount</label>
            <div class="input-group">
              <input type="number" class="form-control form-control-sm" name="amount" id="amount" min="<?= $total_price ?>" <?= ($data['actual_invoice']->paid_status_id == 2) ? 'value="' . $data['actual_invoice']->amount . '" disabled' : 0 ?>>


              <form method="post" name="pay_order">
                <?php if ($data['actual_invoice']->paid_status_id == 1) { ?>
                  <input type="hidden" name="total" value="value=" <?= $total_price ?>"">
                  <input type="hidden" name="amount_post" id="amount_post">
                  <input type="hidden" name="change_post" id="change_post">
                  <button type="submit" class="btn btn-sm btn-primary" name="pay" value="<?php echo reset($data['transactions'])['invoice']; ?>"> PAY </button>
                <?php } else { ?>
                  <button type="button" class="btn btn-sm btn-primary" disabled> PAY </button>
                <?php } ?>
              </form>
            </div>

          </div>

          <div class="col-md-4">
            <label for="" class="form-label">Change</label>
            <input type="text" class="form-control form-control-sm" disabled id="change" value="<?= ($data['actual_invoice']->paid_status_id == 2) ? $data['actual_invoice']->change : 0 ?>">
          </div>

        </div>

        <div class="col-md-12 mt-3">
          <div class="pull-right">

            <form method="post" name="update_orders_view">
              <?php if (!empty($approvable)) { ?>
                <input type="hidden" name="id" value="<?php echo reset($data['transactions'])['invoice']; ?>">
                <button type="submit" class="btn btn-sm btn-primary" name="status" value="3"> Approve All <i class="fa fa-check"></i> </button>
                <button type="submit" class="btn btn-sm btn-primary" name="status" value="6"> Reject All <i class="fa fa-close"></i> </button>
              <?php } else { ?>
                <button type="button" class="btn btn-sm btn-primary" disabled> Approve All <i class="fa fa-check"></i> </button>
                <button type="button" class="btn btn-sm btn-primary" disabled> Reject All <i class="fa fa-close"></i> </button>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<br>
<input type="hidden" id="product_id" name="product_id" requireds value="<?php echo $product->id; ?>">

<div class="card">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-user"></i> Customer Details
    <!-- <button type="button" class="btn btn-sm btn-primary pull-right btn-view" name="customer_view" value="<?php echo $customer->id; ?>">View <i class="fa fa-eye"></i></button> -->
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">

          <label for="" class="form-label">Full Name</label>
          <input type="text" class="form-control form-control-sm" disabled value="<?php echo $customer->first_name . ', ' . $customer->last_name; ?>">

          <label for="" class="form-label">Contact No</label>
          <input type="text" class="form-control form-control-sm" disabled value="<?php echo $customer->contact_no; ?>">
        </div>
        <div class="col-md-6">
          <label for="description" class="form-label">Address</label>
          <textarea class="form-control form-control-sm" rows="4" disabled><?php echo $customer->address; ?></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card">
  <div class="card-header bg-primary text-white">
    <i class="fa fa-history"></i> Status History
  </div>
  <div class="card-body">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 mt-3">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-primary">
              <tr>
                <th scope="col">ID#</th>
                <th scope="col">Status</th>
                <th scope="col">Created By</th>
                <th scope="col">Date Created</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($status_history as $res) { ?>
                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td><?php echo $res['status']; ?></td>
                  <td><a href="#" class="a-view" name="<?php echo ($res['access_id'] == 3) ? 'customer_view' : 'user_view'; ?>" value="<?php echo $res['user_id']; ?>" value="<?php echo $res['user_id']; ?>"><?php echo $res['user']; ?></a></td>
                  <td><?php echo $res['date_created']; ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</div>
<script>
  // $('table').DataTable({
  //   dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"i><"col-sm-2"p>>',
  //   "order": []
  // });
  var amount = document.querySelector("#amount");
  var amount_post = document.querySelector("#amount_post");
  var change_post = document.querySelector("#change_post");

  amount.addEventListener("keyup", e => {
    var change = document.querySelector("#change");
    var total = document.querySelector("#total");
    if (amount.value == '') {
      amount.value = 0;
    }
    var tmp = parseInt(amount.value) - parseInt(total.value);
    if (parseInt(total.value) > parseInt(amount.value)) {
      var tmp = 0;
    }
    change.value = tmp;
    amount_post.value = amount.value;
    change_post.value = change.value;
  });
</script>