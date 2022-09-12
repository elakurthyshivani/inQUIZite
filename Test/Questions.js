var curr=1;

displayQNos(curr);
setHeightForQNos();


/*To set height the same as width on resize*/
window.onresize=window.onzoom=setHeightForQNos;

function setHeightForQNos()	{
	var qno=document.getElementsByClassName("qNo");
	var c=(curr+1>15?1:curr+1);
	/*for(var i=0; i<qno.length; i++)
		qno[i].style.height=qno[i].scrollWidth+"px";
	document.getElementsByTagName("header")[0].style.height=
		qno[c].scrollHeight+qno[c].offsetTop*2+2+"px";
*/
	for(var i=0, b=false; i<qno.length; i++)	{
		qno[i].style.height=qno[i].scrollWidth+"px";
		if(!b && i+1!=curr && qno[i].scrollWidth!=0)	{
			d=qno[i].scrollWidth+qno[i].offsetTop*2+2;
			b=true;
		}
	}
	document.getElementsByTagName("header")[0].style.height=
		d+"px";

}




/*Question Numbers Bar*/
function changeDisplayQNos(x)	{
	displayQNos(curr+=x);
}

function displayQNos(x)	{
	var qno=document.getElementsByClassName("qNo");
	var lq, rq, i;
	
	
	if(x<1)	curr=15;
	else if(x>15)	curr=1;
	lq=(curr-4<1?15+curr-4:curr-4);
	rq=(curr+1>15?1:curr+1);
	for(i=0; i<qno.length; i++)	{
		qno[i].style.display="none";
		qno[i].style.marginLeft="0px";
		qno[i].className=qno[i].className.replace(" active", "");
	}
	for(i=0; i<4; i++, lq++)	{
		if(lq>15)	lq=1;
		qno[lq-1].style.display="table";
		qno[lq-1].style.marginLeft=9.11*i+2*(i+1)-1+"%";
	}
	qno[curr-1].style.display="table";
	qno[curr-1].style.marginLeft=9.11*i+2*(i+1)-1+"%";
	qno[curr-1].className+=" active";
	for(i+=1; i<9; i++, rq++)	{
		if(rq>15)	rq=1;
		qno[rq-1].style.display="table";
		qno[rq-1].style.marginLeft=9.11*i+2*(i+1)-1+"%";
	}
	
	setHeightForQNos();
}