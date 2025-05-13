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
    [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
  ];
  $breadcrumbTitle = 'ปฏิทินกิจกรรม';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding bg-white">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <?php 
          $listHeaderCalendarClass = 'size-02';
          $listHeaderCalendar = ['search', 'cate-order'];
          include('components/list-header-calendar.php'); 
        ?>
      </div>

      <?php 
        $calendarIcon = '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6.66602 1.66602V4.16602" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M13.334 1.66602V4.16602" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2.91602 7.57422H17.0827" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M17.5 7.08268V14.166C17.5 16.666 16.25 18.3327 13.3333 18.3327H6.66667C3.75 18.3327 2.5 16.666 2.5 14.166V7.08268C2.5 4.58268 3.75 2.91602 6.66667 2.91602H13.3333C16.25 2.91602 17.5 4.58268 17.5 7.08268Z" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.99607 11.4167H10.0036" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M6.91209 11.4167H6.91957" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M6.91209 13.9167H6.91957" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>';
      ?>

      <div class="grids mt-5">
        <?php
          $tabs01 = [
            ['tabTitle' => 'กิจกรรมทั่วไป'],
          ];
          foreach([
            [
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'เมื่อวันที่ 27 สิงหาคม 2567 นายบัญญติ วงศสว่าง ผู้ตรวจราชการกรมคุมประพฤติ เป็นประธานเปิดโครงการ “ค่ายรู้..รัก” (Sense and Love) หลักสูตร 15 วัน ระหว่างวัน',
                'eventDate' => '1 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'วันนี้ (19 กันยายน 2567) นายเรืองศักดิ์ สุวารี อธิบดีกรมคุมประพฤติ  เป็นประธานพิธีปิดโครงการอบรมพนักงานคุมประพฤติ รุ่นที่ 46  พร้อมด้วยนายสิทธิ สุธี',
                'eventDate' => '18 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'คุมประพฤติจับมือ 2 หน่วยงานเอกชน MOU  ผนึกความร่วมมือผุดหลักสูตรเสริมแกร่งทางอาชีพ “ปั้นเชฟมือทอง-ช่างตัดผม  เสิรมสวยมืออาชีพ” หนุนสร้างโอกาสผู้ก้าวพลาดกลับสู่สังคม',
                'bureau' => 'สำนักงานคุมประพฤติ จังหวัดมหาสารคาม สาขาพยัคฆภูมิพิสัย',
                'eventStartDate' => '18 ก.ย. 67',
                'eventEndDate' => '19 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'เมื่อวันที่ 27 สิงหาคม 2567 นายบัญญติ วงศสว่าง ผู้ตรวจราชการกรมคุมประพฤติ เป็นประธานเปิดโครงการ “ค่ายรู้..รัก” (Sense and Love) หลักสูตร 15 วัน ระหว่างวัน',
                'eventDate' => '1 ก.ย. 18'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'วันนี้ (19 กันยายน 2567) นายเรืองศักดิ์ สุวารี อธิบดีกรมคุมประพฤติ  เป็นประธานพิธีปิดโครงการอบรมพนักงานคุมประพฤติ รุ่นที่ 46  พร้อมด้วยนายสิทธิ สุธี',
                'eventStartDate' => '26 ก.ย. 67',
                'eventEndDate' => '27 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'กรมคุมประพฤติ กระทรวงยุติธรรม โดยสำนักงานคุมประพฤติกรุงเทพมหานคร 1 วันที่ 2 กันยายน 2567 นายอุดม ใหม่นุ้ย พนักงานคุมประพฤติชำนาญการ รักษาการในตำแห',
                'eventDate' => '1 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'เมื่อวันที่ 27 สิงหาคม 2567 นายบัญญติ วงศสว่าง ผู้ตรวจราชการกรมคุมประพฤติ เป็นประธานเปิดโครงการ “ค่ายรู้..รัก” (Sense and Love) หลักสูตร 15 วัน ระหว่างวัน',
                'eventDate' => '1 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'วันนี้ (19 กันยายน 2567) นายเรืองศักดิ์ สุวารี อธิบดีกรมคุมประพฤติ  เป็นประธานพิธีปิดโครงการอบรมพนักงานคุมประพฤติ รุ่นที่ 46  พร้อมด้วยนายสิทธิ สุธี',
                 'eventDate' => '1 ก.ย. 67'
              ],[
                'href' => '#', 
                'imgBg' => 'public/assets/app/images/content/calendar-01.png',
                'title' => 'หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร',
                'desc' => 'วันนี้ (19 กันยายน 2567) นายเรืองศักดิ์ สุวารี อธิบดีกรมคุมประพฤติ  เป็นประธานพิธีปิดโครงการอบรมพนักงานคุมประพฤติ รุ่นที่ 46  พร้อมด้วยนายสิทธิ สุธี',
                 'eventDate' => '1 ก.ย. 67'
              ],
            ] as $i=>$d){
          ?>
          <div class="grid lg-100 mt-2" data-aos="fade-up" data-aos-delay="150">
            <a href="#" class="ss-card ss-card-16 h-bg-bluesky-01">
              <div class="wrapper">
                <div class="img-container">
                  <div class="date-container">
                    <div class="date bg-p">
                      <?php
                      if (isset($d['eventStartDate']) && isset($d['eventEndDate'])) {
                        $arrDateStart = explode(' ', $d['eventStartDate']);
                        $arrDateEnd = explode(' ', $d['eventEndDate']);
                        echo '<h3 class="color-white fw-600 multi-day">'.$arrDateStart[0].'</h3>';
                        echo '<h3 class="color-white fw-600">'.$arrDateEnd[0].'</h3>';
                        $date = $arrDateEnd[1].' '.$arrDateEnd[2];
                      }
                      else {
                        $arrDate = explode(' ', $d['eventDate']);
                        echo '<h3 class="color-white fw-600">'.$arrDate[0].'</h3>';
                        $date = $arrDate[1].' '.$arrDate[2];
                      }
                      ?>
                      <h6 class="color-white fw-600"><?= $date ?></h6>
                    </div>
                  </div>
                  <div class="ss-img horizontal-2">
                    <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                  </div>
                </div>
                <div class="text-container">
                  <div>
                    <div class="tag bg-p color-white">
                    <?php foreach($tabs01 as $j=>$k) {?>
                      <div class="tab-content <?= $j==0? 'active': '' ?>" data-tab="content_<?= $j ?>">
                        <p class="sm fw-500"><?= $k['tabTitle'] ?></p>
                      </div>
                    <?php } ?>
                  </div>
                    <p class="title lh-lg fw-500 mt-2">
                      <?= $d['title'] ?>
                    </p>          
                    <div class="ss-stats">
                      <div class="stat">
                        <div class="icon">
                          <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2271_80634)">
                              <path d="M3.78871 2.47628V0.819178C3.78871 0.558765 3.57565 0.345703 3.31527 0.345703C3.0549 0.345703 2.8418 0.558765 2.8418 0.819178V2.47628C2.8418 2.7367 3.05486 2.94976 3.31527 2.94976C3.57568 2.94976 3.78871 2.7367 3.78871 2.47628Z" fill="#008FD3"/>
                              <path d="M9.47039 2.47628V0.819178C9.47039 0.558765 9.25733 0.345703 8.99691 0.345703C8.7365 0.345703 8.52344 0.558765 8.52344 0.819178V2.47628C8.52344 2.7367 8.7365 2.94976 8.99691 2.94976C9.25733 2.94976 9.47039 2.7367 9.47039 2.47628Z" fill="#008FD3"/>
                              <path d="M11.8377 11.4335V5.31641H0.474609V11.4335C0.474609 12.1082 1.02146 12.6551 1.69613 12.6551H10.6161C11.2908 12.6551 11.8377 12.1082 11.8377 11.4335Z" fill="#008FD3"/>
                              <path d="M8.04998 2.47582V1.76562H4.26229V2.47582C4.26229 2.99901 3.83853 3.42273 3.31538 3.42273C2.79223 3.42273 2.36843 2.99897 2.36843 2.47582V1.76562H1.69613C1.02146 1.76562 0.474609 2.31247 0.474609 2.98714V4.84312H11.8377V2.98714C11.8377 2.31247 11.2908 1.76562 10.6162 1.76562H9.94388V2.47582C9.94388 2.99901 9.52012 3.42273 8.99696 3.42273C8.47381 3.42273 8.04998 2.99897 8.04998 2.47582Z" fill="#008FD3"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_2271_80634">
                              <rect width="12.31" height="12.31" fill="white" transform="translate(0 0.345703)"/>
                            </clipPath>
                            </defs>
                          </svg>
                        </div>
                        <div class="title">
                          <p class="xs fw-400 color-gray-02">2 กันยายน 2567</p>
                        </div>
                      </div>
                      <div class="stat">
                        <div class="icon">
                          <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.46064 3.50781C5.21422 3.50781 2.57227 6.14977 2.57227 9.39619C2.57227 12.6426 5.21422 15.2914 8.46064 15.2914C11.7071 15.2914 14.349 12.6494 14.349 9.40298C14.349 6.15656 11.7071 3.50781 8.46064 3.50781ZM8.97001 9.17885C8.97001 9.45731 8.7391 9.68823 8.46064 9.68823C8.18218 9.68823 7.95126 9.45731 7.95126 9.17885V5.78302C7.95126 5.50456 8.18218 5.27365 8.46064 5.27365C8.7391 5.27365 8.97001 5.50456 8.97001 5.78302V9.17885Z" fill="#008FD3"/>
                            <path d="M10.4224 2.69182H6.49681C6.22515 2.69182 6.00781 2.47449 6.00781 2.20282C6.00781 1.93116 6.22515 1.70703 6.49681 1.70703H10.4224C10.6941 1.70703 10.9114 1.92436 10.9114 2.19603C10.9114 2.4677 10.6941 2.69182 10.4224 2.69182Z" fill="#008FD3"/>
                          </svg>
                        </div>
                        <div class="title">
                          <p class="xs fw-400 color-gray-02">12:00 - 16:00</p>
                        </div>
                      </div>
                      <div class="stat">
                        <div class="icon">
                          <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.87149 5.30625C4.10274 -0.106249 12.1215 -0.0999985 13.3465 5.3125C14.0652 8.4875 11.0902 11.175 9.35899 12.8375C8.10274 14.05 8.12149 14.05 6.85899 12.8375C5.13399 11.175 2.15274 8.48125 2.87149 5.30625Z" fill="#008FD3" stroke="#008FD3" stroke-width="1.5"/>
                            <path d="M8.11016 8.39414C9.18711 8.39414 10.0602 7.5211 10.0602 6.44414C10.0602 5.36719 9.18711 4.49414 8.11016 4.49414C7.0332 4.49414 6.16016 5.36719 6.16016 6.44414C6.16016 7.5211 7.0332 8.39414 8.11016 8.39414Z" fill="white" stroke="white" stroke-width="1.5"/>
                          </svg>
                        </div>
                        <div class="title">
                          <p class="xs fw-400 color-gray-02">ศูนย์ประชุมแห่งชาติ</p>
                        </div>
                      </div>
                    </div>  
                  </div>
                  <div class="card-footer d-flex jc-space-between">
                    <div class="ss-stats color-gray-03">
                      <div class="stat mr-1">
                        <div class="icon">
                          <em class="fa-solid fa-share-nodes"></em>
                        </div>
                        <div class="title">
                          <p class="xs fw-400">แชร์ 400 ครั้ง<span class="ml-1">|</span></p>
                        </div>
                      </div>
                      <div class="stat">
                        <div class="icon">
                          <em class="fa-solid fa-eye"></em>
                        </div>
                        <div class="title">
                          <p class="xs fw-400">ชม 999k ครั้ง</p>
                        </div>
                      </div>
                    </div>  
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="300">
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