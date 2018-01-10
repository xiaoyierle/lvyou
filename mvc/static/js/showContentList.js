/*
$("#select").change(function(){
    var val=this.value;
    if(val==0){
        return;
    }
    $.get("index.php?m=admin&f=tent&a=showlist&id="+val,function(r){
        var str="";
        $("#page").html(r.str);
        $.each(r.result,function(index,value){
            var content=value.content;
            content=content.slice(0,20)+"...";
            str+=`
                <tr>
                    <td>${value.id}</td>
                    <td>${value.title}</td>
                    <td>${value.source}</td>
                    <td>${value.time}</td>
                    <td>${content}</td>
                    <td>
                        <div class="button-group">
                            <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> 
                            <a class="button border-red" href="javascript:void(0)">
                            <span class="icon-trash-o"></span> 删除</a> 
                        </div>
                    </td>
                </tr>
            `;
        })
        $("#tbody").html(str);
        
    },"json");
})*/
