<div class="header">
    <h2><strong>Kartu Hasil Studi</strong></h2>
  </div>
  <div class="row">
<div class="col-lg-12 portlets">
  <div class="panel">
  <div class="panel-header panel-controls">
    <h3><strong></strong></h3>
  </div>
  <div class="panel-content">
  <form method="post" action="#" class="form-horizontal">
  <div class="col-md-4">
   <div class="form-group">
      <label class="col-sm-3 control-label" style="top:5px; padding-top:0px;">Semester</label>
      <div class="col-sm-9">
      <select class="form-control form-white" data-style="white" name="semester">
        <option value="">Semester 1</option>
        <option value="">Semester 2</option>
        <option value="">Semester 3</option>
        <option value="">Semester 4</option>
        <option value="">Semester 5</option>
        <option value="">Semester 6</option>
      </select>
      </div>
    </div>
  </div>
  <div class="col-md-8">
  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Tampilkan</button>
  <button class="btn btn-success"><i class="glyphicon glyphicon-print"></i> Cetak</button>
  </div>
  </form>
  <br><br><br>
  <?php
  if(isset($_POST['semester'])){
    ?>
    <center>
    <h3>Sekolah Tinggi Tindik</h3>
    <h3 style="margin-top:0px;">Kartu Ujian Semester 4</h3></center>
    <table>
      <tr>
        <td width="200px">NIM</td>
        <td>:</td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td>:</td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>:</td>
      </tr>
    </table>
    <br>
    <b>Mata Kuliah</b>
    <table class="table table-bordered">
    <thead>
    <tr>
      <th>No</th>
      <th>Mata Kuliah</th>
      <th>SKS</th>
      <th>Paraf Petugas</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Project Development</td>
        <td>10</td>
        <td></td>
    </tr>
    </tbody>
    </table>
    <div style="text-align:right;">
    <b>Kepala Program Studi</b>
    <br><br><br><br><br><br>
    Ir. Tindik Saputra M, Mb
    </div>
    <?php
  }
  ?>
  </div>
  </div>
</div>
</div>