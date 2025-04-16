<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MaterialService;

class MaterialController extends Controller
{
    protected $materialService;

    public function __construct(MaterialService $materialService)
    {
        $this->materialService = $materialService;
    }

    public function index()
    {
        $materials = $this->materialService->getAllMaterials();
        return view('materials.index', compact('materials'));
    }
}
/* code author: AADYA PARASAR */
