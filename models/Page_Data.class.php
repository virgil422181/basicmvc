<?php


class Page_Data {
    public $title="";
    public $content="";
    public $css="";
    public $embeddedStyle="";
    public $js ="";
    public $messages ="";
    public $favicon="";
    public $menu; // multiarray 
    public $metaDesc="";
    public $metaAuth="";
    public $metaKey="";

    /**
     * Add a css resurces to webpage
     * @param sting $cascadeStyleSheet name of css resurce
     */
    public function addCss ($cascadeStyleSheet) {
        $this->css .= "<link href='$cascadeStyleSheet' rel='stylesheet' />";
    }
    
    /**
     * Add a js resurces to webpage
     * @param string $javaScriptFileName name of the java script file (with extension, ex: main.js)
     */
    public function addJs ($javaScriptFileName) {
        $this->js .= "<script src='$javaScriptFileName'></script>";
    }
    
    /**
     * Add Favicon to webpage
     * @param string $iconPath Path to favicon
     */
    public function favicon ($iconPath) {
        $this->favicon = "<link rel='icon'  type='image/png' href='$iconPath'>";
    }
    
    public function metaDescription ($description) {
        $this->metaDesc = "<meta name='description' content='$description'>";
    }
    public function metaAuthor ($author) {
        $this->metaAuth = "<meta name='author' content='$author'>";
    }
    
    public function metaKeyword ($keywords=array()){
        $this->metaKey = "<meta name='keywords' content='";
        $lastElement = end($keywords);
        foreach ($keywords as $keyword){
            if ($keyword == $lastElement) {
                $this->metaKey .= $keyword;
            } else {
                $this->metaKey .= $keyword.",";
            }
        }
        $this->metaKey .= "'>";
    }
    
}