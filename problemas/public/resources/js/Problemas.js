function hacer_parrafos(){
	var parrafo= document.getElementById("textarea").value;
    var parrafo2 = parrafo.split("\n").join("@");
    console.log(parrafo2);
	var jsonRequest = {
		    op : 1, 
            parrafo : parrafo2
    }
    const XHR = new XMLHttpRequest();
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    XHR.open('POST','/controller', true);
    XHR.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    XHR.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    XHR.setRequestHeader('X-CSRF-TOKEN', token);
    var t=document.getElementById("textareaout");
    t.classList.add('encender');
    setTimeout(function(){Salir();},100);
    XHR.onreadystatechange = function(){
	    if(this.readyState == "4" && this.status =="200"){
	            var data= JSON.parse(this.responseText);
	            console.log(data);
	            var aux=data.output;
	            document.getElementById("textareaout").innerHTML="";
	            for(var i=0; i<aux.length;++i){
	            	var aux2=aux[i];
	            	var ok=0;
	            	for(var j=0; j<aux2.length;++j){
	            		if(aux2[j]=="misael66"){
	            			document.getElementById("textareaout").innerHTML+='\n';
	            			ok=1;
	            			break;
	            		}
	            		if(j==aux2.length-1)document.getElementById("textareaout").innerHTML+=aux2[j];
	            		else document.getElementById("textareaout").innerHTML+=aux2[j]+' ';
	                }
	                if(ok==0)document.getElementById("textareaout").innerHTML+='\n';
	            }

	    }else{
	    	console.log("error");
	    }
    }
     setTimeout(function(){XHR.send(JSON.stringify(jsonRequest));},800);
    //XHR.send(JSON.stringify(jsonRequest));
}
function hacer_rimas(){
	var parrafo= document.getElementById("textarea_rima").value;
    var parrafo2 = parrafo.split("\n").join("@");
	var jsonRequest = {
		    op : 2, 
            parrafo : parrafo2
    }
    const XHR = new XMLHttpRequest();
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    XHR.open('POST','/controller', true);
    XHR.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    XHR.setRequestHeader("Content-Type", "application/json; charset=UTF-8");
    XHR.setRequestHeader('X-CSRF-TOKEN', token);
    var t=document.getElementById("textareaout_rima");
    t.classList.add('encender');
    setTimeout(function(){Salir();},100);
    XHR.onreadystatechange = function(){
	    if(this.readyState == "4" && this.status =="200"){
	            var data= JSON.parse(this.responseText);
	            console.log(data);
	            var aux=data.output;
                console.log(aux);
                document.getElementById("textareaout_rima").innerHTML="";
                for(var i=0; i<aux.length;++i){
                    document.getElementById("textareaout_rima").innerHTML+=aux[i]+"\n";

                }

	    }else{
	    	console.log("error");
	    }
    }
     setTimeout(function(){XHR.send(JSON.stringify(jsonRequest));},800);

}
function  Salir() {
            swal(
                'Los Parrafos han sido Reordenados.',
                'prueba con otros parrafos.',
                'success'
            )
    
}