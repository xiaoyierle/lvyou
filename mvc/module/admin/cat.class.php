<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12/012
 * Time: 14:22
 */
class cat extends admin{
    function __construct()
    {
        parent::__construct();
        $this->db=new db("category");
    }
    function show(){
        $r=$this->db->selectAll("*","1 order by num");
        $this->smarty->assign("data",$r);
        $this->smarty->display("admin/cate.html");
    }
    function addcat(){
        $parentid=$_POST["pid"];
        $name=$_POST["name"];
        $num=$_POST["num"];
        $temp_name=$_POST["temp_name"];
        $r=$this->db->insert(["name"=>$name,"parentid"=>$parentid,"num"=>$num,"temp_name"=>$temp_name]);
        if($r==1){
            $this->jump("添加成功","index.php?m=admin&f=cat&a=show");
        }else{
            $this->jump("添加失败","index.php?m=admin&f=cat&a=show","false");
        }
    }
    function delcat(){
        $id=$_GET['id'];
        $r=$this->db->del("id='$id'");
        if($r==1){
            $this->jump("删除成功","index.php?m=admin&f=cat&a=show");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=cat&a=show","false");
        }
    }
    function editcat(){
        $id=$_GET["id"];
        $r=$this->db->selectOne("*","id='$id'");
        $this->smarty->assign("data",$r);
        $this->smarty->display("admin/cateedit.html");
    }
    function updatecat(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $num=$_POST["num"];
        $temp_name=$_POST["temp_name"];
        $r=$this->db->update("name='$name',num='$num',temp_name='$temp_name'","id='$id'");
        if($r==1){
            $this->jump("修改成功","index.php?m=admin&f=cat&a=show");
        }else{
            $this->jump("修改失败","index.php?m=admin&f=cat&a=show","false");
        }
    }
}