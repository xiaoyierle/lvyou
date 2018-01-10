<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 15:50
 */
class index extends admin {
    function __construct()
    {
        //让当前类有父类构造函数中定义的属性
        parent::__construct();
        $this->db=new db("admin");
    }
    function login(){
        $this->smarty->display("admin/login.html");
    }
    function show(){
        if($this->checklogin()){
            $this->smarty->display("admin/index.html");
        }else{
            $this->jump("请先登录","index.php?m=admin&f=index&a=login");
        }
    }
    function code(){
//        echo FONT_PATH."font.ttf"
        $code = new code("static/font/font.ttf");
        $code->width=100;
        $code->height=32;
        $code->linenum=10;
//        $this->session->set("code",$this->words);
//            $_SESSION["code"]=$this->words;
        $code->output();
        $this->session->set("code",$code->words);
    }
    function check(){
        $username=$_POST['user'];
        $password=$_POST["password"];
        $code=$_POST['code'];
        if($this->session->get("code")!=strtoupper($code)){
            $this->jump("验证码错误","index.php?m=admin&f=index&a=login","false");
            exit();
        }
        $r=$this->db->selectOne("*","`username`='$username'");
        if(empty($r)){
            $this->jump("用户名不存在","index.php?m=admin&f=index&a=login","false");
            exit();
        }else{
            if($password==$r['password']){
                $this->session->set("islogin","true");
                $this->session->set("username",$username);
                $this->jump("登陆成功","index.php?m=admin&f=index&a=show");
            }else{
                $this->jump("密码错误","index.php?m=admin&f=index&a=login","false");
            }
        }
    }
    function logout(){
        $this->session->clear();
        if($this->session->get("islogin")){
            $this->jump("退出失败","index.php?m=admin&f=index&a=show","false");
        }else{
            $this->jump("退出成功","index.php?m=admin&f=index&a=login");
        }
    }
    function showpass(){
        $username=$this->session->get("username");
        $this->smarty->assign("user",$username);
        $this->smarty->display("admin/pass.html");
    }
    function changepass(){
        $newpass=$_POST["newpass"];
        $mpass=$_POST['mpass'];
        $username=$this->session->get("username");
        $r=$this->db->selectOne("password","username='$username'");
        $pass=$r['password'];
        if($pass!=$mpass){
            $this->jump("原始密码错误","index.php?m=admin&f=index&a=showpass","false");
            exit();
        }
        if($this->db->update("password='$newpass'","username='$username'")==1){
            $this->jump("修改成功","index.php?m=admin&f=index&a=showinfo");
        }else{
            $this->jump("修改失败","index.php?m=admin&f=index&a=showpass","false");
        }

    }
    function showinfo(){
        $this->smarty->display("admin/info.html");
    }
}