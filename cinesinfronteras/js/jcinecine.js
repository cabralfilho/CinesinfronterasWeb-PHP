function SeleccionarUno() {
	//MOSTRAMOS NUESTRO PANEL Y ESCONDEMOS LOS OTROS.
	  document.getElementById("form1").style.display = "block";
	  document.getElementById("form2").style.display = "none";
	  document.getElementById("form3").style.display = "none";
	  document.getElementById("form4").style.display = "none";
	  document.getElementById("form5").style.display = "none";
	  //CAMBIAMOS DE COLOR LOS BOTONES.
	  document.getElementById("btnUno").classList.remove("btn", "btn-secondary");
	  document.getElementById("btnUno").classList.add("btn", "btn-primary");
	  document.getElementById("btnDos").classList.remove("btn", "btn-primary");
	  document.getElementById("btnDos").classList.add("btn", "btn-secondary");
	  document.getElementById("btnTres").classList.remove("btn", "btn-primary");
	  document.getElementById("btnTres").classList.add("btn", "btn-secondary");
	  document.getElementById("btnCuatro").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCuatro").classList.add("btn", "btn-secondary");
	  document.getElementById("btnCinco").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCinco").classList.add("btn", "btn-secondary");
	  //HABILITAMOS LOS OTROS Y DESHABILITAMOS EL ACTUAL.
	  document.getElementById("btnUno").disabled = true;
	  document.getElementById("btnDos").disabled = false;
	  document.getElementById("btnTres").disabled = false;    
	  document.getElementById("btnCuatro").disabled = false;
	  document.getElementById("btnCinco").disabled = false;
	  window.location.hash = "form1";  
  }
  
  function SeleccionarDos() {
	  //MOSTRAMOS NUESTRO PANEL Y ESCONDEMOS LOS OTROS.
	  document.getElementById("form1").style.display = "none";
	  document.getElementById("form2").style.display = "block";
	  document.getElementById("form3").style.display = "none";
	  document.getElementById("form4").style.display = "none";
	  document.getElementById("form5").style.display = "none";

	  //CAMBIAMOS DE COLOR LOS BOTONES.
	  document.getElementById("btnUno").classList.remove("btn", "btn-primary");
	  document.getElementById("btnUno").classList.add("btn", "btn-secondary");
	  document.getElementById("btnDos").classList.remove("btn", "btn-secondary");
	  document.getElementById("btnDos").classList.add("btn", "btn-primary");
	  document.getElementById("btnTres").classList.remove("btn", "btn-primary");
	  document.getElementById("btnTres").classList.add("btn", "btn-secondary");
	  document.getElementById("btnCuatro").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCuatro").classList.add("btn", "btn-secondary");
	  document.getElementById("btnCinco").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCinco").classList.add("btn", "btn-secondary");
	  //HABILITAMOS LOS OTROS Y DESHABILITAMOS EL ACTUAL.
	  document.getElementById("btnUno").disabled = false;
	  document.getElementById("btnDos").disabled = true;
	  document.getElementById("btnTres").disabled = false;
	  document.getElementById("btnCuatro").disabled = false;
	  document.getElementById("btnCinco").disabled = false;
	  window.location.hash = "form2";  
  }
  
  function SeleccionarTres() {
	  //MOSTRAMOS NUESTRO PANEL Y ESCONDEMOS LOS OTROS.
	  document.getElementById("form1").style.display = "none";
	  document.getElementById("form2").style.display = "none";
	  document.getElementById("form3").style.display = "block";
	  document.getElementById("form4").style.display = "none";
	  document.getElementById("form5").style.display = "none";

	  //CAMBIAMOS DE COLOR LOS BOTONES.
	  document.getElementById("btnUno").classList.remove("btn", "btn-primary");
	  document.getElementById("btnUno").classList.add("btn", "btn-secondary");
	  document.getElementById("btnDos").classList.remove("btn", "btn-primary");
	  document.getElementById("btnDos").classList.add("btn", "btn-secondary");
	  document.getElementById("btnTres").classList.remove("btn", "btn-secondary");
	  document.getElementById("btnTres").classList.add("btn", "btn-primary");
	  document.getElementById("btnCuatro").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCuatro").classList.add("btn", "btn-secondary");
	  document.getElementById("btnCinco").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCinco").classList.add("btn", "btn-secondary");
	  //HABILITAMOS LOS OTROS Y DESHABILITAMOS EL ACTUAL.
	  document.getElementById("btnUno").disabled = false;
	  document.getElementById("btnDos").disabled = false;
	  document.getElementById("btnTres").disabled = true;
	  document.getElementById("btnCuatro").disabled = false;
	  document.getElementById("btnCinco").disabled = false;
	  window.location.hash = "form3";
  }
  
  function SeleccionarCuatro() {
	  //MOSTRAMOS NUESTRO PANEL Y ESCONDEMOS LOS OTROS.
	  document.getElementById("form1").style.display = "none";
	  document.getElementById("form2").style.display = "none";
	  document.getElementById("form3").style.display = "none";
	  document.getElementById("form4").style.display = "block";
	  document.getElementById("form5").style.display = "none";
	  //CAMBIAMOS DE COLOR LOS BOTONES.
	  document.getElementById("btnUno").classList.remove("btn", "btn-primary");
	  document.getElementById("btnUno").classList.add("btn", "btn-secondary");
	  document.getElementById("btnDos").classList.remove("btn", "btn-primary");
	  document.getElementById("btnDos").classList.add("btn", "btn-secondary");
	  document.getElementById("btnTres").classList.remove("btn", "btn-primary");
	  document.getElementById("btnTres").classList.add("btn", "btn-secondary");
	  document.getElementById("btnCuatro").classList.remove("btn", "btn-secondary");
	  document.getElementById("btnCuatro").classList.add("btn", "btn-primary");
	  document.getElementById("btnCinco").classList.remove("btn", "btn-primary");
	  document.getElementById("btnCinco").classList.add("btn", "btn-secondary");
	  //HABILITAMOS LOS OTROS Y DESHABILITAMOS EL ACTUAL.
	  document.getElementById("btnUno").disabled = false;
	  document.getElementById("btnDos").disabled = false;
	  document.getElementById("btnTres").disabled = false;
	  document.getElementById("btnCuatro").disabled = true;
	  document.getElementById("btnCinco").disabled = false;
	  window.location.hash = "form4";
  }

  function SeleccionarCinco() {
	//MOSTRAMOS NUESTRO PANEL Y ESCONDEMOS LOS OTROS.
	document.getElementById("form1").style.display = "none";
	document.getElementById("form2").style.display = "none";
	document.getElementById("form3").style.display = "none";
	document.getElementById("form4").style.display = "none";
	document.getElementById("form5").style.display = "block";
	//CAMBIAMOS DE COLOR LOS BOTONES.
	document.getElementById("btnUno").classList.remove("btn", "btn-primary");
	document.getElementById("btnUno").classList.add("btn", "btn-secondary");
	document.getElementById("btnDos").classList.remove("btn", "btn-primary");
	document.getElementById("btnDos").classList.add("btn", "btn-secondary");
	document.getElementById("btnTres").classList.remove("btn", "btn-primary");
	document.getElementById("btnTres").classList.add("btn", "btn-secondary");
	document.getElementById("btnCuatro").classList.remove("btn", "btn-primary");
	document.getElementById("btnCuatro").classList.add("btn", "btn-secondary");
	document.getElementById("btnCinco").classList.remove("btn", "btn-secondary");
	document.getElementById("btnCinco").classList.add("btn", "btn-primary");
	//HABILITAMOS LOS OTROS Y DESHABILITAMOS EL ACTUAL.
	document.getElementById("btnUno").disabled = false;
	document.getElementById("btnDos").disabled = false;
	document.getElementById("btnTres").disabled = false;
	document.getElementById("btnCuatro").disabled = false;
	document.getElementById("form5").disabled = true;
	window.location.hash = "btnDos";
}