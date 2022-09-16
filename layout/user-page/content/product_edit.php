<h2><i class="fa fa-tags"></i> Product Edit</h2>
<form method="post" name="update_product" enctype="multipart/form-data">
  <input type="hidden" id="product_id" name="product_id" requireds value="<?php echo $product->id; ?>">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-exclamation-circle"></i> Product Details
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">*Name</label>
            <input type="text" class="form-control form-control-sm" id="product_name" name="product_name" placeholder="Product Name" requireds value="<?php echo $product->name; ?>">
            <label for="product_name" class="form-label">*Category</label>
            <select class="form-select form-select-sm" aria-label=".form-select-lg example" id="category" name="category" requireds style="width: 100%; disabled">
              <?php foreach ($category_list as $res) {
                if ($product->category_id == $res['id']) {
                  echo '<option value="' . $res['id'] . '" selected>' . $res['category'] . '</option>';
                } else {
                  echo '<option value="' . $res['id'] . '">' . $res['category'] . '</option>';
                }
              } ?>
            </select>
            <label for="price" class="form-label">*Price</label>
            <input type="number" class="form-control form-control-sm" id="price" name="price" placeholder="0.00" requireds value="<?php echo $product->price; ?>">
            <label for="description" class="form-label">*Description</label>
            <textarea class="form-control form-control-sm" id="description" name="description" rows="3" placeholder="Product description"><?php echo $product->description; ?></textarea>
          </div>

          <div class="col-md-6" style="display: flex;flex-direction:column">
            <label for="image" class="form-label">*Image</label>
            <img src="images/products/<?php echo $product->image; ?>" alt="" style="width:200px;height:200px;align-self: center;" id="preview">
            <input type="file" class="form-control form-control-sm" id="image" name="image" accept="image/*">
          </div>

          <div class="col-md-12 mt-3">
            <div class="pull-right">
              <button type="submit" class="btn btn-sm btn-dark" name="type" value="delete"> Delete <i class="fa fa-trash"></i></button>
              <button type="submit" class="btn btn-sm btn-warning" name="type" value="update">Update <i class="fa fa-save"></i></button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</form>
<script>
  inputImage = document.getElementById('image');
  preview = document.getElementById('preview');
  inputImage.onchange = evt => {
    const [file] = inputImage.files
    if (file && file['type'].split('/')[0] === 'image') {
      preview.src = URL.createObjectURL(file)
    } else {
      preview.src = 'images/products/default.png';
    }
  }
</script>