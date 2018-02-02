<?php require_once 'layout/header.php';

$data = getcategory();



?>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
          <!-- Basic Table -->
          <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="card">
                      <div class="header">
                          <h2>
                              BASIC TABLES
                              <small>Basic example without any additional modification classes</small>
                          </h2>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">add</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="add_category">Add Category</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="body table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Category Name</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>

                                  <tr>
                                      <th scope="row"><?php echo $no; ?></th>
                                      <td><?php echo $row['nama_kategori']; ?></td>
                                      <td><a href="edit_category?id=<?php echo $row['id_kategori']; ?>" class="btn btn-info waves-effect">Edit</a> <a href="delete_category?id=<?php echo $row['id_kategori']; ?>" class="btn btn-danger waves-effect">Delete</a></td>

                                  </tr>
                                <?php $no++; } ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Basic Table -->
        </div>
    </div>
</section>


<?php require_once 'layout/footer.php';?>
