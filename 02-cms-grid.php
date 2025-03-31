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
            ['img' => 'public/assets/app/images/banner/01.jpg',], 
            ['img' => 'public/assets/app/images/banner/01.jpg',], 
            ['img' => 'public/assets/app/images/banner/01.jpg',], 
            ['img' => 'public/assets/app/images/banner/01.jpg',],
            ['img' => 'public/assets/app/images/banner/01.jpg',]
          ] as $i=>$d){
        ?>
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
            <div class="text-wrapper animate" style="--delay:.4s;">
              <h1 class="fw-700 font-popins font-gradient-01 text-intro">
                The Royal<br>Irrigation Department
              </h1>
              <p class="xs text-center font-popins desc color-white fw-400 mt-2">
                To integratedly manage water resources in adequate, thorough and equitable manners
              </p>
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
    $content = [
      [
        "imgBg" => 'public/assets/app/images/content/02.png',
        "title" => 'กรมชลฯ ลุยจัดการน้ำฤดูแล้ง ย้ำ...น้ำกินน้ำใช้ เพียงพอตลอดปี',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/03.png',
        "title" => 'อธิบดีกรมชลฯ ลงพื้นที่ติดตามความคืบหน้างาน ก่อสร้าง ปตร.หนองสองห้อง จ.หนองคาย',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/04.png',
        "title" => 'กรมชลฯ ร่วมผลักดัน Soft Power พัฒนาภาค การเกษตรครบวงจร “วันเกษตรภาคอีสาน ปี 2568”',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/05.png',
        "title" => 'แล้งนี้ต้องรอด!! ชป.เดินหน้าจ้างแรงงานกว่า 8.4 หมื่นคน หวังช่วยเกษตรกรทั่วประเทศ',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/06.png',
        "title" => 'ชป. เดินหน้ากำจัดวัชพืช เพิ่มประสิทธิภาพการส่งน้ำ ฤดูแล้ง',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/07.png',
        "title" => 'ชป.ร่วมหารือแนวทางแก้ไขและบรรเทาปัญหาอุทกภัยในพื้นที่อำเภอสะเดา จังหวัดสงขลา อย่างยั่งยืน',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/08.png',
        "title" => 'ชป.ร่วมติดตามการแก้ไขปัญหาการแพร่ระบาดปลาหมอคางดำ จ.สมุทรสงคราม',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/09.png',
        "title" => 'ชป.ร่วมขับเคลื่อนมุกดา smart farm 349 model',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/10.png',
        "title" => 'ชป.ควบคุมความเค็มรุกแม่น้ำบางปะกง บรรลุตามแผน ช่วยชาวแปดริ้ว-ปราจีนบุรี',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/11.png',
        "title" => 'ชป.ร่วมพิธีมอบสัญญาเช่าที่ราชพัสดุ โครงการ “ธนารักษ์เอื้อราษฎร์” “สัญญาเช่าที่ดิน พลิกชีวิตประชาชน” ',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/12.png',
        "title" => 'ชป.ร่วมพิธีมอบสัญญาเช่าที่ราชพัสดุ โครงการ “ธนารักษ์เอื้อราษฎร์” “สัญญาเช่าที่ดิน พลิกชีวิตประชาชน” ',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],[
        "imgBg" => 'public/assets/app/images/content/16.png',
        "title" => 'นายกฯ แพทองธาร เยือนบึงบอระเพ็ด ลุย...พัฒนา แหล่งน้ำเพื่อชาวนครสวรรค์',
        "cate" => 'ข่าวเด่นชลประทาน'
      ],
    ]
  ?>
  <section class="section-padding">
    <div class="container">
      <div class="grids">
        <?php foreach($content as $d) {?>
          <div class="grid lg-1-3">
            <a href="#" class="ss-card ss-card-05">
              <div class="img-container">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
                </div>
              </div>
              <div class="text-container">
                <div class="tag bg-p color-white">
                  <p class="sm fw-500"><?= $d['cate'] ?></p>
                </div>
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
    </div>
  </section>
  
  <?php include_once('layout/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>