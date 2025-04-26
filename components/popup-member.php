<!-- Login -->
<div class="popup-container size-02 member-popup <?= $activePopup == 'login' ? 'active' : '' ?>" data-popup="100">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/29.jpg');"></div>
        <!-- เข้าสู่ระบบ -->
        <?php if(in_array('login', $listResult)) {?>
          <h4 class="pos-relative fw-600 text-center mt-3 color-black font-mitr color-white-theme">เข้าสู่ระบบ</h4>
          <p class="pos-relative text-center color-black fw-200">หากยังไม่ได้เป็นสมาชิก <span class="p xs c-pointer color-p color-03 fw-400 btn-popup-toggle a link" data-popup="83">ลงทะเบียนที่นี่</span></p>
          <form id="login-form" class="mt-1 pos-relative" method="get">
            <div class="grids">
              <div class="grid sm-100 mt-0">
                <div class="form-group style-03">
                  <label class="fw-400" for="username">อีเมล/ชื่อผู้ใช้งาน</label>
                  <input type="text" id="username" class="mt-1" placeholder="กรอกอีเมล/ชื่อผู้ใช้งาน">
                </div>
                <p class="sm" id="username-error" style="color:#FF0000; display:none;">กรุณากรอกชื่อผู้ใช้งานหรืออีเมลที่ถูกต้อง</p>
              </div>
              <div class="grid sm-100 mt-2">
                <div class="form-group pos-relative">
                  <label class="fw-400" for="password">รหัสผ่าน</label>
                  <input type="password" id="password" class="mt-1" placeholder="รหัสผ่าน">
                  <div class="dropdown-icon color-gray-03 color-black-theme" style="pointer-events:auto;">
                    <em class="fa fa-eye-slash" id="togglePassword" data-toggle="password" data-target="#password"></em>
                  </div>
                </div>
                <p class="sm" id="password-error" style="color:#FF0000; display: none;">รหัสผ่านไม่ถูกต้อง</p>
                <p class="mt-2 mb-2">หากคุณลืมรหัสผ่าน
                  <span class="p xs c-pointer color-blue-01 fw-400 btn-popup-toggle a link" data-popup="102">คลิกที่นี่</span>
                </p>
              </div>
              <div class="grid md-50 sm-100 mt-1">
                <div class="d-flex sm-jc-center">
                  <img src="public/assets/app/images/content/captcha.png" alt="Captcha">
                </div>
                <p class="xs message-error text-danger ml-1">กรุณายืนยันตัวตน</p>
              </div>
              <div class="grid md-50 sm-100 mt-1">
                <div class="btns ai-center h-full d-flex jc-end sm-jc-center sm-mt-4">
                  <button type="submit" class="btn btn-white-theme btn-action md btn-p bradius-round">
                    <p>เข้าสู่ระบบ</p>
                  </button>
                </div>
              </div>
            </div>
          </form>

          <div class="ss-sep-03 black-theme mt-6">
            <p class="color-p fw-500">หรือเข้าสู่ระบบผ่าน</p>
          </div>
          <div class="btns social-group-01 jc-center pos-relative">
            <div class="btn btn-action bcolor-white-theme style-02 btn-gg p-2 bradius-round">
              <div class="d-flex ai-center">
                <div class="icon d-flex ai-center">
                  <svg class="pattern" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="white"/>
                    <g clip-path="url(#clip0_2174_83175)">
                      <path d="M19.9711 22.6706V19.5282H30.8387C30.9449 20.0755 31 20.7233 31 21.4248C31 23.7823 30.339 26.6975 28.2066 28.7743C26.1333 30.8778 23.4845 32 19.9751 32C13.4697 32 8 26.8375 8 20.5C8 14.1625 13.4697 9 19.9751 9C23.574 9 26.1372 10.3762 28.063 12.1692L25.787 14.3858C24.4061 13.1237 22.5343 12.1424 19.9711 12.1424C15.2214 12.1424 11.5065 15.8722 11.5065 20.5C11.5065 25.1278 15.2214 28.8576 19.9711 28.8576C23.0517 28.8576 24.8064 27.652 25.9306 26.5567C26.8424 25.6683 27.4424 24.3995 27.6785 22.6668L19.9711 22.6706Z" fill="#A10000"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2174_83175">
                      <rect width="23" height="23" fill="white" transform="translate(8 9)"/>
                    </clipPath>
                    </defs>
                  </svg>
                </div>
                <span class="ml-2 fw-400">เข้าสู่ระบบผ่านบัญชี Google</span>
              </div>
            </div>
            <div class="btn btn-action bcolor-white-theme style-02 btn-fb p-2 bradius-round">
              <div class="icon d-flex ai-center">
                <svg class="pattern" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2174_83183)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9355 0.609375C23.5412 0.650521 26.7987 1.5367 29.7078 3.26791C32.5822 4.96457 34.9733 7.37028 36.6524 10.255C38.3731 13.1816 39.2539 16.4588 39.2949 20.0865C39.1927 25.05 37.6272 29.2894 34.5983 32.8045C31.5694 36.3197 27.6901 38.4944 23.6743 39.328V25.4118H27.4709L28.3295 19.9431H22.5805V16.3612C22.5486 15.6186 22.7834 14.8892 23.2426 14.3047C23.7023 13.7186 24.5119 13.4106 25.6714 13.3806H29.143V8.59005C29.0932 8.57403 28.6206 8.51065 27.7251 8.39993C26.7095 8.2811 25.6882 8.21764 24.6657 8.20981C22.3515 8.22048 20.5212 8.87328 19.175 10.1682C17.8287 11.4627 17.141 13.3357 17.1118 15.787V19.9431H12.7368V25.4118H17.1118V39.328C12.181 38.4944 8.30166 36.3197 5.27275 32.8045C2.24384 29.2893 0.678375 25.05 0.576172 20.0865C0.617063 16.4586 1.49789 13.1815 3.21864 10.255C4.89776 7.37028 7.28887 4.96457 10.1633 3.26791C13.0723 1.53703 16.3297 0.650854 19.9355 0.609375Z" fill="white"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_2174_83183">
                    <rect width="40" height="40" fill="white"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <div class="btn btn-action bcolor-white-theme style-02 btn-line p-2 bradius-round">
              <div class="icon d-flex ai-center">
                <svg class="pattern" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95433 31.0457 0 20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40ZM19.9965 8.37488C26.5905 8.37488 31.9712 12.507 32.2693 17.6931C32.2896 18.011 32.2936 18.3298 32.2811 18.6481C32.2637 18.8976 32.2313 19.1458 32.1842 19.3914C32.0299 20.3368 31.712 21.2479 31.2447 22.084C31.0247 22.4808 29.9473 23.991 29.6167 24.3887C27.8006 26.5768 24.7586 29.1023 19.672 31.5569C19.5643 31.6092 19.4446 31.6316 19.3253 31.6219C19.206 31.6122 19.0915 31.5707 18.9937 31.5017C18.8958 31.4327 18.8183 31.3388 18.7691 31.2297C18.7199 31.1206 18.7008 31.0003 18.7139 30.8813L18.9701 28.5743C18.98 28.4869 18.9724 28.3984 18.9479 28.3139C18.9234 28.2294 18.8825 28.1505 18.8274 28.0819C18.7723 28.0133 18.7042 27.9562 18.627 27.914C18.5498 27.8718 18.4651 27.8452 18.3776 27.8359C12.3568 27.2057 7.71005 23.1085 7.71005 18.1475C7.71042 12.7501 13.2112 8.37488 19.9965 8.37488Z" fill="white"/>
                  <path d="M12.5374 20.9422H15.0512C15.2179 20.9422 15.3777 20.876 15.4956 20.7582C15.6134 20.6403 15.6796 20.4805 15.6796 20.3139C15.6796 20.1472 15.6134 19.9874 15.4956 19.8695C15.3777 19.7517 15.2179 19.6855 15.0512 19.6855H13.1656V15.5689C13.1656 15.4023 13.0994 15.2424 12.9815 15.1246C12.8637 15.0068 12.7038 14.9406 12.5372 14.9406C12.3705 14.9406 12.2107 15.0068 12.0929 15.1246C11.975 15.2424 11.9088 15.4023 11.9088 15.5689V20.3137C11.9088 20.4804 11.975 20.6403 12.0929 20.7581C12.2108 20.876 12.3707 20.9422 12.5374 20.9422Z" fill="white"/>
                  <path d="M19.1045 20.9422C19.2712 20.9422 19.4311 20.876 19.5489 20.7581C19.6668 20.6403 19.733 20.4804 19.733 20.3137V17.4326C19.733 17.4326 22.281 20.7349 22.3191 20.7705C22.4338 20.8798 22.5858 20.9412 22.7442 20.9421C22.9145 20.9377 23.0763 20.8668 23.1949 20.7444C23.3135 20.6221 23.3794 20.4582 23.3785 20.2878V15.5689C23.3765 15.4035 23.3094 15.2456 23.1917 15.1294C23.0741 15.0131 22.9153 14.9479 22.7499 14.9479C22.5845 14.9479 22.4258 15.0131 22.3081 15.1294C22.1904 15.2456 22.1233 15.4035 22.1213 15.5689V18.4675C22.1213 18.4675 19.6114 15.1939 19.5732 15.1509C19.5117 15.0817 19.4355 15.0269 19.3503 14.9907C19.265 14.9544 19.1728 14.9375 19.0802 14.9412C18.9149 14.9517 18.7599 15.0255 18.6475 15.1472C18.535 15.2689 18.4737 15.4291 18.4762 15.5948V20.3137C18.4762 20.4803 18.5424 20.6402 18.6602 20.7581C18.778 20.8759 18.9378 20.9422 19.1045 20.9422Z" fill="white"/>
                  <path d="M16.7677 20.9422H17.0425C17.107 20.9422 17.1709 20.9295 17.2304 20.9048C17.29 20.8801 17.3442 20.8438 17.3898 20.7982C17.4354 20.7526 17.4715 20.6984 17.4962 20.6388C17.5208 20.5792 17.5335 20.5153 17.5335 20.4508V15.4314C17.5335 15.3012 17.4817 15.1763 17.3897 15.0842C17.2976 14.9921 17.1727 14.9404 17.0425 14.9404H16.7677C16.6375 14.9404 16.5126 14.9921 16.4205 15.0842C16.3284 15.1763 16.2766 15.3012 16.2766 15.4314V20.4508C16.2766 20.5153 16.2893 20.5792 16.3139 20.6388C16.3386 20.6984 16.3748 20.7526 16.4204 20.7982C16.466 20.8438 16.5201 20.8801 16.5797 20.9048C16.6393 20.9295 16.7032 20.9422 16.7677 20.9422Z" fill="white"/>
                  <path d="M24.9489 20.9422H27.4629C27.6296 20.9422 27.7894 20.876 27.9072 20.7582C28.0251 20.6403 28.0913 20.4805 28.0913 20.3139C28.0913 20.1472 28.0251 19.9874 27.9072 19.8695C27.7894 19.7517 27.6296 19.6855 27.4629 19.6855H25.5773V18.5699H27.4627C27.6281 18.5679 27.7861 18.5007 27.9023 18.3831C28.0186 18.2654 28.0837 18.1067 28.0837 17.9413C28.0837 17.7759 28.0186 17.6171 27.9023 17.4994C27.7861 17.3818 27.6281 17.3147 27.4627 17.3127H25.5773V16.1971H27.4627C27.6293 16.1971 27.7891 16.1309 27.9069 16.0131C28.0247 15.8953 28.0909 15.7355 28.0909 15.5689C28.0909 15.4023 28.0247 15.2425 27.9069 15.1247C27.7891 15.0069 27.6293 14.9407 27.4627 14.9407H24.9489C24.7823 14.9408 24.6225 15.007 24.5047 15.1248C24.3869 15.2426 24.3207 15.4023 24.3207 15.5689V20.3137C24.3207 20.3962 24.3369 20.4779 24.3684 20.5542C24.4 20.6304 24.4463 20.6997 24.5046 20.7581C24.5629 20.8164 24.6322 20.8627 24.7084 20.8943C24.7846 20.9259 24.8664 20.9422 24.9489 20.9422Z" fill="white"/>
                </svg>
              </div>
            </div>
          </div>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <img class="pattern-01" src="../public/assets/app/images/pattern/quantity.png" alt="pattern">
  </div>
