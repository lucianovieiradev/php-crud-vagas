<?php 

namespace App\Entity;

class Vaga
{
    /**
     * Identificador único da vaga
     * @var integer
     */
    public $id;
    /**
     * Título da vaga
     * @var string
     */
    public $title;
    /**
     * Descrição da vaga (pode conter html)
     * @var string
     */
    public $description;
    /**
     * Define se a vaga ativa
     * @var string(s/n)
     */
    public $active;
    /**
     * Data de publicação da vaga
     * @var string
     */
    public $date;
    /**
   * Método responsável por cadastrar uma nova vaga no banco
   * @return boolean
   */
    
    public function cadastrar(){
     $this->date = date('Y-m-d H:i:s');


    }
}
