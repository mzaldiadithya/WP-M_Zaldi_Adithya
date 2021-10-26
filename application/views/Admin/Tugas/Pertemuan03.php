<!-- Main Content -->
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <!-- Page Title -->
      <div class="page-header">
        <h4 class="page-title">Tugas Pertemuan 3</h4>
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
      <!-- Table 1 -->
      <div class="card">
        <div style="border-top: 5px solid #dd235b;"></div>
        <div class="mt-3 border-bottom pb-3">              
          <div class="d-flex align-items-center">
            <div class="card-title mr-auto pl-3 font-weight-bold text-uppercase" style="border-left: 5px solid #dd235b; letter-spacing: 4px;">Calculate The Number</div>
          </div>
        </div>
        <div class="card-body">
          <p style="font-size: 24px; letter-spacing: 5px;">
            Hasil dari (<?php echo $this->n1 ?>) + (<?php echo $this->n2 ?>) = (<?php echo $this->hasil ?>)
          </p>
        </div>          
      </div>
      <!-- End Table 1 -->

      <!-- Error Messages -->
      <?php if(!empty(form_error('kode_mk'))) { ?>
        <div class="alert alert-danger block d-flex align-items-center mb-3">
          <span class="text-danger font-weight-bold"> <?php echo form_error('kode_mk'); ?> </span>
          <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
            <span class="font-weight-bold" aria-hidden="true">&times;</span>
          </button>		
        </div>
      <?php } ?>

      <?php if(!empty(form_error('nama_mk'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('nama_mk'); ?> </span>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
          <span class="font-weight-bold" aria-hidden="true">&times;</span>
        </button>		
      </div>
      <?php } ?>

      <?php if(!empty(form_error('sks'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('sks'); ?> </span>
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
            <div class="card-title mr-auto pl-3 font-weight-bold text-uppercase" style="border-left: 5px solid #177dff; letter-spacing: 4px;">POST A Form</div>
          </div>
        </div>
        <!-- Input -->
        <div class="card-body">
          <div class="mr-5 border-primary border p-3">
            <form action="<?php echo site_url('Tugas/PertemuanTigaController/validator') ?>" method="post">
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Kode Matakuliah</h3>
                  <input type="text" name="kode_mk" class="form-control col-md-9 border-secondary">
                </div>
              </div>
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Nama Matakuliah</h3>
                  <input type="text" name="nama_mk" class="form-control col-md-9 border-secondary">
                </div>
              </div>
              <div class="form-group">
                <div class="row align-items-center">
                  <h3 class="col-md-3">Jumlah SKS</h3>
                  <select name="sks" class="form-control col-md-9 border-secondary">
                    <option value="">Pilih SKS</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                  </select>
                </div>
              </div>
            
          </div>
          <div class="mr-5 border-primary border p-1">
            <input type="submit" class="btn btn-sm btn-primary w-100 text-uppercase font-weight-bold" style="font-size: 16px;" value="Post">
          </div>
            </form>
        
        </div>
        <!-- End Input -->
        <!-- Result -->            
        <?php if(!empty($kode_mk) && !empty($nama_mk) && !empty($sks) ) { ?>
        <div style="border-top: 5px solid #177dff;"></div>

        <div class="mt-3 border-bottom pb-3">              
          <div class="d-flex align-items-center">
            <div class="card-title mr-auto pl-3 font-weight-bold text-uppercase" style="border-left: 5px solid #177dff; letter-spacing: 4px;">Result From The POST</div>

            <form action="<?php echo site_url('Tugas/PertemuanTigaController/reset') ?>" method="post">
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
              <h3 class="col-md-3">Kode Matakuliah</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $kode_mk ?></h3>
              </div>
            </div>
          </div>        
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Nama Matakuliah</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $nama_mk ?></h3>
              </div>
            </div>
          </div>        
          <div class="form-group">
            <div class="row align-items-center">
              <h3 class="col-md-3">Jumlah SKS</h3>
              <div class="d-flex col-md-9 align-items-center">
                <h3 class="mr-4">:</h3>
                <h3 class="font-weight-bold text-primary"><?php echo $sks ?></h3>
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