</div>


<!-- Register -->
<div class="popup-container size-02 member-popup <?= $activePopup == 'register' ? 'active' : '' ?>" data-popup="101">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/29.jpg');"></div>
        <!-- สมัครสมาชิก -->
        <?php if(in_array('register', $listResult)) {?>
          <h4 class="pos-relative fw-600 text-center mt-3 color-black font-mitr color-white-theme">สมัครสมาชิก</h4>
          <p class="pos-relative text-center color-black fw-200">หากยังไม่ได้เป็นสมาชิก <span class="p xs c-pointer color-p fw-400 btn-popup-toggle a link" data-popup="100">เข้าสู่ระบบที่นี่</span> <span class="p xs color-p fw-200">|</span> <span class="p xs c-pointer color-p fw-400 btn-popup-toggle a link" data-popup="xx">ยกเลิกรับข่าวสาร</span></p>

          <form class="mt-5 pos-relative" method="get">
            <div class="grids">
              <div class="grid sm-50 mt-3">
                <div class="form-input">
                  <label class="fw-400" for="username">ชื่อผู้ใช้งาน</label>
                  <input type="text" id="username" placeholder="กรอกชื่อผู้ใช้งาน">
                </div>
              </div>
              <div class="grid sm-50 mt-3">
                <div class="form-input">
                  <label class="fw-400" for="lastname">นามสกุลผู้ใช้งาน</label>
                  <input type="text" id="lastname" placeholder="กรอกนามสกุลผู้ใช้งาน">
                </div>
              </div>
              <div class="grid sm-50 mt-3">
                <div class="form-input">
                  <label class="fw-400" for="phone">หมายเลขติดต่อ</label>
                  <input type="text" id="phone" placeholder="กรอกหมายเลขติดต่อ">
                </div>
              </div>
              <div class="grid sm-50 mt-3">
                <div class="form-input">
                  <label class="fw-400" for="email">อีเมล</label>
                  <input type="email" id="email" placeholder="กรอกอีเมล">
                </div>
              </div>
              <div class="grid sm-50 mt-3">
                <div class="form-group mt-0 pos-relative">
                  <label class="fw-400" for="password02">รหัสผ่าน</label>
                  <input type="password" id="password02" placeholder="กรอกรหัสผ่าน">
                  <div class="dropdown-icon color-gray-03" style="pointer-events:auto;">
                    <em class="fa fa-eye-slash" id="togglePassword"  data-toggle="password" data-target="#password02"></em>
                  </div>
                </div>
                <div class="password-level level-1 mb-3">
                  <div class="levels">
                    <div></div><div></div><div></div>
                  </div>
                  <p class="sm fw-300">
                    การคาดเดาของรหัสผ่าน <span class="fw-600 text">ง่าย</span>
                  </p>
                </div>
              </div>
              <div class="grid sm-50 mt-3">
                <div class="form-group mt-0 pos-relative">
                  <label class="fw-400" for="password02">ยืนยันรหัสผ่าน</label>
                  <input type="password" id="password1" placeholder="กรอกยืนยันรหัสผ่าน">
                  <div class="dropdown-icon color-gray-03" style="pointer-events:auto;">
                    <em class="fa fa-eye-slash" id="togglePassword" data-toggle="password" data-target="#password1"></em>
                  </div>
                </div>
              </div>
              <div class="grid sm-100 mt-0 xs-mt-1">
                <label class="form-check style-05 ai-center form-check-container-02">
                  <input type="checkbox" class="form-check-input" id="checkAll">
                  <span class="checkmark bg-white-theme"></span>
                  <div class="ml-2">
                    <p class="fw-300 color-gray-03">ข้าพเจ้ายอมรับและได้อ่านข้อความใน 
                      <a href="#" class="color-p h-color-t border-bottom-1 bcolor-p fw-400">ข้อตกลงและเงื่อนไข</a>
                      นี้โดยละเอียดแล้ว
                    </p>
                  </div>
                </label>
              </div>
              <div class="grid md-50 sm-100 mt-3">
                <div class="d-flex sm-jc-center">
                  <img src="public/assets/app/images/content/captcha.png" alt="Captcha">
                </div>
              </div>
              <div class="grid md-50 sm-100 mt-3">
                <div class="btns ai-center h-full d-flex jc-end sm-jc-center sm-mt-4">
                  <div class="btn btn-action btn-white-theme md btn-cancel mr-1 bradius-round">
                    <p class="color-black-theme">ยกเลิก</p>          
                  </div>
                  <button class="btn btn-action btn-white-theme md btn-p btn-popup-toggle bradius-round">
                    <p class="color-black-theme">สมัครสมาชิก</p>          
                  </button>            
                </div>
              </div>
            </div>
          </form>

          <div class="ss-sep-03 black-theme mt-6">
            <p class="color-p fw-500">หรือเข้าสู่ระบบผ่าน</p>
          </div>
          <div class="btns social-group-01 jc-center pos-relative">
            <div class="btn btn-action bcolor-white-theme style-02 btn-gg p-2 bradius-round">
              <div class="d-flex ai-center">
                <div class="icon d-flex ai-center">
                  <svg class="pattern" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="20" fill="white"/>
                    <g clip-path="url(#clip0_2174_83175)">
                      <path d="M19.9711 22.6706V19.5282H30.8387C30.9449 20.0755 31 20.7233 31 21.4248C31 23.7823 30.339 26.6975 28.2066 28.7743C26.1333 30.8778 23.4845 32 19.9751 32C13.4697 32 8 26.8375 8 20.5C8 14.1625 13.4697 9 19.9751 9C23.574 9 26.1372 10.3762 28.063 12.1692L25.787 14.3858C24.4061 13.1237 22.5343 12.1424 19.9711 12.1424C15.2214 12.1424 11.5065 15.8722 11.5065 20.5C11.5065 25.1278 15.2214 28.8576 19.9711 28.8576C23.0517 28.8576 24.8064 27.652 25.9306 26.5567C26.8424 25.6683 27.4424 24.3995 27.6785 22.6668L19.9711 22.6706Z" fill="#A10000"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_2174_83175">
                      <rect width="23" height="23" fill="white" transform="translate(8 9)"/>
                    </clipPath>
                    </defs>
                  </svg>
                </div>
                <span class="ml-2 fw-400">เข้าสู่ระบบผ่านบัญชี Google</span>
              </div>
            </div>
            <div class="btn btn-action bcolor-white-theme style-02 btn-fb p-2 bradius-round">
              <div class="icon d-flex ai-center">
                <svg class="pattern" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_2174_83183)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9355 0.609375C23.5412 0.650521 26.7987 1.5367 29.7078 3.26791C32.5822 4.96457 34.9733 7.37028 36.6524 10.255C38.3731 13.1816 39.2539 16.4588 39.2949 20.0865C39.1927 25.05 37.6272 29.2894 34.5983 32.8045C31.5694 36.3197 27.6901 38.4944 23.6743 39.328V25.4118H27.4709L28.3295 19.9431H22.5805V16.3612C22.5486 15.6186 22.7834 14.8892 23.2426 14.3047C23.7023 13.7186 24.5119 13.4106 25.6714 13.3806H29.143V8.59005C29.0932 8.57403 28.6206 8.51065 27.7251 8.39993C26.7095 8.2811 25.6882 8.21764 24.6657 8.20981C22.3515 8.22048 20.5212 8.87328 19.175 10.1682C17.8287 11.4627 17.141 13.3357 17.1118 15.787V19.9431H12.7368V25.4118H17.1118V39.328C12.181 38.4944 8.30166 36.3197 5.27275 32.8045C2.24384 29.2893 0.678375 25.05 0.576172 20.0865C0.617063 16.4586 1.49789 13.1815 3.21864 10.255C4.89776 7.37028 7.28887 4.96457 10.1633 3.26791C13.0723 1.53703 16.3297 0.650854 19.9355 0.609375Z" fill="white"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_2174_83183">
                    <rect width="40" height="40" fill="white"/>
                  </clipPath>
                  </defs>
                </svg>
              </div>
            </div>
            <div class="btn btn-action bcolor-white-theme style-02 btn-line p-2 bradius-round">
              <div class="icon d-flex ai-center">
                <svg class="pattern" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.95433 31.0457 0 20 0C8.95433 0 0 8.95433 0 20C0 31.0457 8.95433 40 20 40ZM19.9965 8.37488C26.5905 8.37488 31.9712 12.507 32.2693 17.6931C32.2896 18.011 32.2936 18.3298 32.2811 18.6481C32.2637 18.8976 32.2313 19.1458 32.1842 19.3914C32.0299 20.3368 31.712 21.2479 31.2447 22.084C31.0247 22.4808 29.9473 23.991 29.6167 24.3887C27.8006 26.5768 24.7586 29.1023 19.672 31.5569C19.5643 31.6092 19.4446 31.6316 19.3253 31.6219C19.206 31.6122 19.0915 31.5707 18.9937 31.5017C18.8958 31.4327 18.8183 31.3388 18.7691 31.2297C18.7199 31.1206 18.7008 31.0003 18.7139 30.8813L18.9701 28.5743C18.98 28.4869 18.9724 28.3984 18.9479 28.3139C18.9234 28.2294 18.8825 28.1505 18.8274 28.0819C18.7723 28.0133 18.7042 27.9562 18.627 27.914C18.5498 27.8718 18.4651 27.8452 18.3776 27.8359C12.3568 27.2057 7.71005 23.1085 7.71005 18.1475C7.71042 12.7501 13.2112 8.37488 19.9965 8.37488Z" fill="white"/>
                  <path d="M12.5374 20.9422H15.0512C15.2179 20.9422 15.3777 20.876 15.4956 20.7582C15.6134 20.6403 15.6796 20.4805 15.6796 20.3139C15.6796 20.1472 15.6134 19.9874 15.4956 19.8695C15.3777 19.7517 15.2179 19.6855 15.0512 19.6855H13.1656V15.5689C13.1656 15.4023 13.0994 15.2424 12.9815 15.1246C12.8637 15.0068 12.7038 14.9406 12.5372 14.9406C12.3705 14.9406 12.2107 15.0068 12.0929 15.1246C11.975 15.2424 11.9088 15.4023 11.9088 15.5689V20.3137C11.9088 20.4804 11.975 20.6403 12.0929 20.7581C12.2108 20.876 12.3707 20.9422 12.5374 20.9422Z" fill="white"/>
                  <path d="M19.1045 20.9422C19.2712 20.9422 19.4311 20.876 19.5489 20.7581C19.6668 20.6403 19.733 20.4804 19.733 20.3137V17.4326C19.733 17.4326 22.281 20.7349 22.3191 20.7705C22.4338 20.8798 22.5858 20.9412 22.7442 20.9421C22.9145 20.9377 23.0763 20.8668 23.1949 20.7444C23.3135 20.6221 23.3794 20.4582 23.3785 20.2878V15.5689C23.3765 15.4035 23.3094 15.2456 23.1917 15.1294C23.0741 15.0131 22.9153 14.9479 22.7499 14.9479C22.5845 14.9479 22.4258 15.0131 22.3081 15.1294C22.1904 15.2456 22.1233 15.4035 22.1213 15.5689V18.4675C22.1213 18.4675 19.6114 15.1939 19.5732 15.1509C19.5117 15.0817 19.4355 15.0269 19.3503 14.9907C19.265 14.9544 19.1728 14.9375 19.0802 14.9412C18.9149 14.9517 18.7599 15.0255 18.6475 15.1472C18.535 15.2689 18.4737 15.4291 18.4762 15.5948V20.3137C18.4762 20.4803 18.5424 20.6402 18.6602 20.7581C18.778 20.8759 18.9378 20.9422 19.1045 20.9422Z" fill="white"/>
                  <path d="M16.7677 20.9422H17.0425C17.107 20.9422 17.1709 20.9295 17.2304 20.9048C17.29 20.8801 17.3442 20.8438 17.3898 20.7982C17.4354 20.7526 17.4715 20.6984 17.4962 20.6388C17.5208 20.5792 17.5335 20.5153 17.5335 20.4508V15.4314C17.5335 15.3012 17.4817 15.1763 17.3897 15.0842C17.2976 14.9921 17.1727 14.9404 17.0425 14.9404H16.7677C16.6375 14.9404 16.5126 14.9921 16.4205 15.0842C16.3284 15.1763 16.2766 15.3012 16.2766 15.4314V20.4508C16.2766 20.5153 16.2893 20.5792 16.3139 20.6388C16.3386 20.6984 16.3748 20.7526 16.4204 20.7982C16.466 20.8438 16.5201 20.8801 16.5797 20.9048C16.6393 20.9295 16.7032 20.9422 16.7677 20.9422Z" fill="white"/>
                  <path d="M24.9489 20.9422H27.4629C27.6296 20.9422 27.7894 20.876 27.9072 20.7582C28.0251 20.6403 28.0913 20.4805 28.0913 20.3139C28.0913 20.1472 28.0251 19.9874 27.9072 19.8695C27.7894 19.7517 27.6296 19.6855 27.4629 19.6855H25.5773V18.5699H27.4627C27.6281 18.5679 27.7861 18.5007 27.9023 18.3831C28.0186 18.2654 28.0837 18.1067 28.0837 17.9413C28.0837 17.7759 28.0186 17.6171 27.9023 17.4994C27.7861 17.3818 27.6281 17.3147 27.4627 17.3127H25.5773V16.1971H27.4627C27.6293 16.1971 27.7891 16.1309 27.9069 16.0131C28.0247 15.8953 28.0909 15.7355 28.0909 15.5689C28.0909 15.4023 28.0247 15.2425 27.9069 15.1247C27.7891 15.0069 27.6293 14.9407 27.4627 14.9407H24.9489C24.7823 14.9408 24.6225 15.007 24.5047 15.1248C24.3869 15.2426 24.3207 15.4023 24.3207 15.5689V20.3137C24.3207 20.3962 24.3369 20.4779 24.3684 20.5542C24.4 20.6304 24.4463 20.6997 24.5046 20.7581C24.5629 20.8164 24.6322 20.8627 24.7084 20.8943C24.7846 20.9259 24.8664 20.9422 24.9489 20.9422Z" fill="white"/>
                </svg>
              </div>
            </div>
          </div>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
    <img class="pattern-01" src="../public/assets/app/images/pattern/quantity.png" alt="pattern">
  </div>
