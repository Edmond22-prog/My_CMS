document.getElementById("confirmation").addEventListener("input", function(){
	var paragrapheErreur= document.getElementById("erreur");
    if(this.value != document.getElementById("mdp").value){
		/* paragrapheErreur.style = "color : 'red'"; */
		paragrapheErreur.innerHTML ="Les deux mots de passes sont incompatibles";
	}else{
		/* paragrapheErreur.style = "color : 'green'" */;
		paragrapheErreur.innerHTML= "Correct"}
});

/* document.forms["inscription"].addEventListener("submit", function(e){
	
	
	var erreur;
	var inputs = this; //ou document.getElementsByTagName("input");
	
	for(var i = 0; i < inputs.length; i++){
		if(!inputs[i].value){erreur = "veuillez renseigner tous les champs";}
	}
	
	
	if(erreur){
		 e.preventDefault();
		 document.getElementById("erreur").innerHTML = erreur;
		 return false;
	 }else{
		 alert('formulaire envoyé!');		console.log(inputs[i]);

	 } */


//document.getElementById("inscription").addEventListener("submit", function(e){
	
	
//	var erreur;
//	var inputs = document.getElementsByTagName("input");
	
//	for(var i = 0; i < inputs.length; i++){
//		if(!inputs[i].value){erreur = "veuillez renseigner tous les champs";}
//	}
	
	
//	 if(erreur){
//		 e.preventDefault();
		
//		 return false;
//	}else{
//		 alert('formulaire envoyé!'); }		


//---------------------------------------------------------------------------------------

	//---------------------------------------------------------methode2-----------------------
	
	//var nom1 = document.getElementById("nom1");
	//var email = document.getElementById("email");
	//var confirmation = document.getElementById("confirmation");
	//var mdp = document.getElementById("mdp");
	
	 //if(!mdp.value){
		// erreur = "Entrer le mot de passe";
	 //}
	 
	  //if(!confirmation.value){
		// erreur = "confirmer  l'email";
	 //}
	  //if(!email.value){
		// erreur = "Entrer l'email";
	 //}
	  
	 //if(!nom1.value){
		// erreur = "Entrer un nom";
	 //}
	 
	 //if(erreur){
		// e.preventDefault();
		 //document.getElementById("erreur").innerHTML = erreur;
		 //return false;
	 //}else{
		// alert('formulaire envoyé!');
		 //}
	 
//});