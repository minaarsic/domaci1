<?php

class Broker{
   
    private $mysqli;
    public function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "proizvodi"); //konekcija sa bazom
        $this->mysqli->set_charset("utf8");
    }
    function izvrsiCitanje($upit){
        $rezultat=$this->mysqli->query($upit); //query izvrsava upit koji dobija
       
        if(!$rezultat){
          throw new Exception($this->mysqli->error);
        }
        $rez=[];
            while($red=$rezultat->fetch_object()){
//fetch-object-omogucava da se vrati samo jedan red prilikom
//izvrsavanja upita, umesto celog objekta                 
                $rez[]=$red;
            }
            return $rez;
    }
    function izvrsiIzmenu($upit){
        $rezultat=$this->mysqli->query($upit);
    
        if(!$rezultat){
           throw new Exception($this->mysqli->error);
        }
       
    }
  
    

    
}

?>