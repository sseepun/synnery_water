<!DOCTYPE html>
<html lang="th">

<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>

<body class="loading">
  <?php include_once('layout/topnav.php'); ?>
  <?php
  $breadcrumb = [
    ['url' => '#', 'display' => 'หน้าหลัก'],
    ['url' => '#', 'display' => 'ติดต่อสอบถาม'],
  ];
  $breadcrumbTitle = 'ติดต่อสอบถาม';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding section-07">
    <div class="container">
      <div class="grids">
        <div class="grid md-60 sm-100">
          <h3 class="color-black fw-700 mb-3">ยกเลิกรับข่าวสาร</h3>
          <form class="form style-02 black-theme" action="action.php">
            <div class="grids">
              <div class="grid sm-100 mt-4 mb-5">
                <label class="fw-400 pl-4">อีเมล <span class="text-danger">*</span></label>
                <div class="form-input">
                  <input class="bradius-10" type="text" placeholder="กรุณาระบุอีเมล">
                </div>
              </div>
              <div class="grid sm-100 mt-5">
                <img class="mr-2" src="public/assets/app/images/content/captcha.png" alt="Captcha">
              </div>
            </div>
            <div class="d-flex fw-wrap jc-space-between ai-center mt-5 pt-5">
              <div class="ai-center h-full d-flex jc-start sm-jc-center sm-mt-4 mobile-order-2">
                <button class="btn btn-action  btn-white-theme md btn-p btn-popup-toggle bradius-10 mr-3" data-popup="86">
                  <p class="color-black-theme">ส่งแบบฟอร์ม</p>
                </button>
                <div class="btn btn-action  btn-white-theme md btn-cancel bradius-10">
                  <p class="color-black-theme">ล้างข้อมูล</p>
                </div>
              </div>
              <p class="fw-200 mobile-order-1">ต้องการรับข่าวสาร ? <a href="#" class="link fw-600">คลิก</a></p>
            </div>
          </form>
        </div>
        <div class="grid md-40 sm-100 text-right">
          <img class="mw-100 bradius-10" src="public/assets/app/images/content/53.jpg" alt="Content">
        </div>
      </div>
  </section>

  <?php
  $activePopup = 'contact-success';
  $listResult = ['unsubscribe-enews'];
  include_once('components/popup.php');
  ?>

  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

</body>

</html>