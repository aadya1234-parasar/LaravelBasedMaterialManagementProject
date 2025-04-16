<?php

namespace App\DAO;

use App\Models\Material;

class MaterialDAO
{
    public function fetchAll()
    {
        return Material::all();
    }
}

/* code author: AADYA PARASAR */
