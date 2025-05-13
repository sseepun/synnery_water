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
    ['url' => '#', 'display' => 'วารสารออนไลน์'],
  ];
  $breadcrumbTitle = 'วารสารออนไลน์';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>
  <?php 
    $tabs01 = [
      ['tabTitle' => 'วารสารออนไลน์'], 
    ];
  ?>
  <section class="section-03 pt-5 pb-5">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/21.jpg');"></div>
    <div class="container">
      <h4 class="fw-700 color-blue-01 text-center font-mitr pt-3">วารสารแนะนำ</h4>
      <div class="swiper-expand swiper-horizontal magazine-recommend pb-3">
        <div class="swiper-02" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper box-shadow">
            <?php
            $titleMag = [
              [
                'title' => 'อธิบดีกรมชลฯ นำทีมผู้บริหาร เข้ารับโล่ เชิดชูเกียรติในงานนิสิตเก่าวิศวกรรมศาสตร์ มก.',
                'img' => 'public/assets/app/images/content/mag-01.png',
                'href' => '#',
              ],
              [
                'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
                'img' => 'public/assets/app/images/content/mag-02.png',
                'href' => '#',
              ],
              [
                'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
                'img' => 'public/assets/app/images/content/mag-03.png',
                'href' => '#',
              ],
              [
                'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
                'img' => 'public/assets/app/images/content/mag-04.png',
                'href' => '#',
              ],
              [
                'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
                'img' => 'public/assets/app/images/content/mag-05.png',
                  'href' => '#',
                ],
              [
                'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
                'img' => 'public/assets/app/images/content/mag-06.png',
                'href' => '#',
              ],
            ];
            ?>
            <?php foreach ($titleMag as $i => $d) { ?>
              <div class="swiper-slide">
                <a href="<?= $d['href'] ?>" class="ss-card ss-card-column bg-white">
                  <div class="ss-img vertical">
                    <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                  </div>
                  <div class="text-container">
                    <div class="wrapper">
                      <div class="tag bg-p color-white">
                        <?php foreach($tabs01 as $j=>$k) {?>
                          <div class="tab-content <?= $j==0? 'active': '' ?>" data-tab="content_<?= $j ?>">
                            <p class="sm fw-700"><?= $k['tabTitle'] ?></p>
                          </div>
                        <?php } ?>
                      </div>
                    <h6 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h6>
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

  <section class="section-padding section-19 pt-4 bg-white">
    <?php
    $titleMag = [
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-01.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-02.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-03.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-04.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-05.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-06.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-01.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-02.png',
        'href' => '#',
      ],
      [
        'title' => 'วารสารออนไลน์ นโยบายการกำกับดูแลองค์การที่ดีกรมชลประทาน 2567',
        'img' => 'public/assets/app/images/content/mag-03.png',
        'href' => '#',
      ],
    ]
    ?>
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <?php
        $listHeaderClass = 'mt-3 mb-3 pb-5';
        $listHeader = ['search', 'date-01', 'category', 'order', 'view-list'];
        include('components/list-header.php');
        ?>
      </div>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="150">
        <?php foreach ($titleMag as $i => $d) { ?>
            <div class="grid md-100">
              <a href="<?= $d['href'] ?>" class="ss-card ss-card-05">
                <div class="ss-img vertical-3">
                  <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                </div>
                <div class="text-container">
                  <div class="wrapper">
                    <div class="tag bg-p color-white">
                      <?php foreach($tabs01 as $j=>$k) {?>
                        <div class="tab-content <?= $j==0? 'active': '' ?>" data-tab="content_<?= $j ?>">
                          <p class="sm fw-700"><?= $k['tabTitle'] ?></p>
                        </div>
                      <?php } ?>
                    </div>
                  <h6 class="title fw-500 lh-sm color-t"><?= $d['title'] ?></h6>
                  <div class="description mt-1">
                    <p class="desc">
                    เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ  รองอธิบดีฝ่ายบริหาร เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ
                    </p>
                  </div>
                  <div class="ss-stats mt-6">
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
                    <p class="xs fw-500">อ่านต่อ</p>
                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.347 6.79842L14.347 6.79836L14.3391 6.80503L14.3284 6.81402C13.069 7.87304 11.6177 9.09346 10.1526 10.0529C8.6586 11.0312 7.28007 11.6484 6.16435 11.6484C4.67587 11.6484 3.30786 11.0479 2.33315 10.0992L2.33316 10.0992L2.32903 10.0952C1.34417 9.15117 0.75 7.84868 0.75 6.39844C0.75 4.95289 1.35787 3.64693 2.33315 2.69766L2.33316 2.69767L2.33723 2.69365C3.30752 1.73471 4.65521 1.14844 6.16435 1.14844C7.28048 1.14844 8.6635 1.76607 10.1594 2.74429C11.6297 3.70574 13.0851 4.93016 14.3363 5.98952C14.5006 6.12946 14.6637 6.26798 14.8249 6.40357C14.6707 6.53209 14.5117 6.66377 14.347 6.79842Z" stroke="#008FD3" stroke-width="1.5"/>
                    </svg>
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