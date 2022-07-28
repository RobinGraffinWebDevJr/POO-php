<?php
namespace App\HTML;

/**
 * Class Form
 * Permet de formuler un formulaire rapidement et simplement
 */
class Form{

    /**
     * @var array Donnée utilisée par le formulaire
     */
    public $data;

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';


    /**
     * @param array $data Donnée utilisé par le formulaire
     */
    public function __contruct($data = array()){
        $this->data = $data;    
    }


    /**
     * @param $html string Code HTML a entourer
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>$html</{$this->surround}>";
    }

      /**
     * @param $index string Index de la valeur a recuperer
     * @return string
     */
    protected function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $name string
     * @return string
     */
    public function input($name) {
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '"> '
        );
    }

    
    /**
     * @return string
     */
    public function submit(){
        return $this->surround('<button type="submit">Envoyez</button>');
    }

}