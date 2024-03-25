<?php
    $html_tn= showtn_admin1($tiemnanglist);
?>
       <div class="main-content">
          <h3 class="title-page">Tiềm năng</h3>
          <div class="d-flex justify-content-end">
            <a href="index.php?act=tiemnangadd" class="btn btn-primary mb-2">Thêm tiềm năng</a>
          </div>

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
              <?=$html_tn;?>
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