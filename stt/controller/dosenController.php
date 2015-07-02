<?php
$data['username'] = $_POST['username'];
if(!empty($_POST['password'])){
    $data['password'] = md5($_POST['password']);
}

if (empty($urlAction) or $urlAction == "list") {
    $list = selectAll("tbl_user");
}

if ($urlAction == "tambah") {
    if (isset($_POST['username'])) {
        $save = save("tbl_user", $data);
        if ($save) {
          $pesan = success();
        } else {
            $pesan = error();
        }
    }
}

if ($urlAction == "edit") {
    if (isset($_POST['username'])) {
        $data['username'] = 'asdasd';
        $where = "id=" . $urlId;
        $save = edit("tbl_user", $data, $where);
        if ($save) {
            $pesan = success();
        } else {
            $pesan = error();
        }
    }
    $select = selectWhere("*", "tbl_user", "id='" . $urlId . "'");
    $value = view($select);
}

if($urlAction == "hapus"){
     $where = "id=" . $urlId;
    $save = delete("tbl_user", $where);
    if ($save) {
        go($base_url . "/site/list");
    }
}
?>