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
    [ 'url' => '#', 'display' => 'หน้าหลัก' ],
    [ 'url' => '#', 'display' => 'ติดต่อสอบถาม' ],
  ];
  $breadcrumbTitle = 'ติดต่อสอบถาม';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding section-07">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/21.jpg'); background-size: contain; background-position: bottom; background-color: #fff;"></div>
    <div class="container">
      <!-- Contact -->
      <div class="grid-column-1-3">
        <div class="ss-card-water bg-gradian-01 text-center">
          <div class="icon-wrapper bg-white bradius-round">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M19.9999 0C12.012 0 5.51343 6.49859 5.51343 14.4864C5.51343 24.3995 18.4774 38.9526 19.0294 39.5673C19.5478 40.1447 20.453 40.1437 20.9705 39.5673C21.5224 38.9526 34.4864 24.3995 34.4864 14.4864C34.4862 6.49859 27.9877 0 19.9999 0ZM19.9999 21.7749C15.981 21.7749 12.7115 18.5053 12.7115 14.4864C12.7115 10.4675 15.9811 7.19797 19.9999 7.19797C24.0187 7.19797 27.2883 10.4676 27.2883 14.4865C27.2883 18.5054 24.0187 21.7749 19.9999 21.7749Z" fill="#008FD3"/>
            </svg>
          </div>
          <div class="text-center">
            <h6 class="color-white fw-700 mt-5">กรมชลประทาน<br>กระทรวงเกษตรและสหกรณ์</h6>
            <p class="color-white sm mt-3">811 ถ.สามเสน แขวงถนนนครไชยศรี เขตดุสิต<br>กรุงเทพมหานคร 10300</p>
          </div>
        </div>
        <div class="ss-card-water bg-bluesky-02 text-center">
          <div class="icon-wrapper">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2030_34933)">
              <path d="M34.3311 32.1568L28.2906 26.1163C27.5641 25.3899 26.3864 25.3899 25.66 26.1163L23.1572 28.6191C18.25 25.8513 14.1493 21.7506 11.3815 16.8435L14.0542 14.1708C14.7807 13.4444 14.7807 12.2666 14.0542 11.5402L8.01364 5.49988C7.28715 4.77348 6.10942 4.77348 5.38301 5.49988L1.52567 9.35723L1.54059 9.37215C0.174965 10.4877 -0.384801 12.4179 0.279183 14.3203C4.39379 26.1111 13.8896 35.6068 25.6804 39.7214C27.4975 40.3556 29.3345 39.8747 30.4698 38.6408L30.4737 38.6447L34.3311 34.7874C35.0576 34.061 35.0576 32.8832 34.3311 32.1568Z" fill="white"/>
              <path d="M20.3867 10.6211C19.6624 10.6211 19.0752 11.2083 19.0752 11.9326C19.0752 12.6569 19.6623 13.2441 20.3867 13.2441C23.8987 13.2441 26.7561 16.1013 26.7561 19.6134C26.7561 20.3377 27.3432 20.9248 28.0675 20.9248C28.7918 20.9248 29.379 20.3377 29.379 19.6134C29.379 14.6551 25.345 10.6211 20.3867 10.6211Z" fill="white"/>
              <path d="M20.3867 5.28125C19.6624 5.28125 19.0752 5.86844 19.0752 6.59273C19.0752 7.31703 19.6623 7.90422 20.3867 7.90422C26.8436 7.90422 32.0966 13.1573 32.0966 19.614C32.0966 20.3383 32.6838 20.9255 33.4081 20.9255C34.1324 20.9255 34.7196 20.3383 34.7196 19.614C34.7196 11.7109 28.2899 5.28125 20.3867 5.28125Z" fill="white"/>
              <path d="M34.2554 5.74461C30.5508 2.04016 25.6255 0 20.3867 0C19.6624 0 19.0752 0.587188 19.0752 1.31148C19.0752 2.03578 19.6624 2.62297 20.3867 2.62297C29.7551 2.62297 37.3771 10.2448 37.3771 19.6134C37.3771 20.3377 37.9643 20.9248 38.6886 20.9248C39.4129 20.9248 40 20.3377 40 19.6134C40 14.3744 37.9599 9.44906 34.2554 5.74461Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_2030_34933">
              <rect width="40" height="40" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <div class="text-center">
            <h6 class="color-white fw-700 mt-5 pt-2">เบอร์โทรติดต่อ</h6>
            <p class="color-white sm mt-5">02-241-0020 ถึง 29</p>
          </div>
        </div>
        <div class="ss-card-water bg-bluesky-02 text-center">
          <div class="icon-wrapper">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M36.4844 16.4844H3.51562C1.57703 16.4844 0 18.0614 0 20V27.0312C0 28.9698 1.57703 30.5469 3.51562 30.5469H8.28125V29.375C8.28125 27.4364 9.85828 25.8594 11.7969 25.8594H28.2031C30.1417 25.8594 31.7188 27.4364 31.7188 29.375V30.5469H36.4844C38.423 30.5469 40 28.9698 40 27.0312V20C40 18.0614 38.423 16.4844 36.4844 16.4844ZM24.6875 22.3438C24.0403 22.3438 23.5156 21.8191 23.5156 21.1719C23.5156 20.5245 24.0403 20 24.6875 20C25.3347 20 25.8594 20.5245 25.8594 21.1719C25.8594 21.8191 25.3347 22.3438 24.6875 22.3438ZM29.375 22.3438C28.7278 22.3438 28.2031 21.8191 28.2031 21.1719C28.2031 20.5245 28.7278 20 29.375 20C30.0222 20 30.5469 20.5245 30.5469 21.1719C30.5469 21.8191 30.0222 22.3438 29.375 22.3438Z" fill="white"/>
              <path d="M25.8594 2.54102V7.10992H30.4283C29.9611 4.8175 28.1518 3.0082 25.8594 2.54102Z" fill="white"/>
              <path d="M10.625 2.42188C9.97727 2.42188 9.45312 2.94602 9.45312 3.59375V14.1406H30.5469V9.45312H24.6875C24.0398 9.45312 23.5156 8.92898 23.5156 8.28125V2.42188H10.625Z" fill="white"/>
              <path d="M28.2031 37.5781C28.8509 37.5781 29.375 37.054 29.375 36.4062V29.375C29.375 28.7273 28.8509 28.2031 28.2031 28.2031H11.7969C11.1491 28.2031 10.625 28.7273 10.625 29.375V36.4062C10.625 37.054 11.1491 37.5781 11.7969 37.5781H28.2031ZM15.3125 31.7188H24.6875C25.3352 31.7188 25.8594 32.2429 25.8594 32.8906C25.8594 33.5384 25.3352 34.0625 24.6875 34.0625H15.3125C14.6648 34.0625 14.1406 33.5384 14.1406 32.8906C14.1406 32.2429 14.6648 31.7188 15.3125 31.7188Z" fill="white"/>
            </svg>
          </div>
          <div class="text-center">
            <h6 class="color-white fw-700 mt-5 pt-2">โทรสาร</h6>
            <p class="color-white sm mt-5">02-243-0966</p>
          </div>
        </div>
        <div class="ss-card-water bg-bluesky-02 text-center">
          <div class="icon-wrapper">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_2030_34962)">
                <path d="M23.3429 24.5071C22.3477 25.1705 21.1918 25.5213 20 25.5213C18.8083 25.5213 17.6523 25.1705 16.6572 24.5071L0.266328 13.5795C0.175391 13.5189 0.0867969 13.4557 0 13.3907V31.2967C0 33.3497 1.66602 34.979 3.68227 34.979H36.3177C38.3706 34.979 39.9999 33.313 39.9999 31.2967V13.3906C39.913 13.4558 39.8242 13.5191 39.733 13.5798L23.3429 24.5071Z" fill="white"/>
                <path d="M1.56641 11.6302L17.9573 22.5579C18.5777 22.9716 19.2888 23.1784 19.9999 23.1784C20.7111 23.1784 21.4223 22.9715 22.0427 22.5579L38.4336 11.6302C39.4145 10.9767 40 9.88297 40 8.7025C40 6.67273 38.3487 5.02148 36.319 5.02148H3.68102C1.65133 5.02156 0 6.67281 0 8.70445C0 9.88297 0.585625 10.9767 1.56641 11.6302Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0_2030_34962">
                <rect width="40" height="40" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </div>
          <div class="text-center">
            <h6 class="color-white fw-700 mt-5 pt-2">อีเมล</h6>
            <p class="color-white sm mt-5">saraban@rid.go.th</p>
          </div>
        </div>
      </div>


      <!-- Contact Form -->
      <div class="form-inner-shadow">
        <div class="container">
          <h4 class="color-black fw-700 mb-5">ติดต่อสอบถาม</h4>
            <div class="content-wrapper pr-0 bg-right bg-white ovf-visible">
              <form class="form style-02 black-theme" action="action.php">
                <div class="grids">
                  <div class="grid sm-100">
                    <label class="fw-400 pl-4">หัวข้อ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input type="text" class="bradius-10" placeholder="กรุณาระบุหัวข้อ">
                    </div>
                  </div>
                  <div class="grid sm-50 mt-2">
                    <label class="fw-400 pl-4">ชื่อ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="bradius-10" type="text" placeholder="กรุณาระบุชื่อ">
                    </div>
                  </div>
                  <div class="grid sm-50 mt-2">
                    <label class="fw-400 pl-4">นามสกุล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input type="text" class="bradius-10" placeholder="กรุณาระบุนามสกุล">
                    </div>
                  </div>
                  <div class="grid sm-50 mt-2">
                    <label class="fw-400 pl-4">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input type="text" class="bradius-10" placeholder="กรุณาระบุหมายเลขโทรศัพท์">
                    </div>
                  </div>
                  <div class="grid sm-50 mt-2">
                    <label class="fw-400 pl-4">อีเมล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="bradius-10" type="text" placeholder="กรุณาระบุอีเมล">
                    </div>
                  </div>
                  <div class="grid sm-100 mt-2">
                    <label class="fw-400 pl-4">รายละเอียด <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <textarea class="bradius-10" rows="10" placeholder="กรุณาระบุข้อความ *"></textarea>     
                    </div>
                  </div>
                  <div class="grid sm-100 mt-2">
                    <label class="fw-400 pl-4">แนบไฟล์</label>
                    <div class="form-input">
                      <div class="upload-container style-02 bradius-round">
                        <div class="file-display">
                          <p id="fileName" class="sm color-gray-03">ยังไม่มีไฟล์</p>
                        </div>
                        <button type="button" class="upload-btn btn-white-theme btn btn-action btn-p bradius-1" style="min-width:10rem">
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
                  <div class="grid md-100 sm-100 mt-1 pt-5">
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
  </section>
  
  <?php
    $listResult= ['contact-success'];
    include_once('components/popup.php');
  ?>

  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

</body>

</html>