/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2018-04-03 20:33:14
 * @version $Id$
 */


//点击单元格11,使表格的背景颜色变成红色
function change(){
	document.getElementById("tbl").style.backgroundColor="red";
}


//点击单元格12,将单元格的内容变成当前的日期,其格式为(yyyy-mm-dd)
Date.prototype.Format = function(fmt) 
{ //author: meizz 
  var o = { 
    "M+" : this.getMonth()+1,                 //月份 
    "d+" : this.getDate(),                    //日 
    "h+" : this.getHours(),                   //小时 
    "m+" : this.getMinutes(),                 //分 
    "s+" : this.getSeconds(),                 //秒 
  }; 
  if(/(y+)/.test(fmt)) 
    fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length)); //格式化年份
  for(var k in o) //循环获取上面定义的月、日、小时等，格式化对应的数据。
    if(new RegExp("("+ k +")").test(fmt)) 
  fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length))); 
  return fmt; 
}
function date(){
	var time=new Date().Format("yyyy-MM-dd");
	document.getElementById("t2").innerHTML=time;
}


//点击单元格21,将在现有单元格后面插入一行
function append(){
	var table=document.createElement("tr");
	var element=document.getElementById("tbl");
	element.appendChild(table);
}


//点击单元格22,将删除表格的第2行
function deletion(){
	document.getElementById("tbl").deleteRow(2);
}

//点击单元格31,显示当前的鼠标坐标
function show(event){
	x=event.clientX;
	y=event.clientY;
	alert("X 坐标："+x+",Y 坐标："+y);
}

//点击单元格32,打开一个新窗口,里面显示淘宝主页
