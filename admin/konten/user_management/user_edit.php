<?php  
$id = $_GET['id'];
$data = query("SELECT * FROM admin WHERE id_admin = '$id'");
?>

<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Daftar Pengguna</h1>
  </div>
  
  <!-- Content Row -->
  <div class="row">
    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-12 col-md-12">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
        </div>
        <!-- Card Body -->
        <div class="card-body">
          <form action="<?=base_url('admin/konten/user_management/proses.php');?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?=$data['id_admin'];?>" readonly>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" value="<?=$data['username'];?>" readonly>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?=$data['email_admin'];?>" readonly>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="password1">Password</label>
                <input type="password" name="password1" id="password1" class="form-control" required>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="password2">Ulangi Password</label>
                <input type="password" name="password2" id="password2" class="form-control" required>
              </div>
            </div>
            
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="nama" id="nama" class="form-control" value="<?=$data['nm_lengkap'];?>" required>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <textarea name="alamat" id="alamat" rows="5" class="form-control">
                <?=$data['alamat_admin'];?>
              </textarea>
            </div>
            <div class="form-group">
              <img src="<?=base_url($data['pic_admin']);?>" class="img-fluid img-thumbnail mb-2" style="height: 500px; width: auto;">

              <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile" name="gambar">
              <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-6 col-sm-6">
                <label for="aktifasi">Aktifasi</label>
               <select name="aktifasi" id="aktifasi" class="form-control">
                  <option value="">Pilih Aktifasi</option>
                  <option value="Y" <?=($data['aktif_admin'] == 'Y' ? 'selected' : '');?>>Aktif</option>
                  <option value="N" <?=($data['aktif_admin'] == 'N' ? 'selected' : '');?>>Nonaktif</option>
                </select>
              </div>
              <div class="form-group col-md-6 col-sm-6">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                  <option value="">Pilih Status</option>
                  <option value="Admin" <?=($data['status_admin'] == 'Admin' ? 'selected' : '');?>>Admin</option>
                  <option value="User" <?=($data['status_admin'] == 'User' ? 'selected' : '');?>>User</option>
                </select>
              </div>
            </div>
           <div class="float-right">
              <a href="usman" class="btn btn-warning">Batal</a>
              <button type="submit" name="edit" class="btn btn-success">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->