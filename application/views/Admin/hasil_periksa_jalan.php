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
                            <form method="post" action="<?= base_url('admin/input_hasil_jalan'); ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label for="inputAddress2">Daftar Pasien</label>
                                        <select class="form-control" name="pasien">
                                            <option>Pilih Pasien</option>
                                            <?php
                                            $no = 2;
                                            foreach ($pasien as $tpasien) :
                                            ?>
                                                <option value="<?= $tpasien['kib']; ?>"><?= $tpasien['nama_p']; ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="inputAddress2">Poli</label>
                                        <select class="form-control" name="poli">
                                            <option>Pilih Poli</option>
                                            <?php
                                            $no = 1;
                                            $poli = $this->db->query("SELECT * FROM tb_spesialis ")->result_array();
                                            foreach ($poli as $tpoli) :
                                            ?>
                                                <option value="<?= $tpoli['id_spesialis']; ?>"><?= $tpoli['nama_spesialis']; ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="inputAddress2">Dokter</label>
                                        <select class="form-control" name="dokter">
                                            <option>Pilih Dokter</option>
                                            <?php
                                            $no = 1;
                                            $dokter = $this->db->query("SELECT * FROM tb_dokter")->result_array();
                                            foreach ($dokter as $tdokter) :
                                            ?>
                                                <option value="<?= $tdokter['id_dokter']; ?>"><?= $tdokter['nama_d']; ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group  col-md-10">
                                        <label for="inputAddress2">Keluhan Pasien</label>
                                        <textarea class="form-control" name="ket_dok" id="ket_dok" rows="3" placeholder="Keluhan"></textarea>
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="inputAddress">Tanggal</label>
                                        <div class="date">
                                            <input type="text" class="form-control datepicker" id="tanggal" name="tanggal" aria-describedby="emailHelp" value="<?= date('Y-m-d'); ?>" autocomplete="off">
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
                            <h4 class="text-center text-light">Table Pasien Rawat Jalan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No Periksa</th>
                                            <th>No RM</th>
                                            <th>Nama Pasien</th>
                                            <th>Keluhan</th>
                                            <th>Poli</th>
                                            <th>Dokter</th>
                                            <th>Tanggal</th>
                                            <th>Cara Bayar</th>
                                            <th>No BPJS</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($dpasien as $jalan) :
                                        ?>
                                            <tr>
                                                <td><?= $jalan['id_detail_pasien']; ?></td>

                                                <?php
                                                $query2 = $this->db->query("SELECT * FROM tb_pasien where kib = '" . $jalan['kib'] . "'")->result_array();
                                                foreach ($query2 as $tsps) :
                                                    if ($jalan['kib'] == '') {
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

                                                <td><?= $jalan['ket']; ?></td>

                                                <?php
                                                $query3 = $this->db->query("SELECT * FROM tb_spesialis where id_spesialis = '" . $jalan['id_spesialis'] . "'")->result_array();
                                                foreach ($query3 as $tsps1) :
                                                    if ($jalan['id_spesialis'] == '') {
                                                ?>
                                                        <td>Kosong</td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td><?= $tsps1['nama_spesialis']; ?></td>
                                                <?php
                                                    }
                                                endforeach; ?>
                                                <?php
                                                $query2 = $this->db->query("SELECT * FROM tb_dokter where id_dokter = '" . $jalan['id_dokter'] . "'")->result_array();
                                                foreach ($query2 as $tsps) :
                                                    if ($jalan['id_dokter'] == '') {
                                                ?>
                                                        <td>Kosong</td>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <td><?= $tsps['nama_d']; ?></td>
                                                <?php
                                                    }
                                                endforeach; ?>
                                                <td><?= $jalan['tanggal'] ?></td>
                                                <td><?= $jalan['cara_bayar']; ?></td>
                                                <td><?= $jalan['no_bpjs']; ?></td>

                                                <td <a href></span></a>
                                                    <a href="<?= base_url('admin/edit_pasien_jalan/') . $jalan['id_detail_pasien']; ?>"><span class="badge badge-pill badge-primary">Edit</span></a> |

                                                    <a href="" class="hapusModalJalan" data-target="#hapusModal" data-toggle="modal" data-id="<?= $jalan['id_detail_pasien'];  ?>"><span class="badge badge-pill badge-danger">Hapus</span></a>
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