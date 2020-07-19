<?php

namespace App\Repositories;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesRepository extends Controller
{
    public function getAll()
    {
        $result = Category::all();

        return $result;
    }
}
