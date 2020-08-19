<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProblemasController extends Controller
{

	public function Resolve(Request $request){
		//return $request;
		$objestrofa =new Estrofa_ReordenadaController();
		$objrima =new RimaController();
		$op = $request["op"];
		$ans = "";
		//return $request["parrafo"];
		switch ($op) {
					case 1:
					   $ans=$objestrofa->solve($request);	
					break;
					case 2:
					   $ans=$objrima->solve($request);

					break;
					default:
					break;
		}
		return $ans;		
	
	}
    
}