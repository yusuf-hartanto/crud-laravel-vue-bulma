<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\SampahService;
use App\Http\Controllers\Controller;
use App\Repositories\{CategoriesRepository, SampahRepository};

class SampahController extends Controller
{
    protected $sampahService;

    function __construct() {
        $this->sampahService = new SampahService;
    }

    public function category()
    {
        try {
        	$category = (new CategoriesRepository)->getAll();

            if ($category->isEmpty()) {
                return response()->json([
                    'message' => 'Data not found'
                ], 404);
            }

            return response()->json($category, 200);
        } catch (Exception $e) {
            return $this->error($e, 400);
        }
    }

    public function sampah()
    {
        try {
            $sampah = (new SampahRepository)->getAll();

            if ($sampah->isEmpty()) {
                return response()->json([
                    'message' => 'Data not found'
                ], 404);
            }

            return response()->json($sampah, 200);
        } catch (Exception $e) {
            return $this->error($e, 400);
        }
    }

    public function store(Request $request)
    {
        try {
        	$sampah = $this->sampahService->store($request->all());

            return response()->json(['message' => 'Data created successfully'], 200);
        } catch (Exception $e) {
            return $this->error($e, 400);
        }
    }

    public function edit($id)
    {
        try {
            $category = (new CategoriesRepository)->getAll();
            $sampah = (new SampahRepository)->getSampah($id);

            if (empty($sampah)) {
                return response()->json([
                    'message' => 'Data not found'
                ], 404);
            }

            $data = [
                'sampah' => $sampah,
                'category' => $category
            ];

            return response()->json($data, 200);
        } catch (Exception $e) {
            return $this->error($e, 400);
        }
    }

    public function update(Request $request, $id)
    {
        $sampah = (new SampahRepository)->getSampah($id);

        if (empty($sampah)) {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }

        try {
            $result = $this->sampahService->setModel($sampah)->update($request->all());

            return response()->json(['message' => 'Data updated successfully'], 200);
        } catch (Exception $e) {
            return $this->error($e, 400);
        }
    }

    public function destroy($id)
    {
        $sampah = (new SampahRepository)->getSampah($id);

        if (empty($sampah)) {
            return response()->json([
                'message' => 'Data not found'
            ], 404);
        }
        
        try {
            $result = $this->sampahService->setModel($sampah)->delete();
            
            return response()->json(['message' => 'Data deleted successfully'], 200);
        } catch (Exception $e) {
            return $this->error($e, 400);
        }
    }
}
