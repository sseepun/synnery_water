<?php 
  $contents = [
    [
      "imgBg" => 'public/assets/app/images/content/69.jpg',
      "title" => 'ระบบรับสมัครงาน',
    ],[
      "imgBg" => 'public/assets/app/images/content/70.png',
      "title" => 'ระบบบริหารผลการปฏิบัติราชการ',
    ],[
      "imgBg" => 'public/assets/app/images/content/71.png',
      "title" => 'ระบบลงเวลาปฏิบัติราชการประจำวัน',
    ],[
      "imgBg" => 'public/assets/app/images/content/72.png',
      "title" => 'ระบบลงเวลาปฏิบัติราชการประจำวัน',
    ],[
      "imgBg" => 'public/assets/app/images/content/72.png',
      "title" => 'ระบบลงเวลาปฏิบัติราชการประจำวัน',
    ],
  ]
?>

  <div class="swiper-04 mt-4">
    <div class="swiper-wrapper">
      <?php foreach($contents as $d) {?>
        <div class="swiper-slide">
          <a href="#" class="ss-card">
            <div class="img-container">
              <div class="ss-img bradius-1">
                <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>')"></div>
              </div>
            </div>
            <div class="text-container">
              <div class="text-wrapper">
                <p class="lg title fw-400 text-center mt-3"><?= $d['title'] ?></p>
              </div>     
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
     <?php if (count($contents) >= 5) { ?>
    <div class="arrows">
      <div class="arrow arrow-prev c-pointer">
        <em class="fa-solid fa-arrow-left"></em>
      </div>
      <div class="arrow arrow-next c-pointer">
        <em class="fa-solid fa-arrow-right"></em>
      </div>
    </div>
  <?php } ?>
</div>




<div class="btns d-flex ai-end jc-center mt-6">
  <a href="#" class="btn btn-action btn-p bradius-round">
    ดูทั้งหมด
  </a>
</div> 