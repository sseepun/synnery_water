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
  ];
  $breadcrumbTitle = 'วิดีทัศน์';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>
  <?php 
    $tabs01 = [
      ['tabTitle' => 'วิดีทัศน์'], 
    ];
  ?>
  <section class="section-03 pt-5 pb-5">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/21.jpg');"></div>
    <div class="container">
      <h4 class="fw-700 color-blue-01 text-center font-mitr pt-3">วิดีทัศน์แนะนำ</h4>
      <div class="swiper-expand swiper-horizontal magazine-recommend pb-3">
        <div class="swiper-02" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper box-shadow">
            <?php
            $titleMag = [
              [
                'title' => 'โครงการอ่างเก็บน้ำแม่หินหลวงน้อย" แหล่งน้ำต้นทุนแห่งใหม่ จ.ตาก',
                'img' => 'public/assets/app/images/content/calendar-02.png',
                'href' => '#',
              ],
              [
                'title' => 'ประวัติศาสตร์การชลประทานสมัยใหม่และการบริหารจัดการน้ำ',
                'img' => 'public/assets/app/images/content/34.jpg',
                'href' => '#',
              ],
              [
                'title' => 'การทำนาแบบเปียกสลับแห้งแกล้งข้าว คืออะไร? ',
                'img' => 'public/assets/app/images/content/35.jpg',
                'href' => '#',
              ],
              [
                'title' => 'สถานีเรดาร์แห่งแรกของกรมชลประทาน ด้วยระบบ Solid-State Polarimetric X-Band',
                'img' => 'public/assets/app/images/content/36.jpg',
                'href' => '#',
              ],
              [
                'title' => 'สารคดีชุด "อัครมหาราชาภูมิพลกับงานชลประทาน" ตอน เขื่อนขุนด่านปราการชล จ.นครนายก ',
                'img' => 'public/assets/app/images/content/37.jpg',
                  'href' => '#',
              ],
              [
                'title' => 'RID สานพลังน้ำเป็น 1 เพื่อทุกคน ',
                'img' => 'public/assets/app/images/content/38.jpg',
                'href' => '#',
              ],
              [
                'title' => 'ชป.แก้ไขปัญหาภัยแล้ง แม่น้ำบางขาม จ.ลพบุรี ',
                'img' => 'public/assets/app/images/content/39.jpg',
                'href' => '#',
              ],
              [
                'title' => 'คณะองคมนตรี ประชุมติดตามสถานการณ์ น้ำในฤดูแล้ง ปี 62/63 ',
                'img' => 'public/assets/app/images/content/40.jpg',
                'href' => '#',
              ],
              [
                'title' => 'ชลประทาน ปล่อยคาราวานเครื่องจักรกล ',
                'img' => 'public/assets/app/images/content/41.jpg',
                'href' => '#',
              ],
            ];
            ?>
            <?php foreach ($titleMag as $i => $d) { ?>
              <div class="swiper-slide">
                <a href="<?= $d['href'] ?>" class="ss-card ss-card-column card-column-02 bg-white h-bg-bluesky-01">
                  <div class="ss-img horizontal-3">
                    <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                    <div class="icon">
                      <svg width="50" height="50" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="29.5" cy="29.5" r="29.5" fill="#D5E4FC"/>
                        <path d="M40 29.5L22.75 39.4593L22.75 19.5407L40 29.5Z" fill="#008FD3"/>
                      </svg>
                    </div>
                  </div>
                  <div class="text-container">
                    <div class="wrapper">
                      <div class="tag bg-p color-white">
                        <?php foreach($tabs01 as $j=>$k) {?>
                          <div class="tab-content <?= $j==0? 'active': '' ?>" data-tab="content_<?= $j ?>">
                            <p class="sm fw-400"><?= $k['tabTitle'] ?></p>
                          </div>
                        <?php } ?>
                      </div>
                    <h6 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h6>
                    <?php 
                      $headerClass = 'mt-6 pt-4';
                      include('components/stats.php'); 
                    ?>
                  </div>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
        <div class="arrows">
          <div class="arrow arrow-prev c-pointer">
            <em class="fa-solid fa-arrow-left pos-relative"></em>
          </div>
          <div class="arrow arrow-next c-pointer">
            <em class="fa-solid fa-arrow-right pos-relative"></em>
          </div>
        </div>
        <div class="swiper-pagination mt-5"></div>
      </div>
    </div>
  </section>

  <section class="section-padding pt-4 bg-white">
    <div class="container">
      <div style="position: relative; z-index: 1;" data-aos="fade-up" data-aos-delay="0">
        <?php
        $listHeaderClass = 'mt-3 mb-3 pb-5';
        $listHeader = ['search', 'date-01', 'category', 'order', 'view-grid'];
        include('components/list-header.php');
        ?>
      </div>
      <h6 class="mt-6 mb-2">ผลการค้นหา <span class="color-p fw-700">"กรมชลประทาน"</span> ค้นพบ <span class="color-p fw-700">10</span> รายการ</h6>
      
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="150">
        <?php foreach ($titleMag as $i => $d) { ?>
          <div class="grid lg-1-3">
            <a href="<?= $d['href'] ?>" class="ss-card ss-card-04 ss-tag-in-text bradius-4 ovf-hidden h-bg-bluesky-01">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
              </div>
              <div class="text-container">
                <div class="wrapper">
                  <div class="tag bg-p color-white">
                    <?php foreach($tabs01 as $j=>$k) {?>
                      <div class="tab-content <?= $j==0? 'active': '' ?>" data-tab="content_<?= $j ?>">
                        <p class="sm fw-400"><?= $k['tabTitle'] ?></p>
                      </div>
                    <?php } ?>
                  </div>
                <p class="title lg fw-500 lh-sm color-t"><?= $d['title'] ?></p>
                <div class="d-flex jc-space-between w-full">
                  <?php 
                    $headerClass = 'mt-6';
                    include('components/stats.php'); 
                  ?>
                  <div class="readmore vdo d-flex ai-end" style="margin-bottom: -1.5rem;margin-right: -1rem;">
                    <svg width="50" height="50" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <circle cx="29.5" cy="29.5" r="29.5" fill="#D5E4FC"/>
                      <path d="M40 29.5L22.75 39.4593L22.75 19.5407L40 29.5Z" fill="#008FD3"/>
                    </svg>
                  </div>
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

  <?php
  $listResult = ['report-file', 'report-file-success'];
  include_once('components/popup.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>