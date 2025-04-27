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
    [ 'url' => '#', 'display' => 'หน้าหลัก' ],
    [ 'url' => '#', 'display' => 'คลังภาพ' ],
  ];
  $breadcrumbTitle = 'คลังภาพ';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding section-08 bg-white">
    <div class="container">
      <div class="grids">
        <div class="grid xl-70 lg-2-3 md-60 sm-100 mt-0">
          <div class="block-left">
            <div class="ss-title-03" data-aos="fade-up" data-aos-delay="0">
              <div class="wrapper">
                <div class="text-container">
                  <h5 class="fw-600 font-mitr">
                    3 รัฐมนตรีเกษตรฯ ล่องใต้ให้กำลังใจชาวเมืองคอน มอบถุงยังชีพบรรเทาทุกข์  
                  </h5>
                  <div class="d-flex ai-center mt-2 mb-5">
                    <div class="ss-stats">
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
                    <?php include('components/social-share.php'); ?>
                  </div>
                </div>
              </div>
            </div>

            <?php
            $data = [
              ['imgBg' => '/public/assets/app/images/content/43.jpg'],
              ['imgBg' => '/public/assets/app/images/content/44.jpg'],
              ['imgBg' => '/public/assets/app/images/content/45.jpg'],
              ['imgBg' => '/public/assets/app/images/content/46.jpg'],
              ['imgBg' => '/public/assets/app/images/content/47.jpg'],
              ['imgBg' => '/public/assets/app/images/content/48.jpg'],
              ['imgBg' => '/public/assets/app/images/content/49.jpg'],
              ['imgBg' => '/public/assets/app/images/content/50.jpg'],
            ];
            ?>
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php foreach($data as $i => $d) { ?>
                  <div class="swiper-slide">
                    <a class="ss-img bradius-4 horizontal-2" href="<?= $d['imgBg'] ?>" data-fancybox="gallery" data-aos="fade-up" data-aos-delay="150">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </a>
                  </div>
                <?php } ?>
              </div>
              <div class="arrows">
                <div class="arrow arrow-prev c-pointer swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d38271b5ea7c924f" aria-disabled="true">
                  <em class="fa-solid fa-arrow-left pos-relative"></em>
                </div>
                <div class="arrow arrow-next c-pointer" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d38271b5ea7c924f" aria-disabled="false">
                  <em class="fa-solid fa-arrow-right pos-relative"></em>
                </div>
              </div>
            </div>

            <!-- Gallery -->
            <?php
            $totalItems = count($data); 
            $maxItemsToShow = 4;
            $remainingItems = $totalItems - $maxItemsToShow;
            ?>
            <div class="grids no-gap">  
              <?php foreach ($data as $i => $d) {
                if ($i < $maxItemsToShow) { 
                ?>
                <div class="grid lg-25 md-50 sm-50 xs-50 mt-1">
                  <a href="<?= $d['imgBg'] ?>" class="ss-card pr-3 pt-1" data-fancybox="gallery2">
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

            <div data-aos="fade-up" data-aos-delay="300">
              <p class="mt-4">
                วันนี้ (22  มกราคม 2568) นายฐนันดร์ สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง  ร่วมกับคณะกรรมาธิการติดตามการบริหารงบประมาณ วุฒิสภา  และคณะอนุกรรมาธิการติดตามการบริหารงบประมาณ กลุ่มที่ 3  ลงพื้นที่จังหวัดพระนครศรีอยุธยา  เพื่อติดตามความคืบหน้าการใช้จ่ายงบประมาณในการดำเนินงานโครงการคลองระบายน้ำหลากบางบาล-บางไทร จังหวัดพระนครศรีอยุธยา โดยมี นายอภิชาติ ชุมนุมมณี  ผู้อำนวยการสำนักพัฒนาแหล่งน้ำขนาดใหญ่ นายวงศ์พันธ์ วงศ์สมุทร ผู้อำนวยการสำนักงานก่อสร้างชลประทานขนาดใหญ่ที่ 10  และเจ้าหน้าที่ที่เกี่ยวข้อง ร่วมลงพื้นที่และรายงานผลการดำเนินงาน
              </p>
              <p class="mt-4">
                ในการนี้  คณะกรรมาธิการ ฯ  ได้เข้ารับฟังบรรยายสรุปและแลกเปลี่ยนความคิดเห็นเกี่ยวกับการใช้จ่ายงบประมาณในการดำเนินงานโครงการคลองระบายน้ำ หลากบางบาล-บางไทร จังหวัดพระนครศรีอยุธยา ซึ่งเป็นโครงการในกลุ่มแผนงานที่ 7  เพื่อเพิ่มประสิทธิภาพการระบายน้ำของแม่น้ำเจ้าพระยาด้านท้าย เขื่อนเจ้าพระยาถึงปากแม่น้ำ รวมทั้งติดตามปัญหาอุปสรรคในการดำเนินงาน  เพื่อวางแนวทางในการแก้ไขและผลักดันให้โครงการฯดังกล่าว เสร็จโดยเร็ว  เพื่อให้ประชาชนได้ใช้ประโยชน์ตามวัตถุประสงค์ของโครงการ ฯ ต่อไป
              </p>
            </div>

            <div class="d-flex ai-center jc-space-between mt-5 mb-5">
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
            </div>

            <!-- Pic File -->
            <div class="faq-01 mt-5 pt-5" data-aos="fade-up" data-aos-delay="200">
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white">ไฟล์ภาพ</p>
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
                          'title' => '3 รัฐมนตรีเกษตรฯ ล่องใต้ให้กำลังใจชาวเมืองคอน มอบถุงยังชีพบรรเทาทุกข์.zip',
                          'icon' => $gallery,
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

          </div>  
        </div>
        <div class="grid xl-30 lg-1-3 md-40 sm-100">
          <?php
            $tabs01 = [
              ['tabTitle' => 'คลังภาพ'], 
            ];
            $titleMag = [
              [
                'title' => 'ชป.ร่วมหารือแนวทางพัฒนาแหล่งเก็บน้ำ แม่น้ำบางปะกง',
                'img' => 'public/assets/app/images/content/45.jpg',
                'href' => '#',
              ],
              [
                'title' => 'นายกฯ เกาะติดน้ำท่วมภาคใต้ ส่งกำลังใจให้ชาวนครศรีฯ-สุราษฎร์ฯ',
                'img' => 'public/assets/app/images/content/46.jpg',
                'href' => '#',
              ],
              [
                'title' => 'กรมชลฯ เกาะติดเฝ้าระวังสถานการณ์น้ำนครศรีฯ อย่างต่อเนื่อง',
                'img' => 'public/assets/app/images/content/47.jpg',
                  'href' => '#',
              ],
            ];
            ?>
          <!-- ข่าวเด่นล่าสุด -->
          <div class="ss-title-02">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
            <div class="wrapper">
              <p class="h6 sm title fw-600 color-white">ข่าวเด่นล่าสุด</p>
            </div>
          </div>
          <div class="grids jc-center" data-aos="fade-up" data-aos-delay="150">
            <?php foreach ($titleMag as $i => $d) { ?>
              <div class="grid sm-100">
                <a href="<?= $d['href'] ?>" class="ss-card ss-card-04 ss-tag-in-text bradius-4 ovf-hidden h-bg-t">
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
                    <div class="description mt-5">
                      <p class="desc">
                        เย็นวันนี้ (22  มกราคม 2568) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายฐนันดร์  สุทธิพิศาล รองอธิบดีฝ่ายก่อสร้าง และนายวรพจน์ เพชรนรชาติ  รองอธิบดีฝ่ายบริหาร เข้าร่วมงานแสดงความยินดีแด่นิสิตเก่าวิศวกรรมศาสตร์  มหาวิทยาลัยเกษตรศาสตร์ ที่ได้รับการเลื่อนตำแหน่งเป็นผู้บริหารระดับสูง  ประจำปี 2567 ซึ่งจัดขึ้นโดยสมาคมศิษย์เก่าวิศวกรรมชลประทาน  ในพระบรมราชูปถัมภ์ ร่วมกับ สมาคมนิสิตเก่ามหาวิทยาลัยเกษตรศาสตร์ ณ ห้องวิภาวดีบอลรูม AB โรงแรมเซ็นทาราแกรนด์ แอท เซ็นทรัลพลาซ่า ลาดพร้าว กรุงเทพฯ
                      </p>
                    </div>
                    <div class="d-flex jc-space-between w-full">
                      <div class="ss-stats mt-6">
                        <div class="stat color-gray-01">
                          <div class="icon p xxs">
                            <em class="fa-solid fa-calendar"></em>
                          </div>
                          <div class="text">
                            <p class="xxs">9 ธ.ค. 67</p>
                          </div>
                        </div>
                        <div class="stat color-gray-01">
                          <div class="icon p xxs">
                            <em class="fa-solid fa-eye"></em>
                          </div>
                          <div class="text">
                            <p class="xxs">999k</p>
                          </div>
                        </div>
                        <div class="stat color-gray-01">
                          <div class="icon p xxs">
                            <em class="fa-solid fa-share-nodes"></em>
                          </div>
                          <div class="text">
                            <p class="xxs">999k</p>
                          </div>
                        </div>
                      </div>
                      <div class="readmore d-flex ai-end" style="margin-bottom: -1.5rem;margin-right: -1rem;">
                        <svg width="50" height="50" viewBox="0 0 59 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="29.5" cy="29.5" r="29.5" fill="#D5E4FC"/>
                          <g clip-path="url(#clip0_2995_18099)">
                          <path d="M29.6469 26.5359C28.3512 26.5359 27.3008 27.5863 27.3008 28.882C27.3008 30.1777 28.3512 31.2282 29.6469 31.2282C30.9426 31.2282 31.9931 30.1778 31.9931 28.882C31.9931 27.5863 30.9427 26.5359 29.6469 26.5359ZM29.6469 30.1109C28.9682 30.1109 28.418 29.5607 28.418 28.882C28.418 28.2032 28.9682 27.653 29.6469 27.653C30.3256 27.653 30.8759 28.2032 30.8759 28.882C30.8759 29.5607 30.3256 30.1109 29.6469 30.1109Z" fill="#008FD3"/>
                          <path d="M39.0041 21.1733L23.7544 19.4416C23.1625 19.3575 22.5629 19.5303 22.1065 19.9165C21.6502 20.2703 21.3578 20.7947 21.2966 21.3688L21.0173 23.6591H20.1514C18.9225 23.6591 18.0008 24.7483 18.0008 25.9773V37.4006C17.9698 38.5725 18.8947 39.5476 20.0667 39.5786C20.0949 39.5793 20.1232 39.5795 20.1514 39.5791H35.4849C36.7139 39.5791 37.8311 38.6295 37.8311 37.4006V36.9537C38.2121 36.8801 38.5735 36.7279 38.8924 36.5069C39.3449 36.1258 39.6347 35.5863 39.7024 34.9986L40.9872 23.6591C41.1182 22.4273 40.2342 21.3193 39.0041 21.1733ZM36.7139 37.4006C36.7139 38.0151 36.0994 38.4619 35.4849 38.4619H20.1514C19.5963 38.4782 19.1331 38.0415 19.1168 37.4864C19.116 37.4578 19.1164 37.4292 19.118 37.4006V35.3338L23.4471 32.1498C23.9672 31.7505 24.6997 31.786 25.1788 32.2335L28.2232 34.9148C28.6855 35.303 29.2675 35.52 29.8711 35.5293C30.343 35.5351 30.8072 35.4094 31.2117 35.1662L36.7139 31.9822V37.4006H36.7139ZM36.7139 30.6695L30.6251 34.2166C30.1023 34.5263 29.4405 34.4703 28.9772 34.0769L25.9049 31.3677C25.0244 30.6111 23.7374 30.5647 22.8047 31.256L19.118 33.9373V25.9773C19.118 25.3628 19.5369 24.7763 20.1514 24.7763H35.4849C36.1414 24.8035 36.6716 25.3216 36.7139 25.9773V30.6695ZM39.871 23.5083C39.8707 23.512 39.8703 23.5157 39.8699 23.5194L38.5572 34.859C38.5595 35.153 38.4254 35.4315 38.1941 35.6131C38.0824 35.7248 37.831 35.7807 37.831 35.8365V25.9773C37.7869 24.7049 36.7577 23.6879 35.4849 23.6591H22.1344L22.3858 21.4805C22.4403 21.1984 22.5878 20.9428 22.8048 20.7543C23.0497 20.585 23.3459 20.506 23.6427 20.5309L38.8646 22.2905C39.4787 22.3488 39.9294 22.894 39.871 23.5083Z" fill="#008FD3"/>
                          </g>
                          <defs>
                          <clipPath id="clip0_2995_18099">
                          <rect width="23" height="23" fill="white" transform="translate(18 18)"/>
                          </clipPath>
                          </defs>
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

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v22.0&appId=647376152763615"></script>
</body>

</html>