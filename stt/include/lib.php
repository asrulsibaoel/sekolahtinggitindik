<?php

    function success($pesan = null) {
        if (isset($pesan)) {
            $text = '<div class="alert alert-success"><b>Success : </b>' . $pesan . '</div>';
        } else {
            $text = '<div class="alert alert-success"><b>Success : </b> Data berhasil disimpan</div>';
        }
        return $text;
    }

    function error($pesan = null) {
        if (isset($pesan)) {
            $text = '<div class="alert alert-danger"><b>Error : </b>' . $pesan . '</div>';
        } else {
            $text = '<div class="alert alert-danger"><b>Error : </b> Data gagal disimpan</div>';
        }
        return $text;
    }

    function rupiah($data) {
        $rupiah = "";
        $jml = strlen($data);
        while ($jml > 3) {
            $rupiah = "." . substr($data, -3) . $rupiah;
            $l = strlen($data) - 3;
            $data = substr($data, 0, $l);
            $jml = strlen($data);
        }
        $rupiah = "Rp " . $data . $rupiah . ",-";
        return $rupiah;
    }

    function tanggal_indonesia($tgl, $is_time = false) {
        if ($is_time == FALSE) {
            $t = explode("-", $tgl);
            $b = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $tgl = $t[2] . " " . $b[$t[1] - 1] . " " . $t[0];
        } else {
            $pecah = explode(" ", $tgl);
            $t = explode("-", $pecah[0]);
            $b = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
            $tgl = "<i>" . $t[2] . " " . $b[$t[1] - 1] . " " . $t[0] . "</i>  at <i>" . $pecah[1] . "</i>";
        }
        return $tgl;
    }

    function go($alamat) {
        echo '<SCRIPT LANGUAGE="JAVASCRIPT" TYPE="TEXT/JAVASCRIPT">
					document.location.href="' . $alamat . '";
		  </SCRIPT>';
    }

    function tgldd($tgl) {
       if($tgl == "0000-00-00"){
        return "";
       }else{
         $pecah = explode(" ", $tgl);
        $a = explode("-", $pecah[0]);
        $b = $a[2] . "-" . $a[1] . "-" . $a[0];
        return $b;
       }
    }

    function tglyy($tgl) {
        $pecah = explode(" ", $tgl);
        $a = explode("-", $pecah[0]);
        $b = $a[2] . "-" . $a[1] . "-" . $a[0];
        return $b;
    }

    function terbilang($satuan) {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam",
            "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($satuan < 12) {
            return " " . $huruf[$satuan];
        } elseif ($satuan < 20) {
            return Terbilang($satuan - 10) . " Belas";
        } elseif ($satuan < 100) {
            return Terbilang($satuan / 10) . " Puluh" .
                    Terbilang($satuan % 10);
        } elseif ($satuan < 200) {
            return "seratus" . Terbilang($satuan - 100);
        } elseif ($satuan < 1000) {
            return Terbilang($satuan / 100) . " Ratus" .
                    Terbilang($satuan % 100);
        } elseif ($satuan < 2000) {
            return "seribu" . Terbilang($satuan - 1000);
        } elseif ($satuan < 1000000) {
            return Terbilang($satuan / 1000) . " Ribu" .
                    Terbilang($satuan % 1000);
        } elseif ($satuan < 1000000000) {
            return Terbilang($satuan / 1000000) . " Juta" .
                    Terbilang($satuan % 1000000);
        } elseif ($satuan >= 1000000000) {
            return "Angka Terlalu Besar";
        }
    }

    function selisihHari($tgl1 , $tgl2){
        $pecah1 = explode("-", $tgl1);
        $date1 = $pecah1[2];
        $month1 = $pecah1[1];
        $year1 = $pecah1[0];

        $pecah2 = explode("-", $tgl2);
        $date2 = $pecah2[2];
        $month2 = $pecah2[1];
        $year2 = $pecah2[0];

        $jd1 = GregorianToJD($month1, $date1, $year1);
        $jd2 = GregorianToJD($month2, $date2, $year2);

        $selisih = $jd2 - $jd1;

       if($tgl2 == '0000-00-00' or $tgl2 == ""){
        return "-";
       }else{
         return $selisih ." Hari";
       }
    }
?>