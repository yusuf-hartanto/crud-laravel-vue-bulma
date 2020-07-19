<?php

namespace App\Repositories;

use App\Models\Sampah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampahRepository extends Controller
{
    public function getAll()
    {
        $result = Sampah::orderBy('id', 'DESC')->get();

        foreach ($result as $key => $val) {
            $result[$key]->category = $val->category;
        }

        return $result;
    }

    public function getSampah($id)
    {
    	$result = Sampah::where('id', $id)->first();

    	return $result;
    }
}
