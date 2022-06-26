<h2><i class="fa fa-user-plus"></i> Product Edit</h2>
<form method="post" name="update_product" enctype="multipart/form-data">
  <input type="hidden" id="product_id" name="product_id" requireds value="<?php echo $product->id; ?>">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-user"></i> Product Details
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <label for="product_name" class="form-label">*Name</label>
            <input type="text" class="form-control form-control-sm" id="product_name" name="product_name" placeholder="Product Name" requireds value="<?php echo $product->name; ?>">
            <label for="price" class="form-label">*Price</label>
            <input type="number" class="form-control form-control-sm" id="price" name="price" placeholder="0.00" requireds value="<?php echo $product->price; ?>">
            <label for="description" class="form-label">*Description</label>
            <textarea class="form-control form-control-sm" id="description" name="description" rows="5" placeholder="Product description"><?php echo $product->description; ?></textarea>
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