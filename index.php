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
      <div class="swiper-pagination"></div>
      <div class="arrows">
        <div class="arrow arrow-prev c-pointer">
          <em class="fa-solid fa-arrow-left"></em>
        </div>
        <div class="arrow arrow-next c-pointer">
          <em class="fa-solid fa-arrow-right"></em>
        </div>
      </div>
    </div>
  </section>

  <section class="section-01 pt-5 ovf-visible">
    <div class="pattern style-01">
      <img src="public/assets/app/images/pattern/06.png" alt="Pattern" />
    </div>
    <div class="pattern style-02">
      <img src="public/assets/app/images/pattern/08.png" alt="Pattern">
    </div>
    <div class="container">
      <div class="ss-box">
        <div class="announce" data-aos="fade-up" data-aos-delay="0">
          <div class="text-container">
            <marquee direction="left">
              <p class="fw-400">
                สภาพน้ำท่า วันที่ 9 ก.ย.2567 เวลา 06.00 น.(วันนี้),(เมื่อวาน) เขื่อนภูมิพล ระบาย <span class="color-02">(35),(35)</span> ลบ.ม/วิ  เขื่อนสิริกิติ์ ระบาย <span class="color-02">(116),(116)</span> ลบ.ม./วิ (P.17) อ.บรรพตพิสัย จ.นครสวรรค์
              </p>
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
          <div class="swiper-expand">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php
                  foreach([
                    [
                      'imgInactive' => 'public/assets/app/images/icon/menu-01-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-01-active.svg',
                      'title' => 'สถานการณ์น้ำ<br>รายวัน'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-02-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-02-active.svg',
                      'title' => 'สถานการณ์น้ำ<br>รายสัปดาห์'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-03-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-03-active.svg',
                      'title' => 'ปริมาณน้ำ<br>ในอ่าง/เขื่อน'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-04-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-04-active.svg',
                      'title' => 'ศูนย์ปฏิบัติการ<br>น้ำอัจฉริยะ'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-05-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-05-active.svg',
                      'title' => 'คาดการณ์น้ำท่า'
                    ],[
                      'imgInactive' => 'public/assets/app/images/icon/menu-01-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-01-active.svg',
                      'title' => 'สถานการณ์น้ำ<br>รายวัน'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-02-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-02-active.svg',
                      'title' => 'สถานการณ์น้ำ<br>รายสัปดาห์'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-03-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-03-active.svg',
                      'title' => 'ปริมาณน้ำ<br>ในอ่าง/เขื่อน'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-04-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-04-active.svg',
                      'title' => 'ศูนย์ปฏิบัติการ<br>น้ำอัจฉริยะ'
                    ], [
                      'imgInactive' => 'public/assets/app/images/icon/menu-05-inactive.svg',
                      'imgActive' => 'public/assets/app/images/icon/menu-05-active.svg',
                      'title' => 'คาดการณ์น้ำท่า'
                    ],
                  ] as $i=>$d){
                ?>
                <div class="swiper-slide">
                  <div class="menu-item">
                    <div class="icon">
                      <img class="inactive" src="<?= $d['imgInactive'] ?>" alt="Menu Inactive" />
                      <img class="active" src="<?= $d['imgActive'] ?>" alt="Menu Active" />
                    </div>
                    <div class="text text-center mt-3">
                      <p class="xs fw-400"><?= $d['title'] ?></p>
                    </div>
                  </div>
                </div>
                <?php }?>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow arrow-prev c-pointer h-op-07">
                <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.266171 7.62938L6.62987 13.7544C6.80133 13.9138 7.03097 14.002 7.26933 14C7.50769 13.998 7.73571 13.9059 7.90426 13.7437C8.07282 13.5815 8.16843 13.362 8.1705 13.1326C8.17257 12.9032 8.08094 12.6822 7.91534 12.5171L3.10347 7.88575L19.0909 7.88575C19.332 7.88575 19.5632 7.79357 19.7337 7.62947C19.9042 7.46538 20 7.24282 20 7.01075C20 6.77869 19.9042 6.55613 19.7337 6.39203C19.5632 6.22794 19.332 6.13575 19.0909 6.13575L3.10347 6.13575L7.91534 1.50438C8.00217 1.42366 8.07142 1.32711 8.11907 1.22036C8.16671 1.1136 8.19179 0.998786 8.19284 0.882604C8.19389 0.766421 8.17089 0.651203 8.12518 0.543669C8.07947 0.436134 8.01196 0.338439 7.92661 0.256283C7.84125 0.174127 7.73975 0.109155 7.62802 0.0651588C7.51629 0.0211629 7.39659 -0.000976661 7.27588 3.32705e-05C7.15517 0.0010432 7.03587 0.0251816 6.92496 0.07104C6.81405 0.116897 6.71373 0.183555 6.62987 0.267127L0.266171 6.39213C0.09574 6.55621 -1.24598e-06 6.77873 -1.26723e-06 7.01075C-1.28848e-06 7.24277 0.09574 7.46529 0.266171 7.62938Z" fill="#008FD3"/>
                </svg>
              </div>
              <div class="arrow arrow-next c-pointer h-op-07">
                <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M19.7338 6.37063L13.3701 0.245626C13.1987 0.0862378 12.969 -0.00195766 12.7307 3.59052e-05C12.4923 0.00202947 12.2643 0.0940524 12.0957 0.256284C11.9272 0.418516 11.8316 0.637977 11.8295 0.867399C11.8274 1.09682 11.9191 1.31785 12.0847 1.48288L16.8965 6.11425L0.909099 6.11425C0.667991 6.11425 0.436758 6.20643 0.266268 6.37053C0.0957789 6.53462 -9.29902e-07 6.75718 -9.61838e-07 6.98925C-9.93774e-07 7.22131 0.0957788 7.44387 0.266268 7.60796C0.436757 7.77206 0.66799 7.86425 0.909099 7.86425L16.8965 7.86425L12.0847 12.4956C11.9978 12.5763 11.9286 12.6729 11.8809 12.7796C11.8333 12.8864 11.8082 13.0012 11.8072 13.1174C11.8061 13.2336 11.8291 13.3488 11.8748 13.4563C11.9205 13.5639 11.988 13.6616 12.0734 13.7437C12.1588 13.8259 12.2603 13.8908 12.372 13.9348C12.4837 13.9788 12.6034 14.001 12.7241 14C12.8448 13.999 12.9641 13.9748 13.075 13.929C13.186 13.8831 13.2863 13.8164 13.3701 13.7329L19.7338 7.60787C19.9043 7.44379 20 7.22127 20 6.98925C20 6.75723 19.9043 6.53471 19.7338 6.37063Z" fill="#008FD3"/>
                </svg>
              </div>
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
    <div class="container">
      <div class="ss-box xl">
        <div class="ss-title jc-center">
          <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="450">
            ปริมาณน้ำวันนี้
          </h3>
        </div>
        <div class="mt-3">
          <div class="grids">
            <div class="grid md-50 sm-100 mt-0">
              <div class="grids" data-aos="fade-up" data-aos-delay="600">
                <div class="grid">
                  <h6 class="sm ws-nowrap fw-600 color-s text-center">
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
                  <h6 class="sm ws-nowrap fw-600 color-s text-center">
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
            <div class="grid md-50 sm-100">
              <div class="ss-height-01" data-aos="fade-up" data-aos-delay="300">
                <iframe class="map" src="https://swoc.rid.go.th/index1.html" 
                  style="border-radius:.5rem;" width="100%" height="100%" 
                  frameborder="0" title="ปริมาณน้ำ">
                </iframe>  
              </div>
              <!-- <div class="map-slot" data-aos="fade-up" data-aos-delay="300">
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
              </div> -->
            </div>
          </div>
          <div class="grids flex-col-reverse-sm">
            <div class="grid md-50 sm-100">
              <div class="ss-height-02">
                <div class="pos-relative" data-aos="fade-up" data-aos-delay="150">
                  <div class="float-title pb-2">
                    <h6 class="sm fw-600 color-s text-center">
                      พื้นที่ชลประทาน
                    </h6>
                  </div>
                  <div class="grids">
                    <div class="grid sm-1-3 xs-1-3 mt-0">
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
                    <div class="grid sm-1-3 xs-1-3 mt-0">
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
                    <div class="grid sm-1-3 xs-1-3 mt-0">
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
            </div>
            <div class="grid md-50 sm-100">
              <iframe class="map" src="https://swoc.rid.go.th/index1.html?layer=tmd" data-aos="fade-up" data-aos-delay="300"
                style="border-radius:.5rem;" width="100%" height="100%" frameborder="0" title="ปริมาณฝน">
              </iframe>
              <!-- <div class="map-slot" data-aos="fade-up" data-aos-delay="300">
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
              </div> -->
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
            <div class="grid lg-50 md-100 sm-100">
              <h6 class="fw-600" data-aos="fade-up" data-aos-delay="0">
                ดำเนินการป้องกันและบรรเทาภัยอันเกิด
              </h6>
              <h3 class="fw-600 color-s mt-1" data-aos="fade-up" data-aos-delay="150">
                จากน้ำตามภารกิจอย่างเหมาะสม
              </h3>
            </div>
            <div class="grid lg-50 md-100 sm-100">
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
          <div class="swiper-expand">
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
              <div class="swiper-pagination"></div>
            </div> 
            <div class="arrows">
              <div class="arrow arrow-prev c-pointer">
                <em class="fa-solid fa-arrow-left"></em>
              </div>
              <div class="arrow arrow-next c-pointer">
                <em class="fa-solid fa-arrow-right"></em>
              </div>
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
        <div class="grid lg-50 md-50 sm-100"></div>
        <div class="grid lg-50 md-50 sm-100">
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
      ['tabTitle' => 'ข่าวเด่นชลประทาน'], 
      ['tabTitle' => 'รอบรั้วชลประทาน'], 
      ['tabTitle' => 'โครงการพระราชดำริ'], 
      ['tabTitle' => 'ประกาศทั่วไป'], 
      ['tabTitle' => 'จัดซื้อ/จ้ดจ้าง?'], 
    ];
  ?>
  <section class="section-05 section-padding tab-container">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/03.png')"></div>
    <div class="container">
      <div class="ss-box xl ovf-hidden">
        <div class="ss-title jc-center mt-5">
          <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="0">
            ชลประทานอัปเดต
          </h3>
        </div>  
        <div class="swiper-expand show-mobile">
          <div class="swiper-tabs-01 mt-2" data-aos="fade-up" data-aos-delay="150">
            <div class="swiper-wrapper tabs">
              <?php foreach($tabs01 as $i=>$d) {?>
                <div class="swiper-slide tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <p class="title text-center fw-400"><?= $d['tabTitle'] ?></p>
                </div>
              <?php } ?>
            </div>
          </div>
          <div class="arrows">
            <div class="arrow arrow-prev c-pointer h-op-07" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-71f321063d58c87bb">
              <svg width="18" height="12" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.266171 7.62938L6.62987 13.7544C6.80133 13.9138 7.03097 14.002 7.26933 14C7.50769 13.998 7.73571 13.9059 7.90426 13.7437C8.07282 13.5815 8.16843 13.362 8.1705 13.1326C8.17257 12.9032 8.08094 12.6822 7.91534 12.5171L3.10347 7.88575L19.0909 7.88575C19.332 7.88575 19.5632 7.79357 19.7337 7.62947C19.9042 7.46538 20 7.24282 20 7.01075C20 6.77869 19.9042 6.55613 19.7337 6.39203C19.5632 6.22794 19.332 6.13575 19.0909 6.13575L3.10347 6.13575L7.91534 1.50438C8.00217 1.42366 8.07142 1.32711 8.11907 1.22036C8.16671 1.1136 8.19179 0.998786 8.19284 0.882604C8.19389 0.766421 8.17089 0.651203 8.12518 0.543669C8.07947 0.436134 8.01196 0.338439 7.92661 0.256283C7.84125 0.174127 7.73975 0.109155 7.62802 0.0651588C7.51629 0.0211629 7.39659 -0.000976661 7.27588 3.32705e-05C7.15517 0.0010432 7.03587 0.0251816 6.92496 0.07104C6.81405 0.116897 6.71373 0.183555 6.62987 0.267127L0.266171 6.39213C0.09574 6.55621 -1.24598e-06 6.77873 -1.26723e-06 7.01075C-1.28848e-06 7.24277 0.09574 7.46529 0.266171 7.62938Z" fill="#008FD3"></path>
              </svg>
            </div>
            <div class="arrow arrow-next c-pointer h-op-07" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d27e14d1ca2235ef">
              <svg width="18" height="12" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.7338 6.37063L13.3701 0.245626C13.1987 0.0862378 12.969 -0.00195766 12.7307 3.59052e-05C12.4923 0.00202947 12.2643 0.0940524 12.0957 0.256284C11.9272 0.418516 11.8316 0.637977 11.8295 0.867399C11.8274 1.09682 11.9191 1.31785 12.0847 1.48288L16.8965 6.11425L0.909099 6.11425C0.667991 6.11425 0.436758 6.20643 0.266268 6.37053C0.0957789 6.53462 -9.29902e-07 6.75718 -9.61838e-07 6.98925C-9.93774e-07 7.22131 0.0957788 7.44387 0.266268 7.60796C0.436757 7.77206 0.66799 7.86425 0.909099 7.86425L16.8965 7.86425L12.0847 12.4956C11.9978 12.5763 11.9286 12.6729 11.8809 12.7796C11.8333 12.8864 11.8082 13.0012 11.8072 13.1174C11.8061 13.2336 11.8291 13.3488 11.8748 13.4563C11.9205 13.5639 11.988 13.6616 12.0734 13.7437C12.1588 13.8259 12.2603 13.8908 12.372 13.9348C12.4837 13.9788 12.6034 14.001 12.7241 14C12.8448 13.999 12.9641 13.9748 13.075 13.929C13.186 13.8831 13.2863 13.8164 13.3701 13.7329L19.7338 7.60787C19.9043 7.44379 20 7.22127 20 6.98925C20 6.75723 19.9043 6.53471 19.7338 6.37063Z" fill="#008FD3"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="grids">
          <div class="grid lg-75 md-100 sm-100">
            <div class="grids">
              <div class="grid lg-25 md-30 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                <div class="tabs tabs-01 hide-mobile">
                  <?php foreach($tabs01 as $i=>$d) {?>
                    <div class="tab mb-2 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <p class="title fw-400"><?= $d['tabTitle'] ?></p>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="grid lg-75 md-70 sm-100 mt-0" data-aos="fade-up" data-aos-delay="300">
                <div class="tab-contents">
                  <?php foreach($tabs01 as $i=>$k){?>
                    <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <div class="swiper-01">
                        <div class="swiper-wrapper">
                          <?php
                            foreach([
                              [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย รมช.เกษตร 
                                            ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '5 สิงหาคม 2567'
                              ], [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย รมช.เกษตร 
                                            ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '5 สิงหาคม 2567'
                              ], [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย รมช.เกษตร 
                                            ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '1 สิงหาคม 2567'
                              ], [
                                'img' => 'public/assets/app/images/highlight/09.jpg', 'href' => '#',
                                'title' => 'รมช.เกษตร ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย รมช.เกษตร 
                                            ลุยตรวจน้ำท่วมเชียงใหม่พร้อมมอบถุงยังชีพช่วยผู้ประสบภัย',
                                'date' => '1 สิงหาคม 2567'
                              ],
                            ] as $i=>$d){
                          ?>
                            <div class="swiper-slide">
                              <a href="<?= $d['href'] ?>" class="ss-card ss-card-04">
                                <div class="ss-img horizontal">
                                  <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                                  <div class="date color-white">
                                    <p class="number">06</p>
                                    <p class="xs month-year">ก.ย. <span class="p xxs">2567</span></p>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="wrapper">
                                    <div class="tag bg-p color-white">
                                      <?php foreach($tabs01 as $j=>$k) {?>
                                        <div class="tab-content <?= $j==0? 'active': '' ?>" data-tab="content_<?= $j ?>">
                                          <p class="sm"><?= $k['tabTitle'] ?></p>
                                        </div>
                                      <?php } ?>
                                    </div>
                                  <h6 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h6>
                                  <div class="description mt-1">
                                    <p class="desc">
                                      กรมชลฯ ยกทัพจักรกลพร้อมเจ้าหน้าที่ เดินหน้าช่วยเหลือ - ฟื้นฟู บรรเทาความเดือดร้อนให้ประชาชน
                                      สถานการณ์อุทกภัยที่เกิดขึ้นในหลายพื้นที่ ส่งผลให้ประชาชนได้รับความเดือดร้อน 
                                      เพื่อเป็นการบรรเทาปัญหาให้กับพี่น้องประชาชน กรมชลประทาน ส่งเครื่องจักร เครื่องมือ 
                                      และกำลังคนเข้าช่วยเหลือจนกว่าสถานการณ์จะกลับเข้าสู่สภาวะปกติ เดินหน้าเร่งระบายน้ำในพื้นที่เสี่ยง 
                                      กำจัดวัชพืชสิ่งกีดขวางทางน้ำ ช่วยเพิ่มประสิทธิภาพการระบายน้ำ ตลอดจนภารกิจฟื้นฟูหลังน้ำลด 
                                      ตามนโยบายของรัฐบาล
                                    </p>
                                  </div>
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
                                </div>
                              </a>
                            </div>
                          <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                          <div id="btn01" class="btns d-flex ai-end jc-end">
                            <a href="#" class="btn btn-action btn-p bradius-round">
                              ดูทั้งหมด
                            </a>
                          </div> 
                      </div>
                    </div>
                  <?php } ?>
                </div>    
              </div>
            </div>        
          </div>
          <div class="grid lg-25 md-100 sm-100" data-aos="fade-up" data-aos-delay="450">
            <div class="grids">
              <div class="grid lg-100 md-50 sm-100 mt-0">
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
                    <div class="arrows">
                      <div class="arrow arrow-prev c-pointer">
                        <em class="fa-solid fa-arrow-left"></em>
                      </div>
                      <div class="arrow arrow-next c-pointer">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>
                    </div>
                  </div>                 
                </div>                           
              </div>
              <div class="grid lg-100 md-50 sm-100 mt-0">
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
                    <div id="btn02" class="btns d-flex ai-end jc-end">
                      <a href="#" class="btn btn-action btn-p bradius-round">
                        ดูทั้งหมด
                      </a>
                    </div> 
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