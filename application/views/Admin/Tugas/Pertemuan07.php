<!-- Main Content -->
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <!-- Page Title -->
      <div class="page-header">
        <h4 class="page-title">Tugas Pertemuan 7</h4>
        <div class="btn-group btn-group-page-header ml-auto">
          <button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-h"></i>
          </button>
          <div class="dropdown-menu">
            <div class="arrow"></div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
      </div>
      <!-- End Page Title -->

      <!-- Error Messages -->
      <?php if(!empty(form_error('nama'))) { ?>
        <div class="alert alert-danger block d-flex align-items-center mb-3">
          <span class="text-danger font-weight-bold"> <?php echo form_error('nama'); ?> </span>
          <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span class="font-weight-bold" aria-hidden="true">&times;</span>
          </button>		
        </div>
      <?php } ?>

      <?php if(!empty(form_error('nope'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('nope'); ?> </span>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
          <span class="font-weight-bold" aria-hidden="true">&times;</span>
        </button>		
      </div>
      <?php } ?>

      <?php if(!empty(form_error('merk'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('merk'); ?> </span>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
          <span class="font-weight-bold" aria-hidden="true">&times;</span>
        </button>		
      </div>
      <?php } ?>

      <?php if(!empty(form_error('size'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('size'); ?> </span>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
          <span class="font-weight-bold" aria-hidden="true">&times;</span>
        </button>		
      </div>
      <?php } ?>
      <!-- End Error Messages -->

      <!-- Table 2 -->
      <div class="card">
        <div style="border-top: 5px solid #177dff;"></div>
        <div class="mt-3 border-bottom pb-3">              
          <div class="d-flex align-items-center">
            <div class="card-title mr-auto pl-3 font-weight-bold text-uppercase text-primary" style="border-left: 5px solid #177dff; letter-spacing: 4px;">Toko Sepatu</div>
          </div>
        </div>
        <!-- Input -->
        <form action="<?php echo site_url('Tugas/PertemuanTujuhController/validator') ?>" method="post">
          <div class="card-body">
            <div class="mr-5 border-primary border p-3">
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Nama Pembeli</h3>
                  <input type="text" name="nama" class="form-control col-md-9 border-secondary">
                </div>
              </div>
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Nomor HP</h3>
                  <input type="text" name="nope" class="form-control col-md-9 border-secondary">
                </div>
              </div>
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Merk Sepatu</h3>
                  <select name="merk" class="form-control col-md-9 border-secondary">
                    <option style="font-size: 16px;" value="">--- Pilih Sepatu ---</option>
                    <option style="font-size: 16px;" value="Nike"> Nike - RP.375.000 </option>
                    <option style="font-size: 16px;" value="Adidas"> Adidas - RP.300.000 </option>
                    <option style="font-size: 16px;" value="Kickers"> Kickers - RP.250.000 </option>
                    <option style="font-size: 16px;" value="Eiger"> Eiger - RP.275.000 </option>
                    <option style="font-size: 16px;" value="Bucherri"> Bucherri - RP.400.000 </option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Ukuran Sepatu</h3>
                  <select name="size" class="form-control col-md-9 border-secondary">
                    <option style="font-size: 16px;" value="">--- Pilih Ukuran ---</option>
                    <?php for($i = 32; $i<=44; $i++) : ?>
                      <option style="font-size: 16px;" value="<?php echo $i ?>"> <?php echo $i ?> </option>
                    <?php endfor; ?>
                  </select>
                </div>
              </div>            
            </div>
            <div class="mr-5 border-primary border p-1">
              <input type="submit" class="btn btn-sm btn-primary w-100 text-uppercase font-weight-bold" style="font-size: 16px;" value="Make An Order">
            </div>
          </form>
        
        </div>
        <!-- End Input -->
        <!-- Result -->            
        <?php if(!empty($nama) && !empty($nope) && !empty($merk) && !empty($ukuran)) { ?>
        <div style="border-top: 5px solid #177dff;"></div>

        <div class="mt-3 border-bottom pb-3">              
          <div class="d-flex align-items-center">
            <div class="card-title mr-auto pl-3 font-weight-bold text-uppercase" style="border-left: 5px solid #177dff; letter-spacing: 4px;">Order Summary</div>

            <form action="<?php echo site_url('Tugas/PertemuanTujuhController/reset') ?>" method="post">
              <div class="card-tools pr-3">
                <button type="submit" class="btn btn-outline-danger btn-round btn-sm">
                  <span class="btn-label">
                    <i class="fa fa-undo"></i>
                  </span>
                  <span style="font-size: 14px;">Reset Data</span>
                </button>
              </div>
            </form>
          </div>
        </div> 

        <div class="card-body mr-5">
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Nama Pembeli</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $nama ?></h3>
              </div>
            </div>
          </div>        
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Nomor HP</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $nope ?></h3>
              </div>
            </div>
          </div>        
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Merk Sepatu</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $merk ?></h3>
              </div>
            </div>
          </div>        
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Harga Sepatu</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary">RP.<?php echo $harga ?></h3>
              </div>
            </div>
          </div>        
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Ukuran Sepatu</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $ukuran ?></h3>
              </div>
            </div>
          </div>        
        </div>

        <?php } ?>
        <!-- End Result -->         
      </div>
      <!-- End Table 2 -->
    </div>
  </div>			
</div>	
<!-- End Main Content -->