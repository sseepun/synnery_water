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
  $breadcrumbTitle = 'วารสารออนไลน์';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>
  <?php
  $tabs01 = [
    ['tabTitle' => 'วารสารออนไลน์'],
  ];
  ?>
  <section class="section-padding pt-5">
    <div class="container">
      <h4 class="fw-700 color-black text-left font-mitr pt-3">โครงการอ่างเก็บน้ำแม่หินหลวงน้อย" แหล่งน้ำต้นทุน แห่งใหม่ จ.ตาก</h4>
      <div class="d-flex ai-center mt-2 mb-5 pb-5">
        <?php include('components/stats.php'); ?>
        <?php include_once('components/social-share.php'); ?>
      </div>
      <iframe class="youtube-player" width="560" height="315" src="https://www.youtube.com/embed/IX3rP4sB1I8?si=X4-kR9PblBlJRxxT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

      <!-- Tag -->
      <div class="d-flex pt-5 pb-5 mb-5">
        <svg height="22" style="min-width:22px; min-height:22px; margin-top:.5rem;" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_27_13500)">
            <path class="fill-white-theme" d="M13.5 2.60034H9.34364C9.06869 2.60034 8.6844 2.75963 8.49013 2.95375L2.79182 8.65204C2.40273 9.04069 2.40273 9.67789 2.79182 10.0661L7.03468 14.3088C7.42289 14.6974 8.05947 14.6974 8.44827 14.3083L14.1466 8.61093C14.3407 8.41684 14.5 8.03194 14.5 7.75758V3.60038C14.5 3.05049 14.0498 2.60034 13.5 2.60034ZM11.4998 6.60036C10.9475 6.60036 10.4998 6.15215 10.4998 5.60032C10.4998 5.04758 10.9475 4.60028 11.4998 4.60028C12.0521 4.60028 12.5 5.04758 12.5 5.60032C12.5001 6.15215 12.0521 6.60036 11.4998 6.60036Z" fill="#008FD3"></path>
          </g>
          <defs>
            <clipPath id="clip0_27_13500">
              <rect width="12" height="12" fill="white" transform="translate(2.5 2.59998)"></rect>
            </clipPath>
          </defs>
        </svg>
        <div class="ss-tags">
          <div class="tag">
            <span class="title">กรมชลประทาน</span>
          </div>
          <div class="tag">
            <span class="title">ข่าวเด่น</span>
          </div>
          <div class="tag">
            <span class="title">ประชุมนานาชาติ</span>
          </div>
        </div>
      </div>

      <!-- VDO File -->
      <div class="faq-01 mt-5" data-aos="fade-up" data-aos-delay="200">
        <div class="ss-title-02">
          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
          <div class="wrapper">
            <p class="h6 sm title fw-600 color-white">ไฟลวิดีโอ</p>
          </div>
        </div>
        <?php include_once('data/fileIcon.php'); ?>
        <div class="answer d-block mt-5 p-0 bg-white border-0">
          <table class="table table-download sub style-02">
            <tbody>
              <?php
              foreach (
                [
                  [
                    'title' => 'โครงการอ่างเก็บน้ำแม่หินหลวงน้อย" แหล่งน้ำต้นทุน แห่งใหม่ จ.ตาก',
                    'icon' => $video,
                    'type' => 'file'
                  ],
                ] as $i => $d
              ) {
              ?>
                <tr class="border-0 hover-01 mb-2 border-right-0 border-left-0">
                  <td class="file-container">
                    <div class="icon">
                      <?= $d['icon'] ?>
                    </div>
                  </td>
                  <td class="text-container xs-mw-unset">
                    <div>
                      <a class="p title fw-400 color-01 lh-sm" href="#">
                        <?= $d['title'] ?>
                      </a>
                      <div class="options mt-2">
                        <div class="option mr-4 color-gray-01">
                          <div class="icon">
                            <em class="fa-solid fa-calendar"></em>
                          </div>
                          <span class="p xs ml-2 fw-400">21 พ.ค. 67</span>
                        </div>
                        <div class="option mr-4">
                          <span class="p sm color-gray-01 fw-700">ขนาดไฟล์</span>
                          <span class="p sm color-gray-01 fw-400 ml-1">800 Kb</span>
                        </div>
                        <div class="option mr-4">
                          <span class="p sm color-gray-01 fw-700">ดาวน์โหลด</span>
                          <span class="p sm color-gray-01 fw-400 ml-1">999k</span>
                        </div>
                        <div class="option mr-2">
                          <span class="p xs color-gray-01 fw-200">|</span>
                        </div>
                        <div class="option">
                          <span class="p xs c-pointer color-p fw-500 btn-popup-toggle a link" data-popup="82">แจ้งไฟล์เสีย</span>
                        </div>
                      </div>
                      <div class="show-mobile d-none">
                        <div class="btns d-flex ai-end jc-start">
                          <a href="#" class="btn sm btn-action btn-p bradius-round">
                            <?= $d['type'] === 'link' ? 'คลิกลิงก์' : 'ดาวน์โหลด' ?>
                          </a>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="button-container">
                    <a href="#" class="icon">
                      <?php if ($d['type'] === 'link') { ?>
                        <svg width="30" height="29" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="stroke-white-theme" d="M20 16.4992L32.3 4.19922" stroke="#008FD3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <path class="stroke-white-theme" d="M33.4998 10.2V3H26.2998" stroke="#008FD3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                          <path class="stroke-white-theme" d="M17 3H14C6.5 3 3.5 6 3.5 13.5V22.5C3.5 30 6.5 33 14 33H23C30.5 33 33.5 30 33.5 22.5V19.5" stroke="#008FD3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      <?php } else { ?>
                        <svg width="32" height="33" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="fill-white-theme" d="M0 18.3496C0 22.6918 3.53334 26.2246 7.875 26.2246H13.5C14.1218 26.2246 14.625 25.7209 14.625 25.0996C14.625 24.4783 14.1218 23.9746 13.5 23.9746H7.875C4.77366 23.9746 2.25 21.451 2.25 18.3496C2.25 15.2483 4.77366 12.7246 7.875 12.7246H9C9.62184 12.7246 10.125 12.2209 10.125 11.5996C10.125 7.25739 13.6583 3.72461 18 3.72461C22.3417 3.72461 25.875 7.25739 25.875 11.5996C25.875 12.2209 26.3782 12.7246 27 12.7246H28.125C31.2263 12.7246 33.75 15.2483 33.75 18.3496C33.75 21.451 31.2263 23.9746 28.125 23.9746H22.5C21.8782 23.9746 21.375 24.4783 21.375 25.0996C21.375 25.7209 21.8782 26.2246 22.5 26.2246H28.125C32.4667 26.2246 36 22.6918 36 18.3496C36 14.0074 32.4667 10.4746 28.125 10.4746H28.0623C27.5009 5.41914 23.2031 1.47461 18 1.47461C12.7969 1.47461 8.49909 5.41914 7.93772 10.4746H7.875C3.53306 10.4746 0 14.0074 0 18.3496ZM14.2954 28.8042L16.875 31.3839V17.2246C16.875 16.6033 17.3782 16.0996 18 16.0996C18.6218 16.0996 19.125 16.6033 19.125 17.2246V31.3839L21.7046 28.8042C22.1442 28.3646 22.8561 28.3646 23.2954 28.8042C23.7347 29.2438 23.735 29.9557 23.2954 30.395L18.7954 34.895C18.5757 35.1146 18.2877 35.2246 18 35.2246C17.7123 35.2246 17.4243 35.1146 17.2046 34.895L12.7046 30.395C12.265 29.9554 12.265 29.2435 12.7046 28.8042C13.1442 28.3649 13.8561 28.3646 14.2954 28.8042Z" fill="#008FD3" />
                        </svg>
                      <?php } ?>
                    </a>
                    <a href="#" class="p title xs color-p border-bottom-1 bcolor-p">
                      <?= $d['type'] === 'link' ? 'คลิกลิงก์' : 'ดาวน์โหลด' ?>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Related -->
      <div class="mt-5">
        <div class="ss-title-02">
          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
          <div class="wrapper">
            <p class="h6 sm title fw-600 color-white">วิดีโอล่าสุด</p>
          </div>
        </div>
        <?php
          $titleMag = [
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
          ];
        ?>
        </div>
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
      </div>
  </section>

  <section class="section-06" data-aos="fade-in" data-aos-delay="0">
    <div class="swiper">
      <div class="swiper-wrapper">
        <?php
          foreach([
            [
              'img' => 'public/assets/app/images/highlight/14.jpg',
              'title' => 'Open Data กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/11.jpg',
              'title' => 'ห้องสมุดกรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/01.png',
            ], [
              'img' => 'public/assets/app/images/highlight/12.jpg',
              'title' => 'ศูนย์ความรู้กลาง <br /> กรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/02.png',
            ], [
              'img' => 'public/assets/app/images/highlight/13.jpg',
              'title' => 'ศูนย์ข้อมูลข่าวสาร <br /> กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/15.jpg',
              'title' => 'ศูนย์ปฏิบัติการต่อต้าน <br /> การทุจริต กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/16.jpg',
              'title' => 'การฌาปนกิจสงเคราะห์ <br /> กรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/03.png',
            ],[
              'img' => 'public/assets/app/images/highlight/14.jpg',
              'title' => 'Open Data กรมชลประทาน',
              'logo' => false,
            ], [
              'img' => 'public/assets/app/images/highlight/11.jpg',
              'title' => 'ห้องสมุดกรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/01.png',
            ], [
              'img' => 'public/assets/app/images/highlight/12.jpg',
              'title' => 'ศูนย์ความรู้กลาง <br /> กรมชลประทาน',
              'logo' => true,
              'imgLogo' => 'public/assets/app/images/logo/02.png',
            ], [
              'img' => 'public/assets/app/images/highlight/13.jpg',
              'title' => 'ศูนย์ข้อมูลข่าวสาร <br /> กรมชลประทาน',
              'logo' => false,
            ],
          ] as $i=>$d){
        ?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-01 highlight" href="#">
              <div class="wrapper">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
                  <div class="hover-filter type-02"></div>
                  <div class="line-1"></div>
                  <div class="line-2"></div>
                  <?php if( $d['logo'] === true ) {?>
                    <div class="logo">
                      <img src="<?= $d['imgLogo'] ?>" alt="Logo">
                    </div>
                  <?php } ?>
                </div>
                <div class="text-wrapper">
                  <div class="title"><?= $d['title'] ?></div>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
      <div class="swiper-pagination"></div>
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