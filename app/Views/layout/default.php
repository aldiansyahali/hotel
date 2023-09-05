<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Lavanya</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
  <!-- Place favicon.ico in the root directory -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- CSS here -->
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/magnific-popup.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/nice-select.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/flaticon.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/gijgo.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/slicknav.css">
  <link rel="stylesheet" href="<?= base_url() ?>/template/css/style.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  <header>
    <?= $this->include('layout/header') ?>
  </header>

  <div class="slider_area">
    <?= $this->renderSection('content')  ?>
  </div>

  <div class="about_area" id="about">
    <?= $this->include('layout/about') ?>
  </div>
  <!-- about_area_end -->

  <!-- offers_area_start -->
  <div class="offers_area" id="kamar">
    <?= $this->include('layout/kamar') ?>
  </div>
  <!-- offers_area_end -->

  <!-- footer -->
  <footer class="footer" id="footer">
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-6 col-lg-3">
            <div class="footer_widget">
              <h3 class="footer_title">
                Alamat
              </h3>
              <p class="footer_text"> Parkit 7, Beji, Depok, <br>
                Jawa Barat, Indonesia</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 col-lg-3">
            <div class="footer_widget">
              <h3 class="footer_title">
                Reservasi
              </h3>
              <p class="footer_text">1211-007<br>
                reservation@lavanya.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- link that opens popup -->

  <!-- form itself end-->
  <?= $this->include('layout/form') ?>
  <!-- form itself end -->

  <!-- JS here -->
  <script src="<?= base_url() ?>/template/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="<?= base_url() ?>/template/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="<?= base_url() ?>/template/js/popper.min.js"></script>
  <script src="<?= base_url() ?>/template/js/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/template/js/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>/template/js/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/template/js/ajax-form.js"></script>
  <script src="<?= base_url() ?>/template/js/waypoints.min.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.counterup.min.js"></script>
  <script src="<?= base_url() ?>/template/js/imagesloaded.pkgd.min.js"></script>
  <script src="<?= base_url() ?>/template/js/scrollIt.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.scrollUp.min.js"></script>
  <script src="<?= base_url() ?>/template/js/wow.min.js"></script>
  <script src="<?= base_url() ?>/template/js/nice-select.min.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.slicknav.min.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= base_url() ?>/template/js/plugins.js"></script>
  <script src="<?= base_url() ?>/template/js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="<?= base_url() ?>/template/js/contact.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.form.js"></script>
  <script src="<?= base_url() ?>/template/js/jquery.validate.min.js"></script>
  <script src="<?= base_url() ?>/template/js/mail-script.js"></script>

  <script src="<?= base_url() ?>/template/js/main.js"></script>

  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const roomTypeSelect = document.getElementById('tipe_kamar');
    const hargaKamarInput = document.getElementById('harga_kamar');
    const durasiInput = document.getElementById('durasi');
    const breakfastCheckbox = document.getElementById('flexCheckDefault');
    const totalBayarInput = document.getElementById('totalBayarInput');
    const hitungButton = document.getElementById('hitung');
    const tipeKamarSelect = document.getElementById('tipe_kamar');

    roomTypeSelect.addEventListener('change', function() {
      const selectedOption = roomTypeSelect.value;

      if (selectedOption === 'Standar') {
        hargaKamarInput.value = '500000';
      } else if (selectedOption === 'Deluxe') {
        hargaKamarInput.value = '1000000';
      } else if (selectedOption === 'Family') {
        hargaKamarInput.value = '1500000';
      } else {
        hargaKamarInput.value = '';
      }
    });

    hitungButton.addEventListener('click', function() {
      const tipeKamar = tipeKamarSelect.value;
      const durasi = parseInt(durasiInput.value);
      const breakfast = breakfastCheckbox.checked;

      let hargaKamar = 0;
      if (tipeKamar === 'Standar') {
        hargaKamar = 500000;
      } else if (tipeKamar === 'Deluxe') {
        hargaKamar = 1000000;
      } else if (tipeKamar === 'Family') {
        hargaKamar = 1500000;
      }

      let totalBayar = hargaKamar * durasi;
      if (durasi > 3) {
        totalBayar -= totalBayar * 0.1; // Diskon 10% untuk durasi lebih dari 3 hari
      }
      if (breakfast) {
        totalBayar += 80000; // Tambahan biaya breakfast
      }

      totalBayarInput.value = totalBayar;
    });

    document.getElementById('cancel').addEventListener('click', function() {
      resetForm(); // Panggil fungsi resetForm saat tombol "Cancel" diklik
      $.magnificPopup.close(); // Menutup popup menggunakan Magnific Popup
    });

    function resetForm() {
      const form = document.getElementById('test-form');

      // Reset nilai elemen-elemen formulir ke nilai default
      form.reset();
    }
  });
</script>

</body>

</html>