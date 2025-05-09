<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('layout/topnav-minisite-intra.php'); ?>

  <section class="banner-03">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          foreach([
            ['img' => 'public/assets/app/images/banner/04.jpg',], 
            ['img' => 'public/assets/app/images/banner/04.jpg',], 
            ['img' => 'public/assets/app/images/banner/04.jpg',], 
          ] as $i=>$d){
        ?>
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="bg-gradient bg-gradient-10"></div>
            <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
            <div class="container">
              <div class="text-wrapper animate" style="--delay:.4s;">
                <h1 class="title fw-700 color-white lh-sm">สารสนเทศภายใน</h1>
                <p class="h2 desc color-white mt-2 lh-sm">กรมชลประทาน</p> 
              </div>
            </div>
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

  <?php 
    $tabsServices = [
      ['title' => 'สารสนเทศ ศทส.'], ['title' => 'ระบบสารสนเทศและการให้บริการ']
    ];
    $menuServices01 = [
      ["imgBg" => "public/assets/app/images/content/61.png", "title" => "ระบบสมุดโทรศัพท์ออนไลน์",],
      ["imgBg" => "public/assets/app/images/content/62.png", "title" => "ระบบสารสนเทศทรัพยากรบุคคล",],
      ["imgBg" => "public/assets/app/images/content/63.png", "title" => "ระบบบริหารการฝึกอบรม<br>กรมชลประทาน",],
      ["imgBg" => "public/assets/app/images/content/64.png", "title" => "ระบบ Slip Online<br>กรมชลประทาน",],
      ["imgBg" => "public/assets/app/images/content/65.png", "title" => "ระบบขอหนังสือรับรองออนไลน์<br>(HR-Cert)",],
      ["imgBg" => "public/assets/app/images/content/66.png", "title" => "ระบบเผยแพร่คุณลักษณะ<br>เฉพาะครุภัณฑ์",],
      ["imgBg" => "public/assets/app/images/content/67.png", "title" => "แอปพลิเคชันของ<br>กรมชลประทาน",],
      ["imgBg" => "public/assets/app/images/content/68.jpg", "title" => "บริการด้านเครือข่าย<br>และการสื่อสาร",],
    ];
  ?>
  <section class="section-01 tab-container">
    <div class="container">
      <div class="services-container intranet" data-aos="fade-up" data-aos-delay="300">
        <div class="body">
          <div class="menus-services">
            <?php foreach($menuServices01 as $d) { ?>
              <div class="menu-item">
                <a href="#" class="ss-card ss-card-09 intranet">
                  <div class="ss-img square">
                    <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
                  </div>
                  <div class="text-container">
                    <div class="wrapper">
                      <p class="text-center color-white fw-500 title"><?= $d['title'] ?></p>
                    </div>
                  </div>
                </a>
              </div> 
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

   <?php 
    $tabsData = [
      ["tabTitle" => "ระบบงานด้านบุคคล"],
      ["tabTitle" => "ระบบงานด้านการเงินและพัสดุ"],
      ["tabTitle" => "ระบบงานสนับสนุนด้านอื่น ๆ"],
      ["tabTitle" => "ระบบงานด้านน้ำและเกษตร"],
      ["tabTitle" => "ระบบโทรมาตรและ CCTV"],
    ]
  ?>
  <section class="section section-padding section-12 tab-container">
    <div class="container">
      <div class="ss-title jc-center">
        <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="0">
          ระบบสำนักงานอัตโนมัติ
        </h3>
      </div> 
      <div class="swiper-tabs-03 mt-2 ovf-hidden" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-wrapper tabs tabs-02 jc-center">
          <?php foreach($tabsData as $i=>$d) {?>
            <div class="swiper-slide tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title text-center fw-400"><?= $d['tabTitle'] ?></p>
            </div>
          <?php } ?>
        </div>
      </div>  
      <div class="tab-contents mt-4" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($tabsData as $i=>$d) {?>   
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <?php 
              if($i == 0){include('data/tabcontent02.php');} 
              else if($i == 1){include('data/tabcontent02.php');}
              else if($i == 2){include('data/tabcontent02.php');}
              else if($i == 3){include('data/tabcontent02.php');}
              else if($i == 4){include('data/tabcontent02.php');}
            ?>
          </div>
        <?php } ?>
      </div>          
    </div>                
  </section>

  <?php 
    $news = [
      ["imgBg" => 'public/assets/app/images/content/17.png',], 
      ["imgBg" => 'public/assets/app/images/content/18.png',],
      ["imgBg" => 'public/assets/app/images/content/19.png',],
      ["imgBg" => 'public/assets/app/images/content/17.png',],
      ["imgBg" => 'public/assets/app/images/content/18.png',],
      ["imgBg" => 'public/assets/app/images/content/19.png',],
    ]
  ?>
  <section class="section-padding section-10 pt-3" data-aos="fade-up" data-aos-delay="450">
    <div class="container">
      <div class="grids">
        <div class="grid xl-75 lg-2-3 md-60 sm-100">
          <div class="pos-relative">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php foreach($news as $d) {?>
                  <div class="swiper-slide">
                    <div class="ss-card ss-card-07 minisite">
                      <div class="wrapper">
                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/17.png')"></div>
                          </div>
                        </div>
                        <div class="text-container">
                          <h6 class="title fw-600">
                            อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.
                          </h6>
                          <p class="desc mt-6">
                            เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                            สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                            เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                            ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                            ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                            แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ
                          </p>
                          <div class="tag bg-p color-white">
                            <p class="sm fw-500">ข่าวเด่นชลประทาน</p>
                          </div>
                          <div class="ss-stats color-gray-01">
                            <div class="stat">
                              <div class="icon"><em class="fa-solid fa-calendar"></em></div>
                              <p class="title">28 ม.ค. 68</p>
                            </div>
                            <div class="stat">
                              <div class="icon"><em class="fa-solid fa-eye"></em></div>
                              <p class="title">999k</p>
                            </div>
                            <div class="stat">
                              <div class="icon"><em class="fa-solid fa-share-nodes"></em></div>
                              <p class="title">999k</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
            <div class="swiper-pagination"></div>  
          </div>    
        </div>    
        <div class="grid xl-25 lg-1-3 md-40 sm-100">
          <div class="ss-card ss-card-11 mb-3">
            <div class="ss-img bradius-2">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/73.png')"></div>
            </div>
            <div class="text-container">
              <div class="wrapper">
                <h5 class="lg color-white fw-700">
                  ค่านิยมและ<br>วัฒนธรรมองค์กร</h5> 
                <p class="lg color-white">กรมชลประทาน</p> 
              </div>  
            </div>
          </div>
          <div class="ss-card ss-card-11">
            <div class="ss-img bradius-2">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/74.png')"></div>
            </div>
            <div class="text-container">
              <div class="wrapper">
                <h5 class="lg color-white fw-700">
                  ค่านิยมและ<br>วัฒนธรรมองค์กร</h5> 
                <p class="lg color-white">กรมชลประทาน</p> 
              </div>  
            </div>
          </div>
        </div>        
      </div>              
    </div>                
  </section>

  <?php 
    $tabsData = [
      ["tabTitle" => "ข่าวสารประชาสัมพันธ์"],
      ["tabTitle" => "ข่าวการเงิน"],
    ]
  ?>
  <section class="section section-padding tab-container pt-6">
    <div class="container">
      <div class="ss-title jc-center">
        <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="0">
          ข่าวกิจกรรม
        </h3>
      </div> 
      <div class="swiper-tabs-03 mt-2 ovf-hidden" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-wrapper tabs tabs-02 jc-center">
          <?php foreach($tabsData as $i=>$d) {?>
            <div class="swiper-slide tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title text-center fw-400"><?= $d['tabTitle'] ?></p>
            </div>
          <?php } ?>
        </div>
      </div>  
      <div class="tab-contents mt-4" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($tabsData as $i=>$d) {?>   
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <?php 
              if($i == 0){include('data/tabcontent03.php');} 
              else if($i == 1){include('data/tabcontent03.php');}
              else if($i == 2){include('data/tabcontent03.php');}
              else if($i == 3){include('data/tabcontent03.php');}
              else if($i == 4){include('data/tabcontent03.php');}
            ?>
          </div>
        <?php } ?>
      </div>          
    </div>                
  </section>

  <section class="section-04">
    <div class="filter bg-gradient-11"></div>
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/27.jpg')"></div>
    <div class="container">
      <div class="grids">
        <div class="grid xl-50 lg-45 md-50 sm-100"></div>
        <div class="grid xl-50 lg-55 md-50 sm-100">
          <div class="text-wrapper text-center pos-relative" data-aos="fade-up" data-aos-delay="150">
            <svg width="16" height="21" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.6343 1.84098C11.0526 1.17396 10.4986 0.560299 10 0C9.50138 0.58698 8.94737 1.20064 8.36565 1.84098C4.84765 5.73639 0 11.1526 0 15.3682C0 18.0363 1.10803 20.4376 2.93629 22.1718C4.73684 23.9061 7.22992 25 10 25C12.7701 25 15.2632 23.9328 17.0637 22.1718C18.8643 20.4376 20 18.0096 20 15.3682C20 11.1526 15.1524 5.76307 11.6343 1.84098Z" fill="white"/>
            </svg>
            <h6 class="color-white text-center fw-400 mt-3 xs-no-br">
              เพิ่มพื้นที่ชลประทานอย่างยั่งยืนขับเคลื่อนด้วยความร่วมมือ<br> 
            </h6> 
            <p class="h4 color-white fw-700 sm-no-br">เพื่อการพัฒนาทรัพยากรน้ำ<br>ที่ทั่วถึงและเป็นธรรม</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
      $content = [
        [
          "imgBg" => 'public/assets/app/images/magazine/11.png',
          "title" => 'คู่มือการบริหารจัดการและการกำกับ ข้อมูลกรมชลประทาน',
        ],[
          "imgBg" => 'public/assets/app/images/magazine/12.png',
          "title" => 'คู่มือดำเนินงานด้านการส่งเสริมและ การคุ้มครองข้อมูลส่วนบุคคล',
        ],[
          "imgBg" => 'public/assets/app/images/magazine/13.png',
          "title" => 'คู่มือการบริหารจัดการและการกำกับ ข้อมูลกรมชลประทาน',
        ],[
          "imgBg" => 'public/assets/app/images/magazine/14.png',
          "title" => 'คู่มือดำเนินงานด้านการส่งเสริมและ การคุ้มครองข้อมูลส่วนบุคคล',
        ],
      ]
    ?>

  <section class="section-padding section-03 minisite">
    <div class="container">
      <div class="ss-title jc-center">
        <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="450">เอกสารเผยแพร่จากภายนอก</h3>
      </div>
      <div class="grids jc-center mt-4" data-aos="fade-up" data-aos-delay="600">
        <?php foreach($content as $d) {?>
          <div class="grid lg-25">
            <a href="#" class="ss-card ss-card-05 type-magazine minisite">
              <div class="img-container">
                <div class="ss-img no-hover">
                  <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
                </div>
              </div>
              <div class="text-container">
                <p class="lg title"><?= $d['title'] ?></p>
                <div class="ss-stats color-gray-01">
                  <div class="stat">
                    <div class="icon"><em class="fa-solid fa-calendar"></em></div>
                    <p class="title">28 ม.ค. 68</p>
                  </div>
                  <div class="stat">
                    <div class="icon"><em class="fa-solid fa-eye"></em></div>
                    <p class="title">999k</p>
                  </div>
                  <div class="stat">
                    <div class="icon"><em class="fa-solid fa-share-nodes"></em></div>
                    <p class="title">999k</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php } ?>
      </div>
      <div class="btns d-flex ai-end jc-center mt-6">
        <a href="#" class="btn btn-action btn-p bradius-round">
          ดูทั้งหมด
        </a>
      </div> 
    </div>
  </section>

  <section class="section-06" data-aos="fade-in" data-aos-delay="0">
    <div class="swiper pb-0">
      <div class="swiper-wrapper">
        <?php
          foreach([
            [
              'img' => 'public/assets/app/images/content/45.jpg',
              'title' => 'เว็บไซต์กรมชลประทาน',
              'imgLogo' => 'public/assets/app/images/logo/09.png',
              'logo' => true,
            ], [
              'img' => 'public/assets/app/images/highlight/19.png',
              'title' => 'เว็บไซต์กระทรวงเกษตรและสหกรณ์',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/01.png',
            ], [
              'img' => 'public/assets/app/images/highlight/20.png',
              'title' => 'ศูนย์ประมวลวิเคราะห์สถานการณ์น้ำ',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/02.png',
            ], [
              'img' => 'public/assets/app/images/highlight/21.png',
              'title' => 'THAICID',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/12.jpg',
              'title' => 'ศูนย์ความรู้ สชป. 1',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/22.png',
              'title' => '๑๓ ฟอนต์แห่งชาติ',
              'logo' => false,
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
  
  <?php include_once('layout/footer-minisite-intra.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>