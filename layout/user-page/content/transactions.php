<h2><i class="fa fa-file-text"></i> Transactions</h2>
<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Order#</th>
      <th scope="col">Status</th>
      <th scope="col">Product</th>
      <th scope="col">Qty</th>
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
        <td><?php echo $res['invoice']; ?></td>
        <td><?php echo strtoupper($res['status']); ?></td>
        <td><?php echo $res['name']; ?></td>
        <td class="text-end"><?php echo $res['qty']; ?></td>
        <td class="text-end"><?php echo $res['total_price']; ?></td>
        <td><?php echo $res['buyer_name']; ?></td>
        <td><?php echo $res['seller_name']; ?></td>
        <td><?php echo $res['date_updated']; ?></td>
        <td>
          <?php if ($res['status_id'] == 2) { ?>
            <button type="button" class="btn btn-sm btn-warning"> Approve <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-sm btn-dark"> Reject <i class="fa fa-close"></i> </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-warning" disabled> Approve <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-sm btn-dark" disabled> Reject <i class="fa fa-close"></i> </button>
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