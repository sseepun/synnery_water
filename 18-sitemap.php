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
    [ 'url' => '#', 'display' => 'เเผนผังเว็บไซต์' ],
  ];
  $breadcrumbTitle = 'เเผนผังเว็บไซต์';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding section-07">
    <div class="container">
      <?php
      $menu = [
        'เกี่ยวกับกรม' => [
          ['title' => 'ประวัติกรมงบประมาณ', 'link' => '#', 'new_tab' => false],
          ['title' => 'ตราสัญลักษณ์ประจำกรม', 'link' => '#', 'new_tab' => false],
          ['title' => 'หน้าที่ความรับผิดชอบ', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
          ['title' => 'โครงสร้างหน่วยงาน', 'link' => '#', 'new_tab' => false],
          ['title' => 'ท่านผู้อำนวยการ', 'link' => '#', 'new_tab' => false],
          ['title' => 'ข้อมูลผู้บริหารเทคโนโลยีดิจิทัล', 'link' => '#', 'new_tab' => false],
          ['title' => 'วิสัยทัศน์/พันธกิจ/ค่านิยม', 'link' => '#', 'new_tab' => false],
          ['title' => 'คำรับรองการปฏิบัติราชการ', 'link' => '#', 'new_tab' => false],
          ['title' => 'แผนยุทธศาสตร์กรมงบประมาณ', 'link' => '#', 'new_tab' => false],
          ['title' => 'ตัวชี้วัดตามการประเมินประสิทธิภาพ', 'link' => '#', 'new_tab' => false],
          ['title' => 'แผนปฏิบัติราชการกรมงบประมาณ ระยะ 5 ปี', 'link' => '#', 'new_tab' => false],
          ['title' => 'การประเมินคุณธรรมและความโปร่งใส (ITA)', 'link' => '#', 'new_tab' => false],
          ['title' => 'การเผยแพร่แนวปฏิบัติการเปิดเผยข้อมูลสาธารณะ (OIT)', 'link' => '#', 'new_tab' => false],
        ],
        'รายงานประจำปี' => [
          ['title' => 'รายงานประจำปี', 'link' => '#', 'new_tab' => false],
          ['title' => 'รายงานงบทดลองกรมบัญชีกลาง', 'link' => '#', 'new_tab' => false],
          ['title' => 'กระบวนการบริหารงบประมาณ', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
          ['title' => 'งบประมาณรายจ่ายประจำปี', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
          ['title' => 'รายงานการเบิกจ่ายกรมงบประมาณ', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
          ['title' => 'สารสนเทศโครงการงบประมาณ', 'link' => '#', 'new_tab' => false],
        ],
        'ข่าวประชาสัมพันธ์' => [
          ['title' => 'ข่าวโครงการพระราชดำริ', 'link' => '#', 'new_tab' => false],
          ['title' => 'ข่าวเด่นงบประมาณ', 'link' => '#', 'new_tab' => false],
          ['title' => 'รอบร้องงบประมาณ', 'link' => '#', 'new_tab' => false],
          ['title' => 'ประกาศทั่วไป', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
          ['title' => 'วิดีทัศน์', 'link' => '#', 'new_tab' => false],
          ['title' => 'เอกสารเผยแพร่', 'link' => '#', 'new_tab' => false],
          ['title' => 'ปฏิทินกิจกรรมของหน่วยงาน', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
        ],
        'หน่วยงานในสังกัด' => [
          ['title' => 'สำนัก/กอง', 'link' => '#', 'new_tab' => false],
          ['title' => 'สำนักงานงบประมาณที่ 1-17', 'link' => '#', 'new_tab' => false],
          ['title' => 'โครงการกรมงบประมาณจังหวัด', 'link' => '#', 'new_tab' => false, 'sub_menu' => true],
          ['title' => 'โครงการกรมบัญชีกลางจังหวัด', 'link' => '#', 'new_tab' => false],
        ],
        'ติดต่อกรม' => [
          ['title' => 'ติดต่อกรม', 'link' => '#', 'new_tab' => false],
          ['title' => 'แจ้งเรื่องร้องเรียน', 'link' => '#', 'new_tab' => false],
          ['title' => 'แผนที่กรมงบประมาณ', 'link' => '#', 'new_tab' => false],
          ['title' => 'ถาม-ตอบ กรมงบประมาณ', 'link' => '#', 'new_tab' => false],
          ['title' => 'เว็บบอร์ด', 'link' => '#', 'new_tab' => false],
        ],
      ];            
      ?>
      <div class="sitemap-01">
        <div class="sitemap-grids">
          <?php foreach ($menu as $key => $value) : ?>
            <div class="sitemap-grid">
              <div class="ss-title-02">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/title-01.png');"></div>
                <div class="wrapper">
                  <p class="h6 sm title fw-600 color-white"><?= $key ?></p>
                </div>
              </div>
              <ul class="sitemap-list">
                <?php foreach ($value as $item) : ?>
                  <li>
                    <div class="sitemap-item <?= !empty($item['sub_menu']) ? 'submenu' : '' ?>">
                      <span class="icon">
                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.0766 1.63567C8.59395 1.07257 8.15956 0.573837 7.82171 0.15554C7.80562 0.123364 7.77344 0.107276 7.75736 0.0911872C7.58039 -0.0536076 7.32297 -0.021431 7.17818 0.15554C6.84032 0.573837 6.40594 1.07257 5.92329 1.63567C3.79963 4.09718 0.855469 7.5079 0.855469 10.3555C0.855469 12.1896 1.59553 13.8467 2.80216 15.0533C4.00878 16.2439 5.66588 17 7.49994 17C9.33401 17 10.9911 16.2599 12.1977 15.0533C13.4044 13.8467 14.1444 12.1896 14.1444 10.3555C14.1444 7.5079 11.2003 4.09718 9.0766 1.63567ZM11.6186 14.4581C10.5567 15.5199 9.10878 16.1795 7.49994 16.1795C5.89111 16.1795 4.44316 15.5199 3.38133 14.4741C2.33559 13.4284 1.67597 11.9644 1.67597 10.3555C1.67597 7.81358 4.50752 4.53156 6.55073 2.16658C6.88859 1.76437 7.21035 1.39434 7.49994 1.0404C7.78953 1.39434 8.1113 1.76437 8.44915 2.15049C10.4924 4.51547 13.3239 7.7814 13.3239 10.3394C13.3239 11.9483 12.6643 13.3962 11.6186 14.4581Z" fill="#008FD3"/>
                        </svg>
                      </span>
                      <?= !empty($item['sub_menu']) ? '<span>' . $item['title'] . '</span>' : '<a href=" '. $item['link'] .'" ' . ($item['new_tab'] ? 'target="_blank"' : '') . '>' . $item['title'] . '</a>' ?>
                    </div>
                    <?php if(!empty($item['sub_menu'])) : ?>
                      <ul class="sitemap-list submenu">
                        <li class="submenu">
                          <div class="sitemap-item submenu">
                            <span class="icon">•</span>
                            <span><?= $item['title'] ?></span>
                          </div>
                          <ul class="sitemap-list submenu">
                            <li class="submenu">
                              <div class="sitemap-item">
                                <span class="icon">∘</span>
                                <a href="<?= $item['link'] ?>" <?= $item['new_tab'] ? 'target="_blank"' : '' ?>><?= $item['title'] ?></a>
                              </div>
                            </li>
                            <li class="submenu">
                              <div class="sitemap-item">
                                <span class="icon">∘</span>
                                <a href="<?= $item['link'] ?>" <?= $item['new_tab'] ? 'target="_blank"' : '' ?>><?= $item['title'] ?></a>
                              </div>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <div class="sitemap-item">
                            <span class="icon">•</span>
                            <a href="<?= $item['link'] ?>" <?= $item['new_tab'] ? 'target="_blank"' : '' ?>><?= $item['title'] ?></a>
                          </div>
                        </li>
                        <li>
                          <div class="sitemap-item">
                            <span class="icon">•</span>
                            <a href="<?= $item['link'] ?>" <?= $item['new_tab'] ? 'target="_blank"' : '' ?>><?= $item['title'] ?></a>
                          </div>
                        </li>
                      </ul>
                    <?php endif; ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

</body>

</html>