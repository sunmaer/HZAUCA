// js实现点击收起下拉菜单，再次点击打开下拉下单

function $(id){return document.getElementById(id)}
window.onload = function(){
 $("nav").onclick = function(e){
 var src = e?e.target:event.srcElement;
 if(src.tagName == "P"){
  var next = src.nextElementSibling || src.nextSibling;
  next.style.display = (next.style.display =="none")?"block":"none";
  document.p.style.backgroundImage = (document.p.style.backgroundImage=="url(bottom.png)")?"url(right.png)":"url(bottom.png)";
 }
}
}

//确认是否删除
function conf_delact(){
    if(confirm("确定删除此项活动吗?"))
    {
    	return true;
    }
    else
    {
        return false;
    }
  }    
 function conf_delbbs(){
    if(confirm("确定删除此条留言吗?"))
    {
      return true;
    }
    else
    {
        return false;
    }
  }    
function conf_delmem(){
    if(confirm("确定删除此条留言吗?"))
    {
      return true;
    }
    else
    {
        return false;
    }
  } 
  function conf_delphoto(){
    if(confirm("确定删除此张图片吗?"))
    {
      return true;
    }
    else
    {
        return false;
    }
  } 