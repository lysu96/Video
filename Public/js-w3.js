// Script to open and close sidebar
function w3_openSidebar() {
	document.getElementById("idSidebar").style.display = "block";
	document.getElementById("idOverlay").style.display = "block";
}

function w3_closeSidebar() {
	document.getElementById("idSidebar").style.display = "none";
	document.getElementById("idOverlay").style.display = "none";
}
// Script to open and close row video
function w3_openvd() {
	document.getElementById("closevideo").style.display = "block";
}

function w3_closevd() {
	document.getElementById("closevideo").style.display = "none";
}

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}