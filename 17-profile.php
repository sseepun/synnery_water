<!DOCTYPE html>
<html lang="th">

<head>
  <?php include_once('include/style.php'); ?>
</head>

<body class="loading">
  <div class="wrapper">
    <?php $activeMenu = 1; ?>
    <?php include_once('layout/topbar.php'); ?>

    <div class="content-page">
      <div class="content">
        <div class="box-card">
          <div class="box-title">
            <div class="pattern">
              <img src="public/assets/app/images/pattern/01.png" alt="Pattern">
            </div>
            ข้อมูลส่วนตัว
          </div>
          <div class="box-content">
            <form class="form style-02 black-theme" action="action.php">
              <div class="grids">
                <div class="grid md-25">
                  <label class="upload-container-round mt-4">
                    <img class="preview-img" id="previewImage" src="#" alt="Preview" style="display: none;">
                    <div class="upload-content" id="uploadContent">
                      <i class="fa fa-camera" style="font-size: 30px; margin-bottom: 10px;"></i>
                      <div class="upload-text">อัปโหลดรูปภาพโปรไฟล์</div>
                      <div class="upload-subtext">ประเภทไฟล์ที่รองรับ JPG , JPEG , PNG<br>ขนาดไม่เกิน 5 MB</div>
                    </div>
                    <input type="file" accept="image/png, image/jpeg" id="imageUpload">
                  </label>
                </div>
                <div class="grid md-75">
                  <div class="grids">
                    <div class="grid sm-50 xs-100 mt-2">
                      <label class="fw-400">ชื่อ</label>
                      <div class="form-input mt-2">
                        <input type="text" placeholder="กรุณาระบุชื่อ">
                      </div>
                    </div>
                    <div class="grid sm-50 xs-100 mt-2">
                      <label class="fw-400">นามสกุล</label>
                      <div class="form-input mt-2">
                        <input type="text" placeholder="กรุณาระบุนามสกุล">
                      </div>
                    </div>
                    <div class="grid sm-50 xs-100 mt-2">
                      <label class="fw-400">อีเมล</label>
                      <div class="form-input mt-2">
                        <input type="text" placeholder="กรุณาระบุอีเมล">
                      </div>
                    </div>
                    <div class="grid sm-50 xs-100 mt-2">
                      <label class="fw-400">หมายเลขติดต่อ</label>
                      <div class="form-input mt-2">
                        <input type="text" placeholder="กรุณาระบุหมายเลขติดต่อ">
                      </div>
                    </div>
                    <div class="grid sm-50 xs-100 mt-2">
                      <label class="fw-400">วันเกิด</label>
                      <div class="form-input mt-2">
                        <input type="text" id="#datepicker" class="date-picker form-control datepicker-input" placeholder="กรุณาระบุวันเกิด">
                        <div class="dropdown-icon">
                          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 2V5" stroke="#909090" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 2V5" stroke="#909090" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 9.08984H20.5" stroke="#909090" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 8.5V17C21 20 19.5 22 16 22H8C4.5 22 3 20 3 17V8.5C3 5.5 4.5 3.5 8 3.5H16C19.5 3.5 21 5.5 21 8.5Z" stroke="#909090" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.9955 13.6992H12.0045" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.29431 13.6992H8.30329" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M8.29431 16.6992H8.30329" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-50 xs-100 mt-2">
                      <label class="fw-400">หมายเลขติดต่อ</label>
                      <div class="form-groups mt-2" style="gap: 10px;">
                        <input type="radio" name="gender" id="female" class="gender-option" value="หญิง">
                        <label for="female" class="gender-label">หญิง</label>

                        <input type="radio" name="gender" id="male" class="gender-option" value="ชาย" checked>
                        <label for="male" class="gender-label">ชาย</label>
                      </div>
                    </div>
                    <div class="grid sm-50 xs-100 mt-5">
                      <img class="mr-2" src="public/assets/app/images/content/captcha.png" alt="Captcha">
                    </div>
                    <div class="grid sm-50 xs-100 mt-5 ai-center d-flex ">
                      <div class="btns ai-center d-flex jc-end sm-jc-center sm-mt-4">
                        <div class="btn btn-action  btn-white-theme md btn-cancel bradius-10 m-1">
                          <p class="color-black-theme">ยกเลิก</p>          
                        </div>     
                        <button class="btn btn-action  btn-white-theme md btn-p btn-popup-toggle bradius-10 m-1" data-popup="86">
                          <p class="color-black-theme">บันทึก</p>          
                        </button>       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('include/script.php'); ?>
  <script>
    document.getElementById('imageUpload').addEventListener('change', function(event) {
      const input = event.target;
      const file = input.files[0];
      const preview = document.getElementById('previewImage');
      const content = document.getElementById('uploadContent');

      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          preview.style.display = 'block';
          content.style.display = 'none';
        };
        reader.readAsDataURL(file);
      }
    });
  </script>
</body>

</html>