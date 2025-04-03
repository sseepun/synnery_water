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
    ['url' => '#', 'display' => 'ข่าวประชาสัมพันธ์'],
    ['url' => '#', 'display' => 'วิดีทัศน์'],
    ['url' => '#', 'display' => 'โครงการอ่างเก็บน้ำแม่หินหลวงน้อย" แหล่งน้ำต้นทุน แห่งใหม่ จ.ตาก'],
  ];
  $breadcrumbTitle = 'วิดีทัศน์';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/02.jpg';
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
      <h3 class="color-t text-center fw-700">วิดีทัศน์แนะนำ</h3>
      <div class="ss-box lg mt-3">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php foreach($news as $d) {?>
              <div class="swiper-slide">
                <div class="ss-card ss-card-07">
                  <div class="wrapper">
                    <a href="https://www.youtube.com/watch?v=Ie9iQFMDDGI" class="img-container pos-relative" data-fancybox>
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/24.png')"></div>
                      </div>
                      <div class="btn-play primary lg">
                        <svg width="37" height="37" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.51953 6.37522V14.6367C6.51953 15.2666 7.2133 15.6494 7.74758 15.3065L14.2387 11.1758C14.7331 10.8648 14.7331 10.1471 14.2387 9.82812L7.74758 5.70537C7.2133 5.36247 6.51953 5.74524 6.51953 6.37522Z" fill="white"/>
                        </svg>
                      </div>
                    </a>
                    <div class="text-container">
                      <a href="#" class="h6 title h-color-p fw-600">
                        โครงการอ่างเก็บน้ำแม่หินหลวงน้อย" แหล่งน้ำต้นทุนแห่งใหม่ จ.ตาก
                      </a>
                      <div class="tag bg-p color-white">
                        <p class="sm fw-500">วิดีทัศน์แนะนำ</p>
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
        <div class="arrows">
          <div class="arrow arrow-prev c-pointer">
            <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0.642458 6.88075L5.75614 11.8026C5.89392 11.9307 6.07846 12.0016 6.27 12C6.46154 11.9984 6.64476 11.9244 6.78021 11.7941C6.91566 11.6637 6.99248 11.4873 6.99415 11.303C6.99581 11.1186 6.92218 10.941 6.78911 10.8084L2.92243 7.08677L9.34595 7.08677L15.7695 7.08677C15.9632 7.08677 16.149 7.01269 16.286 6.88083C16.423 6.74896 16.5 6.57012 16.5 6.38364C16.5 6.19716 16.423 6.01832 16.286 5.88646C16.149 5.7546 15.9632 5.68052 15.7695 5.68052L2.92243 5.68052L6.78911 1.95888C6.85888 1.89402 6.91454 1.81643 6.95282 1.73065C6.99111 1.64486 7.01126 1.5526 7.0121 1.45924C7.01295 1.36588 6.99446 1.27329 6.95773 1.18688C6.921 1.10047 6.86676 1.02196 6.79816 0.955942C6.72957 0.889924 6.64801 0.837714 6.55823 0.802361C6.46845 0.767007 6.37226 0.749216 6.27526 0.750028C6.17826 0.750839 6.0824 0.770237 5.99327 0.807087C5.90414 0.843937 5.82353 0.897501 5.75615 0.964657L0.642459 5.88653C0.505506 6.01839 0.42857 6.1972 0.42857 6.38364C0.42857 6.57008 0.505506 6.74889 0.642458 6.88075Z" fill="#008FD3"/>
            </svg>
          </div>
          <div class="arrow arrow-next c-pointer">
            <svg width="17" height="12" viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.3575 5.11925L11.2439 0.197376C11.1061 0.0692959 10.9215 -0.00157543 10.73 2.65799e-05C10.5385 0.00162859 10.3552 0.0755756 10.2198 0.205941C10.0843 0.336306 10.0075 0.512658 10.0059 0.697015C10.0042 0.881372 10.0778 1.05898 10.2109 1.19159L14.0776 4.91323L7.65405 4.91323L1.23053 4.91323C1.03678 4.91323 0.850967 4.98731 0.713966 5.11917C0.576966 5.25104 0.5 5.42988 0.5 5.61636C0.5 5.80284 0.576966 5.98168 0.713966 6.11354C0.850967 6.2454 1.03678 6.31948 1.23053 6.31948L14.0776 6.31948L10.2109 10.0411C10.1411 10.106 10.0855 10.1836 10.0472 10.2694C10.0089 10.3551 9.98874 10.4474 9.9879 10.5408C9.98705 10.6341 10.0055 10.7267 10.0423 10.8131C10.079 10.8995 10.1332 10.978 10.2018 11.0441C10.2704 11.1101 10.352 11.1623 10.4418 11.1976C10.5316 11.233 10.6277 11.2508 10.7247 11.25C10.8217 11.2492 10.9176 11.2298 11.0067 11.1929C11.0959 11.1561 11.1765 11.1025 11.2439 11.0353L16.3575 6.11347C16.4945 5.98161 16.5714 5.8028 16.5714 5.61636C16.5714 5.42991 16.4945 5.2511 16.3575 5.11925Z" fill="#008FD3"/>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <?php 
      $content = [
        [
          "imgBg" => 'public/assets/app/images/content/25.png',
          "title" => 'กรมชลฯ ลุยจัดการน้ำฤดูแล้ง ย้ำ...น้ำกินน้ำใช้ เพียงพอตลอดปี',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/26.png',
          "title" => 'อธิบดีกรมชลฯ ลงพื้นที่ติดตามความคืบหน้างาน ก่อสร้าง ปตร.หนองสองห้อง จ.หนองคาย',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/27.png',
          "title" => 'กรมชลฯ ร่วมผลักดัน Soft Power พัฒนาภาค การเกษตรครบวงจร “วันเกษตรภาคอีสาน ปี 2568”',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/28.png',
          "title" => 'แล้งนี้ต้องรอด!! ชป.เดินหน้าจ้างแรงงานกว่า 8.4 หมื่นคน หวังช่วยเกษตรกรทั่วประเทศ',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/29.png',
          "title" => 'ชป. เดินหน้ากำจัดวัชพืช เพิ่มประสิทธิภาพการส่งน้ำ ฤดูแล้ง',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/30.png',
          "title" => 'ชป.ร่วมหารือแนวทางแก้ไขและบรรเทาปัญหาอุทกภัยในพื้นที่อำเภอสะเดา จังหวัดสงขลา อย่างยั่งยืน',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/31.png',
          "title" => 'ชป.ร่วมติดตามการแก้ไขปัญหาการแพร่ระบาดปลาหมอคางดำ จ.สมุทรสงคราม',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/32.png',
          "title" => 'ชป.ร่วมขับเคลื่อนมุกดา smart farm 349 model',
          "cate" => 'วิดีทัศน์'
        ],[
          "imgBg" => 'public/assets/app/images/content/33.png',
          "title" => 'ชป.ควบคุมความเค็มรุกแม่น้ำบางปะกง บรรลุตามแผน ช่วยชาวแปดริ้ว-ปราจีนบุรี',
          "cate" => 'วิดีทัศน์'
        ],
      ]
    ?>
    <section class="section-padding pt-6">
      <div class="container" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeaderClass = 'mt-5 option-02';
          $listHeader = ['search', 'date-01', 'category', 'order', 'view-grid'];
          include('components/list-header.php');
        ?>
        <div class="grids">
          <?php foreach($content as $d) {?>
            <div class="grid lg-1-3">
              <div class="ss-card ss-card-05 type-video">
                <div class="img-container">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
                  </div>
                  <a class="btn-play primary" href="https://www.youtube.com/watch?v=Ie9iQFMDDGI" data-fancybox>
                    <svg width="37" height="37" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M6.51953 6.37522V14.6367C6.51953 15.2666 7.2133 15.6494 7.74758 15.3065L14.2387 11.1758C14.7331 10.8648 14.7331 10.1471 14.2387 9.82812L7.74758 5.70537C7.2133 5.36247 6.51953 5.74524 6.51953 6.37522Z" fill="white"/>
                    </svg>
                  </a>
                </div>
                <div class="text-container">
                  <div class="tag bg-p color-white">
                    <p class="sm fw-500"><?= $d['cate'] ?></p>
                  </div>
                  <a href="#" class="h6 title"><?= $d['title'] ?></a>
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