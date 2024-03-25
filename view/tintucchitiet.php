<?php
   $html_dm=showdm($dstt);
   $html_dsttlq=show_dsttlq($tintuclquan);
   extract($tintucchitiet);
   
?>
    <div class="container">
        <div class="row">
            <div class="col-sm-3" >
                <h3><b>DANH MỤC</b></h3>
                <?=$html_dm;?>
            </div>
    <div class="col-sm-9">
        <h3 style="display: flex; justify-content: center;"><strong>TIN TỨC CHI TIẾT</strong></h3>
            <h4><b><?=$ten?></b></h4>
            <img src="layout/img/tintuc/<?=$hinh?>"; class="mx-auto d-block" alt="" height="300px">
            <p style="text-align: justify;"><?=$noidung?></p>
            <p style="text-align:right"><i><?=$ngay?></i></p>
    </div>

    <div idpro="binhluan">
        <iframe src="view/binhluan.php?idpro=<?=$id?>" width="1000px" height="300px" frameborder="0"></iframe>
    </div>

    <h3 style="display: flex; justify-content: center;"><b>Tin tức liên quan</b></h3>
  <div class="row">
      <?=$html_dsttlq;?>
    </div>
  </div>
</div>
<hr>

    </div>
    </div>
</section>

