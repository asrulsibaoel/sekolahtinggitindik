<div class="header">
    <h2><strong>Transkrip Nilai</strong></h2>
  </div>
  <div class="row">
<div class="col-lg-12 portlets">
  <div class="panel">
  <div class="panel-content">
  <a href="<?php echo $base_url?>/dosen/tambah">Tambah asdasd</a>
    <table class="table table-hover table-dynamic">
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Semester</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $no = 1;
    while($view = view($list)){
      echo '<tr>';
      echo '<td>'.$no.'</td>';
      echo '<td>'.$view['username'].'</td>';
      echo '<td><a href="'.$base_url.'/site/edit/'.$view['id'].'">Edit</a> | <a href="'.$base_url.'/site/hapus/'.$view['id'].'">Hapus</a></td>';
      echo '</tr>';
      $no++;
    }
    ?>
    </tbody>
    </table>
  </div>
  </div>
</div>
</div>