<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color: #F8F8FF;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <?php
            $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login='$idbo'")->row();
            if(isset($d->foto)){
          ?>
          <br/>
          <!-- <div class="text-center">
        <img src="assets_style/image/lOGO BARU PERURI.png" width="50" height="50" class="mx-auto" alt="logo"/>
        </div>
          <?php }else{?>
            <img src="assets_style/image/logo-peruri.png" alt="#" class="user-image" style="border:2px solid #fff;"/>
            <i class="fa fa-user fa-4x" style="color: #000;"></i>
          <?php }?>
        </div> -->
        <div class="pull-left info" style= "margin-top: 10px;">
        </div>
		</div>
        <ul class="sidebar-menu" data-widget="tree">
			<?php if($this->session->userdata('level') == 'Petugas'){?>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <!-- <li class="header">MAIN NAVIGATION</li> -->
            <li class="<?php if($this->uri->uri_string() == 'dashboard'){ echo 'active';}?>">
                <a href="<?php echo base_url('dashboard');?>">
                    <i class="fa fa-dashboard"></i><span style = "font-color: white">Kelompok Produk</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <li class="<?php if($this->uri->uri_string() == 'user'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'user/tambah'){ echo 'active';}?>
                <?php if($this->uri->uri_string() == 'user/edit/'.$this->uri->segment('3')){ echo 'active';}?>">
                <a href="<?php echo base_url('user');?>" class="cursor">
                    <i class="fa fa-user"></i> <span>Data Pengguna</span></a>
			</li>

            <hr class="sidebar-divider">

			<li class="treeview <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/bukutambah'){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/bukudetail/'.$this->uri->segment('3')){ echo 'active';}?>
				<?php if($this->uri->uri_string() == 'data/bukuedit/'.$this->uri->segment('3')){ echo 'active';}?>">

                <a href="#">
                    <i class="fa fa-pencil-square"></i>
                    <span>Data</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>

                <ul class="treeview-menu">
                <li class=" <?php if($this->uri->uri_string() == 'data/satuan'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/satuan");?>" class="cursor">
                            <span class="fa fa-tags"></span> Satuan
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/rak'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/rak");?>" class="cursor">
                            <span class="fa fa-list"></span> Rak
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/kategori'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/kategori");?>" class="cursor">
                            <span class="fa fa-tags"></span> Kategori Produk
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/kelproduk'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/kelproduk");?>" class="cursor">
                            <span class="fa fa-list"></span> Kelompok Produk
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/kode_produk'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/kode_produk");?>" class="cursor">
                            <span class="fa fa-tags"></span> Kode Produk
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/penerima'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/penerima");?>" class="cursor">
                            <span class="fa fa-list"></span> Penerima
                        </a>
                    </li>
                    <li class=" <?php if($this->uri->uri_string() == 'data/pengirim'){ echo 'active';}?>">
                        <a href="<?php echo base_url("data/pengirim");?>" class="cursor">
                            <span class="fa fa-tags"></span> Pengirim
                        </a>
                    </li>
                </ul>

                <hr class="sidebar-divider">

                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>SSTB</span>
                    <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->uri_string() == 'data4'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data4/smtambah'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data4/smdetail/'.$this->uri->segment('3')){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data4/smedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("data4");?>" class="cursor">
                            <span class="fa fa-envelope"></span> SSTB (Masuk)
                        </a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'data5'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data5/sktambah'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data5/skdetail/'.$this->uri->segment('3')){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data5/skedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("data5");?>" class="cursor">
                            <span class="fa fa-envelope"></span> SSTB (Keluar)
                        </a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'data7'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data7/astambah'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data7/asedit/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("data7");?>" class="cursor">
                            <span class="fa fa-envelope"></span> Arsip SSTB (Keluar)
                        </a>
                    </li>
                    <li class="<?php if($this->uri->uri_string() == 'data6'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data6/tambahproduk'){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data6/detailproduk/'.$this->uri->segment('3')){ echo 'active';}?>
                        <?php if($this->uri->uri_string() == 'data6/editproduk/'.$this->uri->segment('3')){ echo 'active';}?>">
                        <a href="<?php echo base_url("data6");?>" class="cursor">
                            <span class="fa fa-list"></span> Data Produk
                        </a>
                    </li>
                </ul>
            </li>
			<?php }?>
        </ul>
        <div class="clearfix"></div>
        <br/>
        <br/>
    </section>
    <!-- /.sidebar -->
  </aside>
