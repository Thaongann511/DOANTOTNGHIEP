<?php
    $html_tnlist=showtn_adminadd1($tnlist);
?>
<div class="main-content">  
                <h3 class="title-page">
                    Thêm tiềm năng
                </h3>
                
                <form class="addPro" action="index.php?act=addtiemnang" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh tiềm năng</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên tiềm năng:</label>
                        <input type="text" class="form-control" name="ten" id="ten" placeholder="Nhập tên tiềm năng">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" name ="idtt" aria-label="Default select example">
                            <option selected>Chọn danh mục</option>
                            <?=$html_tnlist;?>
                          </select>
                        </div>
                    <div class="form-group">
                        <label>Nội dung:</label>
                        <textarea class="textera" name="noidung" id="noidung" rows="3" 
                            placeholder="Nhập nội dung" style="height: 250px; width: 1250px"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="name">Ngày đăng:</label>
                        <input type="date" class="form-control" name="ngay" id="date" placeholder="Nhập ngày đăng">
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="detail" rows="3"
                            placeholder="Nhập ghi chú cho nội dung" style="height: 70px;"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="addtiemnang" class="btn btn-primary">Thêm tiềm năng</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>