
var dayarray=new Array("Ahad","Isnin","Selasa","Rabu","Khamis","Jumaat","Sabtu")
var montharray=new Array("Januari","Februari","Mac","April","Mei","Jun","Julai","Ogos","September","Oktober","November","Disember")

function getthedate()
{	
	var mydate=new Date()
	var year=mydate.getYear()
	if (year < 1000)
		year+=1900
	var day=mydate.getDay()
	var month=mydate.getMonth()
	var daym=mydate.getDate()
	if (daym<10)
		daym="0"+daym
	var hours=mydate.getHours()
	var minutes=mydate.getMinutes()
	var seconds=mydate.getSeconds()
	var dn="AM"
	if (hours>=12)
		dn="PM"
	if (hours>12)
		hours=hours-12
	if (hours==0)
		hours=12
	if (minutes<=9)
		minutes="0"+minutes
	if (seconds<=9)
		seconds="0"+seconds
	//change font size here
	var cdate="<font color='666666' face='Segoe UI' size='2px'>"+dayarray[day]+", "+daym+" "+montharray[month]+"  "+year+" "+hours+":"+minutes+":"+seconds+" "+dn+" </font>"
	
	if (document.all)
		document.all.clock.innerHTML=cdate;
	else if (document.getElementById)
		document.getElementById("clock").innerHTML=cdate;
	else
		document.write(cdate)
}

if (!document.all&&!document.getElementById)
	getthedate()

function goforit()
{	
	if (document.all||document.getElementById)
		setInterval("getthedate()",1000)
}