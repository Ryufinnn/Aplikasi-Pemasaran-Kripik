// JavaScript Document
<!--
	
function right(e) {
if ((document.layers || (document.getElementById && !document.all)) && (e.which == 2 || e.which == 3)) {
  alert("Copyright by safrudin");
  return false;
}
else if (event.button == 2 || event.button == 2) {
  alert("Copyright by safrudin");
  return false;
}
return true;
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown = right;
}
else if (document.all && !document.getElementById){
document.onmousedown = right;
}

document.oncontextmenu = new Function("alert('Copyright by safrudin');return false");

// -->

