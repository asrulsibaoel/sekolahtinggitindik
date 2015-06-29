<?php

$data['nama'] = $_POST['nama'];
$data['alamat'] = $_POST['alamat'];
$data['no_tlp'] = $_POST['no_tlp'];
$data['email'] = $_POST['email'];
$data['username'] = $_POST['username'];
if(!empty($_POST['password'])){
	$data['password'] = md5($_POST['password']);
}
$data['level'] = $_POST['level'];

if (empty($urlAction) or $urlAction == "list") {
    $list = $db->selectAll("tbl_user");
}

if ($urlAction == "tambah") {
	if (isset($_POST['nama'])) {
        $save = $db->save("tbl_user", $data);
        if ($save) {
          $pesan = $lib->success();
        } else {
            $pesan = $lib->error();
        }
    }
}

if ($urlAction == "edit") {
	if (isset($_POST['nama'])) {
        $where = "id=" . $urlId;
        $save = $db->edit("tbl_user", $data, $where);
        if ($save) {
            $pesan = $lib->success();
        } else {
            $pesan = $lib->error();
        }
    }
	$select = $db->selectWhere("*", "tbl_user", "id='" . $urlId . "'");
    $value = $db->view($select);
}

if($urlAction == "hapus"){
	 $where = "id=" . $urlId;
    $save = $db->delete("tbl_user", $where);
    if ($save) {
        $lib->go($base_url . "/user/list");
    }
}

if ($urlAction == "editprofil") {
    if (isset($_POST['nama'])) {
        $where = "id=" . $_SESSION['id'];
        $save = $db->edit("tbl_user", $data, $where);
        if ($save) {
            $pesan = $lib->success();
        } else {
            $pesan = $lib->error();
        }
    }
    $select = $db->selectWhere("*", "tbl_user", "id='" . $_SESSION['id'] . "'");
    $value = $db->view($select);
    
}

if($urlAction == "logout"){
    $user->user_logout();
    $lib->go($base_url."/");
}

?>