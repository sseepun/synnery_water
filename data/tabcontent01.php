<?php 
  $content = [
    [
      "imgBg" => 'public/assets/app/images/content/46.png',
      "title" => 'สำนักงานชลประทานที่ 1 จัดกิจกรรมเพื่อพัฒนา คุณภาพการบริหารจัดการโครงการส่งน้ำและบำรุงรักษา/โครงการชลประทาน ระดับสำนักงานชลประทานที่ 1 ประจำปี พ.ศ. 2569',
      "cate" => 'ข่าวสารประชาสัมพันธ์'
    ],[
      "imgBg" => 'public/assets/app/images/content/47.png',
      "title" => 'สำนักงานชลประทานที่ 1 ดำเนินการสอบคัดเลือก ลูกจ้างประจำ เพื่อปรับระดับชั้นงานเป็นระดับ 4',
      "cate" => 'ข่าวสารประชาสัมพันธ์'
    ],[
      "imgBg" => 'public/assets/app/images/content/48.png',
      "title" => 'สำนักงานชลประทานที่ 1 จัดกิจกรรมเพื่อพัฒนา คุณภาพการบริหารจัดการโครงการส่งน้ำและบำรุงรักษา/โครงการชลประทาน ระดับสำนักงานชลประทานที่ 1 ประจำปี พ.ศ. 2569',
      "cate" => 'ข่าวสารประชาสัมพันธ์'
    ],
  ]
?>
<div class="swiper-03 mt-4">
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
            <div class="tag bg-p color-white">
              <?php foreach($tabsData as $i=>$k) {?>   
                <div class="tab-content no-fade <?= $i==0? 'active': '' ?>" style="transition:all 0s" data-tab="content_<?= $i ?>">
                  <p class="sm fw-500"><?= $k['tabTitle'] ?></p>
                </div>
              <?php } ?>
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

<div class="btns d-flex ai-end jc-center mt-6">
  <a href="#" class="btn btn-action btn-p bradius-round">
    ดูทั้งหมด
  </a>
</div> 