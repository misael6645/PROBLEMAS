<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RimaController extends Controller{

	public function solve(Request $request){
		$objestrofa = new Estrofa_reordenadaController();
		$parrafos = $request["parrafo"];
		$cant =$objestrofa->eliminar($parrafos);

		$vector =$objestrofa->introducir_en_vector($cant, $parrafos);
        $tam = count($vector);
        $rima=array();
        $answer=array();
        array_push($vector,"misael66");
        //return 1;
		for($i=0;$i<$tam+1;$i++){

            if($vector[$i]=="misael66"){
                 //return "aqui1";
                 $ok =self::ispareado($rima);
                 //return "aqui2";
                 $ok2=self::isterceto($rima);
                 $ok3=self::iscuarteto($rima);
                 $ok4=self::iscuarteta($rima);
                 $ok5=self::isseguidilla($rima);
                 $ok6=self::iscuadernavia($rima);
                 $rima=array();
                 if($ok==1){
                   array_push($answer, "PAREADO");
                   continue;
                 }
                 if($ok2==1){
                 	array_push($answer, "TERCETO");
                 	continue;
                 }
                 if($ok6==1){
                 	array_push($answer, "CUADERNA VIA");
                 	continue;
                 }
                 if($ok3==1){
                    array_push($answer, "CUARTETO");
                    continue;
                 }
                 if($ok4==1){
                    array_push($answer, "CUARTETA");
                    continue;
                 }
                 if($ok5==1){
                 	array_push($answer, "SEGUIDILLA");
                 	continue;
                 }
                 array_push($answer, "DESCONOCIDO");


            }else{
            	//return $vector;
            	array_push($rima, $vector[$i]);
            }
		}
		$prueba =array("output"=>$answer);
        return $prueba;
	}
    public function si_riman($verso1, $verso2){
		    $i=strlen($verso1)-1;
		    $j=strlen($verso2)-1;
		    while($j>=0 && $i>=0){
		    	if(ctype_alpha($verso1[$i]) && ctype_alpha($verso2[$j])){
                    $aux=0; $cont=0;
	    			while($verso1[$i]==$verso2[$j]){
	    				$cont++;
	    				$ok2 =self::esvocal($verso2[$j]);
	    				if($ok2==1)$aux++;
	    				$i--; $j--;
	    				if($aux==2)return 1;
	    			}
	    			if($cont>=3 && $aux>=2)return 1;
	    			return 0;
		    	
		    		$i--; $j--;
		    	}else{
		    		if(!ctype_alpha($verso1[$i]) && !ctype_alpha($verso2[$j])){
		    			$i--; $j--;
		    		}else{
		    			if(!ctype_alpha($verso1[$i]))$i--;
		    			else $j--;
		    		}
		    	}
		    }
		    return 0;

    }
    public function si_rimana($verso1, $verso2){
		    $i=strlen($verso1)-1;
		    $j=strlen($verso2)-1;
		    while($j>=0 && $i>=0){
		    	if(ctype_alpha($verso1[$i]) && ctype_alpha($verso2[$j])){
                    $aux=0; $cont=0;
	    			while($verso1[$i]==$verso2[$j]){
	    				$cont++;
	    				$ok2 =self::esvocal($verso2[$j]);
	    				if($ok2==1)$aux++;
	    				$i--; $j--;
	    				//if($aux==2)return 1;
	    			}
	    			if($cont>=3 || $aux>=2)return 1;
	    			return 0;
		    	
		    		$i--; $j--;
		    	}else{
		    		if(!ctype_alpha($verso1[$i]) && !ctype_alpha($verso2[$j])){
		    			$i--; $j--;
		    		}else{
		    			if(!ctype_alpha($verso1[$i]))$i--;
		    			else $j--;
		    		}
		    	}
		    }
		    return 0;

    }
    public function ispareado($rima){
		if(count($rima)==2){
			$ok= self::si_riman($rima[0],$rima[1]);
			return $ok;

		}else return 0;
	}
	public function isterceto($rima){
		if(count($rima)==3){
			$ok=self::si_riman($rima[0],$rima[2]);
			$ok2=self::si_riman($rima[0],$rima[1]);
			if($ok==1 && $ok2==0)return 1;
			else return 0;


		}else return 0;

	}
	public function iscuarteto($rima){
		if(count($rima)==4){
			$ok=self::si_riman($rima[0],$rima[3]);
			$ok2=self::si_riman($rima[1],$rima[2]);
			if($ok==1 && $ok2==1)return 1;
			else return 0;

		}else return 0;
	}
	public function iscuarteta($rima){
		if(count($rima)==4){
			$ok=self::si_riman($rima[0],$rima[2]);
			$ok2=self::si_riman($rima[1],$rima[3]);
			if($ok==1 && $ok2==1)return 1;
			else return 0;

		}else return 0;
	
    }
    public function isseguidilla($rima){
		if(count($rima)==4){
			$ok=self::si_rimana($rima[1],$rima[3]);
			$ok2=self::si_rimana($rima[1],$rima[2]);
			$ok3=self::si_rimana($rima[0],$rima[1]);
			if($ok==1 && $ok2==0 && $ok3==0)return 1;
			else return 0;

		}else return 0;
	
    }
    public function iscuadernavia($rima){
		if(count($rima)==4){
			$ok=self::si_riman($rima[1],$rima[0]);
			$ok2=self::si_riman($rima[0],$rima[2]);
			$ok3=self::si_riman($rima[0],$rima[3]);
			if($ok==1 && $ok2==1 && $ok3==1)return 1;
			else return 0;

		}else return 0;
	
    }
	public function esvocal($letra){
		if($letra=='a' || $letra=='e' || $letra=='i' || $letra=='o' || $letra=='u' || $letra=='A' || $letra=='E' || $letra=='I'|| $letra=='O' || $letra=='U' )return 1;
		else return 0;
	}

}