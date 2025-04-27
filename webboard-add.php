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
    ['url' => '#', 'display' => 'เว็บบอร์ด'],
  ];
  $breadcrumbTitle = 'เว็บบอร์ด';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding pt-4 section-17 pos-relative">
    <div class="pos-absolute bg-gradian-02 w-full h-full" style="top: 0;"></div>
    <div class="container">
      <div class="form-inner-shadow">
        <div class="container">
          <h4 class="color-black fw-700 mb-5">สร้างกระทู้ใหม่</h4>
          <p class="pos-relative text-left color-black fw-200">กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยเฉพาะที่มีเครื่องหมาย <span class="color-02">*</span></p>

          <div class="content-wrapper pr-0 bg-right bg-white ovf-visible">
            <form class="form style-02 black-theme" action="action.php">
              <div class="grids">
                <div class="grid sm-100">
                  <label class="fw-400">หัวข้อ <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <input type="text" placeholder="กรุณาระบุหัวข้อ">
                  </div>
                </div>
                <div class="grid sm-100 mt-5">
                  <label class="fw-400">หมวดหมู่กระทู้ <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <input class="validate-error" type="text" placeholder="กรุณาระบุหมวดหมู่กระทู้">
                  </div>
                  <!-- <p class="xs message-error text-danger mt-1 pl-4">กรุณาระบุหมวดหมู่กระทู้</p> -->
                </div>
                <div class="grid sm-100 mt-5">
                  <label class="fw-400">รายละเอียด <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <textarea rows="10" placeholder="กรุณาระบุข้อความ"></textarea>     
                  </div>
                </div>
                <div class="grid sm-100 mt-5">
                  <label class="fw-400">แนบไฟล์</label>
                  <div class="form-input">
                    <div class="upload-container style-02">
                      <div class="file-display">
                        <p id="fileName" class="sm color-gray-03">ยังไม่มีไฟล์</p>
                      </div>
                      <button type="button" class="upload-btn btn-white-theme btn btn-action btn-p" style="min-width:10rem">
                        อัปโหลดไฟล์
                      </button>
                      <input type="file" id="fileInput" style="display: none;" accept=".pdf, .jpg, .jpeg, .png, .gif">
                    </div>     
                    <p class="d-flex ai-center xs file-note color-gray-03 mt-1 pl-4">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18C4.02528 18 0 13.9744 0 9C0 4.02528 4.02564 0 9 0C13.9747 0 18 4.02564 18 9C18 13.9747 13.9743 18 9 18ZM9 1.40625C4.80259 1.40625 1.40625 4.80287 1.40625 9C1.40625 13.1974 4.80287 16.5938 9 16.5938C13.1974 16.5938 16.5938 13.1971 16.5938 9C16.5938 4.80259 13.1971 1.40625 9 1.40625Z" fill="#AEADAD"/>
                        <path d="M9 10.4609C8.61166 10.4609 8.29688 10.1461 8.29688 9.75781V5.22993C8.29688 4.8416 8.61166 4.52681 9 4.52681C9.38834 4.52681 9.70312 4.84163 9.70312 5.22997V9.75781C9.70312 10.1461 9.38834 10.4609 9 10.4609Z" fill="#AEADAD"/>
                        <path d="M9 11.3281C9.52424 11.3281 9.94922 11.7531 9.94922 12.2773C9.94922 12.8016 9.52424 13.2266 9 13.2266C8.47576 13.2266 8.05078 12.8016 8.05078 12.2773C8.05078 11.7531 8.47576 11.3281 9 11.3281Z" fill="#AEADAD"/>
                      </svg>
                      <span class="ml-2">อัปโหลดสูงสุด 5 ไฟล์ ขนาดไม่เกิน 5 MB</span>
                    </p>
                  </div>
                </div>
                <div class="grid sm-100 mt-5">
                  <img class="mr-2" src="public/assets/app/images/content/captcha.png" alt="Captcha">
                </div>
                <div class="grid md-100 sm-100 mt-1">
                  <div>
                    <label class="form-check ai-center form-check-container-02">
                      <input type="checkbox" class="form-check-input" id="checkAll">
                      <span class="checkmark"></span>
                      <div>
                        <p class="fw-400 pl-3">รับและความยินยอมตาม <a href="#" class="color-06 h-color-t">ข้อตกลงเกี่ยวกับการใช้งาน</a> และ 
                        <a href="#" class="color-06 h-color-t">นโยบายความเป็นส่วนตัว</a></p>
                      </div>
                    </label> 
                  </div>             
                </div>
              </div>
              <div class="btns ai-center h-full d-flex jc-start sm-jc-center sm-mt-4 mt-5 pt-5">
                <button class="btn btn-action  btn-white-theme md btn-p btn-popup-toggle bradius-10 mr-3" data-popup="86">
                  <p class="color-black-theme">ส่งแบบฟอร์ม</p>          
                </button> 
                <div class="btn btn-action  btn-white-theme md btn-cancel bradius-10">
                  <p class="color-black-theme">ล้างข้อมูล</p>          
                </div>           
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $listResult = ['report-file', 'report-file-success'];
  include_once('components/popup.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>