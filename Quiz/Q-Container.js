var ques=0, opt=0;

setQAEqualHeight();

function setQAEqualHeight()	{
	var q=document.getElementsByClassName("q");
	var a=document.getElementsByClassName("a");
	var qh=q[curr-1].scrollHeight, ah=a[curr-1].scrollHeight;
	if(qh>ah)	a[curr-1].style.height=qh+"px";
	else	q[curr-1].style.height=ah+"px";
}

function selectOption(i, j)	{
	ques=i;
	opt=j;
	var q=document.getElementsByClassName("qNo")[i-1].children[0];
	if(q.className.search("attempted")==-1)
		q.className+=" attempted";
	var q=document.getElementsByClassName("qunos");
	if(q[i-1].className.search("attempted")==-1)
		q[i-1].className+=" attempted";
}