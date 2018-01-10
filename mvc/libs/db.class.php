<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9/009
 * Time: 15:47
 */
header('Content-Type:text/html;charset=utf-8');
class db{
    public $host='localhost:3306';
    public $user='root';
    public $pass="";
    public $database='DfxZaQqfPQqjMuDouVzD';
    public $table="";
    public $db="";
    function __construct($table)
    {
        $this->table=$table;
        $this->db=new mysqli($this->host,$this->user,$this->pass,$this->database);
        $this->db->query("set names utf8");
        if($this->db->connect_errno){
            echo "数据库连接有误".$this->db->connect_error;
        }
    }
    public function selectAll($field="*",$if=""){
        if(empty($if)) {
            $sql ="select ".$field." from ".$this->table;
        }else{
            $sql="select ".$field." from ".$this->table." where ".$if;
        }
        $result=$this->db->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function selectOne($field="*",$if=""){
        if(empty($if)) {
            $sql = "select ".$field." from ".$this->table;
        }else{
            $sql="select ".$field." from ".$this->table." where ".$if;
        }
        $result=$this->db->query($sql);
        return $result->fetch_array(MYSQLI_ASSOC);
    }
    public function del($if){
        $sql="delete from ".$this->table." where ".$if;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    public function update($filed,$if){
        $sql="update ".$this->table." set ".$filed." where ".$if;
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
    public function insert($filed){
        //insert into table (content,posid)values()
        $k="";
        $v="";
        foreach ($filed as $key=>$val){
            $k.=$key.",";
            $v.="'$val'".",";
        }
        $k=substr($k,0,strlen($k)-1);
        $v=substr($v,0,strlen($v)-1);
        $sql="insert into `".$this->table."` (".$k.")"."values"."(".$v.")";
        $this->db->query($sql);
        return $this->db->affected_rows;
    }
}