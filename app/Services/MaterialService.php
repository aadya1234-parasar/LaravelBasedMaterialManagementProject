<?php

namespace App\Services;

use App\DAO\MaterialDAO;

class MaterialService
{
    protected $materialDAO;

    public function __construct(MaterialDAO $materialDAO)
    {
        $this->materialDAO = $materialDAO;
    }

    public function getAllMaterials()
    {
        return $this->materialDAO->fetchAll();
    }
}

// code author: AADYA PARASAR
