<?php echo $this->extend('template/admin/main'); ?>

<?php echo $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Kabupaten/Kota</h1>
      <a href="#" data-toggle="modal" data-target="#logoutModal1"
         class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Kabupaten/Kota</a>
   </div>

   <div class="card shadow mb-4">
      <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">Data kabupaten Kota</h6>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th class="6">Nama Kabupaten</th>
                     <th class="6">Thumbnail</th>
                     <th class="6">Aksi</th>
                  </tr>
               </thead>
               <tfoot>
                  <tr>
                     <th class="6">Nama Kabupaten</th>
                     <th class="6">Thumbnail</th>
                     <th class="6">Aksi</th>
                  </tr>
               </tfoot>
               <tbody>
                  <?php foreach ($this->data as $d) { ?>
                  <tr>
                     <td><?php echo $d['nama']; ?></td>
                     <td><img style="width:100px;height:100px;"
                           src="<?php echo base_url('thumbnail'); ?>/<?php echo $d['thumbnail']; ?>" alt="" srcset="">
                     </td>
                     <td class="justify-between">
                        <!-- <a href="<?php echo base_url(); ?>detail_destination/<?php echo $d['id_kabkot']; ?>"
                           class="btn btn-sm btn-primary"><i class="fas fa-eye fa-sm text-white-50"></i>
                           Lihat</a> -->
                        <a href="<?php echo base_url(); ?>tour_guide/<?php echo $d['id_kabkot']; ?>"
                           class="btn btn-sm btn-secondary"><i class="fas fa-eye fa-sm text-white-50"></i>
                           Tour Guide</a>
                        <a href="<?php echo base_url(); ?>detail_destination/<?php echo $d['id_kabkot']; ?>"
                           class="btn btn-sm btn-primary"><i class="fas fa-eye fa-sm text-white-50"></i>
                           Lihat</a>
                        <a href="<?php echo base_url(); ?>edit_destination" class="btn btn-sm btn-success"><i
                              class="fas fa-edit fa-sm text-white-50"></i>
                           Edit</a>

                        <a class="btn btn-danger btn-hapus-kabkot btn-sm"
                           href="<?php echo base_url(); ?>admin/delete_kabkot/<?php echo $d['id_kabkot']; ?>"
                           id="btn-hapus-kabkot">Hapus</a>
                     </td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
   aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Kabupaten/Kota</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <form action="<?php echo base_url(); ?>admin/kabkot" method="post" enctype="multipart/form-data">
               <div class="form-group align-items-center">
                  <label for="nama">Nama Kabupaten/Kota</label>
                  <input type="text" class="form-control" id="nama" name="nama">
               </div>
               <div class="form-group align-items-center">
                  <label for="thumbnail">Thumbnail</label>
                  <input type="file" class="form-control" id="thumbnail" name="thumbnail">
               </div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Simpan</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php echo $this->endSection('content'); ?>