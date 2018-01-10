<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 14:31
 */
class index extends indexMain {
    function __construct()
    {
        //让当前类有父类构造函数中定义的属性
        parent::__construct();

    }

    function init(){
        $db_con=new db("content_news");
        $this->smarty->assign("catid",22);
        $one=$this->db->selectAll("*","parentid=6");
        $two=$db_con->selectAll("*","posid=15");
        $threeOne=$db_con->selectOne("*","posid=16 limit 1");
        $threeMore=$db_con->selectAll("*","posid=16 limit 1,3");
        $four=$db_con->selectAll("*","posid=17");
        $this->smarty->assign("one",$one);
        $this->smarty->assign("two",$two);
        $this->smarty->assign("threeOne",$threeOne);
        $this->smarty->assign("threeMore",$threeMore);
        $this->smarty->assign("four",$four);
        $this->smarty->display("index/index.html");
    }
    function category_aboutus(){
        $id=$_GET['id'];
        $this->smarty->assign("catid",$id);
        $r=$this->db->selectAll("*","parentid=$id");
        $this->smarty->assign("cat",$r);
        $db=new db("content_news");
        $r=$db->selectOne("title,description,content","catid=9");
        $this->smarty->assign("con",$r);
        $this->smarty->display("index/category_aboutus.html");
    }
    function category_route(){
        $id=$_GET['id'];
        $this->smarty->assign("catid",$id);
        $r=$this->db->selectAll("*","parentid=$id");
        $this->smarty->assign("cat",$r);
        $db=new db("content_news");
        //--------分页
        $num=$db->selectOne("count(*) as num","posid=12")["num"];
        $page=new pages($num,3);
        $str=$page->output();
        $limit=$page->limit;

        $r2=$db->selectAll("*","posid=12 {$limit}");
        $this->smarty->assign("page",$str);
        $this->smarty->assign("con",$r2);
        $this->smarty->display("index/category_route.html");
    }
    function list_con(){
        $id=$_GET['id'];
        $catid=$_GET['catid'];
        $db=new db("content_news");
        $r=$this->db->selectAll("*","parentid=6");
        $this->smarty->assign("cat",$r);
        $catname=$this->db->selectOne("name,temp_name,id","id=$id");
        $this->smarty->assign("catname",$catname);
        $num=$db->selectOne("count(*) as num","catid=$id")["num"];
        $page=new pages($num,3);
        $str=$page->output();
        $limit=$page->limit;
        $r=$db->selectAll("*","catid=$id {$limit}");
        $this->smarty->assign("con",$r);
        $this->smarty->assign("page",$str);
        $this->smarty->assign("catid",$catid);

        $this->smarty->display("index/category_route.html");

    }
    function list_bro(){
        $id=$_GET['id'];
        $catid=$_GET['catid'];
        $db=new db("content_news");
        $r=$this->db->selectAll("*","parentid=5");
        $this->smarty->assign("cat",$r);
        $catname=$this->db->selectOne("name,temp_name,id","id=$id");
        $this->smarty->assign("catname",$catname);
        $num=$db->selectOne("count(*) as num","catid=$id")["num"];
        $page=new pages($num,6);
        $str=$page->output();
        $limit=$page->limit;
        $r=$db->selectAll("*","catid=$id {$limit}");
        $this->smarty->assign("con",$r);
        $this->smarty->assign("page",$str);
        $this->smarty->assign("catid",$catid);
        $this->smarty->display("index/category_browse.html");

    }
    function category_booling(){
        $id=$_GET['id'];
        $this->smarty->assign("catid",$id);
        $r=$this->db->selectAll("*","parentid=$id");
        $this->smarty->assign("cat",$r);
        $this->smarty->display("index/category_booling.html");
    }
    function category_browse(){
        $id=$_GET['id'];
        $this->smarty->assign("catid",$id);
        $r=$this->db->selectAll("*","parentid=$id");
        $this->smarty->assign("cat",$r);

        $db=new db("content_news");
        //--------分页
        $num=$db->selectOne("count(*) as num","posid=13")["num"];
        $page=new pages($num,6);
        $str=$page->output();
        $limit=$page->limit;

        $r2=$db->selectAll("*","posid=13 {$limit}");
        $this->smarty->assign("page",$str);
        $this->smarty->assign("con",$r2);
        $this->smarty->display("index/category_browse.html");
    }
    function category_contact(){
        $id=$_GET['id'];
        $this->smarty->assign("catid",$id);
        $r=$this->db->selectAll("*","parentid=$id");
        $this->smarty->assign("cat",$r);
        $this->smarty->display("index/category_contact.html");
    }
    function category_news(){
        $id=$_GET['id'];
        $this->smarty->assign("catid",$id);
        $r=$this->db->selectAll("*","parentid=$id");
        $this->smarty->display("index/category_news.html");
    }
    function show(){
        $catid=$_GET['catid'];
        $this->smarty->assign("catid",$catid);
        $r=$this->db->selectAll("*","parentid=6");
        $this->smarty->assign("cat",$r);

        $id=$_GET['id'];
        $db=new db("content_news");
        $r=$db->selectOne("*","id=$id");
        $catid=$r['catid'];
        $this->smarty->assign("con",$r);
        $this->smarty->display("index/show.html");
    }
    function showRoute(){
        $catid=$_GET['catid'];

        $r=$this->db->selectAll("*","parentid=5");
        $this->smarty->assign("cat",$r);

        $id=$_GET['id'];
        $db=new db("content_news");
        $r=$db->selectOne("*","id=$id");
        $this->smarty->assign("con",$r);
        $this->smarty->display("index/showRoute.html");
    }
    function jump($msg,$href,$check="true"){
        $this->smarty->assign("msg",$msg);
        $this->smarty->assign("href",$href);
        $this->smarty->assign("check",$check);
        $this->smarty->display("admin/tips.html");
    }
    function addcontact(){
        $time=$_POST['time'];
        $people=$_POST['people'];
        $route=$_POST['route'];
        $name=$_POST['name'];
        $tel=$_POST['tel'];
        $remark=$_POST['remark'];
        $catid=$_GET['catid'];
        $db=new db("book");
        $r=$db->insert(["time"=>$time,"people"=>$people,"route"=>$route,"name"=>$name,"tel"=>$tel,"remark"=>$remark]);
        if($r==1){
            $this->jump("添加成功","index.php?a=category_booling&id=$catid");
        }else{
            $this->jump("添加失败","index.php?a=category_booling&id=$catid","false");
        }
    }
    function search(){
        $r=$_POST["text"];
        echo $r;
        $db2=new db("content_news");
        $res=$db2->selectAll("*","title like '%$r%'");
        $this->smarty->assign("res",$res);
        $this->smarty->display("index/search.html");
    }
}