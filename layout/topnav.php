
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
            <p class="main-title">กรมชลประทาน</p>
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
            <div class="icon  global-search-toggle  icon-circle">
              <em class="fa-solid fa-magnifying-glass"></em>
            </div>
            <div class="icon icon-text">
              <em class="fa-solid fa-sitemap"></em>
              <div class="text hide-tablet">แผนผังเว็บไซต์</div>
            </div>
            <div class="icon icon-flag active" >
              <div class="flag" style="background-image:url('public/assets/app/images/flag/TH.jpg')"></div>
              <div class="text">ไทย</div>
              <div class="icon-water">
                <img src="public/assets/app/images/icon/water.png" alt="">
              </div>
              <div class="flag-dropdown border-1">
              <div class="flag-item">
                <div class="wrapper">
                  <div class="icon">
                    <div class="flag" style="background-image:url('public/assets/app/images/flag/TH.jpg')"></div>
                  </div>
                  <div class="p xs title fw-400">ไทย</div>
                </div>
              </div>
              <div class="ss-sep-02"></div>
              <div class="flag-item border-top-1">
                <div class="wrapper">
                  <div class="icon">
                    <div class="flag" style="background-image:url('public/assets/app/images/flag/EN-02.png')"></div>
                  </div>
                  <div class="p xs title fw-400">อังกฤษ</div>
                </div>
              </div>
            </div>
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
          <div class="menu-container pos-relative" id="topnav-menu">
            <?php foreach($topnavMenu as $i=>$d){?>
              <div class="menu <?= $i > 0 ? 'has-children': ''?> <?= $i == 0 ? 'active': ''?> <?= $i == 1 ? 'pos-static mega-menu': ''?>">
                <a href="#">
                  <?= $d['name'] ?> 
                  <?php if($d['hasChildren']){?><div class="dot"></div><?php }?>
                </a>
                <?php if($d['hasChildren']){?>
                  <?php if($i === 1){?>
                    <?php 
                      $submenuLeftContent = [
                        ['title' => 'Level 2'],
                        // ['title' => 'ตราสัญลักษณ์ประจำกรม'],
                        // ['title' => 'กฎหมายที่สำคัญของกรม'],
                        // ['title' => 'หน้าที่ความรับผิดชอบ'],
                        // ['title' => 'โครงสร้างหน่วยงาน'],
                        // ['title' => 'ทำเนียบผู้บริหาร'],
                      ]
                    ?>
                    <?php 
                      $submenuRightContent = [
                        ['title' => 'Level 2'],
                        // ['title' => 'วิสัยทัศน์/ค่านิยม/พันธกิจ'],
                        // ['title' => 'คำรับรองการปฏิบัติราชการ'],
                        // ['title' => 'แผนยุทธศาสตร์กรมชลประทาน'],
                        // ['title' => 'ตัวชี้วัดตามมาตรการปรับปรุงประสิทธิภาพ'],
                        // ['title' => 'แผนปฏิบัติราชการกรมชลประทาน ระยะ 5 ปี'],
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
                              <div class="submenu has-children">
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
                                <div class="submenu-dropdown mt-2">
                                  <div class="submenu sub-mega-menu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">Level 3</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php } ?>
                          </div>
                          <div class="submenu-wrapper">
                            <?php foreach($submenuRightContent as $d) {?>
                              <div class="submenu has-children">
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
                                <div class="submenu-dropdown mt-2">
                                  <div class="submenu sub-mega-menu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">Level 3</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="submenu sub-mega-menu">
                                  <div class="wrapper">
                                    <div class="drop-water-dot"></div>
                                    <a href="#">Level 3</a>
                                    <div class="submenu-patterns">
                                      <div class="submenu-pattern">
                                        <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                        <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                      </div>
                                    </div>
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
                          <div class="submenu has-children">
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
                            <div class="submenu-dropdown">
                              <div class="submenu-container">
                                <div class="submenu-wrapper">
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2562</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2563</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2564</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2564</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2565</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2566</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="submenu">
                                    <div class="wrapper">
                                      <div class="drop-water-dot"></div>
                                      <a href="#">รายงานประจำปี พ.ศ. 2567</a>
                                      <div class="submenu-patterns">
                                        <div class="submenu-pattern">
                                          <img class="pattern-01" src="public/assets/app/images/icon/submenu-pattern-01.svg" alt="Wave Pattern">
                                          <img class="pattern-02" src="public/assets/app/images/icon/submenu-pattern-02.svg" alt="Wave Pattern">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
          <div class="d-flex ai-center">
            <div class="sidenav-toggle ml-5">
              <div class="hamburger">
                <div></div><div></div><div></div>
              </div>
            </div>               
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="topnav-spacer"></div>


<!-- Sidenav -->
<nav class="sidenav">
  <div class="wrapper">
    <a class="logo" href="#">
      <img src="public/assets/app/images/logo.png" alt="Logo">
    </a>
    <div class="sidenav-toggle">
      <div class="hamburger">
        <div></div><div></div><div></div>
      </div>
    </div>
    <!-- <div class="options">
      <div class="option">
        <div class="icon"><span class="text-lg">ก</span></div>
        <div class="dropdown">
          <div class="icon font-size-btn fw-500" data-size="14">
            <span class="text-xl">-</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="16">
            <span class="text-lg">ก</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="18">
            <span class="text-xl">+</span>
          </div>
        </div>
      </div>
      <div class="option">
        <div class="icon">C</div>
        <div class="dropdown">
          <div class="icon theme-btn" data-theme="0">C</div>
          <div class="icon theme-btn" data-theme="1">C</div>
          <div class="icon theme-btn" data-theme="2">C</div>
        </div>
      </div>
      <div class="option">
        <div class="flag" style="background-image:url('public/assets/app/images/icon/flag.png');"></div>
        <div class="dropdown">
          <a href="#">
            <div class="flag" style="background-image:url('public/assets/app/images/icon/us-flag.png');"></div>
          </a>
        </div>
      </div>
    </div> -->
    <div class="scroll-wrapper" data-simplebar>
      <div class="menu-container"></div>
    </div>
  </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Accessibility -->
<nav class="side-panel <?= !empty($sidePanelStyle)? $sidePanelStyle: '' ?> access-panel">
  <div class="wrapper">
    <div class="icon main cursor-pointer">
      <svg class="icon-inactive" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400">
        <path class="st0" d="M193.2,79.7c-9.1,2.5-16.5,10-19,19.2c-0.9,3.3-0.9,9.9,0,13.2c2.5,9.3,9.9,16.7,19.2,19.2
          c3.3,0.9,9.9,0.9,13.2,0c9.3-2.5,16.7-9.9,19.2-19.2c0.4-1.4,0.7-4.4,0.7-6.6c0-2.2-0.3-5.2-0.7-6.6c-2.5-9.3-9.9-16.7-19.2-19.2
          C203.4,78.8,196.3,78.9,193.2,79.7 M109.7,132.7c-2.4,1-4.6,3.4-6.3,6.6c-1.2,2.3-1.5,3.6-1.7,6.7c-0.3,4.6,0.3,6.4,2.6,9.1
          c4.1,4.8,7.3,6.1,35.4,14.9c12.2,3.8,23.2,7.5,24.5,8.2c1.6,0.9,2.7,1.9,3.3,3.2c2.7,5.1,0.4,23-10.4,82.2
          c-4.3,23.4-7.7,43.4-7.7,44.5c0,4.7,2.9,9.2,7.4,11.4c2.1,1,3.5,1.3,6.9,1.5c5.1,0.2,7.6-0.6,10.7-3.4c3.7-3.4,4.7-6,7.2-19.6
          c7.4-39.7,14.7-66,18.2-66c3.5,0,10,22.9,18.2,64.3c2.9,14.8,4,17.9,7.1,21c2.6,2.6,4.9,3.5,9.3,3.7c4.7,0.2,8.2-0.7,11.1-2.9
          c2.5-1.9,4.6-5.6,5-8.7c0.2-1.7-1.7-12.6-7.8-45.5c-9-48.1-11.7-66-11.3-75.2c0.2-4.9,0.2-5.1,1.6-6.6c0.8-0.8,2.5-2,3.7-2.7
          c1.3-0.7,13-4.9,26-9.4c13-4.5,25.1-9,26.7-9.9c3.7-2,6.8-4.9,8.1-7.6c0.8-1.7,1-2.7,0.8-5.9c-0.4-8.4-5.5-14.5-12.1-14.5
          c-1.4,0-4.9,0.7-8.2,1.7c-8.3,2.4-25.2,6.5-34.9,8.4c-33.3,6.6-52.9,6.7-85.9,0c-11.9-2.4-27.4-6.1-35.4-8.5
          C115.8,131.8,112.4,131.5,109.7,132.7"></path>
        <g>
          <path class="st0" d="M200,400C89.7,400,0,310.3,0,200C0,89.7,89.7,0,200,0c110.3,0,200,89.7,200,200C400,310.3,310.3,400,200,400z
            M200,19.3c-99.6,0-180.7,81.1-180.7,180.7S100.4,380.7,200,380.7S380.7,299.6,380.7,200S299.6,19.3,200,19.3z"></path>
        </g>
      </svg>
      <div class="icon-active">
        <div class="hamburger active">
          <div></div><div></div><div></div>
        </div>
      </div>
    </div>
    <div class="panel">
      <div class="panel-row">
        <div class="icon-width">
          <div class="icon-header">
            <svg class="text-size"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill-rule="evenodd" fill="rgb(48, 48, 48)"
              d="M29.587,14.157 L29.587,26.996 L25.245,26.996 L25.245,14.157 L20.847,14.157 L20.847,10.127 L34.007,10.127 L34.007,14.157 L29.587,14.157 ZM13.151,26.996 L7.482,26.996 L7.482,5.131 L-0.009,5.131 L-0.009,-0.012 L20.678,-0.012 L20.678,5.131 L13.151,5.131 L13.151,26.996 Z"/>
            </svg>
          </div>
          <p class="xs fw-400 pr-2 mt-1">ขนาดตัวอักษร</p>
        </div>
        <div class="options">
          <a class="option btn font-size-btn" data-size="14">
            <span class="fw-500" style="font-size:16px;">ก</span>
          </a>
          <a class="option btn font-size-btn active" data-size="16">
            <span class="fw-500" style="font-size:20px;">ก</span>
          </a>
          <a class="option btn font-size-btn" data-size="17">
            <span class="fw-500" style="font-size:24px;">ก</span>
          </a>
        </div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <div class="icon-header">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <path fill-rule="evenodd" fill="rgb(48, 48, 48)"
              d="M16.003,31.992 C7.179,31.992 -0.001,24.818 -0.001,16.002 C-0.001,7.186 7.179,0.012 16.003,0.012 C24.828,0.012 32.008,7.186 32.008,16.002 C32.008,24.818 24.828,31.992 16.003,31.992 ZM16.003,2.011 C8.281,2.011 1.1000,8.287 1.1000,16.002 C1.1000,23.717 8.281,29.994 16.003,29.994 C23.725,29.994 30.007,23.717 30.007,16.002 C30.007,8.287 23.725,2.011 16.003,2.011 ZM16.003,27.994 L16.003,4.010 C23.005,4.010 28.006,9.378 28.006,16.002 C28.006,22.625 23.005,27.994 16.003,27.994 Z"/>
            </svg>
          </div>
          <p class="fw-400 pr-2 mt-1">ความตัดกันของสี</p>
        </div>
        <div class="options">
          <div class="option-row theme-btn cursor-pointer theme-btn-0 active" data-theme="0">
            <p><span class="fw-400">ปกติ</span></p>
          </div>
          <div class="option-row theme-btn cursor-pointer theme-btn-1" data-theme="1">
            <div class="icon-color">
              <svg viewBox="0 0 32 32"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill-rule="evenodd" fill="rgb(48, 48, 48)"
                  d="M16.004,31.992 C7.179,31.992 -0.001,24.819 -0.001,16.002 C-0.001,7.186 7.179,0.012 16.004,0.012 C24.828,0.012 32.008,7.186 32.008,16.002 C32.008,24.819 24.828,31.992 16.004,31.992 ZM16.004,2.011 C8.282,2.011 1.1000,8.287 1.1000,16.002 C1.1000,23.717 8.282,29.993 16.004,29.993 C23.726,29.993 30.007,23.717 30.007,16.002 C30.007,8.287 23.726,2.011 16.004,2.011 ZM16.004,27.994 L16.004,4.010 C23.005,4.010 28.007,9.378 28.007,16.002 C28.007,22.625 23.005,27.994 16.004,27.994 Z"/>
              </svg>
            </div>
          </div>
          <div class="option-row theme-btn cursor-pointer theme-btn-2" data-theme="2">
            <div class="icon-color yellow">
              <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <image  x="0px" y="0px" width="32px" height="32px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAB2lBMVEUwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAAAAAAAAAAAAAAAAAAAADm5gDm5gDm5gDm5gDm5gAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAAAAAAAADm5gDm5gAwMDAwMDAwMDAwMDAAAAAAAADm5gDm5gAwMDAwMDAwMDAwMDAAAADm5gAwMDAwMDAAAADm5gAwMDAwMDAwMDAwMDAwMDAAAAAAAADm5gAwMDAwMDAwMDAwMDAAAADm5gAwMDAwMDAwMDAAAADm5gAwMDAwMDAwMDAAAADm5gAwMDAwMDAwMDAAAADm5gAwMDAwMDAwMDAwMDAAAADm5gAwMDAwMDDm5gAwMDAwMDAwMDAAAAAwMDAAAADm5gAwMDAwMDAwMDAAAADm5gAwMDAwMDAwMDAAAADm5gDm5gAwMDAwMDAAAADm5gAwMDAwMDAAAAAAAAAAAAAAAADm5gDm5gDm5gDm5gAwMDAwMDAwMDAwMDAwMDAwMDAwMDAwMDAAAADm5gD///9kRu49AAAAmnRSTlMACVaXxOj0xZgLIJbzIQeH+f55QBoKeMOFCMz9oCgnzyIr5tg4K3+75Pbx1rt/Kzfa5ywj5LwOL7i4L7kkzgZ2+/t2vYbgFZKSDYh0dDX8+pmfMPownJsMJrm59VfBLCy/WXaBgnTIPr/AO8nrF+bnFuz8BPs9wMq6upqdNnl6NN6JAXsB0OkxMRTqgL7l+PPYvYAunsJ3GMf3hf7Q7AAAAAFiS0dEnQa78rEAAAAHdElNRQfnCRUPNB+QPP15AAAB1ElEQVQ4y4WT+V8SURTFDxiIucCoZTgWFK1aIVqUMRLaSouYG1ihpaVlZYtaWlpqSvteLmfmj+2By4gzfji/3Xe/73PvvDkHWJfFmrfNZrfb8h3WAhi1vbCI6ypyFG9qlzhdlPJLy8p3WMrLdlZIdO1yZ12vpFy1W6/3VMn0ePV67z769gMHDh46fKS65uix44C/loG6tX79CZ4M4tRpNS0trYYzCIZoU1bnN7IijLMRVQe0pmaEz9Gzssd5XriIS6q6EdC0y4j6eCXd97pkP66qmwHtGq63xOoF0MobaGs3Ak0d6GQXELdLCXSrRkC7CUW6FcVtJtGjmgFaL+7wrpjQh35z4B7uixkDHMQDc+AhhvgIj/kEw+bAUzzjc7hYgog58AIjHM0N5BwxwDG83HrJV7k/M+dDRe2SgnEzYAKKLJ4ar/kGbREjkPlZnWk/xeRJTBmBt3jXEst4yslpU8PEfZzJOMrdyGR4dirbcu/nwiHOW1ZMqaQYCuLDuA5MfMSnJD8ra7auC7DWD/R8+frt+4+fv373ApPTDPzRg+H1iOAk9DrxNzs4Yo8ZEb1/C0OLbvfi4EJSRM+ZFT2hYsfG8LZ6YVTcWriUWl5OLeVZ4/rpfz18c0Cd3sPwAAAAAElFTkSuQmCC" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="access-filter"></div>


<nav class="quicklink-nav">
  <?php include_once('data/quicklink.php'); ?>
  <div class="wrapper">
    <div class="title">
      <div class="text">Quicklink</div>
      <div class="icon"><em class="fa-solid fa-plus"></em></div>
    </div>
    <div class="list-items">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach($quicklink as $d) : ?>
            <div class="swiper-slide">
              <a class="item" href="<?= $d['link'] ?>">
                <div class="icon">
                  <div class="show-inactive"><?= $d['icon'] ?></div>
                  <div class="show-active"><?= $d['iconActive'] ?></div>
                </div>
                <div class="text"><?= $d['title'] ?></div>
              </a>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="arrows">
          <div class="arrow arrow-prev">
            <em class="fa-solid fa-angle-left"></em>
          </div>
          <div class="arrow arrow-next">
            <em class="fa-solid fa-chevron-right"></em>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- Search Container -->
<div class="global-search-container use-gsap">
  <div class="pos-relative">
    <div class="wrapper">
      <div class="container">
        <div class="contents pos-relative">
          <img class="search-pattern" src="./public/assets/app/images/pattern/17.png" alt="">
          <form class="form">
            <div class="input-container">
              <div class="input-wrapper">
                <div class="input-inner">
                  <label for="input-001" class="pos-absolute op-0 pe-none">Search</label>
                  <input id="input-001" name="search" type="text" placeholder="คุณต้องการค้นหาสิ่งใด?">
                  <button type="submit">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M16.0417 9.25002C16.0417 12.8169 13.1502 15.7084 9.58333 15.7084C6.01649 15.7084 3.125 12.8169 3.125 9.25002C3.125 5.68318 6.01649 2.79169 9.58333 2.79169C13.1502 2.79169 16.0417 5.68318 16.0417 9.25002Z" stroke="white" stroke-width="1.25"/>
                      <path d="M15 14.25L17.5 16.75" stroke="white" stroke-width="1.25" stroke-linecap="round"/>
                    </svg>
                  </button>
                </div>
                <div class="btn-close">
                  <div class="hamburger active global-search-toggle">
                    <div></div><div></div><div></div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="tags-container mt-5">
            <p class="h6 fw-400 pl-1 color-white">ค้นหายอดนิยม</p>
            <div class="popular-search-container d-flex fw-wrap ai-center mt-1">
              <div class="ss-tags">
                <div class="tag">
                  <span class="title">กรมคุมประพฤติ</span>
                </div>
                <div class="tag">
                  <span class="title">เอกสาร</span>
                </div>
                <div class="tag">
                  <span class="title">การนัดหมาย</span>
                </div>
              </div>
            </div>      
          </div>
          <?php 
            $contents = [
              [
                'title' => 'นายกฯ ประชุม คกก.ยุทธศาสตร์ชาติ สั่งการ สศช.ทบทวน 
                ปรับปรุงยุทธศาสตร์ชาติให้ทันกับบริบทการพัฒนาโลกอย่างสม่ำเสมอ',
                'imgBg' => './public/assets/app/images/content/01.png'
              ],[
                'title' => 'ที่ปรึกษานายกรัฐมนตรีฝ่ายข้าราชการประจำด้านยุทธศาสตร์และการวางแผน 
                (นายสุรพงษ์ มาลี) นำบุคลากร สลน. เยี่ยมชมพิพิธภัณฑ์เกษตรเฉลิมพระเกียรติพระบาทสมเด็จพระเจ้าอยู่หัว จังหวัดปทุมธานี',
                'imgBg' => './public/assets/app/images/content/02.png'
              ], [
                'title' => 'เลขาธิการนายกรัฐมนตรี ร่วมพิธีวาง พานพุ่มและถวายบังคมวันชาติ และวันพ่อแห่งชาติ 5 ธันวาคม 2566',
                'imgBg' => './public/assets/app/images/content/12.png'
              ]
            ]
          ?>
          <div class="content-lists mt-5">
            <?php foreach($contents as $d) {?>
              <a href="#" class="ss-card ss-card-10">
                <div class="wrapper">
                  <div class="img-container">
                    <div class="ss-img bradius">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="title fw-400 color-white"><?= $d['title'] ?></p>
                    <p class="sm desc color-white">
                      วันนี้ (25 เมษายน 2566) เวลา 11.30 น. นางสาวสุภาวดี ภูพันนา 
                      ผู้อำนวยการกลุ่มบริหารงานบุคคล รักษาการผู้เชี่ยวชาญด้านบริหารทรัพยากรบุคคล 
                      เป็นผู้แทนเลขาธิการนายกรัฐมนตรี พร้อมด้วยบุคลากร สลน. ร่วมพิธีเจริญพระพุทธมนต์และเจริญจิตภาวนา 
                      เพื่อถวายเป็นพระราชกุศลเนื่องในโอกาส
                    </p>
                    <div class="ss-stats">
                    <div class="stat">
                      <div class="icon color-white">
                        <em class="fa-solid fa-calendar"></em>
                      </div>
                      <div class="title">
                        <p class="xs fw-200 color-white">2 กันยายน 2567</p>
                      </div>
                    </div>
                    <div class="stat">
                      <div class="icon color-white">
                        <em class="fa-solid fa-eye"></em>
                      </div>
                      <div class="title">
                        <p class="xs fw-200 color-white">999k</p>
                      </div>
                    </div>
                    <div class="stat">
                      <div class="icon color-white">
                        <em class="fa-solid fa-share-nodes"></em>
                      </div>
                      <div class="title">
                        <p class="xs fw-200 color-white">999k</p>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </a> 
            <?php } ?>
          </div>
        </div>        
      </div>
    </div>       
  </div>
  <div class="search-bg"></div>
</div>
