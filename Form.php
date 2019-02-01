<?php

/** permet de generer un formulaire simplement
* class Form
*/
class Form{
	/*
	* @var array utiliser par le formulaire
	*/
	private $data;
	/*
	* @var string utiliser pour entourer les champs
	*/
	public $surround ='p';

	/*
	* @param array $data utilisé par le formulaire
	*/

	public function __construct($data = array()){

		$this->data = $data ;
	}

	/*
	* @param $html code html à entourer par surround
	* @return string
	*/

	protected function surround($html){

		return "<$this->surround>{$html}</$this->surround>";
	}

	/*
	*@param $index string de la valeur à recuperer
	*@return string
	*/

	protected function getValue($index){

		if (isset($this->data[$index])) {
			
			return $this->data[$index];
		}

		else{

			return null;
		}
	}

	/*
	*@param $name string qui remplit initialement le formulaire
	*@return string
	*/

	public function input ($name){

		return $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
	}

	/*
	*@return string
	*/
	
	public function submit(){

		return $this->surround('<button type="submit">Envoyer</button>');
	}

	
}
