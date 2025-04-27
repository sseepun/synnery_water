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
          <h3 class="color-black fw-700 mb-3">แบบฟอร์มสมัครรับข่าวสาร</h3>
          <form class="form style-02 black-theme" action="action.php">
            <div class="grids">
              <div class="grid sm-50 mt-4">
                <label class="fw-400 pl-4">ชื่อ <span class="text-danger">*</span></label>
                <div class="form-input">
                  <input class="bradius-10" type="text" placeholder="กรุณาระบุชื่อ">
                </div>
              </div>
              <div class="grid sm-50 mt-4">
                <label class="fw-400 pl-4">นามสกุล <span class="text-danger">*</span></label>
                <div class="form-input">
                  <input type="text" class="bradius-10" placeholder="กรุณาระบุนามสกุล">
                </div>
              </div>
              <div class="grid sm-50 mt-4">
                <label class="fw-400 pl-4">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                <div class="form-input">
                  <input type="text" class="bradius-10" placeholder="กรุณาระบุหมายเลขโทรศัพท์">
                </div>
              </div>
              <div class="grid sm-50 mt-4">
                <label class="fw-400 pl-4">อีเมล <span class="text-danger">*</span></label>
                <div class="form-input">
                  <input class="bradius-10" type="text" placeholder="กรุณาระบุอีเมล">
                </div>
              </div>
              <div class="grid sm-100 mt-4 pb-3">
                <label class="fw-400 pl-4">เลือกประเภทของข่าวสารที่คุณสนใจ <span class="text-danger">*</span></label>
                <?php 
                $cateNews = [
                  'ข่าวสาร',
                  'คลังภาพ',
                  'วีดีโอ',
                  'เอกสาร',
                  'ปฏิทินกิจกรรม',
                  'วารสารออนไลน์',
                ];
                ?>
                <?php foreach ($cateNews as $key => $value): ?>
                  <div class="mini-box-toggle mt-2 ml-3">
                    <div class="content <?= $key == 0 ? 'active' : '' ?>">
                      <div class="wrapper">
                        <div class="title">
                          <div class="icon">
                            <svg width="15" height="18" viewBox="0 0 15 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M9.0766 2.13567C8.59395 1.57257 8.15956 1.07384 7.82171 0.65554C7.80562 0.623364 7.77344 0.607276 7.75736 0.591187C7.58039 0.446392 7.32297 0.478569 7.17818 0.65554C6.84032 1.07384 6.40594 1.57257 5.92329 2.13567C3.79963 4.59718 0.855469 8.0079 0.855469 10.8555C0.855469 12.6896 1.59553 14.3467 2.80216 15.5533C4.00878 16.7439 5.66588 17.5 7.49994 17.5C9.33401 17.5 10.9911 16.7599 12.1977 15.5533C13.4044 14.3467 14.1444 12.6896 14.1444 10.8555C14.1444 8.0079 11.2003 4.59718 9.0766 2.13567ZM11.6186 14.9581C10.5567 16.0199 9.10878 16.6795 7.49994 16.6795C5.89111 16.6795 4.44316 16.0199 3.38133 14.9741C2.33559 13.9284 1.67597 12.4644 1.67597 10.8555C1.67597 8.31358 4.50752 5.03156 6.55073 2.66658C6.88859 2.26437 7.21035 1.89434 7.49994 1.5404C7.78953 1.89434 8.1113 2.26437 8.44915 2.65049C10.4924 5.01547 13.3239 8.2814 13.3239 10.8394C13.3239 12.4483 12.6643 13.8962 11.6186 14.9581Z" fill="#008FD3"/>
                            </svg>
                          </div>
                          <p class="text"><?= $value ?></p>
                        </div>
                        <div class="btn-toggle">
                          <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.5 7L0.00480902 0.25L12.9952 0.250001L6.5 7Z" fill="#008FD3"></path>
                          </svg>
                        </div>
                      </div>
                      <div class="answer" <?= $key == 0 ? 'style="display: block;"' : '' ?>>
                        <?php for($i=1; $i<10; $i++): ?>
                          <label class="form-check style-02 ai-center form-check-container-02">
                            <input type="checkbox" class="form-check-input" id="myCheckbox<?= $i ?>">
                            <span class="checkmark"></span>
                            <div>
                              <span>หมวดหมู่ <?= $i ?></span>
                            </div>
                          </label>
                        <?php endfor; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="grid sm-100 mt-5">
                <img class="mr-2" src="public/assets/app/images/content/captcha.png" alt="Captcha">
              </div>
            </div>
            <div class="d-flex jc-space-between ai-center mt-5 pt-5">
              <div class="ai-center h-full d-flex jc-start sm-jc-center sm-mt-4">
                <button class="btn btn-action  btn-white-theme md btn-p btn-popup-toggle bradius-10 mr-3" data-popup="86">
                  <p class="color-black-theme">ส่งแบบฟอร์ม</p>
                </button>
                <div class="btn btn-action  btn-white-theme md btn-cancel bradius-10">
                  <p class="color-black-theme">ล้างข้อมูล</p>
                </div>
              </div>
              <p class="fw-200">ต้องการยกเลิกรับข่าวสาร ? <a href="#" class="link fw-600">คลิก</a></p>
            </div>
          </form>
        </div>
        <div class="grid md-40 sm-100 text-right">
          <img class="bradius-10" src="public/assets/app/images/content/33.jpg" alt="Content">
        </div>
      </div>
  </section>

  <?php
  $listResult = ['contact-success'];
  include_once('components/popup.php');
  ?>

  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

</body>

</html>