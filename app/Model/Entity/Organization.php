<?php

namespace App\Model\Entity;

class Organization{

   /**
    * ID da organização
    * @var integer
    */   
    public $id = 1; 

   /**
    * Nome da organização
    * @var string
    */
    public $name = 'Projeto MVC';

    /**
    * Nome do site
    * @var string
    */
    public $site = 'https://www.linkedin.com/in/luizhfelix1/';

    /**
     * Descrição da organização
     * @var string
     */
    public $description = 'Projeto criado com o intuíto de treinar as práticas
    de MVC em PHP';


}