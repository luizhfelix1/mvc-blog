<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page{


    /**
     * Método que renderiza o header
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header', []);
    }

    /**
     * Método que renderiza o footer
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer', []);
    }


    /**
     * Método que retorna o conteúdo da página   
     * @return string
     */   
    public static function getPage($title,$content){
        return View::render('pages/page',[
            'tittle' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }


}
