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
    ['url' => '#', 'display' => 'ข้อที่ ๑ (๖๗) องค์กรมีการประกาศเจตนารมณ์ร่วมกัน ที่จะขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม โดยยึดมั่น ในหลักธรรมทางศาสนา หลักปรัชญาของเศรษฐกิจพอเพียง วิถีวัฒนธรรมไทยและคุณธรรม ๕ ประการ พอเพียง วินัย สุจริต จิตอาสา กตัญญู'],
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

      <div class="faq-01 doc style-03" data-aos="fade-up" data-aos-delay="150">
        <?php
        $titleDoc = [
          [
            'title' => 'ข้อที่ ๑ (๖๗) องค์กรมีการประกาศเจตนารมณ์ร่วมกัน ที่จะขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม โดยยึดมั่น ในหลักธรรมทางศาสนา 
              หลักปรัชญาของเศรษฐกิจพอเพียง วิถีวัฒนธรรมไทยและคุณธรรม ๕ ประการ พอเพียง วินัย สุจริต จิตอาสา กตัญญู'
          ],
          [
            'title' => 'ข้อที่ ๑ (๖๗) องค์กรมีการประกาศเจตนารมณ์ร่วมกัน ที่จะขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม โดยยึดมั่น ในหลักธรรมทางศาสนา 
              หลักปรัชญาของเศรษฐกิจพอเพียง วิถีวัฒนธรรมไทยและคุณธรรม ๕ ประการ พอเพียง วินัย สุจริต จิตอาสา กตัญญู '
          ],
          [
            'title' => '"องค์กรมีการประกาศเจตนารมณ์ร่วมกันที่จะขับเคลื่อนหน่วยงานให้เป็นองค์กรคุณธรรม"'
          ],
          [
            'title' => 'ข้อ 1 องค์กรมีการประกาศเจตนารมณ์ร่วมกันที่จะ ขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม 
              โดยยึดมั่นใน หลักธรรมทางศาสนา หลักปรัชญาเศรษฐกิจพอเพียง วิถีวัฒนธรรมและคุณธรรม 5 ประการ 
              พอเพียง วินัย สุจริต จิตอาสา กตัญญู'
          ],
          [
            'title' => 'ข้อที่ ๑ (๖๗) องค์กรมีการประกาศเจตนารมณ์ร่วมกัน ที่จะขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม โดยยึดมั่น ในหลักธรรมทางศาสนา 
                หลักปรัชญาของเศรษฐกิจพอเพียง วิถีวัฒนธรรมไทยและคุณธรรม ๕ ประการ พอเพียง วินัย สุจริต จิตอาสา กตัญญู'
          ],
          [
            'title' => 'ข้อที่ ๑ (๖๗) องค์กรมีการประกาศเจตนารมณ์ร่วมกัน ที่จะขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม โดยยึดมั่น ในหลักธรรมทางศาสนา 
                หลักปรัชญาของเศรษฐกิจพอเพียง วิถีวัฒนธรรมไทยและคุณธรรม ๕ ประการ พอเพียง วินัย สุจริต จิตอาสา กตัญญู '
          ],
          [
            'title' => '"องค์กรมีการประกาศเจตนารมณ์ร่วมกันที่จะขับเคลื่อนหน่วยงานให้เป็นองค์กรคุณธรรม"'
          ],
          [
            'title' => 'ข้อ 1 องค์กรมีการประกาศเจตนารมณ์ร่วมกันที่จะ ขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม 
                โดยยึดมั่นใน หลักธรรมทางศาสนา หลักปรัชญาเศรษฐกิจพอเพียง วิถีวัฒนธรรมและคุณธรรม 5 ประการ 
                พอเพียง วินัย สุจริต จิตอาสา กตัญญู'
          ],
          [
            'title' => 'ข้อ 1 องค์กรมีการประกาศเจตนารมณ์ร่วมกันที่จะ ขับเคลื่อนองค์กรให้เป็นองค์กรคุณธรรม 
                โดยยึดมั่นใน หลักธรรมทางศาสนา หลักปรัชญาเศรษฐกิจพอเพียง วิถีวัฒนธรรมและคุณธรรม 5 ประการ 
                พอเพียง วินัย สุจริต จิตอาสา กตัญญู'
          ],
        ];
        ?>
        <?php foreach ($titleDoc as $i => $d) { ?>
          <div class="content mb-2">
            <div class="wrapper"<?php // onclick="location.href='index.php';" ?>>
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
                          <svg class="in-icon poll" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.03933 25.8289C6.13144 25.7697 7.78933 24.0132 7.73012 21.9013C7.67091 19.8882 6.05249 18.2697 4.03933 18.2105C1.94723 18.1513 0.190649 19.8092 0.131438 21.9013C0.072228 24.0132 1.71039 25.75 3.82223 25.8289H4.03933Z" fill="white"/>
                            <path d="M12.3289 25.0796C12.3289 25.3361 12.3092 25.573 12.2895 25.8296H16.7895C16.7895 25.573 16.8289 25.3361 16.8289 25.0796C16.7697 16.3361 9.72368 9.25062 1 9.19141C0.743421 9.19141 0.506579 9.21114 0.25 9.23088V13.7506C0.506579 13.7309 0.743421 13.7111 1 13.7111C7.23684 13.7506 12.2697 18.823 12.3289 25.0796Z" fill="white"/>
                            <path d="M1 0.171875C0.743421 0.171875 0.506579 0.211349 0.25 0.211349V4.71135C0.506579 4.71135 0.743421 4.67188 1 4.67188C12.1908 4.73109 21.25 13.8298 21.3092 25.06C21.3092 25.3166 21.2895 25.5535 21.2697 25.81H25.75C25.75 25.5535 25.7895 25.3166 25.7895 25.06C25.75 11.3429 14.6776 0.211349 1 0.171875Z" fill="white"/>
                          </svg>
                        </div>
                        <div class="show-active">
                          <svg width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 45C0 20.1472 20.1472 0 45 0C69.8528 0 90 20.1472 90 45V90H45C20.1472 90 0 69.8528 0 45Z" fill="white"/>
                          </svg>
                          <svg class="in-icon poll" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.03933 25.8289C6.13144 25.7697 7.78933 24.0132 7.73012 21.9013C7.67091 19.8882 6.05249 18.2697 4.03933 18.2105C1.94723 18.1513 0.190649 19.8092 0.131438 21.9013C0.072228 24.0132 1.71039 25.75 3.82223 25.8289H4.03933Z" fill="#008fd3"/>
                            <path d="M12.3289 25.0796C12.3289 25.3361 12.3092 25.573 12.2895 25.8296H16.7895C16.7895 25.573 16.8289 25.3361 16.8289 25.0796C16.7697 16.3361 9.72368 9.25062 1 9.19141C0.743421 9.19141 0.506579 9.21114 0.25 9.23088V13.7506C0.506579 13.7309 0.743421 13.7111 1 13.7111C7.23684 13.7506 12.2697 18.823 12.3289 25.0796Z" fill="#008fd3"/>
                            <path d="M1 0.171875C0.743421 0.171875 0.506579 0.211349 0.25 0.211349V4.71135C0.506579 4.71135 0.743421 4.67188 1 4.67188C12.1908 4.73109 21.25 13.8298 21.3092 25.06C21.3092 25.3166 21.2895 25.5535 21.2697 25.81H25.75C25.75 25.5535 25.7895 25.3166 25.7895 25.06C25.75 11.3429 14.6776 0.211349 1 0.171875Z" fill="#008fd3"/>
                          </svg>
                        </div>
                      </div>
                    </td>
                    <td class="text-container xs-mw-unset">
                      <div>
                        <a class="p title size-01 fw-400 color-black" href="#"><?= $d['title'] ?> </a>
                        <div class="options color-gray-01 pl-0 mt-4">
                          <div class="option mr-2">
                            <div class="icon">
                              <em class="fa-solid fa-calendar"></em>
                            </div>
                            <span class="p xs ml-2 fw-400">21 พ.ค. 67</span>
                          </div>
                          <div class="option mr-2">
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                            </div>
                            <span class="p xs ml-2 fw-400">999k</span>
                          </div>
                          <div class="option mr-2">
                            <div class="icon">
                              <em class="fa-solid fa-share-nodes"></em>
                            </div>
                            <span class="p xs ml-2 fw-200">999k</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="button-container">
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
  $listResult = ['login', 'register', 'forgotpass', 'resetpass'];
  include_once('components/popup-member.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>
</body>

</html>