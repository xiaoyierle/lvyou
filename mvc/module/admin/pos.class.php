<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/12/012
 * Time: 18:35
 */
class pos extends admin{
    function __construct()
    {
        parent::__construct();
        $this->db=new db("position");
    }
    function show(){
        $r=$this->db->selectAll("*","1=1 order by num");
        $this->smarty->assign("data",$r);
        $this->smarty->display("admin/position.html");
    }
    function addpos(){
        $name=$_POST["name"];
        $num=$_POST["num"];
        $r=$this->db->insert(["name"=>$name,"num"=>$num]);
        if($r==1){
            $this->jump("添加成功","index.php?m=admin&f=pos&a=show");
        }else{
            $this->jump("添加失败","index.php?m=admin&f=pos&a=show","false");
        }
    }
    function delpos(){
        $id=$_GET['id'];
        $r=$this->db->del("id='$id'");
        if($r==1){
            $this->jump("删除成功","index.php?m=admin&f=pos&a=show");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=pos&a=show","false");
        }
    }
    function editpos(){
        $id=$_GET["id"];
        $r=$this->db->selectOne("*","id='$id'");
        $this->smarty->assign("data",$r);
        $this->smarty->display("admin/posedit.html");
    }
    function updatepos(){
        $id=$_POST["id"];
        $name=$_POST["name"];
        $num=$_POST["num"];
        $r=$this->db->update("name='$name',num='$num'","id='$id'");
        if($r==1){
            $this->jump("修改成功","index.php?m=admin&f=pos&a=show");
        }else{
            $this->jump("修改失败","index.php?m=admin&f=pos&a=show","false");
        }
    }
}