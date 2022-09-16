<h2><i class="fa fa-file-text"></i> Transaction #<?php echo $transaction->id; ?></h2>
<form method="post" name="update_transaction_view" enctype="multipart/form-data">
  <input type="hidden" id="id" name="id" requireds value="<?php echo $transaction->id; ?>">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-exclamation-circle"></i> Transaction Details
    </div>
    <div class="card-body">
      <div class="container-fluid">

        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">Order#</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" value="<?php echo $transaction->invoice; ?>" disabled>
              <button type="button" class="btn btn-sm btn-dark btn-edit" name="orders_view" value="<?php echo $transaction->invoice; ?>" <?php echo empty($transaction->invoice) ? 'disabled' : ''; ?>> View <i class="fa fa-eye"></i> </button>
            </div>
          </div>
          <div class="col-md-6">
            <label for="product_name" class="form-label">Status</label>
            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $transaction->status; ?>" disabled>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">Buyer</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" value="<?php echo $transaction->buyer_name; ?>" disabled>
              <button type="button" class="btn btn-sm btn-dark btn-edit" name="customer_view" value="<?php echo $transaction->buyer_id; ?>" <?php echo empty($transaction->buyer_id) ? 'disabled' : ''; ?>> View <i class="fa fa-eye"></i> </button>
            </div>
          </div>
          <div class="col-md-6">
            <label for="product_name" class="form-label">Seller</label>
            <div class="input-group">
              <input type="text" class="form-control form-control-sm" value="<?php echo $transaction->seller_name; ?>" disabled>
              <button type="button" class="btn btn-sm btn-dark btn-edit" name="user_view" value="<?php echo $transaction->seller_id; ?>" <?php echo empty($transaction->seller_id) ? 'disabled' : ''; ?>> View <i class="fa fa-eye"></i> </button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">Name</label>
            <input type="text" class="form-control form-control-sm" disabled value="<?php echo $product->name; ?>">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control form-control-sm" disabled value="<?php echo $product->price; ?>">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control form-control-sm" rows="5" disabled><?php echo $product->description; ?></textarea>
          </div>

          <div class="col-md-6 pt-5" style="display: flex;flex-direction:column">
            <img src="images/products/<?php echo $product->image; ?>" alt="" style="width:200px;height:200px;align-self: center;" id="preview">
          </div>

        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">Quantity</label>
            <input type="text" class="form-control form-control-sm" value="<?php echo number_format($transaction->qty, 0); ?>" disabled>
          </div>
          <div class="col-md-6">
            <label for="product_name" class="form-label">Total</label>
            <input type="text" class="form-control form-control-sm" value="<?php echo number_format($transaction->qty * $product->price, 2); ?>" disabled>
          </div>
          <div class="col-md-12 mt-3">
            <div class="pull-right">
              <button type="submit" class="btn btn-sm btn-warning" name="status" value="3" <?php echo in_array($transaction->status_id, array(3, 5, 6, 7)) ? 'disabled' : ''; ?>> Approve <i class="fa fa-check"></i></button>
              <button type="submit" class="btn btn-sm btn-dark" name="status" value="6" <?php echo in_array($transaction->status_id, array(3, 5, 6, 7)) ? 'disabled' : ''; ?>> Reject <i class="fa fa-close"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>

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
  $('table').DataTable({
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"li><"col-sm-2"p>>',
    "order": []
  });
</script>