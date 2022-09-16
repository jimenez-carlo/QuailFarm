<h2><i class="fa fa-cube"></i> Orders</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">Order#</th>
      <th scope="col">Status</th>
      <th scope="col">Total Qty</th>
      <th scope="col">Total Price</th>
      <th scope="col">Buyer</th>
      <th scope="col">Seller</th>
      <th scope="col">Updated Date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['orders'] as $res) { ?>
      <tr>
        <td><?php echo $res['invoice']; ?></td>
        <td><?php echo $res['status']; ?></td>
        <td class="text-end"><?php echo $res['qty']; ?></td>
        <td class="text-end"><?php echo number_format($res['total_price'], 2); ?></td>
        <td><a href="#" class="a-view" name="customer_view" value="<?php echo $res['buyer_id']; ?>"><?php echo $res['buyer_name']; ?></a></td>
        <td><a href="#" class="a-view" name="user_view" value="<?php echo $res['seller_id']; ?>"><?php echo $res['seller_name']; ?></a></td>
        <td><?php echo $res['date_updated']; ?></td>
        <td>
          <?php if (in_array($res['status_id'], array(1, 2))) { ?>
            <form method="post" name="update_order">
              <input type="hidden" name="id" value="<?php echo $res['invoice']; ?>">
              <button type="submit" class="btn btn-sm btn-warning" name="status" value="3"> Approve <i class="fa fa-check"></i> </button>
              <button type="submit" class="btn btn-sm btn-dark" name="status" value="6"> Reject <i class="fa fa-close"></i> </button>
              <button type="button" class="btn btn-sm btn-dark btn-view" name="orders_view" value="<?php echo $res['invoice']; ?>"> View <i class="fa fa-eye"></i> </button>
            </form>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-warning" disabled> Approve <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-sm btn-dark" disabled> Reject <i class="fa fa-close"></i> </button>
            <button type="button" class="btn btn-sm btn-dark btn-view" name="orders_view" value="<?php echo $res['invoice']; ?>"> View <i class="fa fa-eye"></i> </button>
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