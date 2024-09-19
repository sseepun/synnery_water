
<?php
  $topnavMenu = [
    [
      'name' => 'หน้าหลัก',
      'hasChildren' => false,
    ], [
      'name' => 'เกี่ยวกับกรม',
      'hasChildren' => true,
    ], [
      'name' => 'รายงานประจำปี/สารสนเทศ',
      'hasChildren' => true,
    ], [
      'name' => 'ข่าวประชาสัมพันธ์',
      'hasChildren' => true,
    ], [
      'name' => 'หน่ายงานในสังกัด',
      'hasChildren' => true,
    ], [
      'name' => 'ติดต่อกรม',
      'hasChildren' => false,
    ], 
  ];
?>
<nav class="topnav">
  <div class="container">
    <div class="pattern">
      <img src="public/assets/app/images/pattern/01.png" alt="Pattern" />
    </div>
    <div class="topnav-wrapper">
      <div class="topnav-left">
        <a href="#" class="logo">
          <img src="public/assets/app/images/logo.png" alt="Logo" />
          <div class="text">
            <h1>กรมชลประทาน</h1>
            <p>Royal Irrigation Department</p>
          </div>
        </a>
      </div>
      <div class="topnav-right">
        <div class="topnav-top">
          <div class="options">
            <div class="icon icon-circle">
              <em class="fa-solid fa-magnifying-glass"></em>
            </div>
            <div class="icon icon-text">
              <em class="fa-solid fa-sitemap"></em>
              <div class="text">แผนผังเว็บไซต์</div>
            </div>
            <div class="icon icon-flag active">
              <div class="flag" style="background-image:url('public/assets/app/images/flag/TH.jpg')"></div>
              <div class="text">ไทย</div>
            </div>
            <div class="icon icon-flag">
              <div class="flag" style="background-image:url('public/assets/app/images/flag/EN.jpg')"></div>
              <div class="text">Eng</div>
            </div>
            <div class="icon-sep"></div>
            <div class="icon icon-social">
              <em class="fa-brands fa-facebook-f"></em>
            </div>
            <div class="icon icon-social">
              <em class="fa-brands fa-youtube"></em>
            </div>
            <div class="icon icon-social">
              <em class="fa-brands fa-line"></em>
            </div>
          </div>
        </div>
        <div class="topnav-bottom">
          <div class="menu-container">
            <?php foreach($topnavMenu as $i=>$d){?>
              <div class="menu">
                <a href="#">
                  <?= $d['name'] ?> 
                  <?php if($d['hasChildren']){?><div class="dot"></div><?php }?>
                </a>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="topnav-spacer"></div>
