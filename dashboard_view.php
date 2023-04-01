<?php defined('BASEPATH') OR exit('No direct script access allowed');?>

<?php if($this->session->userdata('level') == 'Anggota'){ redirect(base_url('transaksi'));}?>
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
  <div class="content-wrapper">
    <section class="content-header">
      <!-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol> -->
    </section>
    <!-- Main content -->
      <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-sm-20">
              <div class="col-lg-5 col-xs-10">
                   <!--small box-->
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <p align =center>PRODUK UANG RI</p>
                      <p>Peruri</p>
                      <p>
                      <img src="assets_style/image/logo-peruri-2.png" width="150" height="50" alt="logo"/>
                      </p>
                      <p>.</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="data" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 
           
              <div class="col-sm-20">
                <div class="col-lg-5 col-xs-10">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <p align =center>PRODUK UANG LUAR NEGERI</p>
                      <p>Peruri</p>
                      <p>
                      <img src="assets_style/image/logo-peruri-2.png" width="150" height="50" alt="logo"/>
                      </p>
                      <p>.</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="data1" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div>

            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-sm-12">
              <div class="col-lg-5 col-xs-10">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <p align =center>PRODUK PP06</p>
                      <p>Peruri</p>
                      <p>
                      <img src="assets_style/image/logo-peruri-2.png" width="150" height="50" alt="logo"/>
                      </p>
                      <p>.</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="data2" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 

              <div class="col-sm-20">
              <div class="col-lg-5 col-xs-10">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <p align =center>PRODUK NON PP06</p>
                      <p>Peruri</p>
                      <p>
                      <img src="assets_style/image/logo-peruri-2.png" width="150" height="50" alt="logo"/>
                      </p>
                      <p>.</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="data3" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 
              </div>
            </div>

            <div class="col-sm-12">
              <div class="col-lg-5 col-xs-10">
                  <div class="small-box bg-blue">
                    <div class="inner">
                      <p align =center>PRODUK UMUM</p>
                      <p>Peruri</p>
                      <p>
                      <img src="assets_style/image/logo-peruri-2.png" width="150" height="50" alt="logo"/>
                      </p>
                      <p>.</p>
                    </div>
                    <div class="icon">
                      <i class="fa fa-book"></i>
                    </div>
                    <a href="data8" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                  </div>
                </div> 
              </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
