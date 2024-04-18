<?php

 class Mhsw {

    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=dbakademik", "root", "");
        } catch (PDOException $e) {
            die ("Error ". $e->getMessage());
        }
    }

    public function tampil()
    {
        $sql = "SELECT * FROM tb_mhsw";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data=[];
        while ($rows = $stmt->fetch()) {
            $data[]=$rows;
        }
        return $data;
    }

    public function input($nim,$nama,$alamat)
    {
        $sql = "INSERT into tb_mhsw values('','$nim','$nama','$alamat')";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function hapus($id){
        $sql = "DELETE FROM tb_mhsw WHERE `tb_mhsw`.`mhsw_id` = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

    public function edit($id)
    {
        $sql = "SELECT * from tb_mhsw where `mhsw_id` ='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data=[];
        while ($rows = $stmt->fetch()) {
            $data[]=$rows;
        }
        return $data;
    }

    public function update($id,$nim,$nama,$alamat)
    {
        $sql = "UPDATE `tb_mhsw` SET `mhsw_nim` = '$nim', `mhsw_nama` = '$nama', `mhsw_alamat` = '$alamat' WHERE `tb_mhsw`.`mhsw_id` = $id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
    }

}
