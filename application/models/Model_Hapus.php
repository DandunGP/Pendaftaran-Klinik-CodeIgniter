<?php
class Model_Hapus extends CI_Model
{
    public function hapus_pasien($id)
    {
        $this->db->delete('tb_pasien', ['id_pasien' => $id]);
    }

    public function hapus_dokter($id)
    {
        $this->db->delete('tb_dokter', ['id_dokter' => $id]);
    }

    public function hapus_spesialis($id)
    {
        $this->db->delete('tb_spesialis', ['id_spesialis' => $id]);
    }

    public function hapus_kamar($id)
    {
        $this->db->delete('tb_kamar', ['id_kamar' => $id]);
    }

    public function hapus_user($id)
    {
        $this->db->delete('tb_user', ['id_user' => $id]);
    }
    public function hapus_inap($id)
    {
        $this->db->delete('tb_daftar_pasien', ['id_detail_pasien' => $id]);
    }
    public function hapus_jalan($id)
    {
        $this->db->delete('tb_daftar_pasien_jalan', ['id_detail_pasien' => $id]);
    }
    public function hapus_ugd($id)
    {
        $this->db->delete('tb_daftar_pasien_ugd', ['id_detail_pasien' => $id]);
    }
}
