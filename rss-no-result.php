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
    ['url' => '#', 'display' => 'RSS'],
  ];
  $breadcrumbTitle = 'RSS Feed';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding pt-4 section-17 bg-white">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <?php
        $listHeaderClass = 'mt-3 mb-3 pb-5';
        $listHeader = ['search', 'date-01', 'category', 'order'];
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
  $listResult = ['login', 'register', 'forgotpass', 'resetpass'];
  include_once('components/popup-member.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>