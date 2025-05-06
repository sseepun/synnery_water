<div class="popup-container" data-popup="98">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- คุณต้องการบันทึกข้อมูลใช่หรือไม่ -->
        <?php if(in_array('profile-confirm', $listResult)) {?>
          <svg class="icon" width="100" height="99" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#C1DDFE"/>
            <g clip-path="url(#clip0_2702_66033)">
              <g clip-path="url(#clip1_2702_66033)">
                <path d="M57 9C47.6054 9 38.4218 11.7858 30.6104 17.0052C22.7991 22.2246 16.7109 29.643 13.1157 38.3225C9.52058 47.002 8.57992 56.5527 10.4127 65.7668C12.2455 74.9809 16.7695 83.4446 23.4124 90.0876C30.0554 96.7306 38.5191 101.255 47.7332 103.087C56.9473 104.92 66.498 103.979 75.1775 100.384C83.857 96.7891 91.2755 90.7009 96.4948 82.8896C101.714 75.0783 104.5 65.8946 104.5 56.5C104.486 43.9064 99.4776 31.8325 90.5726 22.9275C81.6675 14.0224 69.5936 9.01362 57 9ZM57 88.1667C56.2171 88.1667 55.4518 87.9345 54.8009 87.4996C54.1499 87.0646 53.6426 86.4464 53.343 85.7231C53.0434 84.9998 52.965 84.2039 53.1177 83.4361C53.2705 82.6683 53.6475 81.963 54.2011 81.4094C54.7546 80.8558 55.4599 80.4788 56.2278 80.3261C56.9956 80.1733 57.7915 80.2517 58.5148 80.5513C59.2381 80.8509 59.8563 81.3583 60.2913 82.0092C60.7262 82.6601 60.9584 83.4255 60.9584 84.2083C60.9584 85.2582 60.5413 86.265 59.799 87.0073C59.0567 87.7496 58.0498 88.1667 57 88.1667ZM64.6396 58.5029C63.4715 59.2333 62.5163 60.2584 61.87 61.4751C61.2238 62.6918 60.9094 64.0572 60.9584 65.434V68.375C60.9584 69.4248 60.5413 70.4316 59.799 71.174C59.0567 71.9163 58.0498 72.3333 57 72.3333C55.9502 72.3333 54.9434 71.9163 54.2011 71.174C53.4587 70.4316 53.0417 69.4248 53.0417 68.375V65.434C52.9832 62.6411 53.6733 59.8834 55.0404 57.4472C56.4074 55.011 58.4016 52.9851 60.8159 51.5798C62.2784 50.7743 63.4487 49.527 64.1597 48.0163C64.8706 46.5055 65.0857 44.8087 64.7742 43.1683C64.4658 41.6056 63.6985 40.1703 62.5704 39.0457C61.4423 37.9211 60.0046 37.1583 58.4409 36.8548C57.2998 36.6436 56.1262 36.6858 55.0032 36.9785C53.8802 37.2712 52.8353 37.8073 51.9425 38.5486C51.0497 39.29 50.3308 40.2186 49.8367 41.2686C49.3426 42.3187 49.0854 43.4645 49.0834 44.625C49.0834 45.6748 48.6663 46.6816 47.924 47.424C47.1817 48.1663 46.1748 48.5833 45.125 48.5833C44.0752 48.5833 43.0684 48.1663 42.3261 47.424C41.5837 46.6816 41.1667 45.6748 41.1667 44.625C41.1677 41.8324 41.9072 39.0898 43.3103 36.6753C44.7134 34.2608 46.7302 32.2603 49.156 30.8769C51.5818 29.4934 54.3303 28.7761 57.1228 28.7978C59.9153 28.8194 62.6524 29.5792 65.0564 31.0002C67.4605 32.4211 69.446 34.4526 70.8114 36.8886C72.1769 39.3246 72.8739 42.0783 72.8315 44.8706C72.7892 47.6629 72.0091 50.3942 70.5704 52.7877C69.1317 55.1812 67.0856 57.1555 64.6396 58.5029Z" fill="#0E3A81"/>
              </g>
            </g>
            <defs>
              <clipPath id="clip0_2702_66033">
                <rect width="95" height="95" fill="white" transform="translate(9.5 9)"/>
              </clipPath>
              <clipPath id="clip1_2702_66033">
                <rect width="95" height="95" fill="white" transform="translate(9.5 9)"/>
              </clipPath>
            </defs>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3">คุณต้องการบันทึกข้อมูลใช่หรือไม่</h5>
          <p class="color-gray-03">
            กรุณาตรวจสอบความถูกต้องของข้อมูลให้เรียบร้อย<br>
            เพื่อความสะดวกต่อการดำเนินการขั้นตอนต่อไป
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-toggle w-full" data-popup="97">
              <p>ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>

        <!-- การเปลี่ยนแปลงข้อมูลถูกส่งไปยังอีเมลของคุณ -->
        <?php if(in_array('profile-confirm-email', $listResult)) {?>
          <svg class="icon" width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="113" height="113" rx="56.5" fill="#FFF0CC"/>
            <g clip-path="url(#clip0_2792_66995)">
              <path d="M57 104.5C83.2335 104.5 104.5 83.2335 104.5 57C104.5 30.7665 83.2335 9.5 57 9.5C30.7665 9.5 9.5 30.7665 9.5 57C9.52839 83.2219 30.7781 104.472 57 104.5ZM53.0417 33.25C53.0417 31.0639 54.8139 29.2917 57 29.2917C59.1861 29.2917 60.9583 31.0639 60.9583 33.25V64.9167C60.9583 67.1028 59.1861 68.875 57 68.875C54.8139 68.875 53.0417 67.1028 53.0417 64.9167V33.25ZM57 80.75C59.1861 80.75 60.9583 82.5222 60.9583 84.7083C60.9583 86.8944 59.1861 88.6665 57 88.6665C54.8139 88.6665 53.0417 86.8944 53.0417 84.7083C53.0417 82.5222 54.8139 80.75 57 80.75Z" fill="#E9A600"/>
            </g>
            <defs>
              <clipPath id="clip0_2792_66995">
              <rect width="95" height="95" fill="white" transform="translate(9.5 9.5)"/>
              </clipPath>
            </defs>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3 lh-sm">การเปลี่ยนแปลงข้อมูล<br>ถูกส่งไปยังอีเมลของคุณ</h5>
          <p class="color-gray-03 mt-1">สามารถตรวจสอบได้ทางกล่องข้อความอีเมล</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-toggle w-full" data-popup="97">
              <p>ตกลง</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>

<!-- Profile -->
<div class="popup-container" data-popup="97">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- บันทึกสำเร็จ -->
        <?php if(in_array('profile-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">บันทึกสำเร็จ</h5>
          <p class="color-gray-03">แก้ไขและบันทึกข้อมูลโปร์ไฟล์สำเร็จ</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p w-full btn-popup-close-all" data-popup="99">
              <p>ดำเนินการต่อ</p>          
            </button>            
          </div>
        <?php }?>

        <!-- บันทึกไม่สำเร็จ -->
        <?php if(in_array('profile-error', $listResult)) {?>
          <svg class="icon" width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="113" height="113" rx="56.5" fill="#FCD9D9"/>
            <path d="M57 10.75C31.5162 10.75 10.75 31.5162 10.75 57C10.75 82.4837 31.5162 103.25 57 103.25C82.4837 103.25 103.25 82.4837 103.25 57C103.25 31.5162 82.4837 10.75 57 10.75ZM72.54 67.6375C73.8812 68.9788 73.8812 71.1987 72.54 72.54C71.8462 73.2337 70.9675 73.5575 70.0887 73.5575C69.21 73.5575 68.3312 73.2337 67.6375 72.54L57 61.9025L46.3625 72.54C45.6688 73.2337 44.79 73.5575 43.9113 73.5575C43.0325 73.5575 42.1538 73.2337 41.46 72.54C40.1188 71.1987 40.1188 68.9788 41.46 67.6375L52.0975 57L41.46 46.3625C40.1188 45.0212 40.1188 42.8013 41.46 41.46C42.8013 40.1188 45.0212 40.1188 46.3625 41.46L57 52.0975L67.6375 41.46C68.9788 40.1188 71.1987 40.1188 72.54 41.46C73.8812 42.8013 73.8812 45.0212 72.54 46.3625L61.9025 57L72.54 67.6375Z" fill="#C70000"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">บันทึกไม่สำเร็จ</h5>
          <p class="color-gray-03 lh-sm">ขออภัย บันทึกข้อมูลโปร์ไฟล์ไม่สำเร็จ<br>กรุณาตรวจสอบข้อมูลและลองใหม่อีกครั้ง</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p w-full btn-popup-close-all" data-popup="99">
              <p>ดำเนินการต่อ</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Profile Password - Confirm -->
<div class="popup-container" data-popup="95">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- คุณต้องการบันทึกข้อมูลใช่หรือไม่ -->
        <?php if(in_array('profile-password-confirm', $listResult)) {?>
          <svg class="icon" width="100" height="99" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#C1DDFE"/>
            <g clip-path="url(#clip0_2702_66033)">
              <g clip-path="url(#clip1_2702_66033)">
                <path d="M57 9C47.6054 9 38.4218 11.7858 30.6104 17.0052C22.7991 22.2246 16.7109 29.643 13.1157 38.3225C9.52058 47.002 8.57992 56.5527 10.4127 65.7668C12.2455 74.9809 16.7695 83.4446 23.4124 90.0876C30.0554 96.7306 38.5191 101.255 47.7332 103.087C56.9473 104.92 66.498 103.979 75.1775 100.384C83.857 96.7891 91.2755 90.7009 96.4948 82.8896C101.714 75.0783 104.5 65.8946 104.5 56.5C104.486 43.9064 99.4776 31.8325 90.5726 22.9275C81.6675 14.0224 69.5936 9.01362 57 9ZM57 88.1667C56.2171 88.1667 55.4518 87.9345 54.8009 87.4996C54.1499 87.0646 53.6426 86.4464 53.343 85.7231C53.0434 84.9998 52.965 84.2039 53.1177 83.4361C53.2705 82.6683 53.6475 81.963 54.2011 81.4094C54.7546 80.8558 55.4599 80.4788 56.2278 80.3261C56.9956 80.1733 57.7915 80.2517 58.5148 80.5513C59.2381 80.8509 59.8563 81.3583 60.2913 82.0092C60.7262 82.6601 60.9584 83.4255 60.9584 84.2083C60.9584 85.2582 60.5413 86.265 59.799 87.0073C59.0567 87.7496 58.0498 88.1667 57 88.1667ZM64.6396 58.5029C63.4715 59.2333 62.5163 60.2584 61.87 61.4751C61.2238 62.6918 60.9094 64.0572 60.9584 65.434V68.375C60.9584 69.4248 60.5413 70.4316 59.799 71.174C59.0567 71.9163 58.0498 72.3333 57 72.3333C55.9502 72.3333 54.9434 71.9163 54.2011 71.174C53.4587 70.4316 53.0417 69.4248 53.0417 68.375V65.434C52.9832 62.6411 53.6733 59.8834 55.0404 57.4472C56.4074 55.011 58.4016 52.9851 60.8159 51.5798C62.2784 50.7743 63.4487 49.527 64.1597 48.0163C64.8706 46.5055 65.0857 44.8087 64.7742 43.1683C64.4658 41.6056 63.6985 40.1703 62.5704 39.0457C61.4423 37.9211 60.0046 37.1583 58.4409 36.8548C57.2998 36.6436 56.1262 36.6858 55.0032 36.9785C53.8802 37.2712 52.8353 37.8073 51.9425 38.5486C51.0497 39.29 50.3308 40.2186 49.8367 41.2686C49.3426 42.3187 49.0854 43.4645 49.0834 44.625C49.0834 45.6748 48.6663 46.6816 47.924 47.424C47.1817 48.1663 46.1748 48.5833 45.125 48.5833C44.0752 48.5833 43.0684 48.1663 42.3261 47.424C41.5837 46.6816 41.1667 45.6748 41.1667 44.625C41.1677 41.8324 41.9072 39.0898 43.3103 36.6753C44.7134 34.2608 46.7302 32.2603 49.156 30.8769C51.5818 29.4934 54.3303 28.7761 57.1228 28.7978C59.9153 28.8194 62.6524 29.5792 65.0564 31.0002C67.4605 32.4211 69.446 34.4526 70.8114 36.8886C72.1769 39.3246 72.8739 42.0783 72.8315 44.8706C72.7892 47.6629 72.0091 50.3942 70.5704 52.7877C69.1317 55.1812 67.0856 57.1555 64.6396 58.5029Z" fill="#0E3A81"/>
              </g>
            </g>
            <defs>
              <clipPath id="clip0_2702_66033">
                <rect width="95" height="95" fill="white" transform="translate(9.5 9)"/>
              </clipPath>
              <clipPath id="clip1_2702_66033">
                <rect width="95" height="95" fill="white" transform="translate(9.5 9)"/>
              </clipPath>
            </defs>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3">คุณต้องการบันทึกข้อมูลใช่หรือไม่</h5>
          <p class="color-gray-03">
            กรุณาตรวจสอบความถูกต้องของข้อมูลให้เรียบร้อย<br>
            เพื่อความสะดวกต่อการดำเนินการขั้นตอนต่อไป
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <button class="btn btn-action mw-1 md btn-close color-p btn-popup-toggle" data-popup="96">
              <p class="fw-400">ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>

        <!-- การเปลี่ยนแปลงข้อมูลถูกส่งไปยังอีเมลของคุณ -->
        <?php if(in_array('profile-password-confirm-email', $listResult)) {?>
          <svg class="icon" width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="113" height="113" rx="56.5" fill="#FFF0CC"/>
            <g clip-path="url(#clip0_2792_66995)">
              <path d="M57 104.5C83.2335 104.5 104.5 83.2335 104.5 57C104.5 30.7665 83.2335 9.5 57 9.5C30.7665 9.5 9.5 30.7665 9.5 57C9.52839 83.2219 30.7781 104.472 57 104.5ZM53.0417 33.25C53.0417 31.0639 54.8139 29.2917 57 29.2917C59.1861 29.2917 60.9583 31.0639 60.9583 33.25V64.9167C60.9583 67.1028 59.1861 68.875 57 68.875C54.8139 68.875 53.0417 67.1028 53.0417 64.9167V33.25ZM57 80.75C59.1861 80.75 60.9583 82.5222 60.9583 84.7083C60.9583 86.8944 59.1861 88.6665 57 88.6665C54.8139 88.6665 53.0417 86.8944 53.0417 84.7083C53.0417 82.5222 54.8139 80.75 57 80.75Z" fill="#E9A600"/>
            </g>
            <defs>
              <clipPath id="clip0_2792_66995">
              <rect width="95" height="95" fill="white" transform="translate(9.5 9.5)"/>
              </clipPath>
            </defs>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3 lh-sm">การเปลี่ยนแปลงข้อมูล<br>ถูกส่งไปยังอีเมลของคุณ</h5>
          <p class="color-gray-03 mt-1">สามารถตรวจสอบได้ทางกล่องข้อความอีเมล</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <button class="btn btn-action mw-1 md btn-close color-p btn-popup-toggle" data-popup="99">
              <p class="fw-400">ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Profile Password - Status -->
<div class="popup-container" data-popup="96">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- บันทึกสำเร็จ -->
        <?php if(in_array('profile-password-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">บันทึกสำเร็จ</h5>
          <p class="color-gray-03">แก้ไขและบันทึกข้อมูลรหัสผ่านสำเร็จ</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>           
          </div>
        <?php }?>
        
        <!-- บันทึกไม่สำเร็จ -->
        <?php if(in_array('profile-password-error', $listResult)) {?>
          <svg class="icon" width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="113" height="113" rx="56.5" fill="#FCD9D9"/>
            <path d="M57 10.75C31.5162 10.75 10.75 31.5162 10.75 57C10.75 82.4837 31.5162 103.25 57 103.25C82.4837 103.25 103.25 82.4837 103.25 57C103.25 31.5162 82.4837 10.75 57 10.75ZM72.54 67.6375C73.8812 68.9788 73.8812 71.1987 72.54 72.54C71.8462 73.2337 70.9675 73.5575 70.0887 73.5575C69.21 73.5575 68.3312 73.2337 67.6375 72.54L57 61.9025L46.3625 72.54C45.6688 73.2337 44.79 73.5575 43.9113 73.5575C43.0325 73.5575 42.1538 73.2337 41.46 72.54C40.1188 71.1987 40.1188 68.9788 41.46 67.6375L52.0975 57L41.46 46.3625C40.1188 45.0212 40.1188 42.8013 41.46 41.46C42.8013 40.1188 45.0212 40.1188 46.3625 41.46L57 52.0975L67.6375 41.46C68.9788 40.1188 71.1987 40.1188 72.54 41.46C73.8812 42.8013 73.8812 45.0212 72.54 46.3625L61.9025 57L72.54 67.6375Z" fill="#C70000"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">บันทึกไม่สำเร็จ</h5>
          <p class="color-gray-03 lh-sm">ขออภัย บันทึกข้อมูลรหัสผ่านไม่สำเร็จ<br>กรุณาตรวจสอบและลองใหม่อีกครั้ง</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>           
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Forgot Password - Confirm -->
<div class="popup-container" data-popup="94">
  <div class="wrapper">
    <div class="popup-box size-02">
      <div class="box-body text-center">
        <!-- กรุณายืนยันอีเมล -->
        <?php if(in_array('forgot-password-confirm', $listResult)) {?>
          <img class="icon size-02" src="public/assets/app/images/icon/forgot-password.svg" alt="Icon">

          <h5 class="fw-400 font-mitr color-p">กรุณายืนยันอีเมล</h5>
          <p class="color-gray-03">
            ระบบได้ทำการส่งอีเมลไปยัง <a href="#" class="color-p fw-400 bcolor-p border-bottom-1">yourmail@mail.com</a>
            <br>กรุณายืนยันอีเมลของท่าน เพื่อให้การสมัครสมาชิกเสร็จสมบูรณ์
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>           
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- News - Cancel -->
<div class="popup-container" data-popup="90">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- คุณต้องการยกเลิกการรับข่าวสารใช่หรือไม่ -->
        <?php if(in_array('news-cancel', $listResult)) {?>
          <svg class="icon" width="100" height="99" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#C1DDFE"/>
            <g clip-path="url(#clip0_2702_66033)">
              <g clip-path="url(#clip1_2702_66033)">
                <path d="M57 9C47.6054 9 38.4218 11.7858 30.6104 17.0052C22.7991 22.2246 16.7109 29.643 13.1157 38.3225C9.52058 47.002 8.57992 56.5527 10.4127 65.7668C12.2455 74.9809 16.7695 83.4446 23.4124 90.0876C30.0554 96.7306 38.5191 101.255 47.7332 103.087C56.9473 104.92 66.498 103.979 75.1775 100.384C83.857 96.7891 91.2755 90.7009 96.4948 82.8896C101.714 75.0783 104.5 65.8946 104.5 56.5C104.486 43.9064 99.4776 31.8325 90.5726 22.9275C81.6675 14.0224 69.5936 9.01362 57 9ZM57 88.1667C56.2171 88.1667 55.4518 87.9345 54.8009 87.4996C54.1499 87.0646 53.6426 86.4464 53.343 85.7231C53.0434 84.9998 52.965 84.2039 53.1177 83.4361C53.2705 82.6683 53.6475 81.963 54.2011 81.4094C54.7546 80.8558 55.4599 80.4788 56.2278 80.3261C56.9956 80.1733 57.7915 80.2517 58.5148 80.5513C59.2381 80.8509 59.8563 81.3583 60.2913 82.0092C60.7262 82.6601 60.9584 83.4255 60.9584 84.2083C60.9584 85.2582 60.5413 86.265 59.799 87.0073C59.0567 87.7496 58.0498 88.1667 57 88.1667ZM64.6396 58.5029C63.4715 59.2333 62.5163 60.2584 61.87 61.4751C61.2238 62.6918 60.9094 64.0572 60.9584 65.434V68.375C60.9584 69.4248 60.5413 70.4316 59.799 71.174C59.0567 71.9163 58.0498 72.3333 57 72.3333C55.9502 72.3333 54.9434 71.9163 54.2011 71.174C53.4587 70.4316 53.0417 69.4248 53.0417 68.375V65.434C52.9832 62.6411 53.6733 59.8834 55.0404 57.4472C56.4074 55.011 58.4016 52.9851 60.8159 51.5798C62.2784 50.7743 63.4487 49.527 64.1597 48.0163C64.8706 46.5055 65.0857 44.8087 64.7742 43.1683C64.4658 41.6056 63.6985 40.1703 62.5704 39.0457C61.4423 37.9211 60.0046 37.1583 58.4409 36.8548C57.2998 36.6436 56.1262 36.6858 55.0032 36.9785C53.8802 37.2712 52.8353 37.8073 51.9425 38.5486C51.0497 39.29 50.3308 40.2186 49.8367 41.2686C49.3426 42.3187 49.0854 43.4645 49.0834 44.625C49.0834 45.6748 48.6663 46.6816 47.924 47.424C47.1817 48.1663 46.1748 48.5833 45.125 48.5833C44.0752 48.5833 43.0684 48.1663 42.3261 47.424C41.5837 46.6816 41.1667 45.6748 41.1667 44.625C41.1677 41.8324 41.9072 39.0898 43.3103 36.6753C44.7134 34.2608 46.7302 32.2603 49.156 30.8769C51.5818 29.4934 54.3303 28.7761 57.1228 28.7978C59.9153 28.8194 62.6524 29.5792 65.0564 31.0002C67.4605 32.4211 69.446 34.4526 70.8114 36.8886C72.1769 39.3246 72.8739 42.0783 72.8315 44.8706C72.7892 47.6629 72.0091 50.3942 70.5704 52.7877C69.1317 55.1812 67.0856 57.1555 64.6396 58.5029Z" fill="#0E3A81"/>
              </g>
            </g>
            <defs>
              <clipPath id="clip0_2702_66033">
                <rect width="95" height="95" fill="white" transform="translate(9.5 9)"/>
              </clipPath>
              <clipPath id="clip1_2702_66033">
                <rect width="95" height="95" fill="white" transform="translate(9.5 9)"/>
              </clipPath>
            </defs>
          </svg>

          <h5 class="fw-400 font-mitr color-p lh-sm mt-3">คุณต้องการยกเลิก<br>การรับข่าวสารใช่หรือไม่</h5>
          <p class="color-gray-03">
            คุณสามารถเลือกรับข่าวสารอีกครัั้งได้เมื่อต้องการ
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-toggle w-full" data-popup="99">
              <p>ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Register - Confirm -->
<div class="popup-container" data-popup="72">
  <div class="wrapper">
    <div class="popup-box size-02">
      <div class="box-body text-center">
        <!-- กรุณายืนยันอีเมล -->
        <?php if(in_array('register-password-confirm', $listResult)) {?>
          <img class="icon size-02" src="public/assets/app/images/icon/forgot-password.svg" alt="Icon">

          <h5 class="fw-400 font-mitr color-p">กรุณายืนยันอีเมล</h5>
          <p class="color-gray-03">
            ระบบได้ทำการส่งอีเมลไปยัง <a href="#" class="color-p fw-400 bcolor-p border-bottom-1">yourmail@mail.com</a>
            <br>กรุณากรอกโค้ดยืนยันอีเมลของท่าน
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>           
          </div>
        <?php }?>
        <?php if(in_array('register-verify', $listResult)) {?>
          <h5 class="fw-400 font-mitr color-p">ยืนยันอีเมลของท่าน</h5>
          <p class="color-gray-03">
            ระบบได้ทำการส่งอีเมลไปยัง <a href="#" class="color-p fw-400 bcolor-p border-bottom-1">yourmail@mail.com</a>
            <br>กรุณายืนยันอีเมลของท่าน เพื่อให้การสมัครสมาชิกเสร็จสมบูรณ์
          </p>
          <div class="code-inputs">
            <input type="text" maxlength="1" class="code-input" id="code-1" />
            <input type="text" maxlength="1" class="code-input" id="code-2" />
            <input type="text" maxlength="1" class="code-input" id="code-3" />
            <input type="text" maxlength="1" class="code-input" id="code-4" />
            <input type="text" maxlength="1" class="code-input" id="code-5" />
            <input type="text" maxlength="1" class="code-input" id="code-6" />
          </div>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mr-1 mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button id="submit-code-btn" class="btn btn-action mw-1 md btn-p btn-popup-toggle" data-popup="99">
              <p>ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Register - Confirm -->
<div class="popup-container" data-popup="87">
  <div class="wrapper">
    <div class="popup-box size-02">
      <div class="box-body text-center">
        <?php if(in_array('register-verify', $listResult)) {?>
          <h5 class="fw-400 font-mitr color-p">ยืนยันอีเมลของท่าน</h5>
          <p class="color-gray-03">
            ระบบได้ทำการส่งอีเมลไปยัง <a href="#" class="color-p fw-400 bcolor-p border-bottom-1">yourmail@mail.com</a>
            <br>กรุณายืนยันอีเมลของท่าน เพื่อให้การสมัครสมาชิกเสร็จสมบูรณ์
          </p>
          <div class="code-inputs">
            <input type="text" maxlength="1" class="code-input" id="code-1" />
            <input type="text" maxlength="1" class="code-input" id="code-2" />
            <input type="text" maxlength="1" class="code-input" id="code-3" />
            <input type="text" maxlength="1" class="code-input" id="code-4" />
            <input type="text" maxlength="1" class="code-input" id="code-5" />
            <input type="text" maxlength="1" class="code-input" id="code-6" />
          </div>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mr-1 mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button id="submit-code-btn" class="btn btn-action mw-1 md btn-p btn-popup-toggle" data-popup="99">
              <p>ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Register - Status -->
<div class="popup-container" data-popup="93">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- บันทึกสำเร็จ -->
        <?php if(in_array('register-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">สมัครสมาชิกสำเร็จ</h5>
          <p class="color-gray-03">กดปุ่ม “เข้าสู่ระบบ” เพื่อดำเนินการต่อ</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-close-all w-full" data-popup="99">
              <p>เข้าสู่ระบบ</p>          
            </button>            
          </div>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Register - Status -->
<div class="popup-container" data-popup="93">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- บันทึกสำเร็จ -->
        <?php if(in_array('register-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">สมัครสมาชิกสำเร็จ</h5>
          <p class="color-gray-03">กดปุ่ม “เข้าสู่ระบบ” เพื่อดำเนินการต่อ</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-close-all w-full" data-popup="99">
              <p>เข้าสู่ระบบ</p>          
            </button>            
          </div>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Receive Complaints -->
<div class="popup-container" data-popup="92">
  <div class="wrapper">
    <div class="popup-box size-02">
      <div class="box-body text-center">
        <!-- บันทึกสำเร็จ -->
        <?php if(in_array('receive-complaints-satisfaction', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3">ประเมินความพึงพอใจ</h5>
          <p class="color-gray-03">
            กรุณาประเมินความพึงพอใจต่อการให้บริการของเจ้าหน้าที่<br>
            เพื่อพัฒนาคุณภาพการบริการในอนาคต
          </p>
          <div class="rating">
            <div class="rating-desc">
              <p class="title pr-1">พอใจมากที่สุด</p>
              <svg class="icon" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.5574 37.1148C28.8063 37.1148 37.1148 28.8063 37.1148 18.5574C37.1148 8.30842 28.8063 0 18.5574 0C8.30842 0 0 8.30842 0 18.5574C0 28.8063 8.30842 37.1148 18.5574 37.1148Z" fill="#99D649"/>
                <path d="M15.1917 14.6429C15.1917 15.1517 15.0409 15.649 14.7582 16.0721C14.4755 16.4952 14.0737 16.8249 13.6037 17.0196C13.1336 17.2143 12.6163 17.2653 12.1173 17.166C11.6183 17.0667 11.1599 16.8217 10.8001 16.4619C10.4403 16.1022 10.1953 15.6438 10.0961 15.1447C9.9968 14.6457 10.0477 14.1285 10.2425 13.6584C10.4372 13.1883 10.7669 12.7865 11.19 12.5039C11.613 12.2212 12.1104 12.0703 12.6192 12.0703C13.3015 12.0703 13.9558 12.3414 14.4383 12.8238C14.9207 13.3062 15.1917 13.9606 15.1917 14.6429Z" fill="#549E45"/>
                <path d="M27.0665 14.6429C27.0665 15.1517 26.9156 15.649 26.6329 16.0721C26.3503 16.4952 25.9485 16.8249 25.4784 17.0196C25.0083 17.2143 24.4911 17.2653 23.9921 17.166C23.493 17.0667 23.0346 16.8217 22.6749 16.4619C22.3151 16.1022 22.0701 15.6438 21.9708 15.1447C21.8716 14.6457 21.9225 14.1285 22.1172 13.6584C22.3119 13.1883 22.6417 12.7865 23.0647 12.5039C23.4878 12.2212 23.9851 12.0703 24.4939 12.0703C25.1762 12.0703 25.8306 12.3414 26.313 12.8238C26.7955 13.3062 27.0665 13.9606 27.0665 14.6429Z" fill="#549E45"/>
                <path d="M18.557 30.505C16.6122 30.5034 14.6974 30.0264 12.9792 29.1155C11.2609 28.2047 9.7914 26.8876 8.69858 25.2789C8.55559 25.074 8.45468 24.8428 8.40166 24.5987C8.34865 24.3545 8.34459 24.1022 8.38972 23.8565C8.43486 23.6108 8.52829 23.3764 8.66461 23.167C8.80093 22.9577 8.97743 22.7774 9.18389 22.6367C9.39035 22.496 9.62267 22.3976 9.8674 22.3473C10.1121 22.297 10.3644 22.2957 10.6096 22.3436C10.8549 22.3914 11.0882 22.4874 11.296 22.626C11.5039 22.7647 11.6822 22.9431 11.8206 23.1512C12.5658 24.2524 13.5696 25.1541 14.744 25.7775C15.9185 26.4008 17.2279 26.7268 18.5575 26.7268C19.8872 26.7268 21.1965 26.4008 22.371 25.7775C23.5455 25.1541 24.5493 24.2524 25.2944 23.1512C25.4328 22.9431 25.6112 22.7647 25.819 22.626C26.0269 22.4874 26.2602 22.3914 26.5054 22.3436C26.7506 22.2957 27.0029 22.297 27.2476 22.3473C27.4924 22.3976 27.7247 22.496 27.9312 22.6367C28.1376 22.7774 28.3141 22.9577 28.4504 23.167C28.5868 23.3764 28.6802 23.6108 28.7253 23.8565C28.7705 24.1022 28.7664 24.3545 28.7134 24.5987C28.6604 24.8428 28.5595 25.074 28.4165 25.2789C27.3237 26.8879 25.854 28.2052 24.1356 29.116C22.4171 30.0269 20.5019 30.5038 18.557 30.505Z" fill="#549E45"/>
              </svg>
            </div>
            <div class="rating-item" data-rating="5">
              <span>5</span>
            </div>
            <div class="rating-item" data-rating="4">
              <span>4</span>
            </div>
            <div class="rating-item" data-rating="3">
              <span>3</span>
            </div>
            <div class="rating-item" data-rating="2">
              <span>2</span>
            </div>
            <div class="rating-item" data-rating="1">
              <span>1</span>
            </div>
            <div class="rating-desc">
              <svg class="icon" width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.9807 37.0015C29.166 37.0015 37.4229 28.7446 37.4229 18.5593C37.4229 8.37402 29.166 0.117188 18.9807 0.117188C8.7954 0.117188 0.538574 8.37402 0.538574 18.5593C0.538574 28.7446 8.7954 37.0015 18.9807 37.0015Z" fill="#FF575A"/>
                <path d="M15.6359 14.666C15.6359 15.1716 15.4859 15.6659 15.205 16.0863C14.9241 16.5067 14.5248 16.8344 14.0577 17.0279C13.5905 17.2214 13.0765 17.2721 12.5805 17.1734C12.0846 17.0748 11.6291 16.8313 11.2715 16.4737C10.914 16.1162 10.6705 15.6606 10.5718 15.1647C10.4732 14.6688 10.5238 14.1547 10.7173 13.6876C10.9108 13.2204 11.2385 12.8212 11.6589 12.5402C12.0794 12.2593 12.5736 12.1094 13.0793 12.1094C13.7573 12.1094 14.4076 12.3787 14.8871 12.8582C15.3665 13.3376 15.6359 13.9879 15.6359 14.666Z" fill="#C60609"/>
                <path d="M27.4369 14.666C27.4369 15.1716 27.287 15.6659 27.006 16.0863C26.7251 16.5067 26.3258 16.8344 25.8587 17.0279C25.3915 17.2214 24.8775 17.2721 24.3816 17.1734C23.8856 17.0748 23.4301 16.8313 23.0725 16.4737C22.715 16.1162 22.4715 15.6606 22.3729 15.1647C22.2742 14.6688 22.3248 14.1547 22.5183 13.6876C22.7118 13.2204 23.0395 12.8212 23.46 12.5402C23.8804 12.2593 24.3747 12.1094 24.8803 12.1094C25.5584 12.1094 26.2086 12.3787 26.6881 12.8582C27.1675 13.3376 27.4369 13.9879 27.4369 14.666Z" fill="#C60609"/>
                <path d="M18.9805 20.3818C17.0478 20.3834 15.1448 20.8575 13.4373 21.7627C11.7297 22.6679 10.2693 23.9768 9.18328 25.5754C9.04119 25.7791 8.9409 26.0089 8.88821 26.2515C8.83553 26.4941 8.83149 26.7448 8.87635 26.989C8.9212 27.2333 9.01405 27.4661 9.14953 27.6742C9.285 27.8823 9.4604 28.0615 9.66558 28.2013C9.87076 28.3411 10.1016 28.4389 10.3449 28.4889C10.5881 28.5389 10.8388 28.5401 11.0825 28.4926C11.3262 28.445 11.558 28.3496 11.7646 28.2119C11.9712 28.0741 12.1484 27.8967 12.2859 27.69C13.0265 26.5956 14.024 25.6995 15.1912 25.08C16.3584 24.4605 17.6596 24.1366 18.981 24.1366C20.3024 24.1366 21.6036 24.4605 22.7708 25.08C23.938 25.6995 24.9355 26.5956 25.6761 27.69C25.8136 27.8967 25.9908 28.0741 26.1974 28.2119C26.404 28.3496 26.6358 28.445 26.8795 28.4926C27.1232 28.5401 27.374 28.5389 27.6172 28.4889C27.8604 28.4389 28.0913 28.3411 28.2964 28.2013C28.5016 28.0615 28.677 27.8823 28.8125 27.6742C28.948 27.4661 29.0408 27.2333 29.0857 26.989C29.1305 26.7448 29.1265 26.4941 29.0738 26.2515C29.0211 26.0089 28.9208 25.7791 28.7787 25.5754C27.6927 23.9765 26.2322 22.6674 24.5244 21.7622C22.8166 20.8569 20.9133 20.3831 18.9805 20.3818Z" fill="#C60609"/>
              </svg>
              <p class="title pl-1">พอใจน้อยที่สุด</p>
            </div>
          </div>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-cancel w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ยกเลิก</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-toggle w-full" data-popup="91">
              <p>ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Receive Complaints - Status -->
<div class="popup-container" data-popup="91">
  <div class="wrapper">
    <div class="popup-box size-02">
      <div class="box-body text-center">
        <!-- ประเมินสำเร็จ -->
        <?php if(in_array('receive-complaints-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3">ประเมินสำเร็จ</h5>
          <p class="color-gray-03">
            ขอบคุณสำหรับคะแนนความพึงพอใจของท่าน<br>
            เพื่อพัฒนาคุณภาพการบริการในอนาคต
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close w-full mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>
            <button class="btn btn-action md btn-p w-full btn-popup-toggle btn-popup-close-all" data-popup="99">
              <p>เสร็จสิ้น</p>          
            </button>            
          </div>
        <?php }?>

        <!-- ส่งคำร้องสำเร็จ -->
        <?php if(in_array('receive-complaints-request-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>

          <h5 class="fw-400 font-mitr color-p mt-3">ส่งคำร้องสำเร็จ</h5>
          <p class="color-gray-03">
            กรุณาบันทึก <span class="fw-400 color-p">รหัสติดตามผล</span>และ <span class="fw-400 color-p">รหัสผ่าน</span><br>
            เพื่อใช้ในการติดตามคำร้อง
          </p>
          <p class="fw-400 color-p">รหัสติดตามผล : <span class="color-gray-03">xxxxxxxxxx</span></p>
          <p class="fw-400 color-p">รหัสผ่าน : <span class="color-gray-03">xxxxxxxxxx</span></p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>          
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Receive Complaints - Confirm -->
<div class="popup-container" data-popup="89">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- ยืนยันการส่งใช่หรือไม่ -->
        <?php if(in_array('receive-complaints-confirm', $listResult)) {?>
          <svg class="icon" width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M52.4167 7.49219H21.5834C12.3334 7.49219 6.16675 13.6589 6.16675 22.9089V41.4089C6.16675 50.6589 12.3334 56.8255 21.5834 56.8255V63.393C21.5834 65.8597 24.3276 67.3397 26.3626 65.9522L40.0834 56.8255H52.4167C61.6667 56.8255 67.8334 50.6589 67.8334 41.4089V22.9089C67.8334 13.6589 61.6667 7.49219 52.4167 7.49219ZM37.0001 45.0163C35.7051 45.0163 34.6876 43.968 34.6876 42.7038C34.6876 41.4397 35.7051 40.3913 37.0001 40.3913C38.2951 40.3913 39.3126 41.4397 39.3126 42.7038C39.3126 43.968 38.2951 45.0163 37.0001 45.0163ZM40.8851 32.2205C39.6826 33.0222 39.3126 33.5463 39.3126 34.4097V35.0572C39.3126 36.3214 38.2642 37.3697 37.0001 37.3697C35.7359 37.3697 34.6876 36.3214 34.6876 35.0572V34.4097C34.6876 30.833 37.3084 29.0755 38.2951 28.3972C39.4359 27.6264 39.8059 27.1022 39.8059 26.3005C39.8059 24.7589 38.5417 23.4947 37.0001 23.4947C35.4584 23.4947 34.1942 24.7589 34.1942 26.3005C34.1942 27.5647 33.1459 28.613 31.8817 28.613C30.6176 28.613 29.5692 27.5647 29.5692 26.3005C29.5692 22.1997 32.8992 18.8697 37.0001 18.8697C41.1009 18.8697 44.4309 22.1997 44.4309 26.3005C44.4309 29.8155 41.8409 31.573 40.8851 32.2205Z" fill="#0E3A81"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">ยืนยันการส่งใช่หรือไม่</h5>
          <p class="color-gray-03">
            กรุณาตรวจสอบความถูกต้องของข้อมูลให้เรียบร้อย<br>
            เพื่อความสะดวกต่อการดำเนินการขั้นตอนต่อไป
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-cancel mr-1 btn-popup-close-all" data-popup="99">
              <p>ยกเลิก</p>          
            </div>
            <button class="btn btn-action md btn-p btn-popup-toggle" data-popup="91">
              <p>ยืนยัน</p>          
            </button>            
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Contact - Minisite -->
<div class="popup-container" data-popup="86">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- ส่งข้อความสำเร็จ -->
        <?php if(in_array('contact-success', $listResult)) {?>
          <svg class="icon" width="114" height="113" viewBox="0 0 114 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" width="113" height="113" rx="56.5" fill="#B8EAC8"/>
            <path d="M57 10.25C31.5162 10.25 10.75 31.0162 10.75 56.5C10.75 81.9837 31.5162 102.75 57 102.75C82.4837 102.75 103.25 81.9837 103.25 56.5C103.25 31.0162 82.4837 10.25 57 10.25ZM79.1075 45.8625L52.8837 72.0863C52.2362 72.7337 51.3575 73.1038 50.4325 73.1038C49.5075 73.1038 48.6287 72.7337 47.9813 72.0863L34.8925 58.9975C33.5512 57.6562 33.5512 55.4362 34.8925 54.095C36.2337 52.7537 38.4537 52.7537 39.795 54.095L50.4325 64.7325L74.205 40.96C75.5462 39.6188 77.7663 39.6188 79.1075 40.96C80.4488 42.3013 80.4488 44.475 79.1075 45.8625Z" fill="#00861F"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">ส่งข้อมูลสำเร็จ</h5>
          <p class="color-gray-03">ส่งข้อมูลจากแบบฟอร์มติดต่อสามถามสำเร็จ</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action mw-1 md btn-close mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>           
          </div>
        <?php }?>

        <!-- ส่งข้อความไม่สำเร็จ -->
        <?php if(in_array('contact-error', $listResult)) {?>
          <svg class="icon" width="114" height="114" viewBox="0 0 114 114" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="113" height="113" rx="56.5" fill="#FCD9D9"/>
            <path d="M57 10.75C31.5162 10.75 10.75 31.5162 10.75 57C10.75 82.4837 31.5162 103.25 57 103.25C82.4837 103.25 103.25 82.4837 103.25 57C103.25 31.5162 82.4837 10.75 57 10.75ZM72.54 67.6375C73.8812 68.9788 73.8812 71.1987 72.54 72.54C71.8462 73.2337 70.9675 73.5575 70.0887 73.5575C69.21 73.5575 68.3312 73.2337 67.6375 72.54L57 61.9025L46.3625 72.54C45.6688 73.2337 44.79 73.5575 43.9113 73.5575C43.0325 73.5575 42.1538 73.2337 41.46 72.54C40.1188 71.1987 40.1188 68.9788 41.46 67.6375L52.0975 57L41.46 46.3625C40.1188 45.0212 40.1188 42.8013 41.46 41.46C42.8013 40.1188 45.0212 40.1188 46.3625 41.46L57 52.0975L67.6375 41.46C68.9788 40.1188 71.1987 40.1188 72.54 41.46C73.8812 42.8013 73.8812 45.0212 72.54 46.3625L61.9025 57L72.54 67.6375Z" fill="#C70000"/>
          </svg>
          <h5 class="fw-400 font-mitr color-p mt-3">ส่งข้อมูลไม่สำเร็จ</h5>
          <p class="color-gray-03 lh-sm">ส่งข้อมูลจากแบบฟอร์มติดต่อสามถามไม่สำเร็จ<br>กรุณาลองใหม่อีกครั้ง</p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 mr-1 btn-popup-close-all" data-popup="99">
              <p>ปิดหน้าต่าง</p>          
            </div>           
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Report File - Minisite -->
<div class="popup-container size-02 report-file" data-popup="82">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body">
        <!-- แจ้งไฟล์เสีย -->
        <?php if(in_array('report-file', $listResult)) {?>
          <h5 class="fw-700 text-center mt-3 color-t color-white-theme">แจ้งไฟล์เสีย</h5>
          <form class="mt-1" method="get">
            <div class="grids">
              <div class="grid sm-50 mt-0">
                <div class="form-group style-03 mt-4">
                  <label class="fw-400" for="fname">ชื่อผู้แจ้ง <span class="text-danger">*</span></label>
                  <input class="validate-error mt-1" type="text" id="fname" name="fname" placeholder="กรอกชื่อผู้แจ้ง">
                </div>
                <p class="xs message-error text-danger mt-1">กรุณากรอกชื่อผู้แจ้ง</p>
              </div>
              <div class="grid sm-50 mt-0">
                <div class="form-group style-03 mt-4">
                  <label class="fw-400" for="fname">นามสกุลผู้แจ้ง <span class="text-danger">*</span></label>
                  <input class="validate-error mt-1" type="text" id="fname" name="fname" placeholder="กรอกนามสกุลผู้แจ้ง">
                </div>
                <p class="xs message-error text-danger mt-1">กรุณากรอกนามสกุลผู้แจ้ง</p>
              </div>
              <div class="grid sm-50 mt-0">
                <div class="form-group style-03 mt-4">
                  <label class="fw-400" for="fname">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                  <input class="validate-error mt-1" type="text" id="fname" name="fname" placeholder="กรอกหมายเลขโทรศัพท์">
                </div>
                <p class="xs message-error text-danger mt-1">กรุณากรอกหมายเลขโทรศัพท์</p>
              </div>
              <div class="grid sm-50 mt-0">
                <div class="form-group style-03 mt-4">
                  <label class="fw-400" for="fname">อีเมล <span class="text-danger">*</span></label>
                  <input class="validate-error mt-1" type="email" id="fname" name="fname" placeholder="กรอกอีเมล">
                </div>
                <p class="xs message-error text-danger">กรุณากรอกอีเมล</p>
              </div>
              <div class="grid sm-100 mt-0">
                <div class="form-group mt-4">
                  <label class="fw-400" for="fname">ชื่อไฟล์</label>
                  <input class="disabled mt-1" type="text" id="filename" name="filename" value="ข้อที่ ๑ (๖๗) องค์กรมีการประกาศเจตนารมณ์ร่วมกัน ที่จะขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม โดย" disabled required="">
                </div>
              </div>
              <div class="grid sm-100 mt-0">
                <div class="form-group style-03 mt-4">
                  <label class="fw-400" for="fname">รายละเอียด</label>
                  <textarea class="mt-1" name="message" rows="3" required="" title="General Textarea" placeholder="กรอกรายละเอียดเพิ่มเติม"></textarea>
                </div>
              </div>
            </div>
            <div class="captcha-container mt-4 d-flex jc-center">
              <img src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
            </div>
            <div class="btns fw-unset jc-center mt-3">
              <div class="btn btn-action style-03 btn-close btn-popup-close-all w-full text-center bradius-round" data-popup="99">
                ปิดหน้าต่าง
              </div>
              <button type="submit" class="btn btn-action style-03 btn-p btn-popup-toggle w-full bradius-round" data-popup="83">
                ส่งแบบฟอร์ม
              </button>
            </div>
          </form>
        <?php }?>

        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


<!-- Report File Status - Minisite -->
<div class="popup-container report-file" data-popup="83">
  <div class="wrapper">
    <div class="popup-box">
      <div class="box-body text-center">
        <!-- แจ้งไฟล์เสียสำเร็จ -->
        <?php if(in_array('report-file-success', $listResult)) {?>
          <div class="circle-drop bg-01">
            <svg width="74" height="74" viewBox="0 0 74 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M37 0C16.613 0 0 16.613 0 37C0 57.387 16.613 74 37 74C57.387 74 74 57.387 74 37C74 16.613 57.387 0 37 0ZM54.686 28.49L33.707 49.469C33.189 49.987 32.486 50.283 31.746 50.283C31.006 50.283 30.303 49.987 29.785 49.469L19.314 38.998C18.241 37.925 18.241 36.149 19.314 35.076C20.387 34.003 22.163 34.003 23.236 35.076L31.746 43.586L50.764 24.568C51.837 23.495 53.613 23.495 54.686 24.568C55.759 25.641 55.759 27.38 54.686 28.49Z" fill="#64C544"/>
            </svg>
          </div>
          <h5 class="fw-700 font-mitr color-t mt-3">แจ้งไฟล์เสียสำเร็จ</h5>
          <p class="color-gray-03 fw-400 xs-no-br mt-2 lh-lg">
            ขอบคุณสำหรับการแจ้งเตือนข้อผิดพลาด<br>
            ทางหน่วยงานจะรีบทำการปรับปรุงเพื่อการให้บริการที่ดีขึ้น
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 btn-popup-close-all bradius-round" data-popup="99">
              ปิดหน้าต่าง
            </div>           
          </div>
        <?php }?>

        <!-- แจ้งไฟล์เสียไม่สำเร็จ -->
        <?php if(in_array('report-file-error', $listResult)) {?>
          <div class="circle-drop bg-02">
            <svg width="73" height="74" viewBox="0 0 73 74" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M36.5 0.5C16.3885 0.5 0 16.8885 0 37C0 57.1115 16.3885 73.5 36.5 73.5C56.6115 73.5 73 57.1115 73 37C73 16.8885 56.6115 0.5 36.5 0.5ZM48.764 45.395C49.8225 46.4535 49.8225 48.2055 48.764 49.264C48.2165 49.8115 47.523 50.067 46.8295 50.067C46.136 50.067 45.4425 49.8115 44.895 49.264L36.5 40.869L28.105 49.264C27.5575 49.8115 26.864 50.067 26.1705 50.067C25.477 50.067 24.7835 49.8115 24.236 49.264C23.1775 48.2055 23.1775 46.4535 24.236 45.395L32.631 37L24.236 28.605C23.1775 27.5465 23.1775 25.7945 24.236 24.736C25.2945 23.6775 27.0465 23.6775 28.105 24.736L36.5 33.131L44.895 24.736C45.9535 23.6775 47.7055 23.6775 48.764 24.736C49.8225 25.7945 49.8225 27.5465 48.764 28.605L40.369 37L48.764 45.395Z" fill="#ED4949"/>
            </svg>
          </div>
          <h5 class="fw-700 font-mitr color-t mt-3">เกิดข้อผิดพลาดในการส่ง</h5>
          <p class="color-gray-03 xs-no-br mt-2 lh-lg">
            กรุณาลองส่งอีกครั้งหรือสักพัก เพื่อทำการส่งใหม่<br>
            ทางหน่วยงานขออภัยในความไม่สะดวก
          </p>
          <div class="btns ai-center h-full d-flex jc-center mt-5 sm-jc-center sm-mt-4">
            <div class="btn btn-action md btn-close mw-1 mr-1 btn-popup-close-all bradius-round" data-popup="99">
              ปิดหน้าต่าง          
            </div>           
          </div>
        <?php }?>
        <svg class="btn-popup-close-all c-pointer close-popup" data-popup="99" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 11.658L11 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M11 11.658L1 1.40625" stroke="#909090" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>


