<?php
class Jeniskegiatan_model extends CI_Model{
    // Buat Property atau variable
    public $nama, $deskripsi;

    public function getAll(){
        // menampilkan seluruh data yang ada di table jeniskegiatan menggunakan query builder
        $query = $this->db->get('jeniskegiatan');
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('jeniskegiatan', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO jeniskegiatan (nama,deskripsi) VALUES (?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE jeniskegiatan SET nama=?,deskripsi=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data jeniskegiatan
        $sql = "DELETE FROM jeniskegiatan WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>