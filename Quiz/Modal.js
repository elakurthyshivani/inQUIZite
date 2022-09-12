var mo=document.getElementById("modal-outside");
var m=document.getElementById("modal");

window.onclick=function(event)	{
	if(event.target==mo)	closeAllQues();
}

function openAllQues()	{
	mo.style.display="block";
	m.style.marginTop=(mo.scrollHeight-m.scrollHeight)/2+"px";
}

function closeAllQues()	{
	mo.style.display="none";
	m.style.marginTop="-400px";
}