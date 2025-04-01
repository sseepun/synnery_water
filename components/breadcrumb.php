<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-01 <?= isset($breadcrumbStyle)? $breadcrumbStyle: '' ?>">
    <div class="filter-01"></div>
    <div class="container">
      <div class="breadcrumb-wrapper">
        <div class="text-container">
          <div class="patterns">
            <svg class="pattern-02" data-aos="fade-in" data-aos-delay="300" width="31" height="37" viewBox="0 0 31 37" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.37952 4.82893C10.112 -1.15173 19.6073 -1.35293 25.588 4.37952C31.5686 10.112 31.7698 19.6073 26.0374 25.588L15.6579 36.4169L4.82893 26.0374C-1.15172 20.3049 -1.35293 10.8096 4.37952 4.82893Z" fill="white"/>
            </svg>
            <svg class="pattern-01" data-aos="fade-up" data-aos-delay="0" width="220" height="79" viewBox="0 0 220 79" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 77.5C47.3563 76.9069 83 50.5 99 2C99 2 114.458 70.3427 191.976 77.5H219.5C209.553 78.333 200.398 78.2776 191.976 77.5H0Z" fill="white"/>
              <path d="M99 2C83 50.5 47.3563 76.9069 0 77.5H219.5C118 86 99 2 99 2Z" stroke="white"/>
            </svg>
          </div>
          <div class="wrapper">
            <h3 class="title color-white color-white-theme fw-700" data-aos="fade-in" data-aos-delay="150">
              <?= $breadcrumbTitle ?>
            </h3>
            <div class="links-container" data-aos="fade-in" data-aos-delay="150">
              <div class="link-wrapper">
                <?php foreach($breadcrumb as $b){?>
                  <div class="link">
                    <a class="menu p sm fw-400" href="<?= $b['url'] ?>">
                      <?= $b['display'] ?> 
                    </a>
                    <div class="icon">
                      <svg width="9" height="8" viewBox="0 0 9 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.9893 4.29467L7.98927 4.29463L7.98429 4.29959L7.98006 4.3038C7.27042 5.01106 6.45614 5.8226 5.63541 6.45958C4.79038 7.11541 4.0438 7.5 3.46745 7.5C2.68101 7.5 1.93886 7.12427 1.39595 6.49798L1.39596 6.49797L1.39346 6.49513C0.844194 5.8711 0.5 4.99311 0.5 4C0.5 3.00993 0.85195 2.12957 1.39595 1.50202L1.39596 1.50203L1.39841 1.49916C1.93852 0.86651 2.66906 0.5 3.46745 0.5C4.04411 0.5 4.79323 0.884933 5.63928 1.54063C6.46216 2.17837 7.27805 2.99173 7.98257 3.69868C8.08472 3.8018 8.18611 3.90387 8.28636 4.00352C8.19079 4.09803 8.09204 4.19511 7.9893 4.29467Z" stroke="white"/>
                      </svg>
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
          </div>
        </div>
        <div class="img-container"></div>
      </div>
    </div>
    <div class="breadcrumb-background" data-aos="fade-in" data-aos-delay="0">
      <div class="wrapper">
        <?php if(!empty($breadcrumbBg)){?>
          <div class="img-bg" style="background-image:url('<?= $breadcrumbBg ?>');"></div>
        <?php }?>
      </div>
    </div>
  </section>
<?php }?>
