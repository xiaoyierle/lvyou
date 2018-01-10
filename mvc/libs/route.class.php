<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 14:19
 */
class route{
    public $m;//进入某一个文件夹
    public $f;//用某一个类（文件的名字）
    public $a;//用某一个方法
    //解析路径调用对应的方法
    function getInfo(){
        $this->m=isset($_GET["m"])&&!empty($_GET["m"])?$_GET["m"]:"index";
        $this->f=isset($_GET["f"])&&!empty($_GET["f"])?$_GET["f"]:"index";
        $this->a=isset($_GET["a"])&&!empty($_GET["a"])?$_GET["a"]:"init";
        $path="module/".$this->m."/".$this->f.".class.php";
        if(is_file($path)){
            include "$path";
            if(class_exists($this->f)){
                $class=$this->f;
                $obj=new $class();
                if(method_exists($class,$this->a)){
                    $fun=$this->a;
                    $obj->$fun();
                }else{
                    echo "{$this->a}方法不存在";
                }
            }else{
                echo "{$this->f}类不存在";
            }
        }else{
            echo $path."路径不存在";
        }
    }
}