<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = ['category_id', 'name', 'opening_balance', 'is_deleted'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    public function getCurrentBalanceAttribute()
    {
        return $this->opening_balance + $this->transactions()->sum('quantity');
    }
}

/* Code Author: AADYA PARASAR */

