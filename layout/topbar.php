<div class="navbar-custom">
  <div class="topbar">
    <div class="pattern style-01">
      <img src="public/assets/app/images/pattern/09.png" alt="Pattern">
    </div>
    <a href="/" class="d-flex ai-center jc-end">
      <span class="color-white mr-2">ไปที่หน้าหลักของเว็บไซต์</span>
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.8334 9.66536L17.6667 2.83203" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M18.3334 6.16797V2.16797H14.3334" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        <path d="M9.16663 2.16797H7.49996C3.33329 2.16797 1.66663 3.83464 1.66663 8.0013V13.0013C1.66663 17.168 3.33329 18.8346 7.49996 18.8346H12.5C16.6666 18.8346 18.3333 17.168 18.3333 13.0013V11.3346" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>
  </div>
</div>

<div class="leftside-menu menuitem-active">
  <!-- BG -->
  <div class="bg-img" style="background-image: url('public/assets/app/images/bg/leftside-menu.jpg');"></div>

  <div class="simplebar-wrapper">
    <!-- Logo -->
    <a href="#" class="logo">
      <img src="public/assets/app/images/logo.png" alt="Logo">
      <div class="text color-white">
        <h1 class="main-title">กรมชลประทาน</h1>
        <p class="sub-title">Royal Irrigation Department</p>
      </div>
    </a>

    <div class="menu">
      <div class="user-avatar">
        <div class="avatar">
          <img src="public/assets/app/images/avatars/01.png" alt="Avatar">
        </div>
        <div class="text ml-2">
          <p class="fw-500">สวัสดี</p>
          <p class="color-p fw-500">Username Lastname</p>
        </div>
      </div>
      <?php
      $menus = [
        [
          'name' => 'หน้าแรก',
          'icon' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.26825 2.60169L3.32742 6.45169C2.50242 7.09336 1.83325 8.45919 1.83325 9.49502V16.2875C1.83325 18.4142 3.56575 20.1559 5.69242 20.1559H16.3074C18.4341 20.1559 20.1666 18.4142 20.1666 16.2967V9.62336C20.1666 8.51419 19.4241 7.09336 18.5166 6.46086L12.8516 2.49169C11.5683 1.59336 9.50575 1.63919 8.26825 2.60169Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11 16.4922V13.7422" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          ',
          'link' => '#',
        ],
        [
          'name' => 'ข้อมูลส่วนตัว',
          'icon' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.1466 9.96286C11.0549 9.9537 10.9449 9.9537 10.8441 9.96286C8.66243 9.88953 6.92993 8.10203 6.92993 5.90203C6.92993 3.6562 8.74493 1.83203 10.9999 1.83203C13.2458 1.83203 15.0699 3.6562 15.0699 5.90203C15.0608 8.10203 13.3283 9.88953 11.1466 9.96286Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.56341 13.348C4.34507 14.833 4.34507 17.253 6.56341 18.7288C9.08424 20.4155 13.2184 20.4155 15.7392 18.7288C17.9576 17.2438 17.9576 14.8238 15.7392 13.348C13.2276 11.6705 9.09341 11.6705 6.56341 13.348Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          ',
          'link' => '#',
        ],
        [
          'name' => 'เปลี่ยนรหัสผ่าน',
          'icon' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.1409 13.6855C16.2526 15.5646 13.5484 16.1421 11.1743 15.3996L6.85676 19.708C6.54509 20.0288 5.93093 20.2213 5.49093 20.1571L3.49259 19.8821C2.83259 19.7905 2.21843 19.1671 2.11759 18.5071L1.84259 16.5088C1.77843 16.0688 1.98926 15.4546 2.29176 15.143L6.60009 10.8346C5.86676 8.4513 6.43509 5.74714 8.32343 3.86797C11.0276 1.1638 15.4184 1.1638 18.1318 3.86797C20.8451 6.57214 20.8451 10.9813 18.1409 13.6855Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M6.31592 16.0312L8.42425 18.1396" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.2917 10.082C14.0511 10.082 14.6667 9.46642 14.6667 8.70703C14.6667 7.94764 14.0511 7.33203 13.2917 7.33203C12.5324 7.33203 11.9167 7.94764 11.9167 8.70703C11.9167 9.46642 12.5324 10.082 13.2917 10.082Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          ',
          'link' => '#',
        ],
        [
          'name' => 'จดหมายข่าวสาร',
          'icon' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.5833 18.7904H6.41659C3.66659 18.7904 1.83325 17.4154 1.83325 14.207V7.79036C1.83325 4.58203 3.66659 3.20703 6.41659 3.20703H15.5833C18.3333 3.20703 20.1666 4.58203 20.1666 7.79036V14.207C20.1666 17.4154 18.3333 18.7904 15.5833 18.7904Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15.5834 8.25L12.7142 10.5417C11.7701 11.2933 10.2209 11.2933 9.27674 10.5417L6.41675 8.25" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          ',
          'link' => '#',
        ],
        [
          'name' => 'ออกจากระบบ',
          'icon' => '<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.15845 6.92875C8.44261 3.62875 10.1384 2.28125 13.8509 2.28125H13.9701C18.0676 2.28125 19.7084 3.92208 19.7084 8.01958V13.9963C19.7084 18.0938 18.0676 19.7346 13.9701 19.7346H13.8509C10.1659 19.7346 8.47011 18.4054 8.16761 15.1604" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M13.75 11H3.31836" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M5.36258 7.92969L2.29175 11.0005L5.36258 14.0714" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          ',
          'link' => '#',
        ],
      ];
      ?>
      <?php foreach ($menus as $i => $menu) : ?>
        <a href="<?= $menu['link'] ?>" class="menu-item <?= $activeMenu == $i ? 'active' : '' ?>">
          <div class="icon">
            <?= $menu['icon'] ?>
          </div>
          <p class="text"><?= $menu['name'] ?></p>
        </a>
      <?php endforeach; ?>
    </div>

  </div>
</div>