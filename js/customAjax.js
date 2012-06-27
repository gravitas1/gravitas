
    function show(flag){
    //alert(flag);
    $(document).ready(function(){
      //alert(flag);
      $("#process").slideToggle();
      $("#process-close").show();
    });
    loadXMLDoc(flag);
  }
	function loadXMLDoc(flag){
	var xmlhttp;
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
  		}
	else{
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
	xmlhttp.onreadystatechange=function(){
  		if (/*xmlhttp.readyState==4 &&*/ xmlhttp.status==200){
    	document.getElementById("process").innerHTML=xmlhttp.responseText;
    	}
  	}
  //alert(xmlhttp);
xmlhttp.open("GET","fetch.php?flag="+flag,true);
xmlhttp.send();
}
