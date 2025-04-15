<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['material_id', 'date', 'quantity'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}

/* Code Author: AADYA PARASAR */

