<?php
$proyek = $db->view($db->query("select * from tbl_projek where id = '".$urlId."'"));
?>
<div class="content-wrapper">
        <section class="content-header">
          <h1>
            Detail
            <small><?php echo $proyek['nama']?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $proyek['nama']?></li>
          </ol>
        </section>
        <section class="content">
        <div class="row">
            <section class="col-lg-12 connectedSortable">
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#status" data-toggle="tab">Status</a></li>
                  <!-- <li ><a href="#info" data-toggle="tab">Info</a></li> -->
                  <li class="pull-left header"><i class="fa fa-inbox"></i> <?php echo $proyek['nama']?></li>
                </ul>
                <div class="tab-content no-padding">
                  <div class="tab-pane" id="info" style="position: relative; min-height: 300px; padding:25px;">
                    <p>semua deskripsi dan informasi mengenai proyek yang berjalan akan ditampilkan di sini</p>
                    <p>untuk melihat status proyek silahkan klik tab status pada bagian sebelah kanan</p>
                  </div>
                  <div class="tab-pane active" id="status" style="position: relative; min-height: 300px; padding:25px;">
                      <!-- <div class="row">
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-6 col-sm-9 col-xs-12">
                            <div class="bg-aqua info-box">
                            
                              <span class="info-box-icon bg-green" style="float:right; font-size:26px;"><?php echo $jumlahKontrak; ?>%</span>
                              <div class="info-box-content" style="margin-left:0px;">
                                <span class="info-box-text"><h3>Contract</h3></span>
                              </div>
                            </div>
                          </div>
                      </div> -->
                      <?php
                      $procurement = $db->view($db->query("select * from tbl_procurement where proyek_id = '".$urlId."'"));
                      $engineering = $db->query("select * from tbl_engineering where proyek_id = '".$urlId."'");
                      $construction = $db->view($db->query("select * from tbl_construction where proyek_id = '".$urlId."'"));

                      $p = "yellow";
                      $e = "yellow";
                      $c = "yellow";

                      if(str_replace(" %", "", $procurement['progres']) >= 50){
                        $p = "green";
                      }

                      $no = mysql_num_rows($engineering);
                      $totE;
                      while($viewE = $db->view($engineering)){
                        $totE += str_replace(" %", "", $viewE['progres']);
                      
                      }

                      /*echo ($totE / $no);*/

                      if(($totE / $no) >= 50){
                        $e = "green";
                      }

                      if(str_replace(" %", "", $constructions['progres']) >= 50){
                        $c = "green";
                      }
                      ?>
                      <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td colspan="2">Efektif</td>
                                <td><?php echo $lib->tgldd($proyek['efektif']); ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">COD</td>
                                <td><?php echo $lib->tgldd($proyek['cod']); ?></td>
                            </tr>
                            <tr>
                                <td>Engineering</td>
                                <td><div class="img-circle" style="background-color:<?php echo $e; ?>; width: 50px; height: 50px;"></div></td>
                                <td><?php echo ($totE / $no)?> %</td>
                            </tr>
                            <tr>
                                <td>Procurement</td>
                                <td><div class="img-circle" style="background-color:<?php echo $p; ?>; width: 50px; height: 50px;"></div></td>
                                <td><?php echo $procurement['progres']?></td>
                            </tr>
                            <tr>
                                <td>Construction</td>
                                <td><div class="img-circle" style="background-color:<?php echo $c; ?>; width: 50px; height: 50px;"></div></td>
                                <td><?php echo $construction['progres']?></td>
                            </tr>
                            <tr>
                                <td>Overall</td>
                                <td></td>
                                <td><?php echo round((($totE / $no) + $procurement['progres'] + $construction['progres']) / 4,2)?> %</td>
                            </tr>
                            <tr>
                                <td>Sisa Hari</td>
                                <td></td>
                                <td><?php echo $lib->selisihHari(date("Y-m-d"),$proyek['cod']);?></td>
                            </tr>
                        </thead>
                      </table>
                      <!-- <div class="row">
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-6 col-sm-9 col-xs-12">
                            <div class="bg-aqua info-box">
                              <span class="info-box-icon bg-green" style="float:right; font-size:26px;"><?php echo $jmlEngineering?>%</span>
                              <div class="info-box-content" style="margin-left:0px;">
                                <span class="info-box-text"><h3>Engineering</h3></span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-6 col-sm-9 col-xs-12">
                            <div class="bg-aqua info-box">
                              <span class="info-box-icon bg-green" style="float:right; font-size: 26px;"><?php echo $jmlProcurement;?>%</span>
                              <div class="info-box-content" style="margin-left:0px;">
                                <span class="info-box-text"><h3>Procurement</h3></span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-6 col-sm-9 col-xs-12">
                            <div class="bg-aqua info-box">
                              <span class="info-box-icon bg-green" style="float:right; font-size:26px;"><?php echo $jmlConstruction?>%</span>
                              <div class="info-box-content" style="margin-left:0px;">
                                <span class="info-box-text"><h3>Construction</h3></span>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-3">
                          </div>
                          <div class="col-md-6 col-sm-9 col-xs-12">
                            <div class="bg-aqua info-box">
                             <span class="info-box-icon bg-green" style="float:right; font-size:26px;"><?php echo $jmlComissioning?>%</span>
                              <div class="info-box-content" style="margin-left:0px;">
                                <span class="info-box-text"><h3>Comissioning</h3></span>
                              </div>
                            </div>
                          </div>
                      </div> -->
                  </div>
                </div>
              </div>
            </section>
        </div>
        </section>
      </div>