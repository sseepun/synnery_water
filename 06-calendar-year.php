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
          <p id="calendar-title" class="h3 color-p fw-600 mr-2 mt-2 font-mitr">
            <span class="month">&nbsp;</span>
            <span class="year">&nbsp;</span>
          </p>
          <div class="form-group">
            <select id="year-selector" class="year"></select>
            <div class="dropdown-icon">
              <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 7L0.00480902 0.25L12.9952 0.250001L6.5 7Z" fill="#008fd3"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="button-container">
          <div class="button-wrapper">
            <div class="btns">
              <div class="btn btn-action sm style-02 btn-calendar">วัน</div>
              <div class="btn btn-action sm style-02 btn-calendar">สัปดาห์</div>
              <div class="btn btn-action sm style-02 btn-calendar">เดือน</div>
              <div class="btn btn-action sm style-02 btn-calendar active">ปี</div>
            </div>
          </div>
        </div>
      </div>
      <div class="calendar-year mt-6" data-aos="fade-up" data-aos-delay="300">
        <div id="calendar-year"></div>
      </div>
    </div>
  </section>

  <?php
  $listResult = ['report-file', 'report-file-success'];
  include_once('components/popup.php');
  ?>
  <?php include_once('include/script.php'); ?>
  <?php include_once('layout/footer.php'); ?>

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css?v=<?= time() ?>" />
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>
  <script>
    $(function(){ 'use strict';
      
      var now = new Date();
      var thisMonth = `${now.getFullYear()}-${('0'+(now.getMonth()+1)).slice(-2)}`;

      var calendarTitle = $('#calendar-title'),
          todayBtn = $('#today-btn'),
          prevMonthBtn = $('#prev-month-btn'),
          nextMonthBtn = $('#next-month-btn');
      
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }

      function populateYearSelector() {
        const yearSelector = $('#year-selector');
        yearSelector.empty();

        const startYear = 2020;
        const endYear = 2030;
        const currentYear = new Date().getFullYear();

        for (let year = startYear; year <= endYear; year++) {
          const displayYear = year + 543;
          const isSelected = year === currentYear ? 'selected' : ''; 
          yearSelector.append(
            `<option value="${year}" ${isSelected}>${displayYear}</option>`
          );
        }
      }
      populateYearSelector();

      var calendar = new FullCalendar.Calendar($('#calendar-year')[0], {
        headerToolbar: {
          left: 'prev,next,today',
          center: 'title',
          right: 'multiMonthYear,dayGridMonth,timeGridWeek'
        },
        initialView: 'multiMonthYear',
        initialDate: '2025-01-12',
        editable: false,
        locale: 'th',
        dayMaxEvents: true,
        events: [
          {
            id: 2,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-04-21T09:30:00',
            end: '2025-04-21T12:30:00',
            className: 'event-blue',
          }, {
            id: 3,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-04-21T10:30:00',
            className: 'event-red',
          },{
            id: 4,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-04-21T12:30:00',
            className: 'event-yellow',
          }, {
            id: 5,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-09-11T09:30:00',
            className: 'event-red',
          }, {
            id: 6,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-09-21T09:30:00',
            className: 'event-blue',
          },{
            id: 7,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-09-21T08:30:00',
            className: 'event-red',
          },{
            id: 8,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-10T08:30:00',
            className: 'event-yellow',
          },{
            id: 9,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-16T08:30:00',
            className: 'event-blue',
          },{
            id: 10,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-16T10:00:00',
            className: 'event-red',
          },{
            id: 11,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-16T12:00:00',
            className: 'event-yellow',
          },{
            id: 12,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-16T10:00:00',
            className: 'event-blue',
          },{
            id: 13,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-01610:00:00',
            className: 'event-red',
          },{
            id: 14,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-01-10T08:30:00',
            className: 'event-blue',
          },{
            id: 15,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-02-05T09:30:00',
            className: 'event-blue',
          },{
            id: 16,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-02-05T09:30:00',
            className: 'event-blue',
          },{
            id: 17,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-02-05T09:30:00',
            className: 'event-yellow',
          },{
            id: 18,
            title: 'Event Name',
            description: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-02-05T09:30:00',
            className: 'event-red',
          }
        ], 
        eventDidMount: function(info) {
          var eventDate = info.event.start.toISOString().split('T')[0];
          var cell = document.querySelector(`[data-date="${eventDate}"]`);
          if (cell) {
            cell.classList.add('active');
          }
        },
        datesSet: function(info){
          var date = new Date(info.view.currentStart);
          $('#calendar-title .year').text(`พ.ศ. ${date.getFullYear() + 543}`);
        },

        eventContent: function(info, $el) {
          var event = info.event;

          var dateStart = new Date(event.start);
          var hoursStart = String(dateStart.getHours()).padStart(2, '0');
          var minutesStart = String(dateStart.getMinutes()).padStart(2, '0');

          var dateEnd = event.end ? new Date(event.end) : null;
          var hoursEnd = dateEnd ? String(dateEnd.getHours()).padStart(2, '0') : null;
          var minutesEnd = dateEnd ? String(dateEnd.getMinutes()).padStart(2, '0') : null;

          var timeDisplay = `${hoursStart}:${minutesStart}${dateEnd ? ' - ' + hoursEnd + ':' + minutesEnd : ''}`;
    
          return { 
            html: 
              `<div class="custom-event"> 
                <div class="table">
                  <p class="title fw-600 color-black-theme">${event.title}</p>
                  <p class="xs title-time">${timeDisplay}</p>
                  <p class="xs title-desc">${event.extendedProps.description}</p>
                </div>
              </div>`
            };
        },
      });
      calendar.render();
      calcEventDay();

      $('#year-selector').change(function () {
        const selectedYear = parseInt($(this).val());
        const newDate = new Date(selectedYear, 0, 1);
        calendar.gotoDate(newDate);
      });

      todayBtn.click(function(e){
        e.preventDefault();
        calendar.today();
        calcEventDay();
      });

      prevMonthBtn.click(function(e){
        e.preventDefault();
        calendar.prev();
        calcEventDay();
      });

      nextMonthBtn.click(function(e){
        e.preventDefault();
        calendar.next();
        calcEventDay();
      });

      function calcEventDay(info){
        let monthSlots = $('#calendar-year').find('.fc-multimonth-month');
        monthSlots.filter('[data-date="'+thisMonth+'"]').addClass('active');
        monthSlots.each(function(){
          let temp = $(this);
          let eMonth = temp.find('.fc-daygrid-event-harness');
          if(eMonth.length){
            eMonth.closest('.fc-daygrid-day').addClass('active');
            temp.append(`
              <div class="activity-list">
                <div class="wrapper">
                  <a href="#" class="p md color-p fw-400 mr-2">
                    รายการ <span class="fw-500"> ${eMonth.length}</span> กิจกรรม 
                  </a>
                  <div class="arrow color-p"><em class="fa-solid fa-arrow-right"></em></div>
                </div>
              </div>
            `);
          }else{
            temp.append(`
            <div class="activity-list">
              <div class="wrapper">
                  <a href="#" class="p md color-p fw-400 mr-2">
                    รายการ <span class="fw-500">0</span> กิจกรรม 
                  </a>
                  <div class="arrow color-p"><em class="fa-solid fa-arrow-right"></em></div>
                </div>
            </div>
            `);
          }
        });
      };
    });
  </script>
</body>

</html>