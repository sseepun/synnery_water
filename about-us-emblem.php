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
    [ 'url' => '#', 'display' => 'เกี่ยวกับกรม' ],
    [ 'url' => '#', 'display' => 'ตราสัญลักษณ์ประจำกรม' ],
  ];
  $breadcrumbTitle = 'ประวัติกรมชลประทาน';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding section-07 bg-white">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/emblem.jpg'); background-size: contain; background-position: top;"></div>
    <div class="container">
      <div class="ss-title jc-center mt-5">
        <h3 class="fw-700 text-center pt-1" data-aos="fade-up" data-aos-delay="150">
          ตราสัญลักษณ์ประจำกรม
        </h3>
      </div>
      <div class="content">
        <div class="pt-5 pb-5 text-center">
          <img class="mw-100" src="public/assets/app/images/content/about-04.png" width="750" alt="content">
        </div>
        <div class="text-center mb-5">
          <p>เป็นเครื่องหมายรูปกลมลาย กลางเป็นภาพพระวรุณถือพระขรรค์ ประทับยืนอยู่ในซุ้มเรือนแก้ว</p>
          <p class="xxs color-gray-01">(หมายถึง  อำนาจ บริหาร อันทรงไว้ซึ่งความสุจริต  ยุติธรรมและการตัดสินแก้ไขปัญหาอุปสรรคต่างๆ)</p>
        </div>
        <div class="text-center pt-3 mb-5">
          <p>เสด็จลีลามาบนหลังพญานาค </p>
          <p class="xxs color-gray-01">(แสดงว่าสังกัดกับกระทรวงเกษตรและสหกรณ์)</p>
        </div>
        <div class="text-center pt-3 mb-5">
          <p>ด้านข้างทั้งสองเป็นภาพพญานาค กำลังพ่นน้ำ </p>
          <p class="xxs color-gray-01">(แสดงว่าสังกัดกับกระทรวงเกษตรและสหกรณ์)</p>
        </div>
        <div class="text-center pt-3 mb-5">
          <p>เบื้องล่างนอกขอบเครื่องหมาย มีอักษรข้อความชื่อ กรมชลประทาน เป็นโค้งรองรับ</p>
          <p class="xxs color-gray-01">(ไม่จำกัดสีและขนาด)</p>
        </div>

        <div class="bg-bluesky-01 m-auto text-center bradius-4 pt-5 pb-5 pr-2 pl-2" style="max-width: 990px;">
          <p class="xs">
            ตามประกาศสำนักนายกรัฐมนตรี เรื่อง กำหนดภาพเครื่องหมายราชการ  ตามพระราชบัญญัติ เครื่องหมายราชการ พุทธศักราช 2482 (ฉบับที่ 167)<br>
            ประกาศ ณ วันที่ 30 มีนาคม 2544 ลงพิมพ์ในราชกิจจานุเบกษา เล่ม 118 ตอนที่ 46 หน้า 1 ลงวันที่ 7 มิถุนายน 2544
          </p>
        </div>

      </div>
    </div>
  </section>

  <section class="section-padding pt-0">
    <div class="container">
      <!-- รูปภาพที่เกี่ยวข้อง -->
      <div class="mt-5 pt-5" data-aos="fade-up" data-aos-delay="100">
        <div class="ss-title-01 mt-6 ss-title-02">
          <p class="title">รูปภาพที่เกี่ยวข้อง</p>
          <svg class="pattern-01" width="56" height="19" viewBox="0 0 56 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.5 19.0001C21.4714 4.75227 17.5573 0.834769 4.63929 0.500062H0.5C1.9752 0.468933 3.35196 0.466707 4.63929 0.500062H44.2951C47.5519 0.139309 51.4023 0.15172 56 0.500062H44.2951C33.0872 1.74154 28.9093 7.40239 25.5 19.0001Z" fill="white"/>
          </svg>
          <svg class="pattern-02" width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.15374 0.898991C4.92105 0.632182 4.69945 0.386717 4.5 0.162598C4.30055 0.39739 4.07895 0.642854 3.84626 0.898991C2.43906 2.45715 0.5 4.62364 0.5 6.30988C0.5 7.37711 0.943213 8.33762 1.67452 9.03133C2.39474 9.72503 3.39197 10.1626 4.5 10.1626C5.60803 10.1626 6.60526 9.7357 7.32548 9.03133C8.04571 8.33762 8.5 7.36644 8.5 6.30988C8.5 4.62364 6.56094 2.46783 5.15374 0.898991Z" fill="white"/>
          </svg>
        </div>
        <div class="grids no-gap">
          <?php
            $data = [
              [
                'imgBg' => 'public/assets/app/images/content/about-05.png',
                'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
              ],[
                'imgBg' => 'public/assets/app/images/content/about-06.png',
                'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
              ],
            ];

            $totalItems = count($data); 
            $maxItemsToShow = 6;
            $remainingItems = $totalItems - $maxItemsToShow;

            foreach ($data as $i => $d) {
              if ($i < $maxItemsToShow) { 
              ?>
              <div class="grid lg-15 md-25 sm-50 xs-50 mt-1">
                <a href="<?= $d['imgBg'] ?>" class="ss-card pr-2 pt-1" data-fancybox="gallery">
                  <div class="ss-img square bradius-4">
                    <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    <?php if ($i === $maxItemsToShow - 1) { ?>
                      <div class="filter-03 d-flex ai-center jc-center">
                        <h6 class="color-white fw-400">+ <?= $remainingItems ?></h6>
                      </div>
                    <?php } ?>
                  </div>
                </a>
              </div>
              <?php } else { ?>
                <a href="<?= $d['imgBg'] ?>" data-fancybox="gallery" style="display: none;"></a>
              <?php
              }
            } 
          ?>
        </div>
      </div>
      
      <!-- Doc -->
      <div class="faq-01 mt-5 pt-5" data-aos="fade-up" data-aos-delay="200">
        
        <div class="ss-title-01 mt-6 ss-title-02">
          <p class="title">ไฟล์เอกสาร</p>
          <svg class="pattern-01" width="56" height="19" viewBox="0 0 56 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25.5 19.0001C21.4714 4.75227 17.5573 0.834769 4.63929 0.500062H0.5C1.9752 0.468933 3.35196 0.466707 4.63929 0.500062H44.2951C47.5519 0.139309 51.4023 0.15172 56 0.500062H44.2951C33.0872 1.74154 28.9093 7.40239 25.5 19.0001Z" fill="white"/>
          </svg>
          <svg class="pattern-02" width="9" height="11" viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5.15374 0.898991C4.92105 0.632182 4.69945 0.386717 4.5 0.162598C4.30055 0.39739 4.07895 0.642854 3.84626 0.898991C2.43906 2.45715 0.5 4.62364 0.5 6.30988C0.5 7.37711 0.943213 8.33762 1.67452 9.03133C2.39474 9.72503 3.39197 10.1626 4.5 10.1626C5.60803 10.1626 6.60526 9.7357 7.32548 9.03133C8.04571 8.33762 8.5 7.36644 8.5 6.30988C8.5 4.62364 6.56094 2.46783 5.15374 0.898991Z" fill="white"/>
          </svg>
        </div>
        <?php include_once('data/fileIcon.php'); ?>
        <div class="answer d-block mt-5 p-0 bg-white">
          <table class="table table-download sub style-02">
            <tbody>
              <?php
              foreach (
                [
                  [
                    'title' => 'คู่มือเอกลักษณ์องค์กร กรมชลประทาน.pdf',
                    'icon' => $pdf,
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
                      <a class="p title fw-400 color-black lh-sm" href="#">
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
                          <span class="p xs c-pointer color-p color-03 fw-500 btn-popup-toggle a link" data-popup="82">แจ้งไฟล์เสีย</span>
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
                    <div class="icon">
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
                    </div>
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

      <!-- Tag & Share -->
      <div class="d-flex ai-center jc-space-between mt-5 mb-5" data-aos="fade-up" data-aos-delay="300">
        <!-- Tag -->
        <div class="d-flex">
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

        <!-- Social Share -->
        <?php include_once('components/social-share.php'); ?>
      </div>
    </div>
  </section>

  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

</body>

</html>