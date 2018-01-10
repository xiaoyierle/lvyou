<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 15:43
 */
//用来让前台的类继承用的 在当前类当中定义的属性方法 在前台的类当中都可以使用
class indexMain{
    function __construct()
    {
        error_reporting(0);
        $this->smarty=new Smarty();
        $this->smarty->setTemplateDir("template");
        $this->smarty->setCompileDir("compile");
        $this->db=new db("category");
        $r=$this->db->selectAll("*","parentid=0 order by num");
        $this->smarty->assign("data",$r);
        $cats=$this->db->selectAll("*","parentid!=0");//导航下拉栏
        $this->smarty->assign("data2",$cats);
        $catid=$_GET['catid'];
        if(isset($catid)){
            $this->smarty->assign("catid",$catid);
        }
    }
}