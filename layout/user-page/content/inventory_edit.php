<h2><i class="fa fa-tags"></i> Product View</h2>


<br>
<div class="card">
  <div class="card-header bg-dark text-white">
    <i class="fa fa-history"></i> Restock History
  </div>
  <div class="card-body">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 mt-3">
          <table class="table table-sm table-striped table-hover table-bordered">
            <thead class="table-dark">
              <tr>
                <th scope="col">ID#</th>
                <th scope="col">Original Qty</th>
                <th scope="col">Re-stocked Qty</th>
                <th scope="col">New Qty</th>
                <th scope="col">Re-stocked By</th>
                <th scope="col">Date Created</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($product_history as $res) { ?>
                <tr>
                  <td><?php echo $res['id']; ?></td>
                  <td class="text-end"><span class="badge bg-secondary"><?php echo $res['original_qty']; ?></span></td>
                  <td class="text-end"><span class="badge <?php echo ($res['qty'] + $res['original_qty'] > $res['original_qty']) ? 'bg-success' : 'bg-danger'; ?>"><?php echo abs($res['qty']); ?><?php echo ($res['qty'] + $res['original_qty'] > $res['original_qty']) ? '+' : '-'; ?></span> </td>
                  <td class="text-end"><span class="badge <?php echo ($res['qty'] + $res['original_qty'] > $res['original_qty']) ? 'bg-success' : 'bg-danger'; ?>"><?php echo $res['qty'] + $res['original_qty']; ?></span></td>
                  <td><?php echo $res['created_by']; ?></td>
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
    dom: '<"top"<"left-col"B><"center-col"><"right-col"f>> <"row"<"col-sm-12"tr>><"row"<"col-sm-10"i><"col-sm-2"p>>',
    "order": []
  });
</script>