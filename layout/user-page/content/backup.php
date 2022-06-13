<h2>Products</h2>

<table class="table table-sm table-striped table-hover table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Date Created</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $res) { ?>
      <tr>
        <td><?php echo $res['id']; ?></td>
        <td><img src="images/products/<?php echo $res['image']; ?>" style="width:100px;height:100px" /></td>
        <td><?php echo $res['name']; ?></td>
        <td><?php echo $res['price']; ?></td>
        <td><?php echo $res['date_created']; ?></td>
        <td>
          <button type="button" class="btn btn-sm btn-warning"> Edit <i class="fa fa-edit"></i> </button>
          <button type="button" class="btn btn-sm btn-danger"> Delete <i class="fa fa-trash"></i> </button>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
</div>
<!-- <div class="card-footer">
    </div>
  </div> -->