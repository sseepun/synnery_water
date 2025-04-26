<?php if(!empty($listHeaderCalendar)){?>
  <div class="list-header-calendar <?= isset($listHeaderCalendarClass)? $listHeaderCalendarClass: '' ?>">
    <div class="options">
      <?php if(in_array('search', $listHeaderCalendar)){?>
        <div class="option search">
          <form class="w-full">
            <input type="text" name="search" placeholder="ค้นหา">
            <button type="submit" class="dropdown-icon">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path class="fill-black-theme" fill-rule="evenodd" clip-rule="evenodd" d="M0 6.00001C0 9.31369 2.68632 12 6 12C7.38528 12 8.66096 11.5305 9.67654 10.742C9.71479 10.8229 9.76738 10.8987 9.83431 10.9657L14.6343 15.7657C14.9467 16.0781 15.4533 16.0781 15.7657 15.7657C16.0781 15.4533 16.0781 14.9467 15.7657 14.6343L10.9657 9.83433C10.8988 9.76737 10.8229 9.71481 10.742 9.67657C11.5305 8.66097 12 7.38529 12 6.00001C12 2.68629 9.31368 0 6 0C2.68632 0 0 2.68629 0 6.00001ZM1.6 6.00001C1.6 3.56995 3.56992 1.6 6 1.6C8.43008 1.6 10.4 3.56995 10.4 6.00001C10.4 8.43009 8.43008 10.4 6 10.4C3.56992 10.4 1.6 8.43009 1.6 6.00001Z" fill="#008fd3"/>
              </svg>
            </button>
          </form>
        </div>
      <?php }?>
      <?php if(in_array('category', $listHeaderCalendar)){?>
        <div class="option cate">
          <select class="ui dropdown">
            <option value="">ประเภท</option>
            <option value="1">ประเภท 1</option>
            <option value="2">ประเภท 2</option>
            <option value="3">ประเภท 3</option>
          </select>
          <div class="dropdown-icon">
            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-black-theme" d="M6.5 7L0.00480902 0.25L12.9952 0.250001L6.5 7Z" fill="#008fd3"></path>
            </svg>
          </div>
        </div>
      <?php }?>
      <?php if(in_array('cate-order', $listHeaderCalendar)){?>
        <div class="option cate size-02">
          <select class="ui dropdown">
            <option value="">ประเภท</option>
            <option value="1">ประเภท 1</option>
            <option value="2">ประเภท 2</option>
            <option value="3">ประเภท 3</option>
          </select>
          <div class="dropdown-icon">
            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-black-theme" d="M6.5 7L0.00480902 0.25L12.9952 0.250001L6.5 7Z" fill="#008fd3"></path>
            </svg>
          </div>
        </div>
        <div class="option order size-02">
          <select class="ui dropdown">
            <option value="1">เรียงลำดับ</option>
            <option value="2">ใหม่ล่าสุด</option>
            <option value="3">เก่าที่สุด</option>
            <option value="4">จำนวนเข้าชม</option>
          </select>
          <div class="dropdown-icon">
            <svg width="13" height="7" viewBox="0 0 13 7" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path class="fill-black-theme" d="M6.5 7L0.00480902 0.25L12.9952 0.250001L6.5 7Z" fill="#008fd3"/>
            </svg>
          </div>
        </div>
      <?php }?>
    </div>
    <div class="button-container">
      <div class="button-wrapper">
      <span class="p sm fw-500 mr-2">มุมมอง</span>
        <div class="btns">
          <div class="btn btn-action style-02 btn-calendar <?= isset($classer)? $classer: '' ?> active">ปฏิทิน</div>
          <div class="btn btn-action style-02 btn-calendar <?= isset($classer)? $classer: '' ?> inactive">รายการ</div>
        </div>
      </div>
    </div>
  </div>
<?php }?>