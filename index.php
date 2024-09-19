<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
<?php include_once('layout/topnav.php'); ?>

  <section class="banner-01">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          foreach([
            ['img' => 'public/assets/app/images/bg/08.jpg',], 
            ['img' => 'public/assets/app/images/bg/08.jpg',], 
            ['img' => 'public/assets/app/images/bg/08.jpg',], 
            ['img' => 'public/assets/app/images/bg/08.jpg',]
          ] as $i=>$d){
        ?>
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </section>

  <section class="section-01 pt-5 ovf-visible">
    <div class="pattern style-01">
      <img src="public/assets/app/images/pattern/06.png" alt="Pattern" />
    </div>
    <div class="pattern style-02">
      <img src="public/assets/app/images/pattern/08.png" alt="">
    </div>
    <div class="container">
      <div class="ss-box">
        <div class="announce" data-aos="fade-up" data-aos-delay="0">
          <div class="text-container">
            <marquee direction="left">
              สภาพน้ำท่า วันที่  9 ก.ย.2567 เวลา 06.00 น.(วันนี้),(เมื่อวาน) เขื่อนภูมิพล ระบาย  (35),(35)  ลบ.ม/วิ  เขื่อนสิริกิติ์ ระบาย(116),(116) ลบ.ม./วิ  (P.17) อ.บรรพตพิสัย จ.นครสวรรค์
            </marquee>
          </div>  
          <div class="icon">
            <img src="public/assets/app/images/icon/announce.svg" alt="Announce">
          </div>
        </div>
      </div>
      <div class="ss-box xl">
        <div class="ss-title jc-center mt-5">
          <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="150">
            พัฒนาแหล่งน้ำและเพิ่มพื้นที่ชลประทาน
          </h3>
        </div>  
        <p class="lg text-center" data-aos="fade-up" data-aos-delay="300">
          ตามศักยภาพของลุ่มน้ำให้เกิดความสมดุล
        </p> 
        <div class="menus-slider mt-6 pt-2" data-aos="fade-up" data-aos-delay="450">
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php
                foreach([
                  [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'สถานการณ์น้ำ<br>รายวัน'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'สถานการณ์น้ำ<br>รายสัปดาห์'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-03.svg',
                    'title' => 'ปริมาณน้ำ<br>ในอ่าง/เขื่อน'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-04.svg',
                    'title' => 'ศูนย์ปฏิบัติการ<br>น้ำอัจฉริยะ'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-05.svg',
                    'title' => 'คาดการณ์น้ำท่า'
                  ],
                  [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'สถานการณ์น้ำ<br>รายวัน'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'สถานการณ์น้ำ<br>รายสัปดาห์'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'ปริมาณน้ำ<br>ในอ่าง/เขื่อน'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'ศูนย์ปฏิบัติการ<br>น้ำอัจฉริยะ'
                  ], [
                    'imgInactive' => 'public/assets/app/images/icon/menu-02.svg',
                    'title' => 'คาดการณ์น้ำท่า'
                  ],
                ] as $i=>$d){
              ?>
              <div class="swiper-slide">
                <div class="menu-item">
                  <div class="icon">
                    <img src="<?= $d['imgInactive'] ?>" alt="Menu 2" />
                  </div>
                  <div class="text text-center mt-3">
                    <p class="xs fw-400"><?= $d['title'] ?></p>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-02 section-padding">
    <div class="pattern style-01">
      <img src="public/assets/app/images/pattern/02.png" alt="">
    </div>
    <div class="pattern style-02">
      <img src="public/assets/app/images/pattern/03.png" alt="">
    </div>
    <div class="pattern style-03">
      <img src="public/assets/app/images/pattern/04.png" alt="">
    </div>
    <div class="img-bg"></div>
    <div class="container">
      <div class="ss-box xl">
        <div class="ss-title jc-center">
          <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="450">
            ปริมาณน้ำวันนี้
          </h3>
        </div>
        <div class="mt-3">
          <div class="grids">
            <div class="grid mt-0">
              <div class="grids" data-aos="fade-up" data-aos-delay="600">
                <div class="grid">
                  <h6 class="sm fw-600 color-s text-center">
                    เขื่อนใหญ่
                  </h6>
                  <div class="wave-slot mt-3">
                    <div class="water-wave">
                      <div class="wrapper">
                        <div class="inner-wrapper">
                          <div class="waves">
                            <div class="wave-1"></div>
                            <div class="wave-2"></div>
                            <div class="wave-3"></div>
                          </div>
                          <div class="text-top">
                            <p class="xxs color-s fw-600">ปริมาณน้ำปัจจุบัน</p>
                            <p class="lg color-s fw-800 mt-1">54.7%</p>
                          </div>
                          <div class="text-bottom">
                            <p class="lg color-white fw-500">4846.35</p>
                            <p class="xxs color-white fw-300">พันล้าน ลบ.ม</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid">
                  <h6 class="sm fw-600 color-s text-center">
                    อ่างเก็บน้ำขนาดกลาง
                  </h6>
                  <div class="wave-slot mt-3">
                    <div class="water-wave type-02">
                      <div class="wrapper">
                        <div class="inner-wrapper">
                          <div class="waves">
                            <div class="wave-1"></div>
                            <div class="wave-2"></div>
                            <div class="wave-3"></div>
                          </div>
                          <div class="text-top">
                            <p class="xxs color-s fw-600">ปริมาณน้ำปัจจุบัน</p>
                            <p class="lg color-s fw-800 mt-1">10.1 มม.</p>
                          </div>
                          <div class="text-bottom">
                            <p class="lg color-white fw-500">1046.10</p>
                            <p class="xxs color-white fw-300">พันล้าน ลบ.ม</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="grid">
              <div class="map-slot" data-aos="fade-up" data-aos-delay="300">
                <div class="header">
                  <img class="logo mr-2" src="public/assets/app/images/logo-alone.png" alt="Logo" />
                  <div class="link bradius">SWOC</div>
                  <div class="options">
                    <div class="icon">
                      <em class="fa-solid fa-bars"></em>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-bookmark"></em>
                    </div>
                  </div>
                </div>
                <div class="body">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/temp/map.jpg')"></div>
                </div>
              </div>
            </div>
            <div class="grid">
              <div class="pos-relative" data-aos="fade-up" data-aos-delay="150">
                <div class="float-title pb-2">
                  <h6 class="sm fw-600 color-s text-center">
                    พื้นที่ชลประทาน
                  </h6>
                </div>
                <div class="grids">
                  <div class="grid sm-1-3 mt-0">
                    <div class="ss-card ss-card-03 bradius">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/02.jpg');"></div>
                      </div>
                      <div class="text-wrapper">
                        <h4 class="sm fw-600">50%</h4>
                        <p class="lg fw-400">ข้าว</p>
                      </div>
                    </div>
                  </div>
                  <div class="grid sm-1-3 mt-0">
                    <div class="ss-card ss-card-03 bradius">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/03.jpg');"></div>
                      </div>
                      <div class="text-wrapper">
                        <h4 class="sm fw-600">26%</h4>
                        <p class="lg fw-400">พื้นที่อื่นๆ</p>
                      </div>
                    </div>
                  </div>
                  <div class="grid sm-1-3 mt-0">
                    <div class="ss-card ss-card-03 bradius">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                      </div>
                      <div class="text-wrapper">
                        <h4 class="sm fw-600">8%</h4>
                        <p class="lg fw-400">ผลไม้ยืนต้น</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid">
              <div class="map-slot" data-aos="fade-up" data-aos-delay="300">
                <div class="header">
                  <img class="logo mr-2" src="public/assets/app/images/logo-alone.png" alt="Logo" />
                  <div class="link bradius">SWOC</div>
                  <div class="options">
                    <div class="icon">
                      <em class="fa-solid fa-bars"></em>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-bookmark"></em>
                    </div>
                  </div>
                </div>
                <div class="body">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/temp/map.jpg')"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-03">
    <div class="img-bg" data-aos="fade-in" data-aos-delay="0" 
      style="background-image:url('public/assets/app/images/bg/01.jpg');" 
    ></div>
    <div class="container">
      <div class="section-padding">
        <div class="ss-box xl">
          <div class="grids">
            <div class="grid">
              <h6 class="fw-600" data-aos="fade-up" data-aos-delay="0">
                ดำเนินการป้องกันและบรรเทาภัยอันเกิด
              </h6>
              <h3 class="fw-600 color-s mt-1" data-aos="fade-up" data-aos-delay="150">
                จากน้ำตามภารกิจอย่างเหมาะสม
              </h3>
            </div>
            <div class="grid">
              <div class="panel-card bradius" data-aos="fade-up" data-aos-delay="300">
                <div class="card-title bradius">
                  <p class="lg fw-500">รายงานสถานการณ์น้ำประจำวัน</p>
                </div>
                <div class="items">
                  <?php foreach([1,2,3,4,5] as $i=>$d){?>
                    <div class="item">
                      <div class="dot"></div>
                      <div class="text-wrapper">
                        <p class="sm fw-500">
                          สถานการณ์น้ำและการบริหารจัดการน้ำฤดูฝนปี 2567 
                          <span class="color-danger mr-1">16 ก.ย. 67</span>
                          <span class="tag">NEW</span>
                        </p>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-padding">
        <div class="ss-box xl">
          <h6 class="fw-500 color-white text-center" data-aos="fade-up" data-aos-delay="0">
            เสริมสร้างการมีส่วนร่วมในกระบวนการ
          </h6>
          <h2 class="fw-500 color-white text-center mt-1" data-aos="fade-up" data-aos-delay="150">
            พัฒนาแหล่งน้ำ และการบริหารจัดการน้ำ
          </h2>
          <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="300">
            <div class="tag-title">
              <h6 class="sm fw-400 color-white">บริการกรมชลประทาน</h6>
            </div>
          </div>
          <div class="swiper" data-aos="fade-up" data-aos-delay="450">
            <div class="swiper-wrapper">
              <?php
                foreach([
                  [
                    'img' => 'public/assets/app/images/highlight/06.jpg',
                    'title' => 'สมุดโทรศัพท์ กรมชลประทาน'
                  ], [
                    'img' => 'public/assets/app/images/highlight/07.jpg',
                    'title' => 'การยื่นคำขอใบอนุญาตใช้น้ำ'
                  ], [
                    'img' => 'public/assets/app/images/highlight/08.jpg',
                    'title' => 'ระบบบริหารการจัดซื้อจัดจ้าง กรมชลประทาน'
                  ], [
                    'img' => 'public/assets/app/images/highlight/06.jpg',
                    'title' => 'สมุดโทรศัพท์ กรมชลประทาน'
                  ], [
                    'img' => 'public/assets/app/images/highlight/07.jpg',
                    'title' => 'การยื่นคำขอใบอนุญาตใช้น้ำ'
                  ], [
                    'img' => 'public/assets/app/images/highlight/08.jpg',
                    'title' => 'ระบบบริหารการจัดซื้อจัดจ้าง กรมชลประทาน'
                  ],
                ] as $i=>$d){
              ?>
                <div class="swiper-slide">
                  <a class="ss-card ss-card-02 highlight bradius" href="#">
                    <div class="wrapper">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                        <div class="hover-filter type-01"></div>
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                      </div>
                      <div class="text-wrapper">
                        <div class="title"><?= $d['title'] ?></div>
                      </div>
                    </div>
                  </a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-04">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/09.jpg')"></div>
    <div class="container">
      <div class="grids">
        <div class="grid lg-50"></div>
        <div class="grid lg-50">
          <div class="text-wrapper text-center pos-relative" data-aos="fade-up" data-aos-delay="150">
            <svg width="16" height="21" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.6343 1.84098C11.0526 1.17396 10.4986 0.560299 10 0C9.50138 0.58698 8.94737 1.20064 8.36565 1.84098C4.84765 5.73639 0 11.1526 0 15.3682C0 18.0363 1.10803 20.4376 2.93629 22.1718C4.73684 23.9061 7.22992 25 10 25C12.7701 25 15.2632 23.9328 17.0637 22.1718C18.8643 20.4376 20 18.0096 20 15.3682C20 11.1526 15.1524 5.76307 11.6343 1.84098Z" fill="white"/>
            </svg>
            <p class="color-white text-center fw-400 mt-3">
              เพิ่มพื้นที่ชลประทานอย่างยั่งยืนขับเคลื่อนด้วยความร่วมมือ<br> 
              <span class="h5 fw-700">เพื่อการพัฒนาทรัพยากรน้ำ<br>ที่ทั่วถึงและเป็นธรรม</span>
            </p>      
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
     $tabs01 = [
      ['title' => 'ข่าวเด่นชลประทาน'], 
      ['title' => 'รอบรั้วชลประทาน'], 
      ['title' => 'โครงการพระราชดำริ'], 
      ['title' => 'ประกาศทั่วไป'], 
      ['title' => 'จัดซื้อ/จ้ดจ้าง?'], 
    ];
  ?>
  <section class="section-05 section-padding tab-container">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/03.png')"></div>
    <div class="container">
      <div class="ss-box xl">
        <div class="ss-title jc-center mt-5">
          <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="0">
            ชลประทานอัปเดต
          </h3>
        </div>  
        <div class="grids">
          <div class="grid lg-75">
            <div class="grids">
              <div class="grid lg-25 mt-0" data-aos="fade-up" data-aos-delay="150">
                <div class="tabs tabs-01">
                  <?php foreach($tabs01 as $i=>$d) {?>
                    <div class="tab mb-2 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <p class="title fw-400"><?= $d['title'] ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="grid lg-75 mt-0" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-contents">
                  <?php foreach($tabs01 as $i=>$k){?>
                    <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <div class="swiper-01">
                        <div class="swiper-wrapper">
                          <?php
                            foreach([
                              [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '5 สิงหาคม 2567'
                              ], [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '5 สิงหาคม 2567'
                              ], [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '1 สิงหาคม 2567'
                              ], [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '1 สิงหาคม 2567'
                              ],
                            ] as $i=>$d){
                          ?>
                            <div class="swiper-slide">
                              <a href="<?= $d['href'] ?>" class="ss-card ss-card-04">
                                <div class="ss-img horizontal">
                                  <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                                  <div class="tag bg-p color-white">
                                    <p class="sm">ข่าวเด่นชลประทาน</p>
                                  </div>
                                  <div class="line-1"></div>
                                  <div class="line-2"></div>
                                  <div class="hover-filter"></div>
                                </div>
                                <div class="text-container pt-4">
                                  <h6 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h6>
                                  <div class="ss-stats mt-6">
                                    <div class="stat color-gray-01">
                                      <div class="icon">
                                        <em class="fa-solid fa-eye"></em>
                                      </div>
                                      <div class="text">
                                        <p class="xs">999k</p>
                                      </div>
                                    </div>
                                    <div class="stat color-gray-01">
                                      <div class="icon">
                                        <em class="fa-solid fa-share-nodes"></em>
                                      </div>
                                      <div class="text">
                                        <p class="xs">999k</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <?php }?>
                        </div>
                        <!-- <div class="btns d-flex ai-end jc-end">
                          <a href="#" class="btn btn-action btn-p bradius-round">
                            ดูทั้งหมด
                          </a>
                        </div>  -->
                      </div>
                    </div>
                  <?php } ?>
                </div>    
              </div>
            </div>        
          </div>
          <div class="grid lg-25" data-aos="fade-up" data-aos-delay="450">
            <div class="ovf-hidden">
              <div class="swiper-02">
                <div class="swiper-wrapper">
                  <?php
                    foreach([
                      ['img' => 'public/assets/app/images/highlight/10.jpg', 'href' => '#',], 
                      ['img' => 'public/assets/app/images/highlight/10.jpg', 'href' => '#',], 
                      ['img' => 'public/assets/app/images/highlight/10.jpg', 'href' => '#',], 
                      ['img' => 'public/assets/app/images/highlight/10.jpg', 'href' => '#',],
                    ] as $i=>$d){
                  ?>
                    <div class="swiper-slide">
                      <a href="<?= $d['href'] ?>" class="ss-card ss-card-05">
                        <div class="ss-img bradius">
                          <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                          <div class="line-1"></div>
                          <div class="line-2"></div>
                          <div class="hover-filter"></div>
                        </div>
                      </a>
                    </div>
                  <?php }?>
                </div>
              </div>    
              <div class="panel-card bradius" data-aos="fade-up" data-aos-delay="300">
                <p class="h6 fw-700 color-s">เอกสารเผยแพร่</p>
                  <div class="items">
                    <div class="item">
                      <div class="dot"></div>
                        <div class="text-wrapper">
                          <p class="title sm fw-500">
                            สถานการณ์น้ำและการบริหารจัดการน้ำฤดูฝนปี 2567 
                            <span class="color-danger mr-1">16 ก.ย. 67</span>
                          </p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="dot"></div>
                        <div class="text-wrapper">
                          <p class="title sm fw-500">
                            สถานการณ์น้ำและการบริหารจัดการน้ำฤดูฝนปี 2567 
                            <span class="color-danger mr-1">16 ก.ย. 67</span>
                          </p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="dot"></div>
                        <div class="text-wrapper">
                          <p class="title sm fw-500">
                            สถานการณ์น้ำและการบริหารจัดการน้ำฤดูฝนปี 2567 
                            <span class="color-danger mr-1">16 ก.ย. 67</span>
                          </p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="dot"></div>
                        <div class="text-wrapper">
                          <p class="title sm fw-500">
                            สถานการณ์น้ำและการบริหารจัดการน้ำฤดูฝนปี 2567 
                            <span class="color-danger mr-1">16 ก.ย. 67</span>
                          </p>
                        </div>
                      </div>
                      <div class="item">
                        <div class="dot"></div>
                        <div class="text-wrapper">
                          <p class="title sm fw-500">
                            สถานการณ์น้ำและการบริหารจัดการน้ำฤดูฝนปี 2567 
                            <span class="color-danger mr-1">16 ก.ย. 67</span>
                          </p>
                        </div>
                      </div>
                    </div>
                </div>  
                <div class="btns d-flex ai-end jc-end">
                  <a href="#" class="btn btn-action btn-p bradius-round">
                    ดูทั้งหมด
                  </a>
                </div>              
            </div>           
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-06 ovf-hidden" data-aos="fade-in" data-aos-delay="0">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          foreach([
            [
              'img' => 'public/assets/app/images/highlight/14.jpg',
              'title' => 'Open Data กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/11.jpg',
              'title' => 'ห้องสมุดกรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/01.png',
            ], [
              'img' => 'public/assets/app/images/highlight/12.jpg',
              'title' => 'ศูนย์ความรู้กลาง <br /> กรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/02.png',
            ], [
              'img' => 'public/assets/app/images/highlight/13.jpg',
              'title' => 'ศูนย์ข้อมูลข่าวสาร <br /> กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/15.jpg',
              'title' => 'ศูนย์ปฏิบัติการต่อต้าน <br /> การทุจริต กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/16.jpg',
              'title' => 'การฌาปนกิจสงเคราะห์ <br /> กรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/03.png',
            ],
          ] as $i=>$d){
        ?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-01 highlight" href="#">
              <div class="wrapper">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                  <div class="hover-filter type-02"></div>
                  <div class="line-1"></div>
                  <div class="line-2"></div>
                  <?php if( $d['logo'] === true ) {?>
                    <div class="logo">
                      <img src="<?= $d['imgLogo'] ?>" alt="Logo">
                    </div>
                  <?php } ?>
                </div>
                <div class="text-wrapper">
                  <div class="title"><?= $d['title'] ?></div>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
    </div>
  </section>
  
  <?php include_once('layout/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>