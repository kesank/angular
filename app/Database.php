<?php
namespace App;
use \PDO;


class Database{
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $bdd;

    public function __construct($db_name, $db_user='root', $db_host='localhost',$db_password='host'){
        $this->db_name= $db_name;
        $this->db_user= $db_user;
        $this->db_password= $db_password;
        $this->db_host= $db_host;
    }
    public function getBdd(){
        if($this->bdd==null){
            $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 
            'root', 'root');
        
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->bdd=$bdd;
        }
        
        return $bdd;
    }

    public function query($statement){
        $req=$this->getBdd()->query($statement);
        $datas=$req->fetchAll(PDO::FETCH_OBJ);
        return $datas;
    }
    public function prepare($statement){
      $req= $this->getBdd()->prepare($statement);
      return $req;
  }

}