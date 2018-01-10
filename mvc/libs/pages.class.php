<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/13/013
 * Time: 14:05
 */
//接收两个参数 总条数 每一页要展示的条数
//分页效果的html代码
//当前limit的值
class pages{
    public $total;//总条数
    public $num;//每一页要显示的条数
    public $current;//当前的页码
    public $pagenum;//总的页数
    public $limit;//当前的范围 最终要取的范围
    function __construct($total,$num)
    {
        $this->total=$total;
        $this->num=$num;
        $this->pagenum=ceil($total/$num);
    }
    function output(){
        //获取当前的页码，要根据页码决定页面要现实的信息
//        $this->current=0;
        $this->current=isset($_GET["page"])?$_GET["page"]:0;
        //index.php?m=admin&f=tent&a=showlist&id=1&page=1
        //<span>一共有x页</span><span>一共有x条</span><span><a>首页</a><a>上一页</a>1<a></a></span>
        $url=isset($_GET["page"])?substr($_SERVER["REQUEST_URI"],0,strrpos($_SERVER["REQUEST_URI"],"=")+1):$_SERVER["REQUEST_URI"]."&page=";
        $str="<span>总页数为{$this->pagenum}页</span>";
        $str.="<span>总条数{$this->total}条</span>";
        $str.="<a href='{$url}0'>首页</a>";
        $prev=$this->current-1<0?0:$this->current-1;
        $str.="<a href='{$url}{$prev}'>上一页</a>";
        $next=$this->current+1>$this->pagenum-1?$this->pagenum-1:$this->current+1;
        $start=$this->current-2<0?0:$this->current-2;
        $end=$this->current+2>$this->pagenum-1?$this->pagenum-1:$this->current+2;
        for($i=$start;$i<=$end;$i++){
            $n=$i+1;
            if($i==$this->current){
                $str.="<span class='current'>{$n}</span>";
            }else{
                $str.="<a href='{$url}{$i}'>{$n}</a>";
            }
        }
        $str.="<a href='{$url}{$next}'>下一页</a>";
        $last=$this->pagenum-1;
        $str.="<a href='{$url}{$last}'>尾页</a>";
        $this->limit="limit ".$this->current*$this->num.",".$this->num;
        return $str;
    }
}