<!-- Main Content -->
<div class="main-panel">
  <div class="content">
    <div class="page-inner">
      <!-- Page Title -->
      <div class="page-header">
        <h4 class="page-title">CRUD</h4>
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

      <?php if(!empty(form_error('nim'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('nim'); ?> </span>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
          <span class="font-weight-bold" aria-hidden="true">&times;</span>
        </button>		
      </div>
      <?php } ?>

      <?php if(!empty(form_error('alamat'))) { ?>
      <div class="alert alert-danger block d-flex align-items-center mb-3">
        <span class="text-danger font-weight-bold"> <?php echo form_error('alamat'); ?> </span>
        <button type="button" class="close ml-auto" data-dismiss="alert" aria-label="Close">
          <span class="font-weight-bold" aria-hidden="true">&times;</span>
        </button>		
      </div>
      <?php } ?>
      <!-- End Error Messages -->

      <div class="card">
        <div style="border-top: 5px solid #177dff;"></div>
        <div class="mt-3 border-bottom pb-3">              
          <div class="d-flex align-items-center">
            <div class="card-title mr-auto pl-3 font-weight-bold text-uppercase" style="border-left: 5px solid #177dff; letter-spacing: 4px;">Info Mahasiswa</div>
            <div class="card-tools pr-3">
              <a data-toggle="modal" data-target="#addData" class="btn btn-info btn-border btn-round btn-sm">
                <span class="btn-label">
                  <i class="fa fa-plus"></i>
                </span>
                Tambah Data
              </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl">
            <table class="table table-hover text-center table-bordered table-striped">
              <thead class="bg-primary text-white font-weight-bold">
                <tr>
                  <td></td>
                  <td>Nama</td>
                  <td>Nim</td>
                  <td>Alamat</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                <!-- Fetch Data -->
                <?php $index = 1; foreach($mahasiswa as $mhs) : ?>                
                <tr>
                  <td> <?php echo $index  ?> </td>
                  <td> <?php echo $mhs['nama'] ?> </td>
                  <td> <?php echo $mhs['nim'] ?> </td>
                  <td> <?php echo $mhs['alamat'] ?> </td>
                  <td>
                    <a data-toggle="modal" data-target="#deleteData-<?php echo $mhs['id'] ?>" class="btn btn-danger text-white btn-sm"><span><i class="fa fa-trash" style="font-size:18px;"></i></span></a>

                    <!-- Modal Delete -->
                    <div class="modal fade" id="deleteData-<?php echo $mhs['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                          <div class="modal-header bg-danger">
                            <h3 class="modal-title" id="exampleModalLabel">Delete Data</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?php echo site_url('/MahasiswaController/delete/'.$mhs['id']) ?>" method="post">
                            <div class="modal-body">
                              <div class="d-flex justify-content-start">
                                <h2>Yakin Ingin Menghapus Data ?</h2>   
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-danger" value="Delete">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <!-- End Modal Delete -->                    
                  </td>
                </tr>
                <?php $index++; endforeach; ?>
                <!-- End Fetch Data -->
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>			
</div>	
<!-- End Main Content -->

<!-- Modal Add -->
<div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h3 class="modal-title" id="exampleModalLabel">Tambah Data</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                  
	    <?php echo form_open('MahasiswaController/validator'); ?>
        <div class="modal-body">
          <div class="form-group">
            <h3>Nama</h3>
            <input type="text" name="nama" class="form-control border border-dark">
          </div>
          <div class="form-group">
            <h3>NIM</h3>
            <input type="number" name="nim" class="form-control border border-dark">
          </div>
          <div class="form-group">
            <h3>Alamat</h3>
            <textarea name="alamat" cols="30" rows="5" class="form-control border border-dark"></textarea>
          </div>        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Add Data">
        </div>
      </form>
    </div>
  </div>
</div>
<!-- End Modal Add -->