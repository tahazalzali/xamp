<?php 
class Hello {
protected $lang ;
function __construct($lang){
    $this->lang=$lang ;

}
function greet(){
    if ($this->lang=='en'){echo "You are using english ";}
    if ($this->lang=='fr'){echo "Vous utilisez français ";}
}
}
$test =new Hello('fr');
$test->greet();
?>