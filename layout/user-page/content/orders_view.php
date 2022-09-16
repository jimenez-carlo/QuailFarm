<h2><i class="fa fa-archive"></i> Order #<?php echo reset($data['transactions'])['invoice']; ?></h2>
<div class="card">
  <div class="card-header bg-dark text-warning">
    <i class="fa fa-shopping-cart"></i> Cart Details
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 mt-3">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-dark">
              <tr>
                <th scope="col">TXN#</th>
                <th scope="col">Status</th>
                <th scope="col">PID#</th>
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
                  <td><a href="#" class="a-view" name="product_edit" value="<?php echo $res['product_id']; ?>"><?php echo $res['product_id']; ?></a></td>
                  <td><?php echo $res['name']; ?></td>
                  <td class="text-end"><?php echo number_format($res['price'], 2); ?></td>
                  <td class="text-end"><?php echo $res['qty']; ?></td>
                  <td class="text-end"><?php echo number_format($res['total_price'], 2); ?></td>
                  <td><?php echo $res['date_updated']; ?></td>
                  <td> <?php if (in_array($res['status_id'], array(2))) { ?>
                      <form method="post" name="update_order_transaction">
                        <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
                        <input type="hidden" name="invoice_id" value="<?php echo reset($data['transactions'])['invoice']; ?>">
                        <button type="submit" class="btn btn-sm btn-warning" name="status" value="3"> Approve <i class="fa fa-check"></i> </button>
                        <button type="submit" class="btn btn-sm btn-dark" name="status" value="6"> Reject <i class="fa fa-close"></i> </button>
                        <button type="button" class="btn btn-sm btn-dark btn-view" name="transaction_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button>
                      </form>
                      <?php $approvable++; ?>
                    <?php } else { ?>
                      <button type="button" class="btn btn-sm btn-warning" disabled> Approve <i class="fa fa-check"></i> </button>
                      <button type="button" class="btn btn-sm btn-dark" disabled> Reject <i class="fa fa-close"></i> </button>
                      <button type="button" class="btn btn-sm btn-dark btn-view" name="transaction_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button>
                    <?php } ?>
                  </td>
                </tr>
                <?php $price += $res['price']; ?>
                <?php $total_price += $res['total_price']; ?>
                <?php $qty += $res['qty']; ?>
              <?php } ?>
              <tr class="fw-bold">
                <td colspan="4">Grand Total</td>
                <td id="total_price" class="text-end"><?php echo number_format($price, 2); ?></td>
                <td id="total_qty" class="text-end"><?php echo $qty; ?></td>
                <td id="total_final_price" class="text-end"><?php echo number_format($total_price, 2); ?></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-12 mt-3">
          <div class="pull-right">
            <?php if (!empty($approvable)) { ?>
              <form method="post" name="update_orders_view">
                <input type="hidden" name="id" value="<?php echo reset($data['transactions'])['invoice']; ?>">
                <button type="submit" class="btn btn-sm btn-warning" name="status" value="3"> Approve All <i class="fa fa-check"></i> </button>
                <button type="submit" class="btn btn-sm btn-dark" name="status" value="6"> Reject All <i class="fa fa-close"></i> </button>
              </form>
            <?php } else { ?>
              <button type="button" class="btn btn-sm btn-warning" disabled> Approve All <i class="fa fa-check"></i> </button>
              <button type="button" class="btn btn-sm btn-dark" disabled> Reject All <i class="fa fa-close"></i> </button>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<br>
<input type="hidden" id="product_id" name="product_id" requireds value="<?php echo $product->id; ?>">
<div class="card">
  <div class="card-header bg-dark text-warning">
    <i class="fa fa-user"></i> Customer Details <button type="button" class="btn btn-sm btn-warning pull-right btn-view" name="customer_view" value="<?php echo $customer->id; ?>">View <i class="fa fa-eye"></i></button>
  </div>
  <div class="card-body">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <label for="" class="form-label">Customer ID</label>
          <input type="text" class="form-control form-control-sm" disabled value="<?php echo $customer->id; ?>">
          <label for="" class="form-label">Full Name</label>
          <input type="text" class="form-control form-control-sm" disabled value="<?php echo $customer->first_name . ', ' . $customer->last_name; ?>">
          <label for="" class="form-label">Email</label>
          <input type="text" class="form-control form-control-sm" disabled value="<?php echo $customer->email; ?>">
        </div>
        <div class="col-md-6">
          <label for="description" class="form-label">Address</label>
          <textarea class="form-control form-control-sm" rows="4" disabled><?php echo $customer->address; ?></textarea>
          <label for="" class="form-label">Contact No</label>
          <input type="text" class="form-control form-control-sm" disabled value="<?php echo $customer->contact_no; ?>">
        </div>


      </div>
    </div>

  </div>
</div>
<br>
<div class="card">
  <div class="card-header bg-dark text-warning">
    <i class="fa fa-history"></i> Status History
  </div>
  <div class="card-body">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 mt-3">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-dark">
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
  //   dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"li><"col-sm-2"p>>',
  //   "order": []
  // });
</script>