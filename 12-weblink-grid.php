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
    ['url' => '#', 'display' => 'เว็บลิงก์'],
  ];
  $breadcrumbTitle = 'เว็บลิงก์';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>
  <?php 
    $tabs01 = [
      ['tabTitle' => 'เว็บลิงก์'], 
    ];
  ?>

  <section class="section-padding pt-4 bg-white">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <?php
        $listHeaderClass = 'mt-5 pt-5 mb-3 pb-5';
        $listHeader = ['search', 'category', 'order-02'];
        include('components/list-header.php');
        ?>
      </div>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="150">
        <?php
        $titleMag = [
          [
            'title' => 'สำนักงานทรัพยากรน้ำแห่งชาติ',
            'img' => 'public/assets/app/images/content/54.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานสภาพัฒนาการเศรษฐกิจ<br>และสังคมแห่งชาติ',
            'img' => 'public/assets/app/images/content/55.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานคณะกรรมการข้อมูลข่าวสาร<br>ของราชการ',
            'img' => 'public/assets/app/images/content/56.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานทรัพยากรน้ำแห่งชาติ',
            'img' => 'public/assets/app/images/content/54.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานสภาพัฒนาการเศรษฐกิจ<br>และสังคมแห่งชาติ',
            'img' => 'public/assets/app/images/content/55.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานคณะกรรมการข้อมูลข่าวสาร<br>ของราชการ',
            'img' => 'public/assets/app/images/content/56.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานทรัพยากรน้ำแห่งชาติ',
            'img' => 'public/assets/app/images/content/54.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานสภาพัฒนาการเศรษฐกิจ<br>และสังคมแห่งชาติ',
            'img' => 'public/assets/app/images/content/55.jpg',
            'href' => '#',
          ],
          [
            'title' => 'สำนักงานคณะกรรมการข้อมูลข่าวสาร<br>ของราชการ',
            'img' => 'public/assets/app/images/content/56.jpg',
            'href' => '#',
          ],
        ];
        ?>
        <?php foreach ($titleMag as $i => $d) { ?>
          <div class="grid lg-1-3">
            <a href="<?= $d['href'] ?>" class="ss-card ss-card-04 bradius-4 box-shadow-unset ovf-hidden h-bg-bluesky-01">
              <div class="ss-img horizontal bradius-4">
                <div class="img-bg" style="background-image:url('<?= $d['img'] ?>');"></div>
              </div>
              <div class="text-container">
                <div class="wrapper text-center">
                  <p class="title lg fw-500 lh-sm color-blue-01 mb-3 w-full"><?= $d['title'] ?></p>
                  <button class="btn btn-action btn-p bradius-10 d-flex ai-center m-auto">
                    <span class="mr-2">ไปที่เว็บไซต์</span>
                    <svg width="22" height="15" viewBox="0 0 22 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15.4902 3.59375L19.2508 7.27254L15.4902 10.9513" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M0.975586 7.27344L18.9419 7.27344" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
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

  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>