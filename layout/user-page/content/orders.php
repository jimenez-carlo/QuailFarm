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
        <td><?php echo strtoupper($data['statuses'][$res['status_id']]); ?></td>
        <td class="text-end"><?php echo $res['qty']; ?></td>
        <td class="text-end"><?php echo $res['total_price']; ?></td>
        <td><a href="#"><?php echo $res['buyer_name']; ?></a></td>
        <td><a href="#"><?php echo $res['seller_name']; ?></a></td>
        <td><?php echo $res['date_updated']; ?></td>
        <td>
          <?php if (in_array($res['status_id'], array(2, 3))) { ?>
            <button type="button" class="btn btn-sm btn-warning"> Approve <i class="fa fa-check"></i> </button>
            <button type="button" class="btn btn-sm btn-dark"> Reject <i class="fa fa-close"></i> </button>
            <button type="button" class="btn btn-sm btn-dark btn-view" name="orders_view" value="<?php echo $res['invoice']; ?>"> View <i class="fa fa-eye"></i> </button>
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

  $(document).ready(function() {
    $('.btn-view').click(function() {
      var page = $(this).attr('name');
      var id = $(this).attr('value');
      $(".result").html('');
      $("#content").load(base_url + 'module/page.php?page=' + page + '&id=' + id);
    });
  });
</script>