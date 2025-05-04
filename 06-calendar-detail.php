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
  
  <?php 
    $tabs01 = [
      ['tabTitle' => 'กิจกรรมทั่วไป'], 
      ['tabTitle' => 'กิจกรรมทั่วไป2'], 
    ];
  ?>

  <section class="section-padding bg-white">
    <div class="container">
      <div class="grids">
        <div class="grid xl-70 lg-2-3 md-60 sm-100 mt-0">
          <div class="block-left">
            <div class="ss-cate">
              <a href="#" class="item active">กิจกรรมทั่วไป</a>
              <a href="#" class="item">วันที่ 18 ก.ย. 68</a>
            </div>

            <div class="ss-title-03 mt-5" data-aos="fade-up" data-aos-delay="0">
              <div class="wrapper">
                <div class="text-container">
                  <h5 class="fw-600 font-mitr">
                    หลักเกณฑ์และแนวทางปฏิบัติในการประเมินประสิทธิภาพและประสิทธิผลการปฏิบัติงานเป็นอย่างไร 
                  </h5>
                </div>
              </div>
            </div>

            <div class="ss-img bradius-4 horizontal-2 mt-4" data-aos="fade-up" data-aos-delay="150">
              <div class="img-bg" style="background-image:url('./public/assets/app/images/content/calendar-02.png');"></div>
            </div>

            <div class="detail-options mt-3">
              <div class="ss-stats color-gray-04">
                <div class="stat">
                  <div class="icon">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M13.9882 5.42049C14.4538 5.93287 13.9872 6.63099 13.2948 6.63099H2.35742C1.80514 6.63099 1.35742 6.18327 1.35742 5.63099V4.70895C1.35742 3.05178 2.70217 1.70703 4.35934 1.70703H5.935C7.04205 1.70703 7.38842 2.06699 7.82988 2.65786L8.78071 3.92111C8.99125 4.19957 9.01842 4.23353 9.41234 4.23353H11.3072C12.3692 4.23353 13.3253 4.69097 13.9882 5.42049Z" fill="#666666"/>
                      <path d="M13.9305 7.6504C14.4815 7.6504 14.9287 8.09605 14.9305 8.64701L14.9408 11.6577C14.9408 13.6612 13.3108 15.2912 11.3072 15.2912H4.99096C2.98742 15.2912 1.35742 13.6612 1.35742 11.6577V8.65056C1.35742 8.09828 1.80513 7.65057 2.35741 7.65056L13.9305 7.6504Z" fill="#666666"/>
                    </svg>
                  </div>
                  <div class="title">
                    <p class="xs fw-400">ปฏิทินกิจกรรม</p>
                  </div>
                  <span class="ml-2">|</span>
                </div>
                <div class="stat">
                  <div class="icon">
                    <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2271_80634)">
                        <path d="M3.78871 2.47628V0.819178C3.78871 0.558765 3.57565 0.345703 3.31527 0.345703C3.0549 0.345703 2.8418 0.558765 2.8418 0.819178V2.47628C2.8418 2.7367 3.05486 2.94976 3.31527 2.94976C3.57568 2.94976 3.78871 2.7367 3.78871 2.47628Z" fill="#666666"/>
                        <path d="M9.47039 2.47628V0.819178C9.47039 0.558765 9.25733 0.345703 8.99691 0.345703C8.7365 0.345703 8.52344 0.558765 8.52344 0.819178V2.47628C8.52344 2.7367 8.7365 2.94976 8.99691 2.94976C9.25733 2.94976 9.47039 2.7367 9.47039 2.47628Z" fill="#666666"/>
                        <path d="M11.8377 11.4335V5.31641H0.474609V11.4335C0.474609 12.1082 1.02146 12.6551 1.69613 12.6551H10.6161C11.2908 12.6551 11.8377 12.1082 11.8377 11.4335Z" fill="#666666"/>
                        <path d="M8.04998 2.47582V1.76562H4.26229V2.47582C4.26229 2.99901 3.83853 3.42273 3.31538 3.42273C2.79223 3.42273 2.36843 2.99897 2.36843 2.47582V1.76562H1.69613C1.02146 1.76562 0.474609 2.31247 0.474609 2.98714V4.84312H11.8377V2.98714C11.8377 2.31247 11.2908 1.76562 10.6162 1.76562H9.94388V2.47582C9.94388 2.99901 9.52012 3.42273 8.99696 3.42273C8.47381 3.42273 8.04998 2.99897 8.04998 2.47582Z" fill="#666666"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_2271_80634">
                        <rect width="12.31" height="12.31" fill="white" transform="translate(0 0.345703)"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="title">
                    <p class="xs fw-400">01 กันยายน 2567</p>
                  </div>
                  <span class="ml-2">|</span>
                </div>
                <div class="stat">
                  <div class="icon">
                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.87149 5.30625C4.10274 -0.106249 12.1215 -0.0999985 13.3465 5.3125C14.0652 8.4875 11.0902 11.175 9.35899 12.8375C8.10274 14.05 8.12149 14.05 6.85899 12.8375C5.13399 11.175 2.15274 8.48125 2.87149 5.30625Z" fill="#666666" stroke="#666666" stroke-width="1.5"/>
                      <path d="M8.11016 8.39414C9.18711 8.39414 10.0602 7.5211 10.0602 6.44414C10.0602 5.36719 9.18711 4.49414 8.11016 4.49414C7.0332 4.49414 6.16016 5.36719 6.16016 6.44414C6.16016 7.5211 7.0332 8.39414 8.11016 8.39414Z" fill="white" stroke="white" stroke-width="1.5"/>
                    </svg>
                  </div>
                  <div class="title">
                    <p class="xs fw-400">ศูนย์ประชุมแห่งชาติ</p>
                  </div>
                  <span class="ml-2">|</span>
                </div>
                <div class="stat">
                  <div class="icon">
                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_2174_82151)">
                        <path d="M10.7979 8.42969C10.0433 8.42969 9.37831 8.79991 8.96064 9.36292L5.34955 7.51877C5.40951 7.31496 5.45164 7.10374 5.45164 6.88086C5.45164 6.57856 5.3895 6.29116 5.28214 6.02682L9.0613 3.75873C9.48187 4.251 10.1001 4.57031 10.7979 4.57031C12.0614 4.57031 13.0891 3.54527 13.0891 2.28516C13.0891 1.02504 12.0614 0 10.7979 0C9.53442 0 8.50664 1.02504 8.50664 2.28516C8.50664 2.57555 8.5666 2.85101 8.66606 3.10675L4.87565 5.38149C4.45543 4.90384 3.84616 4.5957 3.16039 4.5957C1.89692 4.5957 0.869141 5.62075 0.869141 6.88086C0.869141 8.14097 1.89692 9.16602 3.16039 9.16602C3.92745 9.16602 4.60365 8.78493 5.01974 8.2061L8.61894 10.0443C8.55264 10.2577 8.50664 10.48 8.50664 10.7148C8.50664 11.975 9.53442 13 10.7979 13C12.0614 13 13.0891 11.975 13.0891 10.7148C13.0891 9.45473 12.0614 8.42969 10.7979 8.42969Z" fill="#666666"/>
                      </g>
                      <defs>
                      <clipPath id="clip0_2174_82151">
                        <rect width="13" height="13" fill="white" transform="translate(0.609375)"/>
                      </clipPath>
                      </defs>
                    </svg>
                  </div>
                  <div class="title">
                    <p class="xs fw-400">แชร์ 400 ครั้ง</p>
                  </div>
                  <span class="ml-2">|</span>
                </div>
                <div class="stat">
                  <div class="icon">
                    <svg width="17" height="11" viewBox="0 0 17 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8.70192 0.675781C11.7944 0.675781 14.5989 2.36772 16.6683 5.11588C16.8371 5.34103 16.8371 5.65558 16.6683 5.88073C14.5989 8.6322 11.7944 10.3241 8.70192 10.3241C5.60941 10.3241 2.80496 8.6322 0.735565 5.88404C0.566702 5.65889 0.566702 5.34434 0.735565 5.11919C2.80496 2.36772 5.60941 0.675781 8.70192 0.675781ZM8.48008 8.89709C10.5329 9.02622 12.2282 7.33428 12.099 5.27812C11.9931 3.58287 10.619 2.20879 8.92376 2.10284C6.87092 1.97371 5.17567 3.66565 5.3048 5.7218C5.41406 7.41374 6.78814 8.78782 8.48008 8.89709ZM8.58272 7.32765C9.68861 7.39719 10.6025 6.48665 10.5296 5.38076C10.4733 4.46692 9.73165 3.72856 8.81781 3.66896C7.71192 3.59943 6.79807 4.50996 6.87092 5.61585C6.93052 6.53301 7.67219 7.27137 8.58272 7.32765Z" fill="#666666"/>
                    </svg>
                  </div>
                  <div class="title">
                    <p class="xs fw-400">ชม 999k ครั้ง</p>
                  </div>
                </div>
              </div>
            </div>

            <div data-aos="fade-up" data-aos-delay="300">
              <p class="mt-4">
                วันนี้ (9 ธ.ค.  67) นายสุริยพล นุชอนงค์ อธิบดีกรมชลประทาน พร้อมด้วย นายวิทยา แก้วมี  รองอธิบดีกรมชลประทาน นายฐนันดร์ สุทธิพิศาล รองอธิบดีกรมชลประทาน  นายบุรีรัตน์ วงศ์บุรี เลขานุการกรมชลประทาน และผู้ที่เกี่ยวข้อง  เข้าร่วมงานประชุมนานาชาติว่าด้วยการจัดการทรัพยากรดิน และน้ำ  เพื่อความมั่นคงทางอาหารอย่างยั่งยืน โดยมี ศ.ดร.นฤมล ภิญโญสินวัฒน์  รัฐมนตรีว่าการกระทรวงเกษตรและสหกรณ์ เป็นประธานเปิดงาน พร้อมด้วย นายฉู ตงหยู  ผู้อำนวยการใหญ่องค์การอาหารและการเกษตรแห่งสหประชาชาติ (Food and  Agriculture Organization of the United Nations หรือ FAO)  รัฐมนตรีหรือผู้แทนระดับรัฐมนตรีของประเทศต่าง ๆ  ผู้บริหารกระทรวงเกษตรและสหกรณ์ รวมทั้งเจ้าหน้าที่ที่เกี่ยวข้อง  เข้าร่วมพิธีเปิดการประชุมอย่างคับคั่ง งานจัดขึ้นระหว่างวันที่ 9 – 11  ธันวาคม 2567 ณ โรงแรมอนันตรา สยาม กรุงเทพฯ
              </p>
              <p class="mt-4">
                ทั้งนี้การจัดประชุมด้านวิชาการได้เน้นการจัดการและพัฒนาทรัพยากรดินที่เกี่ยวข้องกับการดำเนินการจัดการทรัพยากรทางการเกษตร สนับสนุนให้ปลูกพืชให้เหมาะสมกับพื้นที่ (Agri-Map)  รวมถึงการส่งเสริมการทำการเกษตรที่ใส่ใจสิ่งแวดล้อม (Go Green) ด้วย  BCG/Carbon Credit การลดการเผาตอซังพืช ลดการใช้สารเคมี  และให้ความสำคัญกับการบริหารจัดการน้ำทั้งระบบให้มีประสิทธิภาพ นอกจากนี้  ยังสนับสนุนให้มีการพัฒนาระบบดิจิทัล แอปพลิเคชัน หรือช่องทางโซเชียลมีเดีย เพื่อให้เกษตรกรเข้าถึงองค์ความรู้และเทคโนโลยีอย่างทั่วถึง  พัฒนาสู่เกษตรทันสมัยด้วยเทคโนโลยีด้านการเกษตร (Agri-Tech)
              </p>
              <p class="mt-4">
                <img class="w-full bradius-4" src="./public/assets/app/images/content/calendar-03.png" alt="content">
              </p>
              <p class="mt-4">
                นอกจากนี้ภายในงานมีการนำเสนอนิทรรศการของหน่วยงานจาก FAO และนิทรรศการของหน่วยงานราชการของไทย 8 หน่วยงาน ได้แก่  กระทรวงเกษตรและสหกรณ์ กรมฝนหลวงและการบินเกษตร กรมชลประทาน กรมทรัพยากรน้ำ กรมทรัพยากรน้ำบาดาล สำนักงานทรัพยากรน้ำแห่งชาติ  สำนักงานการปฏิรูปที่ดินเพื่อเกษตรกรรม และกรมพัฒนาที่ดิน  โดยในส่วนของกระทรวงเกษตรและสหกรณ์  นำเสนอเนื้อหาของศูนย์ศึกษาการพัฒนา อันเนื่องมาจากพระราชดำริ 6  ศูนย์ทั่วประเทศ ที่แสดงเนื้อหาเกี่ยวกับพระอัจฉริยภาพของรัชกาลที่ 9  ด้านการแก้ไขปัญหาการเสื่อมโทรมของดินและ การขาดแคลนน้ำในแต่ละพื้นที่  เพื่อให้เกษตรกรได้มีที่ทำการเกษตรได้อย่างเพียงพอ  สร้างรายได้ให้กับครัวเรือน  นอกจากนี้ยังได้มีการจัดแสดงผลิตภัณฑ์ จากศูนย์ศึกษาการพัฒนาอันเนื่องมาจากพระราชดำริทั้ง 6 ศูนย์ เพื่อให้ผู้ที่เข้ามาเยี่ยมนิทรรศการได้รับชมจากผลิตภัณฑ์จริง
              <p class="mt-4">
                และในส่วนนิทรรศการของกรมชลประทาน ได้นำเสนอการขยายผลการทำนาแบบเปียกสลับแห้ง  ซึ่งเป็นวิธีการทำนาที่สามารถจัดการน้ำและดินที่เหมาะสม กับการเปลี่ยนแปลงสภาพภูมิอากาศ เกษตรกรลดการใช้ปุ๋ย ต้นข้าวแข็งแรง ลดการระบาดของโรคและแมลง ลดการใช้สารเคมี ลดต้นทุนการผลิต รวงข้าวสมบูรณ์ ผลผลิตที่ได้รับเพิ่มขึ้น  การทำนาแบบเปียกสลับแห้งนี้ เหมาะสำหรับพื้นที่ทำนาในเขตชลประทาน  ที่ควบคุมการระบายน้ำได้  โดยใช้ปริมาณน้ำในการเพาะปลูกน้อยกว่าวิธีปลูกข้าวแบบทั่วไป 30-50%  เพิ่มผลผลิตได้ 10%  รวมทั้งสร้างรายได้ทางเลือกให้กับเกษตรกรจากการขาย คาร์บอนเครดิตด้วย
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
                  <a href="#" class="tag">
                    <span class="title">กรมชลประทาน</span>
                  </a>
                  <a href="#" class="tag">
                    <span class="title">ข่าวเด่น</span>
                  </a>
                  <a href="#" class="tag">
                    <span class="title">ประชุมนานาชาติ</span>
                  </a>
                </div>  
              </div>

              <!-- Social Share -->
              <?php include('components/social-share.php'); ?>
            </div>

            <!-- รูปภาพที่เกี่ยวข้อง -->
            <div class="mt-5 pt-5" data-aos="fade-up" data-aos-delay="200">
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white">รูปภาพที่เกี่ยวข้อง</p>
                </div>
              </div>
              <div class="grids no-gap">
                <?php
                  $data = [
                    [
                      'imgBg' => 'public/assets/app/images/content/29.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/30.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/31.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'bureau' => 'สำนักงานคุมประพฤติ จังหวัดมหาสารคาม สาขาพยัคฆภูมิพิสัย',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/32.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],
                    [
                      'imgBg' => 'public/assets/app/images/content/29.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/30.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/31.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'bureau' => 'สำนักงานคุมประพฤติ จังหวัดมหาสารคาม สาขาพยัคฆภูมิพิสัย',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/32.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],
                  ];

                  $totalItems = count($data); 
                  $maxItemsToShow = 4;
                  $remainingItems = $totalItems - $maxItemsToShow;

                  foreach ($data as $i => $d) {
                    if ($i < $maxItemsToShow) { 
                  ?>
                    <div class="grid lg-25 md-50 sm-50 xs-50 mt-1">
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

            <!-- วิดีโอที่เกี่ยวข้อง -->
            <div class="mt-5 pt-5" data-aos="fade-up" data-aos-delay="200">
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white">วิดีโอที่เกี่ยวข้อง</p>
                </div>
              </div>
              <div class="grids no-gap">
                <?php
                  $data = [
                    [
                      'imgBg' => 'public/assets/app/images/content/29.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/30.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/31.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],[
                      'imgBg' => 'public/assets/app/images/content/32.jpg',
                      'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                      'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    ],
                  ];

                  $totalItems = count($data); 
                  $maxItemsToShow = 2;
                  $remainingItems = $totalItems - $maxItemsToShow;

                  foreach ($data as $i => $d) {
                    if ($i < $maxItemsToShow) { 
                  ?>
                    <div class="grid lg-50 md-50 sm-50 xs-50 mt-1">
                      <a href="https://youtu.be/UQeKH00eAk4?si=tZ_z2SpjyATPxEr4" class="ss-card pr-2 pt-1" data-fancybox="gallery">
                        <div class="ss-img bradius-4">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                          <?php if ($i === $maxItemsToShow - 1) { ?>
                            <div class="filter-03 d-flex ai-center jc-center">
                              <h6 class="color-white fw-400">+ <?= $remainingItems ?></h6>
                            </div>
                          <?php } else { ?>
                            <div class="btn-play lg">
                              <svg width="37" height="37" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.51953 6.37522V14.6367C6.51953 15.2666 7.2133 15.6494 7.74758 15.3065L14.2387 11.1758C14.7331 10.8648 14.7331 10.1471 14.2387 9.82812L7.74758 5.70537C7.2133 5.36247 6.51953 5.74524 6.51953 6.37522Z" fill="white"></path>
                              </svg>
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
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white">ไฟล์เอกสาร</p>
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

            <!-- Facebook -->
            <div class="mt-5 pt-5">
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white">สื่อที่เกี่ยวข้อง</p>
                </div>
              </div>
              <div class="fb-page" data-href="https://www.facebook.com/Kromchon" data-tabs="timeline" data-width="458" data-height="368" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Kromchon" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Kromchon">กรมชลประทาน</a></blockquote></div>
            </div>
          </div>  
        </div>
        <div class="grid xl-30 lg-1-3 md-40 sm-100">
          
          <!-- ประเภท -->
          <div class="content-block">
            <div class="category-container" data-aos="fade-up" data-aos-delay="0">
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white">ประเภท</p>
                </div>
              </div>
              <div class="cate-list mt-2">
                <?php
                $cateList = [
                  'ข่าวประกาศ',
                  'อบรมหลักสูตร',
                  'รายงานการจัดซื้อจัดจ้าง',
                  'กิจกรรมภายใน',
                  'กิจกรรมทั่วไป',
                  'ระดับชำนาญการพิเศษ',
                ];
                ?>
                <?php foreach ($cateList as $i => $d) { ?>
                  <a href="#" class="p sm fw-400 color-01">
                    <p class="fw-400"><?= $d ?></p>
                  </a>
                <?php } ?>
              </div> 
            </div>   
          </div>
           
          <!-- รายการที่เกี่ยวข้อง -->
          <div class="content-block mt-5 pt-5" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-title-02">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
              <div class="wrapper">
                <p class="h6 sm title fw-600 color-white">รายการที่เกี่ยวข้อง</p>
              </div>
            </div>
            <div class="grids jc-center mt-2">
             <?php
                foreach([
                  [
                    'href' => '#', 
                    'imgBg' => 'public/assets/app/images/content/01-1.png',
                    'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                  ],[
                    'href' => '#', 
                    'imgBg' => 'public/assets/app/images/content/01-1.png',
                    'title' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                    'desc' => 'กรมชลประทานร่วมเฝ้ารับเสด็จสมเด็จพระกนิษฐาธิราชเจ้า กรมสมเด็จพระเทพรัตนราชสุดา ฯ สยามบรมราชกุมารี และร่วมการประชุมวิชาการเรื่อง "ราชบัณฑิต มองไกล นำวิจัย ปรับตัวรับมือโลกร้อน"',
                  ],
                ] as $i=>$d){
                  ?>
                  <div class="grid lg-100 md-100 sm-50 mt-0">
                    <a href="#" class="ss-card ss-card-04 mb-4 bradius-4 pb-0 h-bg-bluesky-01">
                      <div class="ss-img bradius-3">
                        <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                      </div>
                      <div class="text-container pos-relative">
                        <div class="wrapper">
                          <p class="title lh-lg fw-500">
                            <?= $d['title'] ?>
                          </p>
                          <p class="desc sm fw-200 mt-2">
                            <?= $d['desc'] ?>
                          </p>
                          <div class="ss-stats color-gray-01 mt-5">
                            <div class="stat">
                              <div class="icon">
                                <em class="fa-solid fa-eye"></em>
                              </div>
                              <div class="text">
                                <p class="xs fw-200 color-gray-02">999k</p>
                              </div>
                            </div>
                            <div class="stat">
                              <div class="icon">
                                <em class="fa-solid fa-share-nodes"></em>
                              </div>
                              <div class="text">
                                <p class="xs fw-200 color-gray-02">999k</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php }?>
            </div>
          </div>
        </div>
      </div>
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