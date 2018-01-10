class upload{
    constructor(url,eleobj){
        this.url=url;
        this.fileobj=document.querySelector(eleobj.fileobj);
        this.hiddenobj=document.querySelector(eleobj.hiddenobj);
        this.show=document.querySelector(eleobj.show);
        this.inner=document.querySelector(eleobj.inner);
        this.btn=document.querySelector(eleobj.btn);
        this.size=1024*1024*10;
        this.type=/image\/(png|jgp|jpeg|gif)/;
        this.file="";
    }
    upload(){
        this.preview();
        this.click();
    }
    preview(){
        var that=this;
        this.fileobj.onchange=function(){
            that.file=this.files[0];
            if(that.check()){
                var fr=new FileReader();
                fr.readAsDataURL(that.file);
                fr.onload=function(){
                    that.show.innerHTML="";
                    var img=document.createElement("img");
                    img.style.cssText="height:100%;width:auto;";
                    img.src=fr.result;
                    that.show.appendChild(img);
                }
            }
        }
    }
    check(){
        if(this.file.size>this.size){
            alert("文件的大小太大");
            return false;
        }
        if(!this.type.test(this.file.type)){
            alert("文件类型不符合");
            return false;
        }
        return true;
    }
    click(){
        var that=this;
        this.btn.onclick=function(){
            if(that.check()){
                var xhr=new XMLHttpRequest();
                xhr.onprogress=function(e){
                    var bili=e.loaded/e.total*100+"%";
                    that.inner.style.width=bili;
                }
                xhr.open("post",that.url);
                var fd=new FormData();
                fd.append("file",that.file);
                xhr.send(fd);
                xhr.onload=function(){
                    that.hiddenobj.value=xhr.response;
                }
            }
        }
    }
}