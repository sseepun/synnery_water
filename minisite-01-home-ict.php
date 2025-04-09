<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('layout/topnav-minisite-ict.php'); ?>

  <section class="banner-03">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          foreach([
            ['img' => 'public/assets/app/images/banner/03.jpg',], 
            ['img' => 'public/assets/app/images/banner/03.jpg',], 
            ['img' => 'public/assets/app/images/banner/03.jpg',], 
          ] as $i=>$d){
        ?>
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="bg-gradient bg-gradient-10"></div>
            <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
            <div class="container">
              <div class="text-wrapper animate" style="--delay:.4s;">
                <h1 class="title fw-700 color-white lh-sm">
                  บริการข้อมูลสารสนเทศภูมิศาสตร์
                </h1>
                <p class="h2 desc color-white mt-2 lh-sm">
                  กรมชลประทาน
                </p>
                <div class="btns mt-1">
                  <a href="#" class="btn btn-action btn-p md bradius-round">
                    คลิกที่นี่
                  </a>
                </div> 
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
      ["imgBg" => "public/assets/app/images/content/49.png", "title" => "ข้อมูลผู้บริหารเทคโนโลยีดิจิทัล",],
      ["imgBg" => "public/assets/app/images/content/50.png", "title" => "แผนปฏิบัติการดิจิทัล<br>กรมชลประทาน",],
      ["imgBg" => "public/assets/app/images/content/51.png", "title" => "แผนบริหารความต่อเนื่อง<br>ด้านเทคโนโลยีสารสนเทศ ปี 68",],
      ["imgBg" => "public/assets/app/images/content/52.png", "title" => "แผนรองรับสถานการณ์<br>ฉุกเฉินจากภัยพิบัติ ปี 68",],
      ["imgBg" => "public/assets/app/images/content/53.png", "title" => "คลังความรู้ศูนย์เทคโนโลยี<br>สารสนเทศฯ",],
      ["imgBg" => "public/assets/app/images/content/54.png", "title" => "รวมแอปพลิเคชัน",],
    ];

    $menuServices02 = [
      ["imgBg" => "public/assets/app/images/content/55.png", "title" => "Network, Server, E-Mail",],
      ["imgBg" => "public/assets/app/images/content/56.png", "title" => "Database, GIS, Website",],
      ["imgBg" => "public/assets/app/images/content/57.png", "title" => "E-Office",],
      ["imgBg" => "public/assets/app/images/content/58.png", "title" => "VDO Conference",],
      ["imgBg" => "public/assets/app/images/content/59.png", "title" => "Project /Spec. ICT",],
      ["imgBg" => "public/assets/app/images/content/60.png", "title" => "Mobile",],
    ];
  ?>
  <section class="section-01 tab-container">
    <div class="services-container" data-aos="fade-up" data-aos-delay="300">
      <div class="header tabs">
        <?php foreach($tabsServices as $i=>$d) {?>
          <div class="topic color-white tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <?= $d['title'] ?>
          </div>
        <?php } ?>
      </div>
      <div class="body">
        <div class="tab-contents">
          <?php foreach($tabsServices as $i=>$k){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <div class="menus-services">
                <?php if($i == 0) { ?>
                  <?php foreach($menuServices01 as $d) { ?>
                    <div class="menu-item">
                      <a href="#" class="ss-card ss-card-09">
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
                  <?php } else { ?>
                    <?php foreach($menuServices02 as $d) { ?>
                      <div class="menu-item">
                      <a href="#" class="ss-card ss-card-09">
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
                  <?php } ?>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
    <div class="container" style="z-index:3;">
      <div class="ss-box xl mt-5">
        <div class="announce" data-aos="fade-up" data-aos-delay="300">
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
      <div class="grids flex-col-reverse-sm">
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
          <div class="ss-card ss-card-08">
            <div class="ss-img vertical bradius-2">
              <div class="img-bg" style="background-image:url('public/assets/app/images/administator/02.jpg')"></div>
            </div>
            <div class="text-container text-center">
              <div class="wrapper">
                <h5 class="lg color-white fw-700">นายธนพล สงวนตระกูล</h5> 
                <p class="color-white">ผู้อำนวยการ<br>ศูนย์เทคโนโลยีสารสนเทศและการสื่อสาร</p> 
                <svg class="pattern-01" width="242" height="27" viewBox="0 0 242 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 20C0 8.9543 8.9543 0 20 0H27H92.9796H145.469H192.305C196.002 0 199.627 1.02468 202.776 2.96024L241.354 26.6667H183H0V20Z" fill="url(#paint0_linear_48_3879)"/>
                  <defs>
                  <linearGradient id="paint0_linear_48_3879" x1="86.9676" y1="8.99997" x2="449" y2="153.5" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#008FD3"/>
                    <stop offset="1" stop-color="#003F80"/>
                  </linearGradient>
                  </defs>
                </svg>
                <svg class="pattern-02" width="362" height="53" viewBox="0 0 362 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M168.671 39.1878C125.041 54.4522 84.166 14.4087 39.687 23.2748C18.4241 30.043 -22.644 41.4324 -24.1476 43.8466C-25.6513 46.2607 -15.1262 105.76 -13.9309 130.92L311.302 160.764C331.259 132.164 385.672 66.2192 348.332 52.7018C265.582 22.7449 237.63 15.062 168.671 39.1878Z" fill="#5DCCFC" fill-opacity="0.3"/>
                  <path d="M254.732 42.4269C216.893 51.0463 165.149 20.4659 132.814 31.4858C114.71 36.3009 64.5909 57.7148 63.2332 59.6738C61.8756 61.6328 97.9145 90.7952 97.9117 111.881L369.503 149.754C387.384 126.631 429.001 65.8816 398.924 51.5649C334.805 21.0446 322.925 26.8927 254.732 42.4269Z" fill="#5DCCFC" fill-opacity="0.3"/>
                </svg>
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
      ["tabTitle" => "หนังสือเวียน"],
      ["tabTitle" => "คำสั่ง"],
      ["tabTitle" => "ดาวน์โหลด"],
      ["tabTitle" => "รายงาน"],
    ]
  ?>
  <section class="section section-padding tab-container pt-6">
    <div class="container">
      <div class="ss-title jc-center">
        <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="0">
          ข่าวสาร
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
              if($i == 0){include('data/tabcontent01.php');} 
              else if($i == 1){include('data/tabcontent01.php');}
              else if($i == 2){include('data/tabcontent01.php');}
              else if($i == 3){include('data/tabcontent01.php');}
              else if($i == 4){include('data/tabcontent01.php');}
            ?>
          </div>
        <?php } ?>
      </div>          
    </div>                
  </section>

  <section class="section-04">
    <div class="filter bg-gradient-09"></div>
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/25.jpg')"></div>
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
          "imgBg" => 'public/assets/app/images/magazine/07.png',
          "title" => 'แผนพัฒนารัฐบาลดิจิทัลของประเทศไทย พ.ศ. 2566-2570',
        ],[
          "imgBg" => 'public/assets/app/images/magazine/08.png',
          "title" => 'มาตรฐานแอปพลิเคชันภาครัฐสำหรับ อุปกรณ์เคลื่อนที่',
        ],[
          "imgBg" => 'public/assets/app/images/magazine/09.png',
          "title" => 'คู่มือ Cyber Security สำหรับประชาชน',
        ],[
          "imgBg" => 'public/assets/app/images/magazine/10.png',
          "title" => 'หนังสือกฎหมายคุ้มครองข้อมูล ส่วนบุคคล',
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
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
                </div>
              </div>
              <div class="text-container">
                <h6 class="title"><?= $d['title'] ?></h6>
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
              'img' => 'public/assets/app/images/highlight/17.png',
              'title' => 'กระทรวงเกษตรและสหกรณ์',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/01.png',
            ], [
              'img' => 'public/assets/app/images/highlight/17.png',
              'title' => 'ศูนย์ปฏิบัติการน้ำอัจฉริยะ',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/02.png',
            ], [
              'img' => 'public/assets/app/images/highlight/18.jpg',
              'title' => 'ศูนย์รวมข้อมูล <br /> เพื่อติดต่อราชการ',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/12.jpg',
              'title' => 'ศูนย์ความรู้ สชป. 1',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/17.png',
              'title' => 'ศูนย์ข้อมูลข่าวสาร <br /> อิเล็กทรอนิกส์ของราชการ <br> สำนักงานชลประทานที่ 1',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/03.png',
            ],[
              'img' => 'public/assets/app/images/content/45.jpg',
              'title' => 'เว็บไซต์กรมชลประทาน',
              'imgLogo' => 'public/assets/app/images/logo/09.png',
              'logo' => true,
            ], [
              'img' => 'public/assets/app/images/highlight/17.png',
              'title' => 'กระทรวงเกษตรและสหกรณ์',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/01.png',
            ], [
              'img' => 'public/assets/app/images/highlight/17.png',
              'title' => 'ศูนย์ปฏิบัติการน้ำอัจฉริยะ',
              'logo' => false,
              'imgLogo' => 'public/assets/app/images/logo/02.png',
            ], [
              'img' => 'public/assets/app/images/highlight/18.jpg',
              'title' => 'ศูนย์รวมข้อมูล <br /> เพื่อติดต่อราชการ',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/12.jpg',
              'title' => 'ศูนย์ความรู้ สชป. 1',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/17.png',
              'title' => 'ศูนย์ข้อมูลข่าวสาร <br /> อิเล็กทรอนิกส์ของราชการ <br> สำนักงานชลประทานที่ 1',
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

  <?php 
    $clients = [
      ['logo' => 'public/assets/app/images/logo/12.png', 'title' => 'กระทรวงเกษตร<br>และสหกรณ์'],
      ['logo' => 'public/assets/app/images/logo/14.png', 'title' => 'สำนักนายกรัฐมนตรี'],
      ['logo' => 'public/assets/app/images/logo/13.png', 'title' => 'ระบบจัดซื้อจัดจ้าง ภาครัฐ'],
      ['logo' => 'public/assets/app/images/logo/14.png', 'title' => 'สำนักงานคณะกรรมการ<br>ข้อมูลข่าวสารของรายการ'],
      ['logo' => 'public/assets/app/images/logo/12.png', 'title' => 'กระทรวงเกษตร<br>และสหกรณ์'],
    ]
  ?>
  <section class="section-padding client-01">
    <div class="pattern" data-aos="fade-up" data-aos-delay="0">
      <img src="public/assets/app/images/pattern/16.png" alt="Pattern">
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="150">
      <div class="ss-box">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach($clients as $d) {?>
              <div class="swiper-slide">
                <div class="logo-container">
                  <div class="logo">
                    <img src="<?= $d['logo'] ?>" alt="Logo">
                  </div>
                  <div class="title fw-500 text-center mt-2">
                    <?= $d['title'] ?>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
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
      </div>            
    </div>                
  </section>
  
  <?php include_once('layout/footer-minisite-ict.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>