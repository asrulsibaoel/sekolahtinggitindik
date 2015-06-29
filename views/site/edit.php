<?php
echo $pesan;
?>
<form method="post" action="<?php echo $base_url?>/site/edit/<?php echo $urlId?>">
<div class="form-group">
  <label class="col-sm-3 control-label">Username</label>
  <div class="col-sm-9">
    <input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo $value['username']?>">
  </div>
</div>
<div class="form-group">
  <label class="col-sm-3 control-label">Password</label>
  <div class="col-sm-9">
    <input class="form-control" name="password" placeholder="Password" type="text" value="<?php echo $value['password']?>">
  </div>
</div>
<input type="submit" name="ok">
</form>