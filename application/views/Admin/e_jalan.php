        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">
                <?php
                $queri = $this->db->get_where('tb_daftar_pasien_jalan', ['id_detail_pasien' => $id])->row_array();
                ?>
            </div>

            <div class="card">
                <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Edit Form Rawat Jalan</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_jalan'); ?>">
                        <div class="form-row">
                            <input type="hidden" name="id_p" class="form-control" id="inputEmail4" value="<?= $queri['id_detail_pasien']; ?>">
                            <?php
                            $query2 = $this->db->query("SELECT * FROM tb_pasien where kib = '" . $queri['kib'] . "'")->result_array();
                            foreach ($query2 as $tsps) :
                                if ($queri['kib'] == '') {
                            ?>
                                    <?= 'Kosong' ?>
                                <?php
                                } else {
                                ?>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">No RM</label>
                                        <input type="text" name="norm" class="form-control" id="inputEmail4" value="<?= $tsps['kib']; ?>" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nama Pasien</label>
                                        <input type="text" name="nama_p" class="form-control" id="inputEmail4" value="<?= $tsps['nama_p']; ?>" readonly>
                                    </div>
                            <?php
                                }
                            endforeach; ?>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Keluhan</label>
                                <textarea name="keluh" class="form-control" id=""><?= $queri['ket'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Poliklinik</label>
                                <select class="form-control" name="poli">
                                    <option>Pilih Poli</option>
                                    <?php
                                    $no = 1;
                                    $poli = $this->db->query("SELECT * FROM tb_spesialis ")->result_array();
                                    foreach ($poli as $tpoli) :
                                    ?>
                                        <option value="<?= $tpoli['id_spesialis']; ?>" <?php if ($queri['id_spesialis'] == $tpoli['id_spesialis']) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $tpoli['nama_spesialis']; ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Dokter</label>
                                <select class="form-control" name="dokter">
                                    <option>Pilih Dokter</option>
                                    <?php
                                    $no = 1;
                                    $dokter = $this->db->query("SELECT * FROM tb_dokter")->result_array();
                                    foreach ($dokter as $tdokter) :
                                    ?>
                                        <option value="<?= $tdokter['id_dokter']; ?>" <?php if ($queri['id_dokter'] == $tdokter['id_dokter']) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $tdokter['nama_d']; ?></option>
                                    <?php
                                    endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control datepicker" id="inputEmail4" value="<?= $queri['tanggal']; ?>" autocomplete="off">
                                </div>
                                <div class="form-group pl-2">
                                    <label for="inputEmail4">Cara Bayar</label>
                                    <select class="form-control" name="cara_bayar" id="cara_bayar" onChange="getValue2()">
                                        <option>Pilih Cara Bayar...</option>
                                        <option value="Umum" <?php if ($queri['cara_bayar'] == 'Umum') {
                                                                    echo 'selected';
                                                                } ?>>Umum</option>
                                        <option value="BPJS" <?php if ($queri['cara_bayar'] == 'BPJS') {
                                                                    echo 'selected';
                                                                } ?>>BPJS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 <?php
                                                            if ($queri['cara_bayar'] == 'Umum') {
                                                                echo "d-none";
                                                            }
                                                            ?>" id="nobpjs">
                                <label for="inputAddress2">Nomor BPJS</label>
                                <input type="number" class="form-control" value="<?= $queri['no_bpjs'] ?>" name="nobpjs" id="nobpjs">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Update Data</button>
                    </form>
                </div>

                <!-- Modal Hapus  -->
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
                                <button class="btn btn-success" type="button" data-dismiss="modal">No</button>
                                <a class="btn btn-danger" id="btn-yes" href="">Yes</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Content Row -->
        </div>


        <!-- /.container-fluid -->