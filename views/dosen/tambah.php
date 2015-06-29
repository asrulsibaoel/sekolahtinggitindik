<?php
echo $pesan;
?>
<form method="post" action="<?php echo $base_url?>/dosen/tambah">
<div class="form-group">
  <label class="col-sm-3 control-label">Username</label>
  <div class="col-sm-9">
    <input class="form-control" name="username" placeholder="Username" type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-3 control-label">Password</label>
  <div class="col-sm-9">
    <input class="form-control" name="password" placeholder="Password" type="password">
  </div>
</div>
<input type="submit">
</form>
asdasdasdasdasd