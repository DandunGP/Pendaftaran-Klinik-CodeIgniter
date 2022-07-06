        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Content Row -->
          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Form Registrasi</h4>
                </div>
                <div class="card-body">
                  <form method="post" action="<?= base_url('admin/input_hasil'); ?>">
                    <div class="form-row">
                      <div class="form-group col-md-10">
                        <label for="inputAddress2">Daftar Pasien</label>
                        <select class="form-control" name="pasien">
                          <option>Pilih Pasien</option>
                          <?php
                          $no = 2;
                          foreach ($pasien as $tpasien) :
                          ?>
                            <option value="<?= $tpasien['kib']; ?>"><?= $tpasien['kib'] ?> - <?= $tpasien['nama_p']; ?></option>
                          <?php
                          endforeach;
                          ?>
                        </select>
                      </div>

                      <div class="form-group  col-md-10">
                        <label for="inputAddress2">Lama Inap</label>
                        <input type="number" class="form-control" name="lama" id="lama" rows="3" placeholder="0">
                      </div>
                      <div class="form-group  col-md-10">
                        <label for="inputAddress2">Daftar Kamar</label>
                        <select class="form-control" name="kamar">
                          <option>Silahkan Pilih Kamar</option>
                          <?php
                          $no = 1;
                          $kamart = $this->db->query("SELECT * FROM tb_kamar WHERE status_k = 'kosong' ")->result_array();
                          foreach ($kamart as $tkamar) :
                          ?>
                            <option value="<?= $tkamar['id_kamar']; ?>"><?= $tkamar['nama_k']; ?></option>
                          <?php
                          endforeach;
                          ?>
                        </select>
                      </div>
                      <div class="form-group col-md-10">
                        <label for="inputAddress">Tanggal Inap</label>
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal_inap" name="tanggal_inap" aria-describedby="emailHelp" value="<?= date('Y-m-d'); ?>" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group col-md-10">
                        <label for="inputAddress">Tanggal Selesai Inap</label>
                        <div class="date">
                          <input type="text" class="form-control datepicker" id="tanggal_selesai_inap" name="tanggal_selesai_inap" autocomplete="off">
                        </div>
                      </div>
                      <div class="form-group col-md-10">
                        <label for="inputAddress2">Cara Bayar</label>
                        <select class="form-control" name="cara_bayar" id="cara_bayar" onChange="getValue()">
                          <option>Pilih Cara Bayar...</option>
                          <option value="Umum">Umum</option>
                          <option value="BPJS">BPJS</option>
                        </select>
                      </div>
                      <div id="nobpjs" class="form-group col-md-10">
                      </div>

                      <!--<div class="form-group col-md-6">
                              <label for="inputEmail4">Lama Inap</label>
                              <input type="text" name="lama_i" class="form-control" id="inputEmail4" placeholder="..... hari">
                           </div> -->
                    </div>
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                  </form>
                </div>
                <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">Apakah data ingin dihapus ?</div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                        <a class="btn btn-danger" id="btn-yes" href="">Yes</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-8">
              <div class="card">
                <div class="alert bg-success" role="alert">
                  <h4 class="text-center text-light">Table Pasien Rawat Inap</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No Periksa</th>
                          <th>No RM</th>
                          <th>Nama Pasien</th>
                          <th>Lama Inap</th>
                          <th>Kamar</th>
                          <th>Tanggal Inap</th>
                          <th>Tanggal Keluar</th>
                          <th>Cara Bayar</th>
                          <th>No BPJS</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($dpasien as $tdpasien) :
                        ?>
                          <tr>
                            <td><?= $tdpasien['id_detail_pasien']; ?></td>

                            <?php
                            $query2 = $this->db->query("SELECT * FROM tb_pasien where kib = '" . $tdpasien['kib'] . "'")->result_array();
                            foreach ($query2 as $tsps) :
                              if ($tdpasien['kib'] == '') {
                            ?>
                                <td>Kosong</td>
                              <?php
                              } else {
                              ?>
                                <td><?= $tsps['kib']; ?></td>
                                <td><?= $tsps['nama_p']; ?></td>
                            <?php
                              }
                            endforeach; ?>

                            <td><?= $tdpasien['lama_inap'] ?></td>
                            <?php
                            $query4 = $this->db->query("SELECT * FROM tb_kamar WHERE id_kamar = '" . $tdpasien['id_kamar'] . "' ")->result_array();
                            foreach ($query4 as $kam) :
                              if ($tdpasien['id_kamar'] == '') {
                            ?>
                                <td>Kosong</td>
                              <?php
                              } else {
                              ?>
                                <td><?= $kam['nama_k']; ?></td>
                            <?php
                              }
                            endforeach;
                            ?>
                            <td><?= $tdpasien['tanggal_masuk'] ?></td>
                            <td><?= $tdpasien['tanggal_keluar'] ?></td>
                            <td><?= $tdpasien['cara_bayar']; ?></td>
                            <td><?= $tdpasien['no_bpjs']; ?></td>

                            <td <a href></span></a>
                              <a href="<?= base_url('admin/edit_pasien_inap/') . $tdpasien['id_detail_pasien']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |

                              <a href="" class="hapusModalInap" data-target="#hapusModal" data-toggle="modal" data-id="<?= $tdpasien['id_detail_pasien'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
                            </td>

                          </tr>
                        <?php

                        endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->