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
      <h6 class="mt-6 mb-2">ผลการค้นหา <span class="color-p fw-700">"กรมชลประทาน"</span> ค้นพบ <span class="color-p fw-700">0</span> รายการ</h6>
      
      <div class="no-result">
        <svg width="214" height="214" viewBox="0 0 214 214" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_2030_33742)">
            <mask id="mask0_2030_33742" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="214" height="214">
              <path d="M0 0.000686646H213.333V213.334H0V0.000686646Z" fill="white"/>
            </mask>
            <g mask="url(#mask0_2030_33742)">
              <path d="M196.216 126.74C204.403 114.275 209.167 99.3613 209.167 83.3333C209.167 39.6108 173.723 4.16668 130.001 4.16668C86.2781 4.16668 50.834 39.6108 50.834 83.3333C50.834 127.056 86.2781 162.5 130.001 162.5C143.029 162.5 155.322 159.352 166.161 153.776" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M100.897 28.0144C109.59 23.4319 119.491 20.834 130 20.834C164.517 20.834 192.5 48.8165 192.5 83.334C192.5 96.8036 188.239 109.278 180.991 119.482M133.822 145.719C132.327 145.826 131.522 145.834 130 145.834C95.4821 145.834 67.5 117.852 67.5 83.334C67.5 72.8257 70.0971 62.924 74.6796 54.2332" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M83.1103 147.579L27.9961 205.093C22.5632 210.526 13.6736 210.526 8.2407 205.093C2.80779 199.661 2.80779 190.771 8.2407 185.338L65.3744 130.585" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M50.166 147.496L65.8377 163.168" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M109.166 83.334H109.17" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M129.998 83.334H130.002" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M150.832 83.334H150.836" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M144.251 153.768H199.791C204.947 153.768 209.166 149.549 209.166 144.393C209.166 139.236 204.947 135.018 199.791 135.018C199.294 128.358 193.734 123.11 186.948 123.11C185.759 123.11 184.609 123.272 183.516 123.573C180.03 117.768 173.673 113.884 166.409 113.884C155.395 113.884 146.467 122.812 146.467 133.826H144.317C138.832 133.826 134.346 138.313 134.346 143.797C134.346 149.216 138.812 153.768 144.251 153.768Z" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M72.5691 28.1839C70.3362 24.3598 66.1887 21.7898 61.4404 21.7898C60.2516 21.7898 59.1012 21.9514 58.0087 22.2531C54.5221 16.4481 48.1654 12.5639 40.9012 12.5639C29.8875 12.5639 20.9596 21.4919 20.9596 32.5056H18.8091C13.3246 32.5056 8.83789 36.9923 8.83789 42.4764C8.83789 47.896 13.3046 52.4473 18.7433 52.4473H56.3821" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="22.926" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M85.8027 39.1406H85.8065" stroke="#D2E0F7" stroke-width="8.33333" stroke-miterlimit="2.613" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
          </g>
          <defs>
            <clipPath id="clip0_2030_33742">
              <rect width="213.333" height="213.333" fill="white"/>
            </clipPath>
          </defs>
        </svg>
        <h6 class="fw-700 color-bluesky-03 w-full text-center">ไม่พบรายการที่คุณค้นหา</h6>
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