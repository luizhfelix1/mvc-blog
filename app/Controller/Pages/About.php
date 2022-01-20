<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class About extends Page{

    /**
     * Método que retorna a home    
     * @return string
     */   
    public static function getHome(){
        //ORGANIZAÇÃO
        $obOrganization = new Organization;
        
        //VIEW DA HOME
        $content = View::render('pages/about',[
            'name' => $obOrganization->name,
            'site' => $obOrganization->site,
            'description' => $obOrganization->description
        ]);

        //RETORNA A VIEW DA PÁGINA  
        return parent::getPage('SOBRE', $content);
    }


}
