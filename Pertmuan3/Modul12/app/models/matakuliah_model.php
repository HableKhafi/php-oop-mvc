<?php 

class Matakuliah_model {
    private $table = 'matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatakuliah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMatakuliahById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMatakuliah($data)
    {
        // PENTING: Sebutkan nama kolom secara spesifik
        // Kolom id, created_at, update_at, status_id tidak perlu ditulis karena sudah auto/default
        $query = "INSERT INTO matakuliah (kode_mk, nama_mk, semester, sks)
                    VALUES
                  (:kode_mk, :nama_mk, :semester, :sks)";
        
        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('sks', $data['sks']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMatakuliah($id)
    {
        $query = "DELETE FROM matakuliah WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMatakuliah($data)
    {
        // Hanya update data yang diinputkan user
        $query = "UPDATE matakuliah SET
                    kode_mk = :kode_mk,
                    nama_mk = :nama_mk,
                    semester = :semester,
                    sks = :sks
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}