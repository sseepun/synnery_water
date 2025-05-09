<?php 
  $content = [
    [
      "imgBg" => 'public/assets/app/images/content/75.png',
      "title" => 'สำนักงานชลประทานที่ 1 จัดกิจกรรมเพื่อพัฒนา คุณภาพการบริหารจัดการโครงการส่งน้ำและบำรุงรักษา/โครงการชลประทาน ระดับสำนักงานชลประทานที่ 1 ประจำปี พ.ศ. 2569',
      "cate" => 'ข่าวสารประชาสัมพันธ์'
    ],[
      "imgBg" => 'public/assets/app/images/content/75.png',
      "title" => 'สำนักงานชลประทานที่ 1 ดำเนินการสอบคัดเลือก ลูกจ้างประจำ เพื่อปรับระดับชั้นงานเป็นระดับ 4',
      "cate" => 'ข่าวสารประชาสัมพันธ์'
    ],[
      "imgBg" => 'public/assets/app/images/content/75.png',
      "title" => 'สำนักงานชลประทานที่ 1 จัดกิจกรรมเพื่อพัฒนา คุณภาพการบริหารจัดการโครงการส่งน้ำและบำรุงรักษา/โครงการชลประทาน ระดับสำนักงานชลประทานที่ 1 ประจำปี พ.ศ. 2569',
      "cate" => 'ข่าวสารประชาสัมพันธ์'
    ],
  ]
?>
<div class="swiper-05 mt-4">
  <div class="swiper-wrapper">
    <?php foreach($content as $d) {?>
      <div class="swiper-slide">
        <a href="#" class="ss-card ss-card-05">
          <div class="img-container">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
            </div>
          </div>
          <div class="text-container">
            <div class="text-wrapper">
              <div class="tag bg-p color-white">
                <?php foreach($tabsData as $i=>$k) {?>   
                  <div class="tab-content no-fade <?= $i==0? 'active': '' ?>" style="transition:all 0s" data-tab="content_<?= $i ?>">
                    <p class="sm fw-500"><?= $k['tabTitle'] ?></p>
                  </div>
                <?php } ?>
              </div>
              <h6 class="title"><?= $d['title'] ?></h6>
              <p class="desc mt-3">
                เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  
                สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ รองอธิบดีฝ่ายบริหาร 
                เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ 
                ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  
                ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ 
                แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ
              </p>
            </div>
            <div class="card-footer">
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
        </a>
      </div>
    <?php } ?>
  </div>
</div>

<div class="btns d-flex ai-end jc-center mt-6">
  <a href="#" class="btn btn-action btn-p bradius-round">
    ดูทั้งหมด
  </a>
</div> 