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
    ['url' => '#', 'display' => 'คลังภาพ'],
  ];
  $breadcrumbTitle = 'คลังภาพ';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>
  <?php 
    $tabs01 = [
      ['tabTitle' => 'คลังภาพ'], 
    ];
  ?>
  <section class="section-03 pt-5 pb-5">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/21.jpg');"></div>
    <div class="container">
      <h4 class="fw-700 color-blue-01 text-center font-mitr pt-3">คลังภาพแนะนำ</h4>
      <div class="swiper-expand swiper-horizontal magazine-recommend pb-3">
        <div class="swiper-02" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper box-shadow">
            <?php
            $titleMag = [
              [
                'title' => 'รธส. ลงพื้นที่ร่วมกับคณะกรรมาธิการ ฯ วุฒิสภา ติดตามความคืบหน้าโครงการ ฯ บางบาล-บางไทร',
                'img' => 'public/assets/app/images/content/43.jpg',
                'href' => '#',
              ],
              [
                'title' => '3 รัฐมนตรีเกษตรฯ ล่องใต้ให้กำลังใจชาวเมืองคอน มอบถุงยังชีพบรรเทาทุกข์',
                'img' => 'public/assets/app/images/content/44.jpg',
                'href' => '#',
              ],
              [
                'title' => 'ชป.ร่วมหารือแนวทางพัฒนาแหล่งเก็บน้ำ แม่น้ำบางปะกง',
                'img' => 'public/assets/app/images/content/45.jpg',
                'href' => '#',
              ],
              [
                'title' => 'นายกฯ เกาะติดน้ำท่วมภาคใต้ ส่งกำลังใจให้ชาวนครศรีฯ-สุราษฎร์ฯ',
                'img' => 'public/assets/app/images/content/45.jpg',
                'href' => '#',
              ],
              [
                'title' => 'กรมชลฯ เกาะติดเฝ้าระวังสถานการณ์น้ำนครศรีฯ อย่างต่อเนื่อง',
                'img' => 'public/assets/app/images/content/46.jpg',
                  'href' => '#',
              ],
              [
                'title' => 'กรมชลฯ ขนกระสอบทราย บรรเทาความเดือดร้อน พี่น้องชาวนครศรีฯ ',
                'img' => 'public/assets/app/images/content/47.jpg',
                'href' => '#',
              ],
              [
                'title' => 'ชป.ตั้งโรงครัว พร้อมมอบถุงยังชีพ บรรเทาความเดือดร้อน ช่วยพี่น้องชาวนครศรีธรรมราช จากเหตุการณ์อุทกภัย',
                'img' => 'public/assets/app/images/content/48.jpg',
                'href' => '#',
              ],
              [
                'title' => 'ชป.เร่งระบายน้ำลุ่มน้ำปากพนัง',
                'img' => 'public/assets/app/images/content/49.jpg',
                'href' => '#',
              ],
              [
                'title' => 'กรมชลฯ เร่งระบายน้ำเมืองนครศรีฯ',
                'img' => 'public/assets/app/images/content/50.jpg',
                'href' => '#',
              ],
            ];
            ?>
            <?php foreach ($titleMag as $i => $d) { ?>
              <div class="swiper-slide">
                <a href="<?= $d['href'] ?>" class="ss-card ss-card-column card-column-02 bg-white h-bg-t">
                  <div class="ss-img horizontal-3">
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
                      <p class="title lg fw-500 lh-md color-t"><?= $d['title'] ?></p>
                      <div class="description mt-5">
                        <p class="desc">
                          เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ  รองอธิบดีฝ่ายบริหาร เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ
                        </p>
                      </div>
                      <div class="ss-stats mt-6 pt-4">
                        <div class="stat color-gray-01">
                          <div class="icon">
                            <em class="fa-solid fa-calendar"></em>
                          </div>
                          <div class="text">
                            <p class="xs">9 ธ.ค. 67</p>
                          </div>
                        </div>
                        <div class="stat color-gray-01">
                          <div class="icon">
                            <em class="fa-solid fa-eye"></em>
                          </div>
                          <div class="text">
                            <p class="xs">999k</p>
                          </div>
                        </div>
                        <div class="stat color-gray-01">
                          <div class="icon">
                            <em class="fa-solid fa-share-nodes"></em>
                          </div>
                          <div class="text">
                            <p class="xs">999k</p>
                          </div>
                        </div>
                      </div>
                      <div class="readmore">
                        <svg width="50" height="50" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="29.5" cy="29.5" r="29.5" fill="#D5E4FC"></circle>
                          <g clip-path="url(#clip0_2995_18099)">
                          <path d="M29.6469 26.5359C28.3512 26.5359 27.3008 27.5863 27.3008 28.882C27.3008 30.1777 28.3512 31.2282 29.6469 31.2282C30.9426 31.2282 31.9931 30.1778 31.9931 28.882C31.9931 27.5863 30.9427 26.5359 29.6469 26.5359ZM29.6469 30.1109C28.9682 30.1109 28.418 29.5607 28.418 28.882C28.418 28.2032 28.9682 27.653 29.6469 27.653C30.3256 27.653 30.8759 28.2032 30.8759 28.882C30.8759 29.5607 30.3256 30.1109 29.6469 30.1109Z" fill="#008FD3"></path>
                          <path d="M39.0041 21.1733L23.7544 19.4416C23.1625 19.3575 22.5629 19.5303 22.1065 19.9165C21.6502 20.2703 21.3578 20.7947 21.2966 21.3688L21.0173 23.6591H20.1514C18.9225 23.6591 18.0008 24.7483 18.0008 25.9773V37.4006C17.9698 38.5725 18.8947 39.5476 20.0667 39.5786C20.0949 39.5793 20.1232 39.5795 20.1514 39.5791H35.4849C36.7139 39.5791 37.8311 38.6295 37.8311 37.4006V36.9537C38.2121 36.8801 38.5735 36.7279 38.8924 36.5069C39.3449 36.1258 39.6347 35.5863 39.7024 34.9986L40.9872 23.6591C41.1182 22.4273 40.2342 21.3193 39.0041 21.1733ZM36.7139 37.4006C36.7139 38.0151 36.0994 38.4619 35.4849 38.4619H20.1514C19.5963 38.4782 19.1331 38.0415 19.1168 37.4864C19.116 37.4578 19.1164 37.4292 19.118 37.4006V35.3338L23.4471 32.1498C23.9672 31.7505 24.6997 31.786 25.1788 32.2335L28.2232 34.9148C28.6855 35.303 29.2675 35.52 29.8711 35.5293C30.343 35.5351 30.8072 35.4094 31.2117 35.1662L36.7139 31.9822V37.4006H36.7139ZM36.7139 30.6695L30.6251 34.2166C30.1023 34.5263 29.4405 34.4703 28.9772 34.0769L25.9049 31.3677C25.0244 30.6111 23.7374 30.5647 22.8047 31.256L19.118 33.9373V25.9773C19.118 25.3628 19.5369 24.7763 20.1514 24.7763H35.4849C36.1414 24.8035 36.6716 25.3216 36.7139 25.9773V30.6695ZM39.871 23.5083C39.8707 23.512 39.8703 23.5157 39.8699 23.5194L38.5572 34.859C38.5595 35.153 38.4254 35.4315 38.1941 35.6131C38.0824 35.7248 37.831 35.7807 37.831 35.8365V25.9773C37.7869 24.7049 36.7577 23.6879 35.4849 23.6591H22.1344L22.3858 21.4805C22.4403 21.1984 22.5878 20.9428 22.8048 20.7543C23.0497 20.585 23.3459 20.506 23.6427 20.5309L38.8646 22.2905C39.4787 22.3488 39.9294 22.894 39.871 23.5083Z" fill="#008FD3"></path>
                          </g>
                          <defs>
                          <clipPath id="clip0_2995_18099">
                          <rect width="23" height="23" fill="white" transform="translate(18 18)"></rect>
                          </clipPath>
                          </defs>
                        </svg>
                      </div>
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
      <div data-aos="fade-up" data-aos-delay="0">
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