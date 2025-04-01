<?php
  $totalResults = isset($totalResults) ? $totalResults : 100;
?>
<?php if(!empty($listFooter)){?>
  <div class="list-footer">
    <?php if(in_array('total', $listFooter)){?>
      <div class="option">
        <p class="fw-500 color-17">
          จำนวนทั้งหมด <span class="text-list color-t fw-700"><?= $totalResults ?> รายการ</span>
        </p>
      </div>
    <?php }?>
    <?php if(in_array('paginate', $listFooter)){?>
      <div class="option">
        <div class="paginate">
          <?php if($totalResults > 9){ ?>
            <div class="arrow arrow-prev disabled">
              <em class="fa-solid fa-chevron-left"></em>
            </div>
          <?php } ?>
          <div class="pages">
            <a class="page active" href="#">1</a>
            <?php if($totalResults > 9){ ?>
              <a class="page" href="#">2</a>
              <a class="page" href="#">3</a>
              <a class="page" href="#">...</a>
              <a class="page" href="#">99</a>
            <?php } ?>
          </div>
          <?php if($totalResults > 9){ ?>
            <div class="arrow arrow-next">
              <em class="fa-solid fa-chevron-right"></em>
            </div>
          <?php } ?>
        </div>
      </div>
    <?php }?>
    <?php if(in_array('pp', $listFooter)){?>
      <div class="option">
        <p class="color-gray fw-500">แสดงผลต่อหน้า</p>
        <div class="custom-select ml-1">
          <select class="ui selection dropdown style-02 ml-1">
            <option value="1">9</option>
            <option value="2">12</option>
            <option value="3">24</option>
            <option value="4">36</option>
            <option value="5">48</option>
            <option value="6">60</option>
            <option value="7">72</option>
            <option value="8">84</option>
            <option value="9">96</option>
          </select>
        </div>
      </div>
    <?php }?>
  </div>
<?php }?>

