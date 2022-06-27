<?php include('../koneksi.php'); ?>
<?php include('layouts/head.php'); ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#modal-lg">
                    Launch Large Modal
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Semester</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
                        $no = 1;
                        while($mhs = mysqli_fetch_array($result)){
                    ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['nim']; ?></td>
                    <td><?php echo $mhs['semester']; ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mhs['id']; ?>)" class="btn btn-sm btn-danger alert_notif">Hapus</a>
                      <a href="index.php?page=edit-mahasiswa&&id=<?php echo $mhs['id']; ?>" class="btn btn-sm btn-info">Edit</a>
                    </td>
                  </tr>
                  <?php } ?>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="add/tambah_data.php" method="get">
              <div class="modal-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="Masukkan Nim">
                  </div>
                  <!-- <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="text" name="semester" class="form-control" id="semester" placeholder="Masukkan Semester">
                  </div>    -->
                  <div class="form-group">
                    <label>Semester</label>
                    <select class="form-control select2" name="semester" style="width: 100%;">
                      <option selected="selected">Pilih Semester</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
              </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <script>
          // alert('ok');
          // window.location=("delete/hapus.php?id="+data_id);
          function hapus_data(data_id) {
            Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
              if (result.isConfirmed) {
                window.location=("delete/hapus.php?id="+data_id);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                  )
                }
            })
          }
      </script>