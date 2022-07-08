<?php
class Kegiatan_model extends CI_Model {
    public $judul, $kapasitas, $harga_tiket, $tanggal, $narasumber, $tempat, $pic, $foto_flyer;

    public function getAll(){
        // menampilkan seluruh data yang ada di tabel jenis kegiatan 
        $query =$this->db->get('kegiatan');
        return $query->result();
       }
    public function getById($id){
        // menampilkan data berdasarkan id
        $query = $this->db->get_where('kegiatan',['id' => $id]);
        return $query->row();
    }   
   }
   
?>