</div>


<!-- Forgot Password -->
<div class="popup-container size-02 member-popup mini <?= $activePopup == 'forgotpass' ? 'active' : '' ?>" data-popup="102">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body">
        <div class="bg-color bg-p"></div>
        <?php if(in_array('forgotpass', $listResult)) {?>
          <h4 class="pos-relative fw-600 text-center mt-3 color-white font-mitr color-white-theme">ลืมรหัสผ่าน</h4>

          <form class="mt-5 pos-relative" method="get">
            <div class="grids pt-5">
              <div class="grid sm-100 mt-3">
                <div class="form-input">
                  <label class="fw-400" for="username">อีเมล/ชื่อผู้ใช้งาน</label>
                  <input type="text" id="username" class="mt-1" placeholder="กรอกอีเมล/ชื่อผู้ใช้งาน">
                </div>
              </div>
              <div class="grid sm-100 mt-1">
                <div class="btns ai-center h-full d-flex jc-center mt-4">
                  <button type="submit" class="btn btn-white-theme btn-action md btn-p bradius-round">
                    <p>ยืนยัน</p>
                  </button>
                </div>
              </div>
            </div>
          </form>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

      </div>
    </div>
    <img class="pattern-01" src="../public/assets/app/images/pattern/quantity.png" alt="pattern">
  </div>
</div>


<!-- Reset Password -->
<div class="popup-container size-02 member-popup mini <?= $activePopup == 'resetpass' ? 'active' : '' ?>" data-popup="103">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body">
        <div class="bg-color bg-p"></div>
        <?php if(in_array('resetpass', $listResult)) {?>
          <h4 class="pos-relative fw-600 text-center mt-3 color-white font-mitr color-white-theme">รีเซ็ตรหัสผ่าน</h4>

          <form class="mt-5 pos-relative" method="get">
            <div class="grids pt-5">
              <div class="grid sm-100 mt-3">
                <div class="form-group mt-0 pos-relative">
                  <label class="fw-400" for="password02">รหัสผ่าน</label>
                  <input type="password" id="password02" placeholder="กรอกรหัสผ่าน">
                  <div class="dropdown-icon color-gray-03" style="pointer-events:auto;">
                    <em class="fa fa-eye-slash" id="togglePassword"  data-toggle="password" data-target="#password02"></em>
                  </div>
                </div>
                <div class="password-level level-1 mb-3">
                  <div class="levels">
                    <div></div><div></div><div></div>
                  </div>
                  <p class="sm fw-300">
                    การคาดเดาของรหัสผ่าน <span class="fw-600 text">ง่าย</span>
                  </p>
                </div>
              </div>
              <div class="grid sm-100 mt-3">
                <div class="form-group mt-0 pos-relative">
                  <label class="fw-400" for="password02">ยืนยันรหัสผ่าน</label>
                  <input type="password" id="password1" placeholder="กรอกยืนยันรหัสผ่าน">
                  <div class="dropdown-icon color-gray-03" style="pointer-events:auto;">
                    <em class="fa fa-eye-slash" id="togglePassword" data-toggle="password" data-target="#password1"></em>
                  </div>
                </div>
              </div>
              <div class="grid md-50 sm-100 mt-5">
                <div class="d-flex sm-jc-center">
                  <img src="public/assets/app/images/content/captcha.png" alt="Captcha">
                </div>
              </div>
              <div class="grid md-50 sm-100 mt-5">
                <div class="btns ai-center h-full d-flex jc-end sm-jc-center sm-mt-4">
                  <button class="btn btn-action btn-white-theme md btn-p btn-popup-toggle bradius-round">
                    <p class="color-black-theme">บันทึก</p>          
                  </button>            
                </div>
              </div>
            </div>
          </form>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>

      </div>
    </div>
    <img class="pattern-01" src="../public/assets/app/images/pattern/quantity.png" alt="pattern">
  </div>
</div>
