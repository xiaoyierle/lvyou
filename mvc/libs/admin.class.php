<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 16:39
 */
class admin{
    function __construct()
    {
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir("template");
        $this->smarty->setCompileDir("compile");
        $this->session=new session();
        $this->checklogin();
    }
    function jump($msg,$href,$check="true"){
        $this->smarty->assign("msg",$msg);
        $this->smarty->assign("href",$href);
        $this->smarty->assign("check",$check);
        $this->smarty->display("admin/tips.html");
    }
    function checklogin(){
        if(empty($this->session->get("islogin"))){
            return false;
        }else{
            return true;
        }
    }

}