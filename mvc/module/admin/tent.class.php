<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/13/013
 * Time: 10:46
 */
class tent extends admin{
    function __construct()
    {
        parent::__construct();
        $this->db=new db("content_news");
    }
    function show(){
        $db=new db("category");
        $r=$db->selectAll("*","1 order by num");
        $this->smarty->assign("tents",$r);
        $this->smarty->display("admin/list.html");
    }
  /*  function showList(){
        $id=$_GET["id"];
        $pages=$_GET["page"];
        $num=$this->db->selectOne("count(*) as num","catid='$id'")["num"];
//        echo $num;
        $page=new pages($num,5);
        $str=$page->output();
        $r=$this->db->selectAll("*","catid='$id' $page->limit");
        $data=["str"=>$str,"result"=>$r];
        echo json_encode($data);
//        var_dump($data);
    }*/
  function showlist(){

  /*    if(empty($this->session->get("id"))||$this->session->get("id")!=$_POST["cid"]){
          $id=$_POST["cid"];
          $this->session->set("id",$id);
      }else{
          $id=$this->session->get("id");
      }*/
      error_reporting(0);
      $id=$_POST["cid"];
      if(isset($id)){
          $this->session->set("id",$id);
      }else{
          $id=$this->session->get("id");
      }
      $num=$this->db->selectOne("count(*) as num","catid='$id'")['num'];
      $page=new pages($num,5);
      $str=$page->output();
      $r=$this->db->selectAll("*","catid='$id' $page->limit");
      $this->smarty->assign("str",$str);
      $this->smarty->assign("data",$r);
      $this->smarty->assign("id",$id);

      $db=new db("category");
      $r=$db->selectAll("*","1 order by num");
      $this->smarty->assign("tents",$r);
      $this->smarty->display("admin/list.html");
  }
  function delcon(){
      $id=$_GET['id'];
      $r=$this->db->del("id='$id'");
      if($r==1){
          $this->jump("删除成功","index.php?m=admin&f=tent&a=showlist");
      }else{
          $this->jump("删除失败","index.php?m=admin&f=tent&a=showlist","false");
      }
  }
  function addtent(){
      $db=new db("category");
      $r=$db->selectAll("*","1 order by num");
      $this->smarty->assign("tents",$r);

      $db2=new db("position");
      $r2=$db2->selectAll();
      $this->smarty->assign("pos",$r2);
      $this->smarty->display("admin/add.html");
  }
  function addcontent(){
      $title=$_POST["title"];
      $catid=$_POST["catid"];
      $posid=$_POST["posid"];
      $des=$_POST["description"];
      $con=$_POST["content1"];
      $time=$_POST["datetime"];
      $source=$_POST["source"];
      $thumb=$_POST["hidden"];
      $r=$this->db->insert(["title"=>$title,"source"=>$source,"time"=>$time,"description"=>$des,"content"=>$con,"catid"=>$catid,"posid"=>$posid,"thumb"=>$thumb]);
      if($r==1){
          $this->jump("添加成功","index.php?m=admin&f=tent&a=show");
      }else{
          $this->jump("添加失败","index.php?m=admin&f=tent&a=addtent","false");
      }
  }
  function editcon(){
      $id=$_GET['id'];
      $r=$this->db->selectOne("*","id='$id'");
      $this->smarty->assign("data",$r);
       $db2=new db("position");
      $pos=$db2->selectAll("*","1=1 order by num");
      $this->smarty->assign("pos",$pos);
      $db=new db("category");
      $r=$db->selectAll("*","1 order by num");
      $this->smarty->assign("tents",$r);
      $this->smarty->display("admin/conedit.html");
  }
  function updatecon(){
      $id=$_POST["id"];
      $title=$_POST["title"];
      $catid=$_POST["catid"];
      $posid=$_POST["posid"];
      $des=$_POST["description"];
      $con=$_POST["content1"];
      $time=$_POST["datetime"];
      $source=$_POST["source"];
      $thumb=$_POST["hidden"];
      $r=$this->db->update("title='$title',source='$source',time='$time',description='$des',content='$con',catid='$catid',posid='$posid',thumb='$thumb'","id='$id'");
      if($r==1){
          $this->jump("修改成功","index.php?m=admin&f=tent&a=showlist");
      }else{
          $this->jump("修改失败","index.php?m=admin&f=tent&a=showlist","false");
      }
  }
  function upload(){
      $up=new upload();
      $path=$up->upload();
      echo $path;
}
}