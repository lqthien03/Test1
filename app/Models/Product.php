<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'images',
        'price',
        'category_id',
        'quantity',
        'status'
    ];
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
