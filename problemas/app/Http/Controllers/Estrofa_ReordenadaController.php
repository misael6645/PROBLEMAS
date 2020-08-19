<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Estrofa_ReordenadaController extends Controller
{
    
	public function solve(Request $request){
		$parrafos = $request["parrafo"];
		//return $vector;
		$canti=self::eliminar($parrafos);
		
		$vector=self::introducir_en_vector($canti, $parrafos);
		
        
        $cant=count($vector);

        $vector=self::ordenar_versos($vector,$cant);
        //return $vector;
        $answer=array();
        $prueba=array();
        for($i=0;$i<count($vector);$i++){
        	for($k=0;$k<count($vector[$i]);$k++){
        		 $parrafo_cad=array();
        	     $aux="";
                 for($s=strlen($vector[$i][$k])-1;$s>=0;$s--){
                 	if($vector[$i][$k][$s]!=' '){
                 	    $aux=$aux.$vector[$i][$k][$s];
                    }else{
                 	    if(strlen($aux)>0){
                 		   $cad = strrev($aux);
                 		   array_push($parrafo_cad,$cad);
                 	    }
                 	    $aux="";
                    }

                 }
                 if(strlen($aux)>0){
                    $cad = strrev($aux);
                    array_push($parrafo_cad,$cad);
                 }
                 array_push($answer,$parrafo_cad);

        	}
        	
        }
        
        $prueba =array("output"=>$answer);
        return $prueba;
		

	}
	
	public function eliminar($parrafos){
		$i=strlen($parrafos)-1;
		while($i>=0 && $parrafos[$i]=='@'){
              $i--;
		}
		$i++;
		return $i;
	}

	
	public function introducir_en_vector($canti, $parrafos){
		$aux="";
		$vector=array();
		for($i=0;$i<$canti-1;$i++){
			if($parrafos[$i]=="@" && $parrafos[$i+1]!="@"){
				array_push($vector, $aux);
				$aux="";
			}else{
               if($parrafos[$i]=="@" && $parrafos[$i+1]=="@"){
               	  array_push($vector,$aux);
               	  $aux="";
               	  while($parrafos[$i]=="@"){
               	  	 $i++;
               	  }
               	  $i--;
               	  array_push($vector,"misael66");
               }else{
               	   $aux=$aux.$parrafos[$i];
               }
			}
		}
		$aux=$aux.$parrafos[$canti-1];
		array_push($vector,$aux);
		return $vector;


	}
	

	public function ordenar_versos($vector, $cant){
        $answer=array();
        $ora=array();
		for($i=0;$i<$cant;$i++){
          if($vector[$i]!="misael66"){
              array_push($ora,$vector[$i]);
          }else{
             usort($ora, function($a, $b) {
             return strlen($b) - strlen($a);
             });
             array_push($answer,$ora);
             array_push($answer,["misael66"]);
             $ora=array();	
          }
        }
        usort($ora, function($a, $b) {
             return strlen($b) - strlen($a);});
       array_push($answer,$ora);
       return $answer;

	}
	
    
}