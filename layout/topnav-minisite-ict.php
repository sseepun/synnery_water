
<?php
  $topnavMenu = [
    [
      'name' => 'หน้าหลัก',
      'hasChildren' => false,
    ], [
      'name' => 'ข้อมูลทั่วไป',
      'hasChildren' => true,
    ], [
      'name' => 'หน่วยงานภายใน',
      'hasChildren' => true,
    ], [
      'name' => 'บุคลากร',
      'hasChildren' => true,
    ], [
      'name' => 'สารสนเทศภายใน',
      'hasChildren' => true,
    ], [
      'name' => 'ติดต่อหน่วยงาน',
      'hasChildren' => true,
    ], 
  ];
?>
<nav class="topnav minisite ict">
  <div class="container topnav-container">
    <div class="pattern">
      <img src="public/assets/app/images/pattern/01.png" alt="Pattern" />
    </div>
    <div class="topnav-wrapper">
      <div class="topnav-left">
        <a href="#" class="logo">
          <img src="public/assets/app/images/logo/ict.svg" alt="Logo" />
          <div class="text">
            <h1 class="main-title">ศูนย์เทคโนโลยีสารสนเทศ<br>และการสื่อสาร</h1>
          </div>
        </a>
        <p class="color-white sm text-title hide-tablet">กรมชลประทาน กระทรวงเกษตรและสหกรณ์</p>
      </div>
      <div class="topnav-right">
        <div class="topnav-top">
          <p class="color-white sm text-title show-mobile">กรมชลประทาน กระทรวงเกษตรและสหกรณ์</p>
          <div class="pattern style-01">
            <img src="public/assets/app/images/pattern/wave.svg" alt="Pattern" />
          </div>
          <div class="options">
            <div class="icon icon-circle">
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
                      ]
                    ?>
                    <?php 
                      $submenuRightContent = [
                        ['title' => 'Level 2'],
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
