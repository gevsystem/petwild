<?php
    require "app/connect/cone.php";
    class ConsultaF extends DAO
{
  public function getConsulta()
  {
    parent::__construct();
  }

  public function consulta($sql = "", $data = array())
  {
    $query = $this->conect->prepare($sql);
    $query->execute($data);
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    return $res;
  }
}
