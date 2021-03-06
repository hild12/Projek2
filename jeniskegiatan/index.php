<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Jenis Kegiatan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Layout</a></li>
                <li class="breadcrumb-item active">Jenis Kegiatan</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <!-- Default box -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data Jenis Kegiatan</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        $nomor = 1;
                        foreach ($jeniskegiatan as $mhs) {
                        ?>
                        <tr>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $mhs -> nama ?></td>
                            <td>
                            <a class="btn btn-outline-info btn-sm" href="<?php echo base_url("index.php/jeniskegiatan/detail/$mhs->id")?>">
                            <i class="fas fa-info-circle fa-xl">
                              </i>
                              Detail
                          </a>
                          <a class="btn btn-outline-primary btn-sm" href="<?php echo base_url("index.php/jeniskegiatan/edit/$mhs->id")?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-outline-danger btn-sm" href="<?php echo base_url("index.php/jeniskegiatan/delete/$mhs->id")?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                        </tr>
                        <?php
                        $nomor++;
                        }
                        ?>
                    </tbody>
                </table><br>
                <a href="<?php echo base_url("index.php/jeniskegiatan/form")?>" class="btn btn-primary btn-sm"> Add Data </a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
</div>