<?php
class Konsumen_Model extends SENE_Model{
  var $is_cacheable;
  var $tbl = 'konsumen';
  var $tbl_as = 'k';

  public function __construct(){
    parent::__construct();
    $this->is_cacheable;
    $this->db->from($this->tbl,$this->tbl_as);
  }
  public function set($nama,$no_hp,$alamat){
    $sql = "INSERT INTO `konsumen` (`nama`, `no_hp`, `alamat`) VALUES ('$nama', '$no_hp', '$alamat');";
    return $this->db->exec($sql);
  }
  public function get(){
    $sql = "SELECT * FROM konsumen  ORDER BY `konsumen`.`alamat` ASC";
    return $this->db->query($sql);
  }
  public function getById($id){
    $sql = "SELECT * FROM konsumen WHERE id=$id";
    return $this->db->query($sql);
  }
  public function update($id,$nama,$no_hp,$alamat){
    $sql = "UPDATE `konsumen` SET `nama` = '$nama', `no_hp` = '$no_hp', `alamat` = '$alamat' WHERE `konsumen`.`id` = $id;";
    return $this->db->exec($sql);
  }
  public function del($id){
    $sql = "DELETE FROM `konsumen` WHERE `konsumen`.`id` = $id";
    return $this->db->exec($sql);
  }
}
