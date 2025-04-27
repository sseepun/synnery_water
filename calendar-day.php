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
          $listHeaderCalendar = ['search', 'cate-order'];
          include('components/list-header-calendar.php'); 
        ?>
      </div>
      <div class="calendar-header mt-6 mb-6" data-aos="fade-up" data-aos-delay="150">
        <div class="text-wrapper">
          <p id="calendar-title" class="h3 color-p fw-400 mr-2 mt-2 font-mitr">
            <span class="month">&nbsp;</span>
            <span class="year">&nbsp;</span>
          </p>
          <div class="form-group">
            <select id="day-selector" class="day"></select>
            <div class="dropdown-icon">
                <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.2315 3.78814V1.49969C5.2315 1.14006 4.93727 0.845825 4.57769 0.845825C4.21812 0.845825 3.92383 1.14006 3.92383 1.49969V3.78814C3.92383 4.14776 4.21806 4.442 4.57769 4.442C4.93732 4.442 5.2315 4.14776 5.2315 3.78814Z" fill="#008fd3"></path>
                  <path d="M13.0773 3.78815V1.4997C13.0773 1.14008 12.783 0.84584 12.4234 0.84584C12.0638 0.84584 11.7695 1.14008 11.7695 1.4997V3.78815C11.7695 4.14778 12.0638 4.44202 12.4234 4.44202C12.783 4.44202 13.0773 4.14778 13.0773 3.78815Z" fill="#008fd3"></path>
                  <path d="M16.3466 16.1586V7.71094H0.654297V16.1586C0.654297 17.0904 1.40949 17.8455 2.3412 17.8455H14.6597C15.5914 17.8455 16.3466 17.0904 16.3466 16.1586Z" fill="#008fd3"></path>
                  <path d="M11.1158 3.7882V2.80743H5.88505V3.7882C5.88505 4.51073 5.29985 5.09588 4.57738 5.09588C3.85491 5.09588 3.26965 4.51067 3.26965 3.7882V2.80743H2.3412C1.40949 2.80743 0.654297 3.56263 0.654297 4.49434V7.05742H16.3466V4.49434C16.3466 3.56263 15.5914 2.80743 14.6597 2.80743H13.7313V3.7882C13.7313 4.51073 13.1461 5.09588 12.4236 5.09588C11.7011 5.09588 11.1158 4.51067 11.1158 3.7882Z" fill="#008fd3"></path>
                </svg>
              </div>
          </div>
        </div>
        <div class="button-container">
          <div class="button-wrapper">
            <div class="btns">
              <div class="btn btn-action sm style-02 btn-calendar active">วัน</div>
              <div class="btn btn-action sm style-02 btn-calendar">สัปดาห์</div>
              <div class="btn btn-action sm style-02 btn-calendar">เดือน</div>
              <div class="btn btn-action sm style-02 btn-calendar">ปี</div>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-x-wrapper p-0 mt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="calendar-wrapper ">
          <div class="calendar-header-title">
            <div class="wrapper">
              <div class="time">
                <p class="fw-400">เวลา</p>
              </div>
              <div class="list">
                <p class="fw-600">รายการกิจกรรม</p>
              </div>
            </div>
          </div>
          <div class="calendar-day">
            <div id="calendar-day" class="bg-white"></div>
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

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css?v=<?= time() ?>" />
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>

  <script>
    $(function(){ 'use strict';

      var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];

      var months = [
        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
        'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
      ];
      var today = new Date();
      const daySelector = $('#day-selector');

   
      var calendarTitle = $('#calendar-title'),
          todayBtn = $('#today-btn'),
          prevDayBtn = $('#prev-day-btn'),
          nextDayBtn = $('#next-day-btn');
            
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }
      function updateCalendarHeaderDay(view){
        var title = view.title;
        calendarTitle.find('.month').html(title.substr(0, title.length - 5));
        calendarTitle.find('.year').html(title.substr(title.length - 5));
      }
      
      function populateDaySelector(month, year, selectedDay = null) {
        daySelector.empty(); 
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        for (let day = 1; day <= daysInMonth; day++) {
          const isSelected = day === selectedDay ? 'selected' : '';
          daySelector.append(
            `<option value="${day}" ${isSelected}>${day} ${months[month]}</option>`
          );
        }
      }

      const calendarDay = new FullCalendar.Calendar($('#calendar-day')[0], {
        plugins: ['interaction', 'timeGrid'],
        header: {
          left: 'prev',
          center: 'title',
          right: 'next'
        },
        defaultView: 'timeGridDay',
        firstDay: 1,
        locale: 'th',
        contentHeight: 'auto',
        slotDuration: '01:00:00',
        events: [ 
          {
            id: '1',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            province: 'เชียงราย',
            img: 'public/assets/app/images/content/calendar-01.png',
            start: '2025-04-01T09:30:00',
            end: '2025-04-01T12:30:00',
            className: "event-yellow event-column",
            column: 'event-column',
          },{
            id: '2',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            img: 'public/assets/app/images/content/calendar-01.png',
            province: 'กรุงเทพมหานคร',
            start: '2025-04-01T10:30:00',
            end: '2025-04-01T11:30:00',
            className: "event-purple",
            column: '',
          },
        ],
        datesRender: function(info){
          updateCalendarHeaderDay(info.view);
          const currentDate = new Date(info.view.currentStart);
          const day = currentDate.getDate();
          const month = currentDate.getMonth();
          const year = currentDate.getFullYear();

          populateDaySelector(month, year, day);
        },
        eventRender: function(info, d) {
          var event = info.event;
          console.log(event);
          var dateStart = new Date(event.start);
          var hoursStart = String(dateStart.getHours()).padStart(2, '0');
          var minutesStart = String(dateStart.getMinutes()).padStart(2, '0');

          var dateEnd = event.end ? new Date(event.end) : null;
          var hoursEnd = dateEnd ? String(dateEnd.getHours()).padStart(2, '0') : null;
          var minutesEnd = dateEnd ? String(dateEnd.getMinutes()).padStart(2, '0') : null;

          var timeDisplay = `${hoursStart}:${minutesStart}${dateEnd ? ' - ' + hoursEnd + ':' + minutesEnd : ''}`;

          if(event.extendedProps.column != 'event-column'){
            info.el.innerHTML = `
              <div class="custom-event"> 
                <div class="table">
                  <div class="table-wrapper">
                    <div class="ss-card ss-card-17">
                      <p class="title fw-400 color-black">${event.title}</p>
                      <p class="desc xs color-black">${event.extendedProps.desc}</p>
                      <div class="ss-img mt-2">
                        <div class="img-bg" style="background-image:url('${event.extendedProps.img}');"></div>
                      </div>
                      <p class="xs title-time mt-2">
                        <div class="d-flex ai-center icon-time mb-1">
                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 14.2188C4.225 14.2188 1.5625 11.5562 1.5625 8.28125C1.5625 5.00625 4.225 2.34375 7.5 2.34375C10.775 2.34375 13.4375 5.00625 13.4375 8.28125C13.4375 11.5562 10.775 14.2188 7.5 14.2188ZM7.5 3.28125C4.74375 3.28125 2.5 5.525 2.5 8.28125C2.5 11.0375 4.74375 13.2812 7.5 13.2812C10.2563 13.2812 12.5 11.0375 12.5 8.28125C12.5 5.525 10.2563 3.28125 7.5 3.28125Z" fill="#008fd3" stroke="#008fd3" stroke-width="0.5"/>
                            <path d="M7.5 8.59375C7.24375 8.59375 7.03125 8.38125 7.03125 8.125V5C7.03125 4.74375 7.24375 4.53125 7.5 4.53125C7.75625 4.53125 7.96875 4.74375 7.96875 5V8.125C7.96875 8.38125 7.75625 8.59375 7.5 8.59375Z" fill="#008fd3"/>
                            <path d="M9.375 1.71875H5.625C5.36875 1.71875 5.15625 1.50625 5.15625 1.25C5.15625 0.99375 5.36875 0.78125 5.625 0.78125H9.375C9.63125 0.78125 9.84375 0.99375 9.84375 1.25C9.84375 1.50625 9.63125 1.71875 9.375 1.71875Z" fill="#008fd3"/>
                          </svg>
                          <p class="xxs ml-1 color-gray-04">${timeDisplay}</p>
                        </div>
                        <div class="d-flex ai-center icon-location mb-1">
                          <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.26211 5.30625C3.49336 -0.106249 11.5121 -0.0999984 12.7371 5.3125C13.4559 8.4875 10.4809 11.175 8.74961 12.8375C7.49336 14.05 7.51211 14.05 6.24961 12.8375C4.52461 11.175 1.54336 8.48125 2.26211 5.30625Z" stroke="#008fd3" stroke-width="1.5"/>
                            <path d="M7.50078 8.39414C8.57774 8.39414 9.45078 7.5211 9.45078 6.44414C9.45078 5.36719 8.57774 4.49414 7.50078 4.49414C6.42383 4.49414 5.55078 5.36719 5.55078 6.44414C5.55078 7.5211 6.42383 8.39414 7.50078 8.39414Z" stroke="#008fd3" stroke-width="1.5"/>
                          </svg>
                          <p class="xxs ml-1 color-gray-04">${event.extendedProps.province}</p>
                        </div>
                      </p>
                      <div class="btns d-flex mt-2">
                        <div class="btn btn-icon style-02 btn-action btn-outline-none">
                        <p class="title xs fw-400 color-black">อ่านเพิ่มเติม</p>
                        <div class="icon">
                          <svg viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.9291 5.49425L10.8154 0.572376C10.6776 0.444296 10.4931 0.373425 10.3015 0.375027C10.11 0.376629 9.92677 0.450576 9.79132 0.580941C9.65588 0.711306 9.57905 0.887658 9.57738 1.07202C9.57572 1.25637 9.64935 1.43398 9.78242 1.56659L13.6491 5.28823L7.22558 5.28823L0.80206 5.28823C0.608312 5.28823 0.4225 5.36231 0.285499 5.49417C0.148499 5.62604 0.0715332 5.80488 0.0715332 5.99136C0.0715332 6.17784 0.148499 6.35668 0.285499 6.48854C0.4225 6.6204 0.608312 6.69448 0.80206 6.69448L13.6491 6.69448L9.78242 10.4161C9.71265 10.481 9.657 10.5586 9.61871 10.6444C9.58043 10.7301 9.56027 10.8224 9.55943 10.9158C9.55859 11.0091 9.57707 11.1017 9.6138 11.1881C9.65053 11.2745 9.70478 11.353 9.77337 11.4191C9.84196 11.4851 9.92353 11.5373 10.0133 11.5726C10.1031 11.608 10.1993 11.6258 10.2963 11.625C10.3933 11.6242 10.4891 11.6048 10.5783 11.5679C10.6674 11.5311 10.748 11.4775 10.8154 11.4103L15.9291 6.48847C16.066 6.35661 16.143 6.1778 16.143 5.99136C16.143 5.80491 16.066 5.6261 15.9291 5.49425Z" fill="#FFFFFF"></path>
                          </svg>
                        </div> 
                      </div>          
                    </div>
                  </div>
                </div>
              </div>
            `;
          }
          else {
            info.el.innerHTML = `
              <div class="custom-event"> 
                <div class="table">
                  <div class="table-wrapper">
                    <div class="ss-card ss-card-17">
                      <div class="wrapper">
                        <div class="text-container">
                          <p class="title fw-400 color-black">${event.title}</p>
                          <p class="desc xxs color-black">${event.extendedProps.desc}</p>
                          <p class="xs title-time mt-2">
                            <div class="d-flex ai-center icon-time mb-1">
                              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.5 14.2188C4.225 14.2188 1.5625 11.5562 1.5625 8.28125C1.5625 5.00625 4.225 2.34375 7.5 2.34375C10.775 2.34375 13.4375 5.00625 13.4375 8.28125C13.4375 11.5562 10.775 14.2188 7.5 14.2188ZM7.5 3.28125C4.74375 3.28125 2.5 5.525 2.5 8.28125C2.5 11.0375 4.74375 13.2812 7.5 13.2812C10.2563 13.2812 12.5 11.0375 12.5 8.28125C12.5 5.525 10.2563 3.28125 7.5 3.28125Z" fill="#008fd3" stroke="#008fd3" stroke-width="0.5"/>
                                <path d="M7.5 8.59375C7.24375 8.59375 7.03125 8.38125 7.03125 8.125V5C7.03125 4.74375 7.24375 4.53125 7.5 4.53125C7.75625 4.53125 7.96875 4.74375 7.96875 5V8.125C7.96875 8.38125 7.75625 8.59375 7.5 8.59375Z" fill="#008fd3"/>
                                <path d="M9.375 1.71875H5.625C5.36875 1.71875 5.15625 1.50625 5.15625 1.25C5.15625 0.99375 5.36875 0.78125 5.625 0.78125H9.375C9.63125 0.78125 9.84375 0.99375 9.84375 1.25C9.84375 1.50625 9.63125 1.71875 9.375 1.71875Z" fill="#008fd3"/>
                              </svg>
                              <p class="xxs ml-1 color-gray-04">${timeDisplay}</p>
                            </div>
                            <div class="d-flex ai-center icon-location mb-1">
                              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.26211 5.30625C3.49336 -0.106249 11.5121 -0.0999984 12.7371 5.3125C13.4559 8.4875 10.4809 11.175 8.74961 12.8375C7.49336 14.05 7.51211 14.05 6.24961 12.8375C4.52461 11.175 1.54336 8.48125 2.26211 5.30625Z" stroke="#008fd3" stroke-width="1.5"/>
                                <path d="M7.50078 8.39414C8.57774 8.39414 9.45078 7.5211 9.45078 6.44414C9.45078 5.36719 8.57774 4.49414 7.50078 4.49414C6.42383 4.49414 5.55078 5.36719 5.55078 6.44414C5.55078 7.5211 6.42383 8.39414 7.50078 8.39414Z" stroke="#008fd3" stroke-width="1.5"/>
                              </svg>
                              <p class="xxs ml-1 color-gray-04">${event.extendedProps.province}</p>
                            </div>
                          </p>
                          <div class="btns d-flex mt-2">
                            <div class="btn btn-icon style-02 btn-action btn-outline-none">
                              <p class="title fw-400 xs color-black">อ่านเพิ่มเติม</p>
                              <div class="icon">
                                <svg viewBox="0 0 17 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M15.9291 5.49425L10.8154 0.572376C10.6776 0.444296 10.4931 0.373425 10.3015 0.375027C10.11 0.376629 9.92677 0.450576 9.79132 0.580941C9.65588 0.711306 9.57905 0.887658 9.57738 1.07202C9.57572 1.25637 9.64935 1.43398 9.78242 1.56659L13.6491 5.28823L7.22558 5.28823L0.80206 5.28823C0.608312 5.28823 0.4225 5.36231 0.285499 5.49417C0.148499 5.62604 0.0715332 5.80488 0.0715332 5.99136C0.0715332 6.17784 0.148499 6.35668 0.285499 6.48854C0.4225 6.6204 0.608312 6.69448 0.80206 6.69448L13.6491 6.69448L9.78242 10.4161C9.71265 10.481 9.657 10.5586 9.61871 10.6444C9.58043 10.7301 9.56027 10.8224 9.55943 10.9158C9.55859 11.0091 9.57707 11.1017 9.6138 11.1881C9.65053 11.2745 9.70478 11.353 9.77337 11.4191C9.84196 11.4851 9.92353 11.5373 10.0133 11.5726C10.1031 11.608 10.1993 11.6258 10.2963 11.625C10.3933 11.6242 10.4891 11.6048 10.5783 11.5679C10.6674 11.5311 10.748 11.4775 10.8154 11.4103L15.9291 6.48847C16.066 6.35661 16.143 6.1778 16.143 5.99136C16.143 5.80491 16.066 5.6261 15.9291 5.49425Z" fill="#FFFFFF"></path>
                                </svg>
                              </div> 
                            </div> 
                          </div>
                        </div>

                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('${event.extendedProps.img}');"></div>
                          </div>
                        </div>
                      </div>          
                    </div>
                  </div>
                </div>
              </div>
            `;
          }

          return true;
        }
      });
      calendarDay.render();

    
      daySelector.change(function () {
        const selectedDay = parseInt($(this).val());
        const currentMonth = calendarDay.getDate().getMonth();
        const currentYear = calendarDay.getDate().getFullYear();
        const newDate = new Date(currentYear, currentMonth, selectedDay);
        calendarDay.gotoDate(newDate);
      });

      populateDaySelector(today.getMonth(), today.getFullYear(), today.getDate());
        
      todayBtn.click(function(e){
        e.preventDefault();
        calendarDay.today();
      });
      prevDayBtn.click(function(e){
        e.preventDefault();
        calendarDay.prev();
      });
      nextDayBtn.click(function(e){
        e.preventDefault();
        calendarDay.next();
      });
    });
  </script>
</body>

</html>