<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA OBAT
    </h1>
    <ol class="breadcrumb">
      <li class="active">DATA OBAT</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12 col-lg-12">
        <div class="card box box-primary">
          <div class="card-header box-header">
            <a href="?page=tambah_obat" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
          <div class="card-body box-body table-responsive">
            <table id="example1" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>NAMA OBAT</th>
                  <th>KEMASAN</th>
                  <th>HARGA</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                require_once __DIR__ . "/../../conf/conn.php";
                $no = 0;
                $query = mysqli_query($conn, "SELECT * FROM obat ORDER BY id DESC");
                //echo $query;
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['nama_obat']; ?></td>
                    <td><?php echo $row['kemasan']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td>
                      <a href="index.php?page=ubah_obat&id=<?= $row['id']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="../pages/obat/hapus_obat.php?id=<?= $row['id']; ?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
                    </td>
                  </tr>

                <?php } ?>

              </tbody>
              <tfoot>
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>NAMA OBAT</th>
                  <th>KEMASAN</th>
                  <th>HARGA</th>
                  <th>AKSI</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->