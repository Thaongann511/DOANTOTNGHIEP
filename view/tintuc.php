<?php

    $html_tt=showdm($dstt);
    $html_dssp=show_dstt($dssp);
    if($titlepage!="") $title=$titlepage;
    else $title="Tin tức";
    
?>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-3" >
    <h3><strong><?=$titlepage?></strong></h3>
    <h3><b>DANH MỤC</b></h3>
    <?= $html_tt;?> 
  </div>
      

      <hr class="d-sm-none">
    <!-- </div> -->
   
    <div class="col-sm-9">
    <h3 style="display: flex; justify-content: center;"><strong>NỘI DUNG</strong></h3>
      <?=$html_dssp;?>
  </div>
</div>


