<?php
    $html_tt= showgt_admin($tintuclist);
?>
       <div class="main-content">
          <h3 class="title-page">Tin tức</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?act=tintucadd" class="btn btn-primary mb-2">Thêm giới thiệu</a>
          </div>

          <!-- <div class="boxfooter searbox">
            <form action="index.php?act=tintuclist" method="post">
              <input type="text" name="search">
              <input type="submit" name="timkiem" value="Tìm kiếm">
            </form>
          </div> -->

          <table id="example" class="table table-striped" style="width: 100%">
            <thead>
              <tr>
                <!-- <img src="hinh" alt="ten san pham" width="80px" /> -->
                <th>STT</th>
                <th>Tên</th>
                <th>Nội dung</th>
                <th>Hình</th>
                <th>Ngày</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?=$html_tt ;?>
            </tbody>
            <tfoot>
            <tr>
                <!-- <img src="hinh" alt="ten san pham" width="80px" /> -->
                <th>STT</th>
                <th>Tên</th>
                <th>Nội dung</th>
                <th>Hình</th>
                <th>Ghi chú</th>
                <th>Thao tác</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <script src="layout/assets/js/main.js"></script>
    <script>
      new DataTable("#example");
    </script>