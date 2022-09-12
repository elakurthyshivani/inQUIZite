var time=document.getElementById("time");
var rt=0;




/*Timer*/
function timer($t)	{
	var finalTime=new Date().getTime()+parseInt($t);
	var x=setInterval(function()	{
		var now=new Date().getTime();
		var d=rt=finalTime-now;
		var min=Math.floor(d%(1000*60*60)/(1000*60));
		var sec=Math.floor(d%(1000*60)/1000);
		time.innerHTML=(min<10?"0"+min:min)+":"+
			(sec<10?"0"+sec:sec);
		document.cookie="rt="+d;
		
		if(d<=0)	{
			clearInterval(x);
			time.innerHTML="00:00";
			window.location="../ThankYou.php";
		}
	});
}