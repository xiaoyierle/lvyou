<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9/009
 * Time: 10:33
 */
header('Content-Type:text/html;charset=utf-8');
class upload{
    public $path="upload";
    public $fullpath="";
    public $file="";
    public $filename="";
    public $size="";
    public $type=["image/png","image/jpg","image/gif","image/jpeg"];
    function __construct()
    {
        $this->size=1024*1024*10;
    }
    private function getfile($file="file"){
        $this->file=$_FILES[$file];
    }
    private function getpath(){
        if(!is_dir($this->path)){
            mkdir($this->path);
        }
        $this->fullpath=$this->path."/".date("y-m-d");
        if(!is_dir($this->fullpath)){
            mkdir($this->fullpath);
        }
    }
    private function getname(){
        $houzhui=explode(".",$this->file["name"]);
        $houzhui=array_pop($houzhui);
        $this->filename=md5(time()).".".$houzhui;
    }
    private function check(){
        if($this->file["size"]>$this->size){
            echo "文件大小超出限制";
            return false;
        }
        if(!in_array($this->file["type"],$this->type)){
            echo "文件类型错误";
            return false;
        }
        return true;
    }
    private function move(){
        if(is_uploaded_file($this->file["tmp_name"])){
            move_uploaded_file($this->file["tmp_name"],$this->fullpath."/".$this->filename);
        }
    }
    function upload($file="file"){
        $this->getfile($file);
        $this->getpath();
        $this->getname();
        if($this->check()){
            $this->move();
            echo $this->fullpath."/".$this->filename;
        }
    }
}
/*$up=new upload();
$up->upload("file");*/