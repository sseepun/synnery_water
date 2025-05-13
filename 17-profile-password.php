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
              <label class="fw-400">รหัสผ่านใหม่</label>
              <div class="form-group mt-1 mb-3">
                <input type="password" id="password02" name="password" placeholder="รหัสผ่านใหม่">
                <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div><div class="dropdown-icon color-gray-03" style="pointer-events:auto;">
                  <em class="fa fa-eye-slash" id="togglePassword" data-toggle="password" data-target="#password02"></em>
                </div>
              </div>
              <div class="password-level level-1 mb-3">
                <div class="levels">
                  <div style="background-color: rgb(242, 242, 242);"></div><div style="background-color: rgb(242, 242, 242);"></div><div style="background-color: rgb(242, 242, 242);"></div>
                </div>
                <p class="sm fw-300">
                  การคาดเดาของรหัสผ่าน <span class="fw-600 text" style="display: none;"></span>
                </p>
              </div>

              <label class="fw-400">ยืนยันรหัสผ่าน</label>
              <div class="form-group mt-1 mb-3">
                <input type="password" id="password03" name="password" placeholder="ยืนยันรหัสผ่าน">
                <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div><div class="dropdown-icon color-gray-03" style="pointer-events:auto;">
                  <em class="fa fa-eye-slash" id="togglePassword" data-toggle="password" data-target="#password03"></em>
                </div>
              </div>
              <ul id="password-criteria" class="password-criteria">
                <li class="criteria-item" data-criteria="length">รหัสผ่านต้องมีความยาวอย่างน้อย 8 อักขระ</li>
                <li class="criteria-item" data-criteria="lowercase">รหัสผ่านต้องประกอบด้วยตัวอักษรพิมพ์เล็กอย่างน้อยหนึ่งตัว</li>
                <li class="criteria-item" data-criteria="uppercase">รหัสผ่านต้องประกอบด้วยตัวอักษรพิมพ์ใหญ่</li>
                <li class="criteria-item" data-criteria="digit">รหัสผ่านต้องประกอบด้วยตัวเลข</li>
                <li class="criteria-item" data-criteria="special">รหัสผ่านต้องประกอบด้วยอักขระพิเศษ (เช่น ,@#$%^&+=!)</li>
              </ul>

              <div class="grids mt-2">
                <div class="grid md-50 sm-100 mt-1">
                  <div class="d-flex sm-jc-center">
                    <img src="public/assets/app/images/content/captcha.png" alt="Captcha">            
                  </div>            
                </div>
                <div class="grid md-50 sm-100 mt-1">
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