        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Content Row -->
            <div class="row">
                <?php
                $queri = $this->db->get_where('tb_daftar_pasien', ['id_detail_pasien' => $id])->row_array();
                ?>
            </div>

            <div class="card">
                <div class="alert bg-success" role="alert">
                    <h4 class="text-center text-light">Edit Form Rawat Inap</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="<?= base_url('admin/update_inap'); ?>">
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Lama Inap</label>
                                    <input type="number" name="lama" class="form-control" id="inputEmail4" value="<?= $queri['lama_inap']; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Kamar</label>
                                    <input type="hidden" name="kamarOld" value="<?= $queri['id_kamar'] ?>">
                                    <select class="form-control" name="kamar">
                                        <option>Pilih Kamar</option>
                                        <?php
                                        $no = 1;
                                        $kamar = $this->db->query("SELECT * FROM tb_kamar")->result_array();
                                        foreach ($kamar as $kam) :
                                        ?>
                                            <option value="<?= $kam['id_kamar']; ?>" <?php if ($queri['id_kamar'] == $kam['id_kamar']) {
                                                                                            echo 'selected';
                                                                                        } ?>><?= $kam['nama_k']; ?></option>
                                        <?php
                                        endforeach;
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tanggal Inap</label>
                                    <input type="text" name="tanggal_inap" class="form-control datepicker" id="inputEmail4" value="<?= $queri['tanggal_masuk']; ?>" autocomplete="off">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tanggal Selesai Inap</label>
                                    <input type="text" name="tanggal_selesai_inap" class="form-control datepicker" id="inputEmail4" value="<?= $queri['tanggal_keluar']; ?>" autocomplete="off">
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
                            <!-- <input type="hidden" value="<?= $queri['cara_bayar'] ?>" name="cara_bayarV" id="cara_bayarV"> -->
                            <div class="form-group col-md-3 <?php
                                                            if ($queri['cara_bayar'] == 'Umum') {
                                                                echo "d-none";
                                                            }
                                                            ?>" id="nobpjs">
                                <label for="inputAddress2">Nomor BPJS</label>
                                <input type="number" class="form-control" value="<?= $queri['no_bpjs'] ?>" name="nobpjs" id="nobpjs">
                            </div>
                        </div>
                        <!-- <div class="form-group col-md-3 d-none" id="nobpjs">
                            <label for="inputAddress2">Nomor BPJS</label>
                            <input type="number" class="form-control" value="<?= $queri['no_bpjs'] ?>" name="nobpjs" id="nobpjs">
                        </div> -->
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