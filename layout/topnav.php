
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
      'hasChildren' => true,
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
            <h1 class="main-title">กรมชลประทาน</h1>
            <p class="sub-title">Royal Irrigation Department</p>
          </div>
        </a>
      </div>
      <div class="topnav-right">
        <div class="topnav-top">
          <div class="pattern style-01">
            <img src="public/assets/app/images/pattern/09.png" alt="Pattern" />
          </div>
          <div class="options">
            <div class="icon icon-circle">
              <em class="fa-solid fa-magnifying-glass"></em>
            </div>
            <div class="icon icon-text">
              <em class="fa-solid fa-sitemap"></em>
              <div class="text hide-tablet">แผนผังเว็บไซต์</div>
            </div>
            <div class="icon icon-flag active hide-tablet" >
              <div class="flag" style="background-image:url('public/assets/app/images/flag/TH.jpg')"></div>
              <div class="text">ไทย</div>
            </div>
            <div class="icon icon-flag hide-tablet">
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
          <div class="menu-container pos-relative">
            <?php foreach($topnavMenu as $i=>$d){?>
              <div class="menu <?= $i == 0 ? 'active': ''?> <?= $i == 1 ? 'pos-static': ''?>">
                <a href="#">
                  <?= $d['name'] ?> 
                  <?php if($d['hasChildren']){?><div class="dot"></div><?php }?>
                </a>
                <?php if($d['hasChildren']){?>
                  <?php if($i === 1){?>
                    <?php 
                      $submenuLeftContent = [
                        ['title' => 'ประวัติกรมชลประทาน'],
                        ['title' => 'ตราสัญลักษณ์ประจำกรม'],
                        ['title' => 'กฎหมายที่สำคัญของกรม'],
                        ['title' => 'หน้าที่ความรับผิดชอบ'],
                        ['title' => 'โครงสร้างหน่วยงาน'],
                        ['title' => 'ทำเนียบผู้บริหาร'],
                      ]
                    ?>
                    <?php 
                      $submenuRightContent = [
                        ['title' => 'ข้อมูลผู้บริหารเทคโนโลยีดิจิทัล'],
                        ['title' => 'วิสัยทัศน์/ค่านิยม/พันธกิจ'],
                        ['title' => 'คำรับรองการปฏิบัติราชการ'],
                        ['title' => 'แผนยุทธศาสตร์กรมชลประทาน'],
                        ['title' => 'ตัวชี้วัดตามมาตรการปรับปรุงประสิทธิภาพ'],
                        ['title' => 'แผนปฏิบัติราชการกรมชลประทาน ระยะ 5 ปี'],
                      ]
                    ?>
                    <div class="submenu-dropdown full-width">
                      <div class="submenu-container">
                        <div class="d-flex w-full">
                          <div class="pos-relative submenu-wrapper background">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/12.jpg')"></div>
                            <div class="pattern style-01">
                              <img src="public/assets/app/images/pattern/11.png" alt="Pattern">
                            </div>
                          </div>
                          <div class="submenu-wrapper">
                            <?php foreach($submenuLeftContent as $d) {?>
                              <div class="submenu">
                                <div class="wrapper">
                                  <div class="drop-water"></div>
                                  <a href="#"><?= $d['title'] ?></a>
                                  <div class="submenu-patterns">
                                    <div class="submenu-pattern">
                                      <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                      <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                          <div class="submenu-wrapper">
                            <?php foreach($submenuRightContent as $d) {?>
                              <div class="submenu">
                                <div class="wrapper">
                                  <div class="drop-water"></div>
                                  <a href="#"><?= $d['title'] ?></a>
                                  <div class="submenu-patterns">
                                    <div class="submenu-pattern">
                                      <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                      <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <?php if($i === 2){?>
                    <?php 
                    $submenu02 = [
                      ['title' => 'รายงานประจำปี'],
                      ['title' => 'สารสนเทศโครงการชลประทาน'],
                      ['title' => 'กระบวนหารบริหารงบประมาณ'],
                      ['title' => 'งบประมาณรายจ่ายประจำปี'],
                      ['title' => 'รายงานการเงินกรมชลประทาน'],
                      ['title' => 'รายงานงบการเงินทุนหมุนเวียน'],
                    ]
                  ?>
                  <div class="submenu-dropdown">
                    <div class="submenu-container">
                      <div class="submenu-wrapper">
                        <?php foreach($submenu02 as $d) {?>
                          <div class="submenu">
                            <div class="wrapper">
                              <div class="drop-water"></div>
                              <a href="#"><?= $d['title'] ?></a>
                              <div class="submenu-patterns">
                                <div class="submenu-pattern">
                                  <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                  <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                </div>
                              </div>
                            </div>
                          </div>
                        <?php } ?>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  
                  <?php if($i === 3){?>
                    <?php 
                      $submenu03 = [
                        ['title' => 'ข่าวเด่นชลประทาน'],
                        ['title' => 'รอบรั้วชลประทาน'],
                        ['title' => 'วีดิทัศน์'],
                        ['title' => 'ประกาศทั่วไป'],
                      ]
                    ?>
                    <div class="submenu-dropdown">
                      <div class="submenu-container">
                        <div class="submenu-wrapper">
                          <?php foreach($submenu03 as $d) {?>
                            <div class="submenu">
                              <div class="wrapper">
                                <div class="drop-water"></div>
                                <a href="#"><?= $d['title'] ?></a>
                                <div class="submenu-patterns">
                                  <div class="submenu-pattern">
                                    <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                    <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  <?php }?>

                  <?php if($i === 4){?>
                    <?php 
                      $submenu04 = [
                        ['title' => 'สำนัก/กอง'],
                        ['title' => 'สำนักงานชลประทานที่ 1-17'],
                        ['title' => 'โครงการชลประทานจังหวัด'],
                        ['title' => 'โครงการส่งน้ำและบำรุงรักษา'],
                      ]
                    ?>
                    <div class="submenu-dropdown">
                      <div class="submenu-container">
                        <div class="submenu-wrapper">
                          <?php foreach($submenu04 as $d) {?>
                            <div class="submenu">
                              <div class="wrapper">
                                <div class="drop-water"></div>
                                <a href="#"><?= $d['title'] ?></a>
                                <div class="submenu-patterns">
                                  <div class="submenu-pattern">
                                    <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                    <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  <?php }?>

                  <?php if($i === 5){?>
                    <?php 
                      $submenu05 = [
                        ['title' => 'ติดต่อกรม'],
                        ['title' => 'faq'],
                        ['title' => 'Webboard'],
                      ]
                    ?>
                    <div class="submenu-dropdown anchor-right">
                      <div class="submenu-container">
                        <div class="submenu-wrapper">
                          <?php foreach($submenu05 as $d) {?>
                            <div class="submenu">
                              <div class="wrapper">
                                <div class="drop-water"></div>
                                <a href="#"><?= $d['title'] ?></a>
                                <div class="submenu-patterns">
                                  <div class="submenu-pattern">
                                    <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                    <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                  </div>
                                </div>
                              </div>
                            </div>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                <?php }?>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="topnav-spacer"></div>
