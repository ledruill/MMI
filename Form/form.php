<?php
// https://grafikart.fr/formations/programmation-objet-php
/*  Class form
*   Permet de generer un formulaire rapidement et simplement
*/
class form {

    /*
    * @var array : donnees utilisees par le formulaire
    */
private $data;
    /*
    * @var string : Tag utilis pour entourrer les champs
    */
private $balise = 'p';
    /*
    * @param array $data : donnees utilisees par le formulaire
    */
public function __construct($data = array()){
    $this->data = $data;
    }
    /*
    * @param $html string : code html a entourer
    * @return string
    */
private function balise($html){
   echo "<$this->balise>$html</$this->balise>";
   // echo "<{$this->balise}>{$html}</{$this->balise}>";
    }
    /*
    * @param $index : index de la valeur a recuperer
    * @return string
    */
private function getValue($index){
    if (isset($this->data[$index]))    
            return $this->data[$index];
    else 
            return null;
    
    }
    /*
    * @param $name : string
    * @return string
    */
public function input($name){
    return $this->balise( '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
    }
    /*
    * @return string
    */
public function submit(){
        return $this->balise( '<button type="submit">Envoyer</button>');
    }




}
?>