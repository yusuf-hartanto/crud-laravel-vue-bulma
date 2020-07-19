<?php

namespace App\Services;

use App\Models\Sampah;

class SampahService
{
	protected $mdlSampah;

	function __construct() {
		$this->mdlSampah = new Sampah;
	}

    public function setModel(Sampah $sampah) : Object
    {
    	$this->mdlSampah = $sampah;

    	return $this;
    }

	public function store(array $data) : Sampah
	{
        $this->mdlSampah->name = $data['name'];
        $this->mdlSampah->category_id = $data['category_id'];
        $this->mdlSampah->save();

        return $this->mdlSampah;
	}

    public function delete() : bool
    {
        $this->mdlSampah->delete();

        return true;
    }
}