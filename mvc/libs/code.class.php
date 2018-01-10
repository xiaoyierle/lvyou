<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9/009
 * Time: 11:35
 */
class code{
    public $width=120;
    public $height=40;
    public $img="";
    public $str="abcdefghjklmnpqrstwvuxyz23456789";
    public $words="";
    public $pointnum=10;
    public $linenum=10;
    public $fontfile="";
    public function __construct($fontfile)
    {
        $this->fontfile=$fontfile;
    }
    private function getimg(){
        $this->img=imagecreatetruecolor($this->width,$this->height);

    }
    private function getcolor($type="l"){
        if($type=="l"){
            $color=imagecolorallocate($this->img,mt_rand(120,255),mt_rand(120,255),mt_rand(120,255));
        }else{
            $color=imagecolorallocate($this->img,mt_rand(0,120),mt_rand(0,120),mt_rand(0,120));
        }
        return $color;
    }
    private function getpoints(){
        for($i=0;$i<$this->pointnum;$i++){
            imagesetpixel($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor("d"));
        }
    }
    private function getlines(){
        for($i=0;$i<$this->linenum;$i++){
            imageline($this->img,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->getcolor("d"));
        }
    }
    private function fillimg(){
        imagefill($this->img,0,0,$this->getcolor());
    }
    private function getwords(){
        $len=strlen($this->str);
        for($i=0;$i<4;$i++){
            $pos=mt_rand(0,$len-1);
            $word=substr($this->str,$pos,1);
            $word=strtoupper($word);
            $this->words.=$word;
            imagettftext($this->img,mt_rand(20,25),mt_rand(-15,15),$i*$this->width/4+mt_rand(0,10),mt_rand(20,30),$this->getcolor('d'),$this->fontfile,$word);
        }
    }
    function output(){
        $this->getimg();
        $this->fillimg();
        $this->getpoints();
        $this->getlines();
        $this->getwords();
//        session_start();
//        $_SESSION["code"]=$this->words;
        header("content-type:image/png");
        imagepng($this->img);
        imagedestroy($this->img);
    }
}
/*$code=new code("font.ttf");
$code->output();*/