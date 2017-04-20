<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Dosen_MatakuliahRequest extends Request
{
	public function authorize()
	{
		return true;
	}

	public function rules()
    {
    	$validasi = [
    		'Dosen'=>'required',
            'Matakuliah'=>'required',
    	];
    	return $validasi;
    }
}