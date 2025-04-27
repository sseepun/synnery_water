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
    ['url' => '#', 'display' => 'หน้าหลัก'],
    ['url' => '#', 'display' => 'เว็บบอร์ด'],
  ];
  $breadcrumbTitle = 'เว็บบอร์ด';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding pt-4 section-17 pos-relative">
    <div class="pos-absolute bg-gradian-03 w-full h-full" style="bottom: 0;"></div>
    <div class="container">
      <!-- Title -->
      <div class="d-flex ai-center jc-space-between mt-5 mb-5">
        <div class="text-left">
          <h6 class="fw-500 color-p">กระทู้</h6>
        </div>
        <?php include_once('components/social-share.php'); ?>
      </div>

      <!-- Content -->
      <div class="webboard bg-white box-shadow-03 bradius-4 ovf-hidden">
        <div class="p-5">
          <div class="d-flex ai-center jc-space-between">
            <div class="d-flex fw-wrap ai-center jc-space-between">
              <div class="profile-icon bg-p border-1"></div>
              <p class="ml-3 fw-500">Username</p>
            </div>
            <div class="d-flex ai-center color-blue-02 c-pointer mr-3 btn-popup-toggle" data-popup="110">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18C4.02528 18 0 13.9744 0 9C0 4.02528 4.02564 0 9 0C13.9747 0 18 4.02564 18 9C18 13.9747 13.9743 18 9 18ZM9 1.40625C4.80259 1.40625 1.40625 4.80287 1.40625 9C1.40625 13.1974 4.80287 16.5938 9 16.5938C13.1974 16.5938 16.5938 13.1971 16.5938 9C16.5938 4.80259 13.1971 1.40625 9 1.40625Z" fill="#232B4F"></path>
                <path d="M9 10.4609C8.61166 10.4609 8.29688 10.1461 8.29688 9.75781V5.22993C8.29688 4.8416 8.61166 4.52681 9 4.52681C9.38834 4.52681 9.70312 4.84163 9.70312 5.22997V9.75781C9.70312 10.1461 9.38834 10.4609 9 10.4609Z" fill="#232B4F"></path>
                <path d="M9 11.3281C9.52424 11.3281 9.94922 11.7531 9.94922 12.2773C9.94922 12.8016 9.52424 13.2266 9 13.2266C8.47576 13.2266 8.05078 12.8016 8.05078 12.2773C8.05078 11.7531 8.47576 11.3281 9 11.3281Z" fill="#232B4F"></path>
              </svg>
              <span class="ml-2 a link">แจ้งลบกระทู้</span>
            </div>
          </div>
          <p class="lg mb-2 fw-500 mt-5">โฆษณาทุกรูปแบบ</p>
          <p>ชป.ร่วมประชุมนานาชาติว่าด้วยการจัดการทรัพยากรดินและน้ำฯ ชูความสำเร็จการทำนาเปียกสลับแห้งสู่สากลทำได้อย่างไร</p>
        </div>
        <div class="border-top-1 bcolor-gray-08 mt-5">
          <div class="d-flex ai-center jc-space-between p-5">
            <div class="ss-stats">
              <div class="stat mr-4 color-p">
                <div class="icon">
                  <em class="fa-solid fa-calendar"></em>
                </div>
                <span class="p xs fw-400">สร้างกระทู้เมื่อ :</span>
                <span class="p xs ml-2 fw-400 color-gray-01">18 กันยายน 2567</span>
              </div>
              <div class="stat mr-4">
                <span class="p sm color-p fw-400">หมวดหมู่ :</span>
                <span class="p sm color-gray-01 fw-400 ml-1">อื่น ๆ </span>
              </div>
              <div class="stat mr-4">
                <span class="p sm color-p fw-400">อ่าน :</span>
                <span class="p sm color-gray-01 fw-400 ml-1">200</span>
              </div>
            </div>
            <div class="text-center">
              <a href="#" class="btn sm btn-action btn-p bradius-round">
                แสดงความคิดเห็น
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- Sub -->
      <div class="sub-webboard bg-gray-09 bradius-4 ovf-hidden">
        <div class="p-5">
          <div class="d-flex ai-center jc-space-between">
            <div class="d-flex fw-wrap ai-center jc-space-between">
              <div class="profile-icon bg-p border-1"></div>
              <p class="ml-3 fw-500">Username</p>
            </div>
            <div class="d-flex ai-center color-blue-02 c-pointer mr-3 btn-popup-toggle"data-popup="112">
              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 18C4.02528 18 0 13.9744 0 9C0 4.02528 4.02564 0 9 0C13.9747 0 18 4.02564 18 9C18 13.9747 13.9743 18 9 18ZM9 1.40625C4.80259 1.40625 1.40625 4.80287 1.40625 9C1.40625 13.1974 4.80287 16.5938 9 16.5938C13.1974 16.5938 16.5938 13.1971 16.5938 9C16.5938 4.80259 13.1971 1.40625 9 1.40625Z" fill="#232B4F"></path>
                <path d="M9 10.4609C8.61166 10.4609 8.29688 10.1461 8.29688 9.75781V5.22993C8.29688 4.8416 8.61166 4.52681 9 4.52681C9.38834 4.52681 9.70312 4.84163 9.70312 5.22997V9.75781C9.70312 10.1461 9.38834 10.4609 9 10.4609Z" fill="#232B4F"></path>
                <path d="M9 11.3281C9.52424 11.3281 9.94922 11.7531 9.94922 12.2773C9.94922 12.8016 9.52424 13.2266 9 13.2266C8.47576 13.2266 8.05078 12.8016 8.05078 12.2773C8.05078 11.7531 8.47576 11.3281 9 11.3281Z" fill="#232B4F"></path>
              </svg>
              <span class="ml-2 a link">แจ้งลบความคิดเห็น</span>
            </div>
          </div>
          <p class="mt-5">รบกวนสอบถามรายละเอียดโดยตรงเพื่อป้องกันความผิดพลาดได้ที่ ฝ่ายทะเบียนรถ โทร. 053152034, 053152076-7 ต่อ 108, 109</p>
          <div class="faq-01">
            <div class="answer border-0 d-block p-0 mt-5">
              <table class="table table-download sub style-02">
                <tbody>
                  <tr class="border-0 hover-01 mb-2 border-right-0 border-left-0">
                    <td class="file-container">
                      <div class="icon">
                        <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0 45C0 20.1472 20.1472 0 45 0C69.8528 0 90 20.1472 90 45V90H45C20.1472 90 0 69.8528 0 45Z" fill="white"></path>
                        </svg>
                        <svg class="in-icon" width="22" height="29" viewBox="0 0 22 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3553 8.94168C20.9263 8.56797 20.2481 8.20811 19.2377 8.20811C17.1339 8.20811 15.2723 8.20811 15.2723 8.20811C15.2723 8.20811 13.5284 8.14583 13.5284 6.10431C13.5284 4.06278 13.5284 2.49185 13.5284 2.49185C13.5284 2.49185 13.2861 1.04548 12.8086 0.630258C12.7325 0.567974 12.7256 0.526452 12.7602 0.519531C12.7533 0.519531 12.7463 0.526452 12.7463 0.526452L21.3553 8.84479V8.93476V8.94168ZM12.9124 0.526452C12.9332 0.533372 12.947 0.533372 12.9678 0.540292C12.947 0.533372 12.9263 0.533372 12.9124 0.526452ZM12.9747 0.540292L13.037 0.561054C13.0162 0.554133 12.9955 0.547213 12.9747 0.540292ZM13.3277 0.66486C13.3553 0.678701 13.3899 0.692542 13.4245 0.706382C13.3899 0.692542 13.3623 0.678701 13.3277 0.66486Z" fill="url(#paint0_linear_2497_49350)"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.3523 0.152344H6.96818H5.0443H3.0789C3.0789 0.152344 3.03738 0.152344 2.96818 0.152344H2.41454C1.42492 0.152344 0.615234 0.962032 0.615234 1.95165V2.67137V3.75096V3.7648V3.80632V3.82016V3.87553V3.97241V4.09006V4.22847V4.36688V4.39456V4.58141V4.67138V4.79594V4.98971V5.02432V5.27345V5.32189V5.54335V5.67484V5.834V6.0347V6.1385V6.41532V6.46376V6.80286V6.80978V7.1558V7.21117V7.52259V7.62639V7.90321V8.04162V8.29075V8.47068V8.69214V8.91359V9.10736V9.36342V9.52951V9.81324V9.95857V10.27V10.4084V10.7475V10.8651V11.225V11.3288V11.7094V11.7994V12.1939V12.2769V12.3392V12.6783V12.7475V13.1558V13.225V13.6402V13.7025V13.9101V14.1177V14.18V14.3876V14.5953V14.6575V15.0728V15.142V15.5503V15.6195V16.0278V16.1108V16.2354V26.3254C0.615234 27.3081 1.40416 28.1039 2.37994 28.1247H2.38686H2.39378H2.4007H2.40762H2.41454H2.42146H2.42838H3.05122H6.98202H4.79517H10.9613H20.1654C21.155 28.1247 21.9647 27.315 21.9647 26.3254V13.9101V11.7164C21.9647 9.01048 19.6256 8.89283 19.6256 8.89283C19.6256 8.89283 17.5218 8.89283 15.1827 8.89283C12.8436 8.89283 12.899 6.49144 12.899 6.49144C12.899 6.49144 12.899 5.58487 12.899 2.83054C12.899 0.0623783 10.373 0.186946 10.373 0.186946L10.3592 0.173105L10.3523 0.152344ZM21.3696 8.94127C20.9405 8.56065 20.2623 8.20771 19.2519 8.20771C17.1481 8.20771 15.2865 8.20771 15.2865 8.20771C15.2865 8.20771 13.5426 8.14542 13.5426 6.1039C13.5426 4.06238 13.5426 2.49144 13.5426 2.49144C13.5426 2.49144 13.3004 1.04508 12.8228 0.629852C12.7675 0.58141 12.7467 0.546807 12.7606 0.526046L21.3626 8.83747V8.7475C19.1204 5.3565 17.2519 3.68176 15.937 2.36688C15.3073 1.73712 14.5391 1.24577 13.9163 0.92743C14.546 1.24577 15.3142 1.73712 15.9509 2.3738C17.2658 3.68868 19.1343 5.36342 21.3765 8.75442V8.93435V8.94127H21.3696Z" fill="#E31E24"></path>
                          <path d="M4.60742 14.2912H7.05033C7.5832 14.2912 7.97766 14.4158 8.24756 14.6718C8.51746 14.9279 8.64202 15.2808 8.64202 15.7514C8.64202 16.2289 8.48977 16.6026 8.20604 16.8725C7.91538 17.1424 7.47939 17.2808 6.88424 17.2808H6.08147V19.0386H4.60742V14.2981V14.2912ZM6.08147 16.3189H6.44133C6.73199 16.3189 6.91884 16.2635 7.03649 16.1666C7.15413 16.0697 7.2095 15.9452 7.2095 15.7929C7.2095 15.6407 7.15413 15.5161 7.05725 15.4123C6.96036 15.3085 6.76659 15.2531 6.48977 15.2531H6.07455V16.305V16.3189H6.08147ZM9.41711 14.2912H11.5901C12.0192 14.2912 12.3652 14.3465 12.6351 14.4642C12.905 14.5818 13.1126 14.7549 13.2925 14.9625C13.4656 15.1839 13.5901 15.4331 13.6662 15.7168C13.7424 16.0074 13.7839 16.3119 13.7839 16.6303C13.7839 17.1424 13.7285 17.523 13.6109 17.8137C13.4932 18.0905 13.3341 18.3258 13.1334 18.5196C12.9327 18.7133 12.7043 18.8379 12.469 18.8933C12.1507 18.9763 11.86 19.0178 11.597 19.0178H9.42403V14.2773L9.41019 14.2912H9.41711ZM10.8773 15.3708V17.959H11.2372C11.5486 17.959 11.7562 17.9244 11.9015 17.8552C12.0261 17.7929 12.1368 17.6614 12.213 17.5023C12.2891 17.3292 12.3168 17.0524 12.3168 16.6787C12.3168 16.1805 12.2337 15.8344 12.0745 15.6476C11.9154 15.4677 11.6386 15.3708 11.251 15.3708H10.8912H10.8773ZM14.5521 14.2912H18.1784V15.3154H16.0261V16.1459H17.8669V17.1078H16.0261V19.0386H14.5521V14.2981V14.2912Z" fill="white"></path>
                          <defs>
                            <linearGradient id="paint0_linear_2497_49350" x1="20.1033" y1="0.359047" x2="13.9809" y2="9.09531" gradientUnits="userSpaceOnUse">
                              <stop stop-color="#A42421"></stop>
                              <stop offset="1" stop-color="#E31E24"></stop>
                            </linearGradient>
                          </defs>
                        </svg>
                      </div>
                    </td>
                    <td class="text-container xs-mw-unset">
                      <div>
                        <a class="p title fw-400 color-01 lh-sm" href="#">ชป.ร่วมประชุมนานาชาติว่าด้วยการจัดการทรัพยากรดินและน้ำฯ ชูความสำเร็จการทำนาเปียกสลับแห้งสู่สากล.pdf</a>
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
                              ดาวน์โหลด </a>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="button-container">
                      <div class="icon">
                        <svg width="32" height="33" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path class="fill-white-theme" d="M0 18.3496C0 22.6918 3.53334 26.2246 7.875 26.2246H13.5C14.1218 26.2246 14.625 25.7209 14.625 25.0996C14.625 24.4783 14.1218 23.9746 13.5 23.9746H7.875C4.77366 23.9746 2.25 21.451 2.25 18.3496C2.25 15.2483 4.77366 12.7246 7.875 12.7246H9C9.62184 12.7246 10.125 12.2209 10.125 11.5996C10.125 7.25739 13.6583 3.72461 18 3.72461C22.3417 3.72461 25.875 7.25739 25.875 11.5996C25.875 12.2209 26.3782 12.7246 27 12.7246H28.125C31.2263 12.7246 33.75 15.2483 33.75 18.3496C33.75 21.451 31.2263 23.9746 28.125 23.9746H22.5C21.8782 23.9746 21.375 24.4783 21.375 25.0996C21.375 25.7209 21.8782 26.2246 22.5 26.2246H28.125C32.4667 26.2246 36 22.6918 36 18.3496C36 14.0074 32.4667 10.4746 28.125 10.4746H28.0623C27.5009 5.41914 23.2031 1.47461 18 1.47461C12.7969 1.47461 8.49909 5.41914 7.93772 10.4746H7.875C3.53306 10.4746 0 14.0074 0 18.3496ZM14.2954 28.8042L16.875 31.3839V17.2246C16.875 16.6033 17.3782 16.0996 18 16.0996C18.6218 16.0996 19.125 16.6033 19.125 17.2246V31.3839L21.7046 28.8042C22.1442 28.3646 22.8561 28.3646 23.2954 28.8042C23.7347 29.2438 23.735 29.9557 23.2954 30.395L18.7954 34.895C18.5757 35.1146 18.2877 35.2246 18 35.2246C17.7123 35.2246 17.4243 35.1146 17.2046 34.895L12.7046 30.395C12.265 29.9554 12.265 29.2435 12.7046 28.8042C13.1442 28.3649 13.8561 28.3646 14.2954 28.8042Z" fill="#008FD3"></path>
                        </svg>
                      </div>
                      <a href="#" class="p title xs color-p border-bottom-1 bcolor-p"> ดาวน์โหลด </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="border-top-1 bcolor-gray-08">
          <div class="d-flex ai-center jc-space-between p-5">
            <div class="ss-stats">
              <div class="stat mr-4 color-p">
                <div class="icon">
                  <em class="fa-solid fa-calendar"></em>
                </div>
                <span class="p xs fw-400">เวลาที่ตอบ :</span>
                <span class="p xs ml-2 fw-400 color-gray-01">18 กันยายน 2567</span>
              </div>
            </div>
            <div class="text-center">
              <a href="#" class="btn sm btn-action btn-p bradius-round">
                ตอบกลับความคิดเห็นนี้
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 pt-4">
        <?php
        $listFooter = ['total', 'paginate', 'pp'];
        include('components/list-footer.php');
        ?>
      </div>

      <!-- ความคิดเห็น -->
      <div class="form-inner-shadow">
        <div class="container">
          <h4 class="color-black fw-700 mb-3">ความคิดเห็น</h4>
          <div class="content-wrapper pr-0 bg-right bg-white ovf-visible">
            <form class="form style-02 black-theme" action="action.php">
              <div class="grids">
                <div class="grid sm-100 mt-0">
                  <label class="fw-400">รายละเอียด <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <textarea rows="10" placeholder="กรุณาระบุข้อความ"></textarea>
                  </div>
                </div>
                <div class="grid sm-100 mt-5">
                  <label class="fw-400">แนบไฟล์</label>
                  <div class="form-input">
                    <div class="upload-container style-02">
                      <div class="file-display">
                        <p id="fileName" class="sm color-gray-03">ยังไม่มีไฟล์</p>
                      </div>
                      <button type="button" class="upload-btn btn-white-theme btn btn-action btn-p" style="min-width:10rem">
                        อัปโหลดไฟล์
                      </button>
                      <input type="file" id="fileInput" style="display: none;" accept=".pdf, .jpg, .jpeg, .png, .gif">
                    </div>
                    <p class="d-flex ai-center xs file-note color-gray-03 mt-1 pl-4">
                      <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18C4.02528 18 0 13.9744 0 9C0 4.02528 4.02564 0 9 0C13.9747 0 18 4.02564 18 9C18 13.9747 13.9743 18 9 18ZM9 1.40625C4.80259 1.40625 1.40625 4.80287 1.40625 9C1.40625 13.1974 4.80287 16.5938 9 16.5938C13.1974 16.5938 16.5938 13.1971 16.5938 9C16.5938 4.80259 13.1971 1.40625 9 1.40625Z" fill="#AEADAD" />
                        <path d="M9 10.4609C8.61166 10.4609 8.29688 10.1461 8.29688 9.75781V5.22993C8.29688 4.8416 8.61166 4.52681 9 4.52681C9.38834 4.52681 9.70312 4.84163 9.70312 5.22997V9.75781C9.70312 10.1461 9.38834 10.4609 9 10.4609Z" fill="#AEADAD" />
                        <path d="M9 11.3281C9.52424 11.3281 9.94922 11.7531 9.94922 12.2773C9.94922 12.8016 9.52424 13.2266 9 13.2266C8.47576 13.2266 8.05078 12.8016 8.05078 12.2773C8.05078 11.7531 8.47576 11.3281 9 11.3281Z" fill="#AEADAD" />
                      </svg>
                      <span class="ml-2">อัปโหลดสูงสุด 5 ไฟล์ ขนาดไม่เกิน 5 MB</span>
                    </p>
                  </div>
                </div>
                <div class="grid sm-100 mt-5">
                  <img class="mr-2" src="public/assets/app/images/content/captcha.png" alt="Captcha">
                </div>
                <div class="grid md-100 sm-100 mt-1">
                  <div>
                    <label class="form-check ai-center form-check-container-02">
                      <input type="checkbox" class="form-check-input" id="checkAll">
                      <span class="checkmark"></span>
                      <div>
                        <p class="fw-400 pl-3">รับและความยินยอมตาม <a href="#" class="color-06 h-color-t">ข้อตกลงเกี่ยวกับการใช้งาน</a> และ
                          <a href="#" class="color-06 h-color-t">นโยบายความเป็นส่วนตัว</a>
                        </p>
                      </div>
                    </label>
                  </div>
                </div>
              </div>
              <div class="btns ai-center h-full d-flex jc-start sm-jc-center sm-mt-4 mt-5 pt-5">
                <button class="btn btn-action  btn-white-theme md btn-p btn-popup-toggle bradius-10 mr-3" data-popup="86">
                  <p class="color-black-theme">ส่งแบบฟอร์ม</p>
                </button>
                <div class="btn btn-action  btn-white-theme md btn-cancel bradius-10">
                  <p class="color-black-theme">ล้างข้อมูล</p>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $activePopup = 'report-topic-success';
  $listResult = ['report-topic', 'report-topic-success', 'report-comment', 'report-comment-success'];
  include_once('components/popup.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>