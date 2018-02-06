<?php
require_once 'layout/header.php';
if (isset($_GET['id'])) {
  $id_menus = $_GET['id'];
}


$cate = getcategory();

$menu = permenu($id_menus);

$data = mysqli_fetch_assoc($menu);


?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
          <!-- Basic Validation -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>Edit Category</h2>

                      </div>
                      <div class="body">
                          <form id="form_validation"  method="POST" enctype="multipart/form-data">
                            <?php if ($error != ""): ?>
                              <div class="alert alert-danger"><?=$error?></div>
                            <?php endif; ?>

                              <div class="form-group form-float">
                                  <div class="form-line <?php echo $classerror?>">
                                      <input type="text" class="form-control" name="name" value="<?=$data['nama_menu']?>" required>
                                      <input type="text" name="id_menus" hidden value="<?=$id_menus?>">
                                      <label class="form-label">Food name</label>
                                  </div>
                              </div>

                              <div class="form-group form-float">
                                <div class="form-line">
                                  <textarea name="description" cols="30" rows="5" class="form-control no-resize" required="" aria-required="true"><?=$data['des_menu']?></textarea>
                                    <label class="form-label">Description</label>
                                </div>
                              </div>
                              <div class="form-group form-float">
                                <div class="form-line">
                                  <select class="form-control show-tick" name="kategori" required>
                                        <option value="">-- Please select category --</option>
                                        <?php while ($row = mysqli_fetch_assoc($cate)) {?>
                                          <?php $check=""; if ($row['id_kategori'] == $data['id_kategori']) {
                                            $check = "selected";
                                          } ?>

                                        <option <?php echo $check; ?> value="<?=$row['id_kategori']?>"><?=$row['nama_kategori']?></option>
                                      <?php }?>
                                    </select>
                                </div>
                              </div>


                                  <div class="form-line <?php echo $classerror?>">
                                    <div class="input-group">
                                        <span class="input-group-addon">Rp.</span>
                                        <div class="form-line">
                                            <input type="text" placeholder="Price" value="<?=substr($data['harga'],0,2)?>" name="price" class="form-control date">
                                        </div>
                                        <span class="input-group-addon">.000</span>
                                    </div>
                                  </div>

                              <button class="btn btn-primary waves-effect" name="edit_menu" type="submit">SUBMIT</button>
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
