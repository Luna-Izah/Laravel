<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    
	protected $fillable=['nome']; 

/**
*representa a relação com o estado 
*Antes de salvar a cidade, devemos associar o estado 
* usando $cidade->estado()->associate($estado) 
*para desassociar pode utilizar dissociate(...)
*/

	public function estado(){
		
		return $this->belongsTo('App\Estado'); 
		
	}

}
