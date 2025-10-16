<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        "name",
        "category_id",
        "stock",
        "restock_threshold",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
