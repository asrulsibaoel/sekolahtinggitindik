<?php
    function cek_login($user, $password) {
        $password = md5($password);
        $result = mysql_query("select * from tbl_user where username='" . $user . "' and password='" . $password . "'");
        $user_data = mysql_fetch_array($result);
        $no_rows = mysql_num_rows($result);

        if ($no_rows == 1) {
            $_SESSION['login'] = TRUE;
            $_SESSION['id'] = $user_data['id'];
            $_SESSION['level'] = $user_data['level'];
            $_SESSION['username'] = $user_data['username'];
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    function get_sesion(){
        return $_SESSION['login'];
    }
    
    function user_logout(){
        $_SESSION['login'] = FALSE;
        session_destroy();
    }
?>