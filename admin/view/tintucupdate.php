<?php

    if(is_array($tt)&&(count($tt)>0)){
        extract($tt);
        $idupdate=$id;
        $hinhpath=IMG_PATH_ADMIN.$hinh;
        if(is_file($hinhpath)){
            $hinh='<img src="'.$hinhpath.'" width="80px">';
        }else {
            $hinh="";
        }
        }
        $html_danhmuclist=showdm_admin($danhmuclist, $idtt);
?>
<div class="main-content">
                <h3 class="title-page">
                    Cập nhật tin tức
                </h3>
                
                <form class="addPro" action="index.php?act=updatetintuc" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh tin tức</label>
                        <div class="custom-file">
                            <input type="file" name="hinh" class="custom-file-input" id="exampleInputFile">
                            <?=$hinh?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên tin tức:</label>
                        <input type="text" class="form-control" name="ten" value="<?=($ten!="")?$ten:"";?>" id="ten" placeholder="Nhập tên tin tức">
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
                        <input type="date" class="form-control" name="ngay" value="<?=($ngay!="")?$ngay:"";?>" id="date" placeholder="Nhập ngày đăng">
                    </div>

                    <div class="form-group">
                        <label>Ghi chú</label>
                        <textarea class="form-control" name="detail" rows="3" value="<?=($ghichu!="")?$ghichu:"";?>"
                            placeholder="Nhập ghi chú cho nội dung" style="height: 70px;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?=$idupdate?>">
                        <button type="submit" name="updatetintuc" class="btn btn-primary">Cập nhật tin tức</button>
                    </div>
                </form>
            </div>

            <script>
                new DataTable('#example');
            </script>