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
            <select id="month-selector" class="year"></select>
            <div class="dropdown-icon">
              <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 7L0.00480902 0.25L12.9952 0.250003L6.5 7Z" fill="#008fd3"></path>
              </svg>
            </div>
          </div>
        </div>
        <div class="button-container">
          <div class="button-wrapper">
            <div class="btns">
              <div class="btn btn-action sm style-02 btn-calendar">วัน</div>
              <div class="btn btn-action sm style-02 btn-calendar">สัปดาห์</div>
              <div class="btn btn-action sm style-02 btn-calendar active">เดือน</div>
              <div class="btn btn-action sm style-02 btn-calendar">ปี</div>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-x-wrapper mt-3 p-0">
        <div class="calendar-month" style="min-width:1000px;" data-aos="fade-up" data-aos-delay="300">
          <div id='calendar-month' class="bg-white"></div>
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

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css?v=<?= time() ?>" />
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>
  <script>
   $(function(){ 'use strict';

    // Calendar Variables
    var months = [
      'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
      'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
    ];
    var today = new Date();

    // Calendar Month
    var calendarTitle = $('#calendar-title');
    var prevMonthBtn = $('#prev-month-btn');
    var nextMonthBtn = $('#next-month-btn');

    function htmlToElement(html){
      var template = document.createElement('template');
      html = html.trim();
      template.innerHTML = html;
      return template.content.firstChild;
    }
    function updateCalendarHeader(month, year, updateSlick){
      var prevMonth = 0;
      var nextMonth = 0;

      if(months[month - 1]) prevMonth = months[month - 1];
      else prevMonth = months[months.length - 1];

      if(months[month + 1]) nextMonth = months[month + 1];
      else nextMonth = months[0];

      calendarTitle.html(months[month]+' '+(year+543));
      prevMonthBtn.find('> span').html(prevMonth);
      nextMonthBtn.find('> span').html(nextMonth);
    }

  
    const monthSelector = $('#month-selector');
    months.forEach((month, index) => {
      const isSelected = index === today.getMonth() ? 'selected' : '';
      monthSelector.append(
        `<option value="${index}" ${isSelected}>${month}</option>`
      );
    });

  
    monthSelector.change(function () {
      const selectedMonth = parseInt($(this).val());
      const newDate = new Date(today.getFullYear(), selectedMonth, 1);
      calendarMonth.gotoDate(newDate);
    });


    const calendarMonth = new FullCalendar.Calendar($('#calendar-month')[0], {
      initialView: 'dayGridMonth',
      locale: 'th',
      contentHeight: 'auto',
      dayMaxEvents: true,
      views: {
        dayGrid: {
          dayMaxEvents:3,
        }
      },
        events: [
          {
            id: '1',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-03-16T09:30:00',
            end: '2025-03-16T12:30:00',
            className: "event-blue",
          },{
            id: '2',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-03-14T09:30:00',
            end: '2025-03-14T12:30:00',
            className: "event-red",
          },{
            id: '3',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-03-14T12:30:00',
            className: "event-yellow",
          },{
            id: '4',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-03-14T15:30:00',
            className: "event-blue",
          },{
            id: '5',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-03-14T16:20:00',
            className: "event-red",
          },{
            id: '6',
            title: 'Event Name',
            desc: 'Event Name Detail Descriptions Lorem Ipsum',
            start: '2025-03-05T16:20:00',
            end: '2025-03-05T18:30:00',
            className: "event-yellow",
          },
        ], 
        moreLinkContent:function(args){
          return '+'+args.num+'';
        },
        eventDidMount: function(info) {
          var eventDate = info.event.start.toISOString().split('T')[0];
          var cell = document.querySelector(`[data-date="${eventDate}"]`);
          if (cell) {
            cell.classList.add('active');
          }
        },
        datesSet: function(info){
          var currentDate = new Date(info.view.currentStart);
          $('#calendar-title .month').text(
        months[currentDate.getMonth()]
      );
      $('#calendar-title .year').text(
        `${currentDate.getFullYear() + 543}`
      );

      // อัปเดต select ให้ตรงกับเดือนปัจจุบัน
      monthSelector.val(currentDate.getMonth());
        },
        eventContent: function(info) {
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
                  <div class="table-wrapper">
                    <p class="title fw-600">${event.title}</p>
                    <p class="xs title-time color-black">${timeDisplay}</p>
                    <p class="desc xs color-black">${event.extendedProps.desc}</p>
                  </div>
                </div>
              </div>`
            };
          },
        });
        calendarMonth.render();

        prevMonthBtn.click(function(e){
          e.preventDefault();
          calendarMonth.prev();
        });
        nextMonthBtn.click(function(e){
          e.preventDefault();
          calendarMonth.next();
        });
      });

  </script>
</body>

</html>