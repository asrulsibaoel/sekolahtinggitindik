<div class="header">
    <h2><strong>Jadwal Kuliah Semester 4</strong></h2>
  </div>
<div class="row">
<div class="col-lg-12 portlets">
  <div class="panel">
  <div class="panel-header panel-controls">
  </div>
  <div class="panel-content" style="margin-bottom: 35px;">
      <div class="row">
      <?php
      $hari = array(1=>"Senin",2=>"Selasa",3=>"Rabu",4=>"Kamis",5=>"Jum'at",6=>"Sabtu");
      foreach($hari as $val){
        ?>
        <div class="col-md-6" style="height: 300px;">
            <center><h4 class="page-header"><?php echo $val?></h4></center>
            <div class="row">
            <div class="col-md-3">
              <b>Jam</b>
              <hr>
            </div>
            <div class="col-md-4">
              <b>Mata Kuliah</b>
              <hr>
            </div>
            <div class="col-md-5">
              <b>Dosen - Ruang</b>
              <hr>
            </div>
            
            </div>
            <div class="row">
            <div class="col-md-3">
             -
            </div>
            <div class="col-md-4">
              Libur
            </div>
            <div class="col-md-5">
              -
            </div>
            </div>
        </div> 
        <?php
      }
      ?>
  </div> 
  </div>
  </div>
</div>
</div>