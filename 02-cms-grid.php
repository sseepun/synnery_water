<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
<?php include_once('layout/topnav.php'); ?>
<?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
      [ 'url' => '#', 'display' => 'ข่าวเด่นชลประทาน' ],
    ];
    $breadcrumbTitle = 'ข่าวเด่นชลประทาน';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
    include('components/breadcrumb.php');
  ?>

  <?php 
    $news = [
      [
        "imgBg" => 'public/assets/app/images/bg/22.png',
        "title" => 'อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.',
        "desc" => 'เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                      สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                      เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                      ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                      ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                      แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ'
      ], [
        "imgBg" => 'public/assets/app/images/bg/22.png',
        "title" => 'อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.',
        "desc" => 'เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                      สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                      เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                      ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                      ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                      แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ'
      ],[
        "imgBg" => 'public/assets/app/images/bg/22.png',
        "title" => 'อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.',
        "desc" => 'เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                      สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                      เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                      ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                      ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                      แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ'
      ],[
        "imgBg" => 'public/assets/app/images/bg/22.png',
        "title" => 'อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.',
        "desc" => 'เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                      สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                      เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                      ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                      ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                      แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ'
      ],[
        "imgBg" => 'public/assets/app/images/bg/22.png',
        "title" => 'อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.',
        "desc" => 'เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                      สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                      เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                      ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                      ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                      แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ'
      ]
     
    ]
  ?>
  <section class="section-padding section-08">
    <div class="filter"></div>
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.png')"></div>
    <div class="container" data-aos="fade-up" data-aos-delay="0">
      <h3 class="color-t text-center fw-700">ข่าวแนะนำ</h3>
      <div class="ss-box lg mt-3">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach($news as $d) {?>
              <div class="swiper-slide">
                <div class="ss-card ss-card-07">
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
  <section class="section-padding pt-6">
    <div class="container" data-aos="fade-up" data-aos-delay="150">
      <?php
        $listHeaderClass = 'mt-5';
        $listHeader = ['search', 'category', 'order', 'view-grid'];
        include('components/list-header.php');
      ?>
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
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="300">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('components/list-footer.php');
        ?>
      </div> 
    </div>
  </section>
  
  <?php include_once('layout/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>