<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/16/016
 * Time: 0:26
 */
class book extends admin {
    function __construct()
    {
        parent::__construct();
        $this->db=new db("book");
    }
    function show(){

        $num=$this->db->selectOne("count(*) as num")['num'];
        $page=new pages($num,5);
        $str=$page->output();
        $limit=$page->limit;
        $r=$this->db->selectAll("*","1 {$limit}");
        $this->smarty->assign("data",$r);
        $this->smarty->assign("page",$str);
        $this->smarty->display("admin/book.html");
    }
    function del(){
        $id=$_GET["id"];
        $r=$this->db->del("id=$id");
        if($r==1){
            $this->jump("删除成功","index.php?m=admin&f=book&a=show");
        }else{
            $this->jump("删除失败","index.php?m=admin&f=book&a=show","false");
        }
    }
}