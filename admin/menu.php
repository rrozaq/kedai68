<?php require_once 'layout/header.php';

$data = getmenu();




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
                              Menu

                          </h2>
                          <ul class="header-dropdown m-r--5">
                              <li class="dropdown">
                                  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                      <i class="material-icons">add</i>
                                  </a>
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="add_menu">Add Menu</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <?php if ($error != null): ?>
                      <div class="alert alert-danger align-center"><?php echo $error ?></div>
                    <?php endif; ?>
                      <?php if ($succsess != null): ?>
                      <div class="alert alert-success align-center"><?php echo $succsess ?></div>
                    <?php endif; ?>
                      <div class="body table-responsive">
                          <table class="table">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Menu Name</th>
                                      <th class="">Image</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1; while ($row = mysqli_fetch_assoc($data)) { ?>

                                  <tr>
                                      <th scope="row"><?php echo $no; ?></th>
                                      <td><?php echo $row['nama_menu']; ?></td>
                                      <td><button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#<?php echo substr($row['nama_menu'],0,4)?>">Open</button></td>
                                      <td><a href="edit_menu?id=<?php echo $row['id_menu']; ?>" class="btn btn-info waves-effect">Edit</a> <a href="delete_menu?id=<?php echo $row['id_menu']; ?>" class="btn btn-danger waves-effect">Delete</a></td>

                                  </tr>
                                </div>
                                  <div class="modal fade" id="<?php echo substr($row['nama_menu'],0,4)?>" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="<?php echo substr($row['nama_menu'],0,4)?>"><?php echo $row['nama_menu']; ?></h4>
                                        </div>
                                        <div class="modal-body">
                                          <div class="body">
                                              <div class="row">
                                                <?php if (strlen($row['img']) == null): ?>

                                                      <a class="thumbnail">
                                                          <img src="http://placehold.it/500x300" class="img-responsive">
                                                      </a>
                                                <?php else: ?>
                                                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                      <a class="thumbnail">
                                                          <img src="images/<?php echo $row['img']; ?>" class="img-responsive">
                                                      </a>
                                                    </div>
                                                <?php endif; ?>
                                              </div>
                                          </div>
                                          <form class="form" action="" method="post" enctype="multipart/form-data">

                                            <input type="file" name="img" class="form-control-file" value="" accept="image/jpeg,image/x-png">
                                            <input type="text" name="id_menu" hidden value="<?php echo $row['id_menu']; ?>">
                                        </div>
                                        <div class="modal-footer">
                                          <input type="submit" name="add_img" class="btn btn-link waves-effect" value="SAVE CHANGES">
                                          <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                        </div>
                                      </form>
                                      </div>
                                    </div>
                                  </div>

                                <?php $no++; } ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <!-- #END# Basic Table -->
        </div>
</section>


<?php require_once 'layout/footer.php';?>
