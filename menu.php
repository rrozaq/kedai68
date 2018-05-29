<?php require_once 'assets/layout/header.php';
if (empty($_GET['menu'])) {
  header('location:index.php');
}
$single = per_page($_GET['menu']);
$single = mysqli_fetch_assoc($single);

 ?>


  <!-- menu -->
  <section id="menu" class="section-padding">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php if (strlen($single['img'])>0 ): ?>
              <img width="300px" src="admin/images/<?=$single['img']?>" alt="Gambar makanan">
            <?php else: ?>
              <img src="assets/img/nf.png?>" alt="Gambar makanan">
            <?php endif; ?>
          </div>
          <div class="col-md-6">
            <h1><?=$single['nama_menu']?></h1>
            <p><?=$single['des_menu']?></p>
              <h5>Harga : <b>Rp.<?=$single['harga']?></b> </h5>
          </div>
        </div>
    </div>
  </section>
  <!--/ menu -->

  <?php require_once 'assets/layout/footer.php'; ?>
