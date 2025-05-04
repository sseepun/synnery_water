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
          <p id="calendar-title" class="h3 color-black fw-600 mr-2 mt-2 font-mitr">
            <span class="month">&nbsp;</span>
            <span class="year">&nbsp;</span>
          </p>
          <div class="form-group">
            <select id="week-selector"></select>
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
              <div class="btn btn-action sm style-02 btn-calendar active">สัปดาห์</div>
              <div class="btn btn-action sm style-02 btn-calendar">เดือน</div>
              <div class="btn btn-action sm style-02 btn-calendar">ปี</div>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-x-wrapper p-0" data-aos="fade-up" data-aos-delay="300">
        <div class="calendar-wrapper lg">
          <div class="calendar-week">
            <div id='calendar' class="bg-white"></div>
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

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css?v=<?= time() ?>" />
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>
  <script>
    $(function(){

      var today = new Date();

      var calendarTitle = $('#calendar-title'),
        prevWeekBtn = $('#prev-week-btn'),
        nextWeekBtn = $('#next-week-btn');
        weekSelector = $('#week-selector');
      
       
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }

      function updateCalendarHeaderWeek(view){
        var title = view.title;
        calendarTitle.find('.month').html(title.substr(0, title.length - 5));
        calendarTitle.find('.year').html(title.substr(title.length - 5));
      }

      function populateWeekSelector(currentDate) {
        weekSelector.empty();

        const startOfYear = new Date(currentDate.getFullYear(), 0, 1);
        const startOfWeek = new Date(startOfYear);
        startOfWeek.setDate(startOfYear.getDate() - startOfYear.getDay()); 

        const endOfYear = new Date(currentDate.getFullYear(), 11, 31);

        let currentWeekStart = startOfWeek;
        let weekNumber = 1;

        while (currentWeekStart <= endOfYear) {
          const weekEnd = new Date(currentWeekStart);
          weekEnd.setDate(currentWeekStart.getDate() + 6);

          const optionText = `สัปดาห์ที่ ${weekNumber}: ${currentWeekStart.toLocaleDateString('th-TH' )} - ${weekEnd.toLocaleDateString('th-TH')}`;
          // const optionText = `สัปดาห์ที่ ${weekNumber}`;
          const optionValue = currentWeekStart.toISOString(); 

          const isCurrentWeek =
            currentDate >= currentWeekStart && currentDate <= weekEnd;

          const option = new Option(optionText, optionValue, isCurrentWeek, isCurrentWeek);
          weekSelector.append(option);

          currentWeekStart.setDate(currentWeekStart.getDate() + 7); 
          weekNumber++;
        }
      }

      const calendarWeek = new FullCalendar.Calendar($('#calendar')[0],{
        initialView: 'timeGridWeek',
        locale: 'th',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek',
      },
      contentHeight: 'auto',
      editable: false,
      droppable: false, 
      allDaySlot: false,
      slotDuration: '00:30:00', 
      slotLabelInterval: '01:00:00',
      dayHeaderContent: function (args) {
        const dayNames = {
          'Sun': 'อาทิตย์', 'Mon': 'จันทร์', 'Tue': 'อังคาร',
          'Wed': 'พุธ', 'Thu': 'พฤหัส', 'Fri': 'ศุกร์', 'Sat': 'เสาร์'
        };

        const date = args.date;
        const dayName = dayNames[date.toLocaleDateString('en-US', { weekday: 'short' })]; 
        const dayNumber = date.getDate(); 

        return { html: `${dayName} ${dayNumber}` };
      },
      events: [
      {
        id: '1',
        title: 'Event Name',
        desc: 'Event Name Detail Descriptions Lorem Ipsum',
        province: 'เชียงราย',
        img: 'public/assets/app/images/content/35.jpg',
        start: '2025-03-31T09:30:00',
        end: '2025-03-31T12:30:00',
        className: "event-purple",
      },{
        id: '2',
        title: 'Event Name',
        desc: 'Event Name Detail Descriptions Lorem Ipsum',
        img: 'public/assets/app/images/content/41.jpg',
        province: 'กรุงเทพมหานคร',
        start: '2025-04-01T06:30:00',
        end: '2025-04-01T07:30:00',
        className: "event-red",
      },{
        id: '4',
        title: 'Event Name',
        desc: 'Event Name Detail Descriptions Lorem Ipsum',
        province: 'เชียงราย',
        img: 'public/assets/app/images/content/39.jpg',
        start: '2025-04-02T13:00:00',
        end: '2025-04-02T16:00:00',
        className: "event-blue",
      },{
        id: '6',
        title: 'Event Name',
        desc: 'Event Name Detail Descriptions Lorem Ipsum',
        img: 'public/assets/app/images/content/41.jpg',
        province: 'ฉะเชิงเทรา',
        start: '2025-04-03T07:00:00',
        end: '2025-04-03T13:00:00',
        className: "event-yellow",
      },
    ], 
      datesSet: function(info){
        updateCalendarHeaderWeek(info.view);
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
                <div class="ss-card ss-card-17">
                 <p class="title fw-400 color-black-theme">${event.title}</p>
                  <p class="desc xs color-black d-none">${event.extendedProps.desc}</p>
                </div>
              </div>
            </div>
          </div>`
        };
      },
    });
    calendarWeek.render();

    populateWeekSelector(today);

    prevWeekBtn.click(function(e){
      e.preventDefault();
      calendarWeek.prev();
    });
    nextWeekBtn.click(function(e){
      e.preventDefault();
      calendarWeek.next();
    });

    weekSelector.change(function () {
      const selectedDate = new Date($(this).val());
      calendarWeek.gotoDate(selectedDate); 
    });
  });
  </script>
</body>

</html>