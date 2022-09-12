var time=document.getElementById("time");
var finalTime=new Date().getTime()+60000;
var s=0;
var wid=document.body.offsetWidth;

slideShow();


/*Timer*/
window.onload=function()	{
	var x=setInterval(function()	{
		var now=new Date().getTime();
		var d=finalTime-now;
		var min=Math.floor(d%(1000*60*60)/(1000*60));
		var sec=Math.floor(d%(1000*60)/1000);
		time.innerHTML=(min<10?"0"+min:min)+":"+
			(sec<10?"0"+sec:sec);
		if(min==0 && sec==55)	showButton();
		if(d<=0)	{
			clearInterval(x);
			goToPage();
		}
	});
}

function goToPage()	{
	window.location.assign("Quiz/Question.php");
}




/**/
window.onresize=window.onzoom=function()	{
	wid=document.body.offsetWidth;
}

function slideShow()	{
	var a=document.getElementsByTagName("article");
	if(s>=a.length)	s=0;
	for(var i=0; i<a.length; i++)	{
		a[i].style.display="none";
		a[i].style.marginLeft="0px";
	}
	a[s].style.display="table";
	a[s].style.marginLeft=(wid-a[s].offsetWidth)/2+"px";
	s++;
	setTimeout(slideShow, 3500);
}




/**/
function showButton()	{
	document.getElementsByTagName("button")[0].style.display="block";
}