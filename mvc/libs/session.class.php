<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11/011
 * Time: 16:47
 */
class session{
    function __construct()
    {
        session_start();
    }

    function set($k,$v){
        $_SESSION[$k]=$v;
    }
    function get($k){
        return isset($_SESSION[$k])?$_SESSION[$k]:false;
    }
    function del($K){
        unset($k);
    }
    function clear(){
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }
    }
}