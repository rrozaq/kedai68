<?php require_once 'assets/layout/header.php';
$data = getcategory();
$menujoin = getmenujoin();
$gettesti = gettesti();
?>
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Kedai68 Journey</h1>
          <p class="header-p">I can’t believe that just one step out from crowded traffic.. come into a cozy place and having a tasty food, which surrounded by greenery and rice field view.. It’s so amazing..
Kedai 68 specialized in Indonesian food and Chinese food, with large variety of menu from appetizer, soup, vegetable, rice, noodle, grill, dessert and beverages. Ready to serve our valued customer for lunch and dinner, started from 11 AM to 9 PM.. Birthday, wedding or gathering party available..
All menus has cooked from fresh ingredients, fresh cook, fresh atmosphere.. keep healthy and tasty..
 </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">

        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->

  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">Fresh ingredients and Free MSG</p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <?php while ($row = mysqli_fetch_assoc($data)) {?>
            <li><a class="filter" data-filter=".<?php $name = $row['nama_kategori']; $name = str_replace('&', 'and', $name); echo str_replace(' ', '-', $name)?>"><?php echo $row['nama_kategori'] ?></a></li>
          <?php }?>
          </ul>
        </div>

        <div id="menu-wrapper">
          <?php while ($menu = mysqli_fetch_assoc($menujoin)) { ?>
          <div class="<?php $name = $menu['nama_kategori']; $name = str_replace('&', 'and', $name); echo str_replace(' ', '-', $name)?> menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="menu.php?menu=<?=$menu['id_menu']?>" data-meal-img="assets/img/<?=$menu['img']?>"><?=$menu['nama_menu']?></a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rp.<?=$menu['harga']?></span>
            </span>
            <span class="menu-subtitle"><?=substr($menu['des_menu'],0,150)?></span>
          </div>
        <?php } ?>

        </div>

      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- event -->
  <section id="testi">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h1 class="header-h">Our Happy Customers</h1>
            <p class="header-p"></p>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
              <div class="row">
                <div class="owl-carousel owl-theme col-sm-6 col-md-4">
                  <?php while ($row = mysqli_fetch_assoc($gettesti)) {?>
                  <div class="item">
                  <div class=" thumbnail">
                    <img src="assets/testi/<?=$row['img']?>" alt="...">
                    <div class="caption">
                      <h3><?=$row['name']?></h3>
                      <h5><?=$row['country']?></h5>
                      <p><?=$row['pesan']?></p>
                    </div>
                  </div>
                </div>
              <?php }?>
                </div>


<a style="margin-left:42%"  class="btn btn-lg btn-warning" data-toggle="modal" data-target="#testimodal"> Make Testimony</a>

      <!-- Modal Make Testimony -->
      <div class="modal fade " id="testimodal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Testimony</h4>
      </div>
      <div class="modal-body">
<form method="post" action="" enctype="multipart/form-data" id="testi">
              <input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required value="">
              <input type="text" name="country" id="country" class="form-control" placeholder="Input Your County" required value="">
              <textarea name="pesan" rows="8" id="pesan" class="form-control" placeholder="Input Your message" cols="80" required></textarea>

              <input type="file" name="img" id="img" placeholder="Your Photos" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" name="send" class="btn btn-warning send">Send</button>
      </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->






          </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Reserve</h1>
          <p class="header-p">Reserve Venue Now & Get The Best Deal From KEDAI 68 BALI
Special For Your Meeting, Party/ Another Memorable Events</p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+62 819-9956-0008 - <span class="contacts-sp">Phone Booking</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Sunday 11.00 AM - 09:00 PM</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Reserve</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->

  <?php require_once 'assets/layout/footer.php'; ?>
