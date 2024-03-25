<?php
    $html_danhmuclist=showdm_adminadd($danhmuclist);
?>
<div class="main-content">  
                <h3 class="title-page">
                    Thêm tin tức
                </h3>
                
                <form class="addPro" action="index.php?act=addtintuc" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh tin tức</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên tin tức:</label>
                        <input type="text" class="form-control" name="ten" id="ten" placeholder="Nhập tên tin tức">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" name ="idtt" aria-label="Default select example">
                            <option selected>Chọn danh mục</option>
                            <?=$html_danhmuclist;?>
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
                        <button type="submit" name="addtintuc" class="btn btn-primary">Thêm tin tức</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>