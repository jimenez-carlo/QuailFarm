<h2><i class="fa fa-plus"></i> Category Edit</h2>
<form method="post" name="update_category" class="col-md-6">
  <input type="hidden" id="category_id" value="<?php echo $category->id; ?>" name="category_id">
  <div class="card">
    <div class="card-header bg-dark text-warning">
      <i class="fa fa-exclamation-circle"></i> Category Details
    </div>
    <div class="card-body">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <label for="category_name" class="form-label">*Name</label>
            <input type="text" class="form-control form-control-sm" id="category_name" name="category_name" placeholder="Category Name" required value="<?php echo $category->name; ?>">
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