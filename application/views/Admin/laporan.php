        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">
            <div class="col-md-3">
              <div class="card">
                <div class="alert bg-primary" role="alert">
                  <h4 class="text-center text-light">Laporan Pasien</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_pasien'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-3">

                        <!-- <select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Per-Tanggal</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>-->
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-primary form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card">
                <div class="alert bg-primary" role="alert">
                  <h4 class="text-center text-light">Laporan Dokter</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_dokter'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-3">
                        <!--<select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>-->
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-primary form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <!--<div class="card">
                <div class="alert bg-primary" role="alert">
                  <h4 class="text-center text-light">Laporan User</h4>
                </div>
                <div class="card-body">
                   <form action="<?= base_url('admin/lapor_user'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                          <select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-primary form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">
                      
                    </div>
                  </form>
                </div>
              </div>-->

              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Laporan Kamar</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_kamar'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-3">
                        <!--<select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>-->
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-success form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Laporan Poliklinik</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_spesialis'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-3">
                        <!--<select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>-->
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-success form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
          <hr>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-4">
              <!-- <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Laporan Kamar</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_kamar'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                          <select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-success form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">
                      
                    </div>
                  </form>
                </div>
              </div>  -->
            </div>
            <!-- <div class="col-md-4">
              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Laporan Spesialis</h4>
                </div>
                <div class="card-body">
                 <form action="<?= base_url('admin/lapor_spesialis'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                          <select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-success form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">
                      
                    </div>
                  </form>
                </div>
              </div>  
            </div>-->
          </div>
          <hr>
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="alert bg-danger" role="alert">
                  <h4 class="text-center text-light">Laporan Rawat Inap</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_hasil_periksa'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal1" name="tanggal1" aria-describedby="emailHelp" placeholder="Tanggal Awal" autocomplete="off">
                        </div>
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal2" name="tanggal2" aria-describedby="emailHelp" placeholder="Tanggal Akhir" autocomplete="off">
                        </div>


                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-danger form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="alert bg-danger" role="alert">
                  <h4 class="text-center text-light">Laporan Rawat Jalan</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_hasil_periksa_jalan'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal1" name="tanggal1" aria-describedby="emailHelp" placeholder="Tanggal Awal" autocomplete="off">
                        </div>
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal2" name="tanggal2" aria-describedby="emailHelp" placeholder="Tanggal Akhir" autocomplete="off">
                        </div>


                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-danger form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="alert bg-danger" role="alert">
                  <h4 class="text-center text-light">Laporan UGD</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_hasil_periksa_ugd'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal1" name="tanggal1" aria-describedby="emailHelp" placeholder="Tanggal Awal" autocomplete="off">
                        </div>
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal2" name="tanggal2" aria-describedby="emailHelp" placeholder="Tanggal Akhir" autocomplete="off">
                        </div>


                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-danger form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-center pt-4">
            <!-- <div class="col-md-4">
              <div class="card">
                <div class="alert bg-danger" role="alert">
                  <h4 class="text-center text-light">Laporan Perawatan</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_rawat'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal1" name="tanggal1" aria-describedby="emailHelp" placeholder="Tanggal Awal">
                        </div>
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal2" name="tanggal2" aria-describedby="emailHelp" placeholder="Tanggal Akhir">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-danger form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">

                    </div>
                  </form>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-4">
              <div class="card">
                <div class="alert bg-danger" role="alert">
                  <h4 class="text-center text-light">Laporan Pembayaran</h4>
                </div>
                <div class="card-body">
                  <form action="<?= base_url('admin/lapor_pembayaran'); ?>" method="post">
                    <div class="row">
                      <div class="col-md-6">
                          <select class="form-control" name="periode">
                            <option value="hari_ini">Sampai Saat ini</option>
                            <option value="hari">Hari</option>
                            <option value="bulan">Bulan</option>
                            <option value="tahun">Tahun</option>
                          </select>
                      </div>
                      <div class="col-md-6">
                        <input type="submit" class="btn btn-outline-danger form-control" value="Pilih">
                      </div>
                    </div>
                    <div class="row">
                      
                    </div>
                  </form>
                </div>
              </div>  
            </div>-->
          </div>

          <hr>
          <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->