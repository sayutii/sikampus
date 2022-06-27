<?php 
    $id = $_GET['id'];
    $mhs = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");
    $view = mysqli_fetch_array($mhs);
?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="update/update_data.php" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" class="form-control" value="<?php echo $view['id']; ?>">
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $view['nama']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nim">Nimm</label>
                    <input type="text" name="nim" class="form-control" id="nim"  value="<?php echo $view['nim']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Semester</label>
                    <select class="form-control select2" name="semester" style="width: 100%;">
                      <option value="<?php echo $view['semester']; ?>" selected="selected"><?php echo $view['semester']; ?></option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>