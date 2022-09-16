<h2><i class="fa fa-file-text"></i> Transactions</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">TXN#</th>
      <th scope="col">Status</th>
      <th scope="col">Order#</th>
      <th scope="col">Product</th>
      <th scope="col">Total Qty</th>
      <th scope="col">Total Price</th>
      <th scope="col">Buyer</th>
      <th scope="col">Seller</th>
      <th scope="col">Updated Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['transactions'] as $res) { ?>
      <tr>
        <td><?php echo $res['id']; ?></td>
        <td><?php echo strtoupper($res['status']); ?></td>
        <td><a href="#" class="a-view" name="orders_view" value="<?php echo $res['invoice']; ?>"><?php echo $res['invoice']; ?></a></td>
        <td><a href="#" class="a-view" name="product_edit" value="<?php echo $res['product_id']; ?>"> <?php echo "(PID#" . $res['product_id'] . ") " . $res['name']; ?></a></td>
        <td class="text-end"><?php echo $res['qty']; ?></td>
        <td class="text-end"><?php echo number_format($res['total_price'], 2); ?></td>
        <td><a href="#" class="a-view" name="customer_view" value="<?php echo $res['buyer_id']; ?>"><?php echo $res['buyer_name']; ?></a></td>
        <td><a href="#" class="a-view" name="user_view" value="<?php echo $res['seller_id']; ?>"><?php echo $res['seller_name']; ?></a></td>
        <td><?php echo $res['date_updated']; ?></td>
        <td class="flex">
          <?php if (in_array($res['status_id'], array(1, 3, 5, 6))) { ?>
            <button type="button" class="btn btn-sm btn-warning" disabled> Approve <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-sm btn-dark" disabled> Reject <i class="fa fa-close"></i> </button>
            <button type="button" class="btn btn-sm btn-dark btn-view" name="transaction_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button>
          <?php } else { ?>
            <form method="post" name="update_transaction">
              <input type="hidden" name="id" value="<?php echo $res['id']; ?>">
              <button type="submit" class="btn btn-sm btn-warning" name="status" value="3"> Approve <i class="fa fa-check"></i> </button>
              <button type="submit" class="btn btn-sm btn-dark" name="status" value="6"> Reject <i class="fa fa-close"></i> </button>
            </form>
            <button type="button" class="btn btn-sm btn-dark btn-view" name="transaction_view" value="<?php echo $res['id']; ?>"> View <i class="fa fa-eye"></i> </button>
          <?php } ?>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<script>
  $('table').DataTable({
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"li><"col-sm-2"p>>',
    "order": []
  });
</script>