<?php 

/**
 * 
 */
class gereEtudiant
{
	public $codeEtudiant;
	public $nom;
	public $prenom;
        public $adresse;
	public $classe;
	
	public function __construct()
	{
		$this->codeEtudiant=0;
		$this->nom='';
		$this->prenom='';
                $this->adresse='';
		$this->classe='';

	}
}