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
    ['url' => '#', 'display' => 'เเบบประเมินความพึงพอใจ'],
  ];
  $breadcrumbTitle = 'เเบบประเมินความพึงพอใจ';
  $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
  include('components/breadcrumb.php');
  ?>

  <section class="section-padding pt-4 section-17 bg-white">
    <?php
      $titleDoc = [
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
        ['title' => 'คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี'],
      ];
    ?>
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <?php
        $listHeaderClass = 'mt-3 mb-3 pb-5';
        $listHeader = ['search', 'category', 'order', 'collapse'];
        include('components/list-header.php');
        ?>
      </div>
      <div class="faq-01 style-03" data-aos="fade-up" data-aos-delay="150">
        <?php foreach ($titleDoc as $i => $d) { ?>
          <div class="content <?php if ($i == 0 || $i == 1) echo 'active'; ?> mb-2">
            <div class="wrapper">
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
                          <svg class="in-icon poll" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.0668 15.2332H23.178V12.9316C23.178 12.4495 22.7871 12.0586 22.3049 12.0586H17.543C17.0609 12.0586 16.67 12.4495 16.67 12.9316V18.4077H12.7812C12.2991 18.4077 11.9082 18.7986 11.9082 19.2807V25.6299C11.9082 26.112 12.2991 26.5029 12.7812 26.5029H17.543H22.3049H27.0668C27.5489 26.5029 27.9398 26.112 27.9398 25.6299V16.1062C27.9398 15.6241 27.5489 15.2332 27.0668 15.2332ZM13.6542 20.1538H16.6699V24.7569H13.6542V20.1538ZM21.4319 24.7569H18.416V13.8046H21.4319V24.7569ZM26.1938 24.7569H23.178V16.9792H26.1938V24.7569Z" fill="white"/>
                            <path d="M5.71635 18.4054H0.873021C0.622703 18.4054 0.384449 18.2979 0.218735 18.1104C0.0530207 17.9228 -0.0242016 17.6731 0.00667144 17.4247C0.553021 13.0286 2.5858 8.87554 5.73072 5.73069C8.87564 2.58585 13.0286 0.552995 17.4248 0.00664625C17.6731 -0.0241474 17.9229 0.0529955 18.1104 0.21871C18.298 0.384424 18.4054 0.622678 18.4054 0.872995V5.71625C18.4054 6.1426 18.0975 6.50657 17.6769 6.5772C11.9924 7.53173 7.53183 11.9924 6.57731 17.6769C6.50667 18.0974 6.1427 18.4054 5.71635 18.4054ZM1.88802 16.6593H4.99588C6.26691 10.8315 10.8316 6.26681 16.6594 4.99585V1.888C9.1277 3.23696 3.23699 9.12768 1.88802 16.6593Z" fill="white"/>
                            <path d="M19.9233 40.0003C9.81437 40.0003 1.25215 32.4433 0.00667144 22.422C-0.0242016 22.1737 0.0530207 21.924 0.218735 21.7364C0.384449 21.5488 0.622703 21.4414 0.873021 21.4414H5.71627C6.14262 21.4414 6.50667 21.7493 6.57723 22.1698C7.67691 28.7192 13.2898 33.4728 19.9233 33.4728C22.7427 33.4728 25.456 32.5996 27.7696 30.9476C28.1169 30.6996 28.5925 30.739 28.8942 31.0408L32.3204 34.467C32.4974 34.644 32.5899 34.8885 32.5744 35.1385C32.5589 35.3883 32.4368 35.6195 32.2392 35.7733C28.6855 38.5386 24.4267 40.0003 19.9233 40.0003ZM1.88818 23.1874C3.44215 31.8437 11.0267 38.2543 19.9233 38.2543C23.7023 38.2543 27.2928 37.1268 30.3681 34.9839L28.1699 32.7856C25.6977 34.3798 22.8621 35.2187 19.9233 35.2187C16.2898 35.2187 12.7674 33.9155 10.0049 31.549C7.46508 29.3734 5.705 26.4263 4.99612 23.1874L1.88818 23.1874Z" fill="white"/>
                            <path d="M35.0843 32.5761C34.8535 32.5761 34.6313 32.4846 34.467 32.3204L31.0408 28.8942C30.739 28.5924 30.6997 28.1169 30.9476 27.7696C32.5996 25.4559 33.4728 22.7427 33.4728 19.9232C33.4728 13.2898 28.7192 7.67694 22.1698 6.57718C21.7493 6.50654 21.4414 6.14257 21.4414 5.71622V0.87297C21.4414 0.622653 21.5488 0.384399 21.7364 0.218685C21.924 0.0529703 22.1739 -0.0240932 22.422 0.00662108C32.4434 1.25202 40.0004 9.81432 40.0004 19.9232C40.0004 24.4266 38.5387 28.6854 35.7734 32.2393C35.6196 32.4369 35.3884 32.559 35.1385 32.5746C35.1205 32.5757 35.1024 32.5761 35.0843 32.5761ZM32.7857 28.1699L34.9839 30.3681C37.1268 27.2927 38.2543 23.7023 38.2543 19.9232C38.2543 11.0266 31.8438 3.44202 23.1875 1.88813V4.99607C26.4265 5.70495 29.3735 7.46503 31.5492 10.0049C33.9156 12.7673 35.2189 16.2898 35.2189 19.9232C35.2189 22.8621 34.3799 25.6977 32.7857 28.1699Z" fill="white"/>
                          </svg>

                        </div>
                        <div class="show-active">
                          <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 45C0 20.1472 20.1472 0 45 0C69.8528 0 90 20.1472 90 45V90H45C20.1472 90 0 69.8528 0 45Z" fill="white"/>
                          </svg>
                          <svg class="in-icon poll" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.0668 15.2332H23.178V12.9316C23.178 12.4495 22.7871 12.0586 22.3049 12.0586H17.543C17.0609 12.0586 16.67 12.4495 16.67 12.9316V18.4077H12.7812C12.2991 18.4077 11.9082 18.7986 11.9082 19.2807V25.6299C11.9082 26.112 12.2991 26.5029 12.7812 26.5029H17.543H22.3049H27.0668C27.5489 26.5029 27.9398 26.112 27.9398 25.6299V16.1062C27.9398 15.6241 27.5489 15.2332 27.0668 15.2332ZM13.6542 20.1538H16.6699V24.7569H13.6542V20.1538ZM21.4319 24.7569H18.416V13.8046H21.4319V24.7569ZM26.1938 24.7569H23.178V16.9792H26.1938V24.7569Z" fill="#009DDC"/>
                            <path d="M5.71635 18.4054H0.873021C0.622703 18.4054 0.384449 18.2979 0.218735 18.1104C0.0530207 17.9228 -0.0242016 17.6731 0.00667144 17.4247C0.553021 13.0286 2.5858 8.87554 5.73072 5.73069C8.87564 2.58585 13.0286 0.552995 17.4248 0.00664625C17.6731 -0.0241474 17.9229 0.0529955 18.1104 0.21871C18.298 0.384424 18.4054 0.622678 18.4054 0.872995V5.71625C18.4054 6.1426 18.0975 6.50657 17.6769 6.5772C11.9924 7.53173 7.53183 11.9924 6.57731 17.6769C6.50667 18.0974 6.1427 18.4054 5.71635 18.4054ZM1.88802 16.6593H4.99588C6.26691 10.8315 10.8316 6.26681 16.6594 4.99585V1.888C9.1277 3.23696 3.23699 9.12768 1.88802 16.6593Z" fill="#009DDC"/>
                            <path d="M19.9233 40.0003C9.81437 40.0003 1.25215 32.4433 0.00667144 22.422C-0.0242016 22.1737 0.0530207 21.924 0.218735 21.7364C0.384449 21.5488 0.622703 21.4414 0.873021 21.4414H5.71627C6.14262 21.4414 6.50667 21.7493 6.57723 22.1698C7.67691 28.7192 13.2898 33.4728 19.9233 33.4728C22.7427 33.4728 25.456 32.5996 27.7696 30.9476C28.1169 30.6996 28.5925 30.739 28.8942 31.0408L32.3204 34.467C32.4974 34.644 32.5899 34.8885 32.5744 35.1385C32.5589 35.3883 32.4368 35.6195 32.2392 35.7733C28.6855 38.5386 24.4267 40.0003 19.9233 40.0003ZM1.88818 23.1874C3.44215 31.8437 11.0267 38.2543 19.9233 38.2543C23.7023 38.2543 27.2928 37.1268 30.3681 34.9839L28.1699 32.7856C25.6977 34.3798 22.8621 35.2187 19.9233 35.2187C16.2898 35.2187 12.7674 33.9155 10.0049 31.549C7.46508 29.3734 5.705 26.4263 4.99612 23.1874L1.88818 23.1874Z" fill="#009DDC"/>
                            <path d="M35.0843 32.5761C34.8535 32.5761 34.6313 32.4846 34.467 32.3204L31.0408 28.8942C30.739 28.5924 30.6997 28.1169 30.9476 27.7696C32.5996 25.4559 33.4728 22.7427 33.4728 19.9232C33.4728 13.2898 28.7192 7.67694 22.1698 6.57718C21.7493 6.50654 21.4414 6.14257 21.4414 5.71622V0.87297C21.4414 0.622653 21.5488 0.384399 21.7364 0.218685C21.924 0.0529703 22.1739 -0.0240932 22.422 0.00662108C32.4434 1.25202 40.0004 9.81432 40.0004 19.9232C40.0004 24.4266 38.5387 28.6854 35.7734 32.2393C35.6196 32.4369 35.3884 32.559 35.1385 32.5746C35.1205 32.5757 35.1024 32.5761 35.0843 32.5761ZM32.7857 28.1699L34.9839 30.3681C37.1268 27.2927 38.2543 23.7023 38.2543 19.9232C38.2543 11.0266 31.8438 3.44202 23.1875 1.88813V4.99607C26.4265 5.70495 29.3735 7.46503 31.5492 10.0049C33.9156 12.7673 35.2189 16.2898 35.2189 19.9232C35.2189 22.8621 34.3799 25.6977 32.7857 28.1699Z" fill="#009DDC"/>
                          </svg>
                        </div>
                      </div>
                    </td>
                    <td class="text-container xs-mw-unset">
                      <div>
                        <a class="p title size-01 fw-400 color-black" href="#"><?= $d['title'] ?> </a>
                        <div class="options pl-0 mt-5">
                          <div class="option color-gray-01 mr-3">
                            <div class="icon">
                              <em class="fa-solid fa-calendar"></em>
                            </div>
                            <span class="p xs ml-2 fw-300">21 พ.ค. 67</span>
                          </div>
                          <div class="option color-gray-01 mr-3">
                            <p class="xs  mr-2 fw-600">โหวต : <span class="fw-300">255</span> </p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="button-container">
                      <div class="">
                        <div class="btn-collap">
                          <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.0007 33.668C7.81732 33.668 0.333984 26.1846 0.333984 17.0013C0.333984 7.81797 7.81732 0.334633 17.0007 0.334633C26.184 0.334633 33.6673 7.81797 33.6673 17.0013C33.6673 26.1846 26.184 33.668 17.0007 33.668ZM23.7673 14.018C23.5173 13.768 23.2007 13.6513 22.884 13.6513C22.5673 13.6513 22.2507 13.768 22.0007 14.018L17.0007 19.018L12.0007 14.018C11.5173 13.5346 10.7173 13.5346 10.234 14.018C9.75065 14.5013 9.75065 15.3013 10.234 15.7846L16.1173 21.668C16.6007 22.1513 17.4007 22.1513 17.884 21.668L23.7673 15.7846C24.2507 15.2846 24.2507 14.5013 23.7673 14.018Z" fill="#009DDC" />
                          </svg>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="answer border-1 bcolor-white-theme bcolor-02" <?php if($i == 1 || $i == 0) echo 'style="display:block;"'; ?>>
                <?php if ($i == 1): ?>
                  <div class="d-flex sm-jc-center fw-wrap ai-center jc-space-between">
                    <div class="rating-container">
                      <div class="rating-option result">
                        <p class="sm fw-400 color-blue-01">มากที่สุด</p>
                        <p class="sm fw-600 color-blue-01">50%</p>
                      </div>
                      <div class="rating-option result">
                        <p class="sm fw-400 color-blue-01">มาก</p>
                        <p class="sm fw-600 color-blue-01">40%</p>
                      </div>
                      <div class="rating-option result">
                        <p class="sm fw-400 color-blue-01">ปานกลาง</p>
                        <p class="sm fw-600 color-blue-01">30%</p>
                      </div>
                      <div class="rating-option result">
                        <p class="sm fw-400 color-blue-01">น้อย</p>
                        <p class="sm fw-600 color-blue-01">20%</p>
                      </div>
                      <div class="rating-option result">
                        <p class="sm fw-400 color-blue-01">น้อยที่สุด</p>
                        <p class="sm fw-600 color-blue-01">0%</p>
                      </div>
                    </div>
                    <div class="chart-container-02">
                      <div class="chart-poll" id="chart-poll"></div>
                      <div class="chart-data">
                        <div class="list-item">
                          <div class="dot"></div> 
                          <span class="p title color-p fw-400">มากที่สุด</span>
                        </div>
                        <div class="list-item">
                          <div class="dot"></div> 
                          <span class="p title color-p fw-400">มาก</span>
                        </div>
                        <div class="list-item">
                          <div class="dot"></div> 
                          <span class="p title color-p fw-400">ปานกลาง</span>
                        </div>
                        <div class="list-item">
                          <div class="dot"></div> 
                          <span class="p title color-p fw-400">น้อย</span>
                        </div>
                        <div class="list-item">
                          <div class="dot"></div> 
                          <span class="p title color-p fw-400">น้อยที่สุด</span>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php else: ?>
                  <div class="d-flex sm-jc-center fw-wrap ai-center jc-space-between">
                    <form>
                      <div class="rating-container">
                        <div class="rating-option active" data-value="มากที่สุด">
                          <input type="radio" id="มากที่สุด<?= $i ?>" name="rating<?= $i ?>" value="มากที่สุด" checked>
                          <label for="มากที่สุด<?= $i ?>">มากที่สุด</label>
                        </div>
                        <div class="rating-option">
                          <input type="radio" id="มาก<?= $i ?>" name="rating<?= $i ?>" value="มาก">
                          <label for="มาก<?= $i ?>">มาก</label>
                        </div>
                        <div class="rating-option">
                          <input type="radio" id="ปานกลาง<?= $i ?>" name="rating<?= $i ?>" value="ปานกลาง">
                          <label for="ปานกลาง<?= $i ?>">ปานกลาง</label>
                        </div>
                        <div class="rating-option">
                          <input type="radio" id="น้อย<?= $i ?>" name="rating<?= $i ?>" value="น้อย">
                          <label for="น้อย<?= $i ?>">น้อย</label>
                        </div>
                        <div class="rating-option">
                          <input type="radio" id="น้อยที่สุด<?= $i ?>" name="rating<?= $i ?>" value="น้อยที่สุด">
                          <label for="น้อยที่สุด<?= $i ?>">น้อยที่สุด</label>
                        </div>
                        <div class="btns w-auto mt-5">
                          <div class="btn md btn-action mw-1 btn-s bradius-10">โหวต</div>
                        </div>
                      </div>
                    </form>
                  </div>
                <?php endif; ?>
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

  <script src="https://cdn.jsdelivr.net/npm/echarts@5.6.0/dist/echarts.min.js"></script>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

  <script>
    $(function(){
      $('.chart-poll').each(function () {
        var myChart = echarts.init($(this)[0]); 

        var option = {
            series: [{
                name: 'Example Data',
                type: 'pie',
                radius: ['30%', '70%'],
                avoidLabelOverlap: false,
                itemStyle: {
                    borderRadius: 0, 
                    borderWidth: 1
                },
                data: [
                    { value: 30, name: 'มากที่สุด', itemStyle: { color: '#3E74CB' } },
                    { value: 20, name: 'มาก', itemStyle: { color: '#305EA8' } },
                    { value: 25, name: 'ปานกลาง', itemStyle: { color: '#0049BF' } },
                    { value: 15, name: 'น้อย', itemStyle: { color: '#0E3A81' } },
                    { value: 10, name: 'น้อยที่สุด', itemStyle: { color: '#01235A' } }
                ],
                label: { show: false }, 
                labelLine: { show: true } 
            }]
        };

        myChart.setOption(option);

        let chartDom = myChart.getDom();
        let echartsInstanceId = chartDom.getAttribute('_echarts_instance_');

        chartDom.removeAttribute('_echarts_instance_');

        $(window).on('resize', function () {
            myChart.resize();
        });

        $('.rating-option').on('click', function () {
          $(this).addClass('active').siblings().removeClass('active');
        });
      });
    });
  </script>
</body>

</html>