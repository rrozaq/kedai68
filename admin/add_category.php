<?php
require_once 'layout/header.php';

?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
          <!-- Basic Validation -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>Add Category</h2>

                      </div>
                      <div class="body">
                          <form id="form_validation" method="POST">
                              <div class="form-group form-float">
                                  <div class="form-line <?php echo $classerror?>">
                                      <input type="text" class="form-control" name="name" required>
                                      <?php if ($error != ""): ?>
                                        <label id="username-error" class="error" for="username"><?php echo $error ?></label>
                                      <?php endif; ?>
                                      <label class="form-label">Category Name</label>
                                  </div>
                              </div>
                              <button class="btn btn-primary waves-effect" name="add" type="submit">SUBMIT</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Basic Validation -->
        </div>
    </div>
</section>

<?php require_once 'layout/footer.php';?>
