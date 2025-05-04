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

  <section class="section-padding pt-4 section-17 bg-white">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <?php
        $listHeaderClass = 'mt-3 mb-3 pb-5';
        $listHeader = ['search', 'date-01', 'order'];
        include('components/list-header.php');
        ?>
      </div>

      <div class="section-07 pt-5 pb-5 bradius-4 ovf-hidden">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/28.jpg');"></div>
        <div class="pos-relative pt-5 pb-5">
          <p class="h6 color-white fw-400 text-center">
            ในกรณีต้องการตั้งคำถามหรือตอบคำถามต้อง <span class="color-blue-02 a link">สมัครเป็นสมาชิก</span> เว็บไซต์ก่อนและ <span class="color-blue-02 a link">ล็อกอิน</span> เข้าระบบ <br>
            เพื่อตั้งคำถามหรือตอบคำถาม
          </p>
          <div class="d-flex jc-center mt-5">
            <button class="btn sm btn-action btn-white bradius-round m-1 fw-400 btn-popup-toggle" data-popup="101">สมัครสมาชิก</button>
            <button class="btn sm btn-action btn-darkblue bradius-round m-1 fw-400 btn-popup-toggle" data-popup="100">เข้าสู่ระบบ</button>
          </div>
        </div>
      </div>

      <div class="pt-5 pb-5 pl-1 pr-1">
        <h6 class="color-p fw-700">กฎการใช้เว็บบอร์ด</h6>
        <p class="color-black mt-3">สิ่งที่ห้ามกระทำโดยเด็ดขาด ตั้งกระทู้ หรือโพสต์ข้อความทำลาย เกียรติ ของ ชาติ ศาสน์ กษัตริย์ ตั้งกระทู้ หรือ โพสต์ข้อความที่มีผลสร้างความแตกแยกหรือความสามัคคี
        ของประเทศชาติ</p>
        <ol class="pl-4">
          <li class="mb-2">โพสต์คำหยาบ</li>
          <li class="mb-2">โพสต์ข้อความไร้สาระ, หาเรื่อง, ชวนทะเลาะ</li>
          <li class="mb-2">โพสต์ข้อความที่มีสาระในทางลบหลู่ หรือ ดูหมิ่น ความเชื่อของบุคคลอื่น</li>
          <li class="mb-2">ตั้งกระทู้ หรือ โพสต์รูป, ไฟล์ ที่ผิดศีลธรรมขัดต่อกฎหมาย</li>
          <li class="mb-2">ลายเซ็นต์มีรูป, ไฟล์ ที่ผิดศิลธรรมขัดต่อกฎหมาย</li>
          <li class="mb-2">ห้ามโฆษณาทุกรูปแบบ</li>
          <li class="mb-2">ห้ามทำลิงก์ spam หรือลิงก์ไปสู่เว็บไซต์ลามกอนาจารและสิ่งที่ผิดกฎหมาย ผิดศิลธรรมหากพบเจอการกระทำดังกล่าวจะทำการลบกระทู้แล้วทำการแบนชื่อสมาชิก แบบถาวรทันทีที่พบเจอ</li>
        </ol>
      </div>

      <div class="d-flex jc-space-between ai-center">
        <h6 class="color-p fw-700">กระดานถาม - ตอบ</h6>
        <a class="d-flex ai-center btn md btn-action btn-p bradius-round m-1 fw-400" href="#">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M8 12H16" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 16V8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg> 
          <span class="ml-3">ตั้งกระทู้ใหม่</span>
        </a>
      </div>

      <div class="faq-01 doc style-03" data-aos="fade-up" data-aos-delay="150">
        <?php
        $titleDoc = [
          [
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],[
            'title' => 'โฆษณาทุกรูปแบบ',
            'desc' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร '
          ],
        ]
        ?>
        <?php foreach ($titleDoc as $i => $d) { ?>
          <div class="content mb-2">
            <div class="wrapper" onclick="location.href='index.php';">
              <table class="table table-download style-02 responsive-01" style="z-index:2;">
                <tbody>
                  <tr>
                    <td class="file-container">
                      <div class="icon">
                        <div class="show-inactive">
                          <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 45C0 20.1472 20.1472 0 45 0C69.8528 0 90 20.1472 90 45V90H45C20.1472 90 0 69.8528 0 45Z" fill="url(#paint0_linear_2212_48029)" />
                            <defs>
                              <linearGradient id="paint0_linear_2212_48029" x1="45" y1="0" x2="45" y2="90" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0F9DD4" />
                                <stop offset="1" stop-color="#004990" />
                              </linearGradient>
                            </defs>
                          </svg>
                          <svg class="in-icon poll" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.2436 26.6488L29.8611 31.6521C30.0194 32.9663 28.6103 33.8846 27.4861 33.2038L20.8519 29.2613C20.1236 29.2613 19.4111 29.2138 18.7144 29.1188C19.8861 27.7413 20.5828 25.9996 20.5828 24.1154C20.5828 19.6188 16.6878 15.9772 11.8744 15.9772C10.0378 15.9772 8.34361 16.4996 6.93444 17.418C6.88694 17.0221 6.87109 16.6263 6.87109 16.2146C6.87109 9.01045 13.1253 3.16797 20.8519 3.16797C28.5786 3.16797 34.8328 9.01045 34.8328 16.2146C34.8328 20.4896 32.6319 24.2738 29.2436 26.6488Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.5827 24.1148C20.5827 25.999 19.886 27.7407 18.7144 29.1182C17.1469 31.0182 14.661 32.2373 11.8743 32.2373L7.74185 34.6915C7.04518 35.119 6.15851 34.5332 6.25351 33.7257L6.64934 30.6065C4.52768 29.134 3.16602 26.7748 3.16602 24.1148C3.16602 21.3282 4.65436 18.874 6.93436 17.4174C8.34352 16.499 10.0377 15.9766 11.8743 15.9766C16.6877 15.9766 20.5827 19.6182 20.5827 24.1148Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </div>
                        <div class="show-active">
                          <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 45C0 20.1472 20.1472 0 45 0C69.8528 0 90 20.1472 90 45V90H45C20.1472 90 0 69.8528 0 45Z" fill="white"/>
                          </svg>
                          <svg class="in-icon poll" width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.2436 26.6488L29.8611 31.6521C30.0194 32.9663 28.6103 33.8846 27.4861 33.2038L20.8519 29.2613C20.1236 29.2613 19.4111 29.2138 18.7144 29.1188C19.8861 27.7413 20.5828 25.9996 20.5828 24.1154C20.5828 19.6188 16.6878 15.9772 11.8744 15.9772C10.0378 15.9772 8.34361 16.4996 6.93444 17.418C6.88694 17.0221 6.87109 16.6263 6.87109 16.2146C6.87109 9.01045 13.1253 3.16797 20.8519 3.16797C28.5786 3.16797 34.8328 9.01045 34.8328 16.2146C34.8328 20.4896 32.6319 24.2738 29.2436 26.6488Z" stroke="#0F9DD4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M20.5827 24.1148C20.5827 25.999 19.886 27.7407 18.7144 29.1182C17.1469 31.0182 14.661 32.2373 11.8743 32.2373L7.74185 34.6915C7.04518 35.119 6.15851 34.5332 6.25351 33.7257L6.64934 30.6065C4.52768 29.134 3.16602 26.7748 3.16602 24.1148C3.16602 21.3282 4.65436 18.874 6.93436 17.4174C8.34352 16.499 10.0377 15.9766 11.8743 15.9766C16.6877 15.9766 20.5827 19.6182 20.5827 24.1148Z" stroke="#0F9DD4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </div>
                      </div>
                    </td>
                    <td class="text-container xs-mw-unset">
                      <div>
                        <a class="p title size-01 fw-700 color-black" href="#"><?= $d['title'] ?> </a>
                        <div class="p des size-01 fw-400 color-black"><?= $d['desc'] ?> </div>
                        <div class="options pl-0 mt-2">
                          <div class="option color-p mr-2">
                            <div class="icon">
                              <em class="fa-solid fa-calendar"></em>
                            </div>
                            <span class="p xs ml-2 fw-400">สร้างกระทู้เมื่อ : </span>
                            <span class="p xs ml-2 fw-400 color-gray-01">18 กันยายน 2567</span>
                          </div>
                          <div class="option mr-2">
                            <span class="p xs color-gray-01 fw-200">|</span>
                          </div>
                          <div class="option color-p">
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                            </div>
                            <span class="p xs ml-2 fw-400">อ่าน : </span>
                            <span class="p xs ml-2 fw-400 color-gray-01">999k</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="button-container">
                      <div class="">
                        <div class="btn-collap" style="width: 2.5rem; transform: unset !important;">
                          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M34 18C34 25.74 27.28 32 19 32L17.14 34.24L16.04 35.5601C15.1 36.6801 13.3 36.44 12.68 35.1L10 29.2C6.36 26.64 4 22.58 4 18C4 10.26 10.72 4 19 4C25.04 4 30.26 7.34001 32.6 12.14C33.5 13.92 34 15.9 34 18Z" stroke="#008FD3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M44.0006 25.7206C44.0006 30.3006 41.6406 34.3607 38.0006 36.9207L35.3206 42.8206C34.7006 44.1606 32.9006 44.4206 31.9606 43.2806L29.0006 39.7206C24.1606 39.7206 19.8406 37.5806 17.1406 34.2406L19.0006 32.0006C27.2806 32.0006 34.0006 25.7406 34.0006 18.0006C34.0006 15.9006 33.5006 13.9206 32.6006 12.1406C39.1406 13.6406 44.0006 19.1606 44.0006 25.7206Z" stroke="#008FD3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 18H24" stroke="#008FD3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                          </svg>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
  $activePopup = 'login';
  $listResult = ['login', 'register', 'forgotpass', 'resetpass'];
  include_once('components/popup-member.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>