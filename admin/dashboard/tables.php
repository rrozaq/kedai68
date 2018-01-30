  <?php require_once 'layout/header.php'; ?>

    <?php
      $query = "SELECT * FROM siswa";
      $result = mysqli_query($link,$query);
     ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Basic Tables <small>basic table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>

                      <li><a href="tambah.php" ><i class="fa fa-plus"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Nama Siswa</th>
                          <th>alamat</th>
                          <th>Waktu di buat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i = 1; while ($row = mysqli_fetch_assoc($result)) {?>
                        <tr>
                          <th scope="row"><?=$i?></th>
                          <td><?=$row['nama_siswa'] ?></td>
                          <td><?=$row['alamat'] ?></td>
                          <td><?=$row['create_at'] ?></td>
                          <td><a href="#" class="btn btn-warning">Edit</a> <a href="delete.php?id=<?=$row['id_siswa']?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php $i++; }?>

                      </tbody>
                    </table>

                  </div>
                </div>
              </div>




              <div class="clearfix"></div>


      <?php require_once 'layout/footer.php'; ?>
