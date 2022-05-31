<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductAttribute extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'attribute_1', 'attribute_2', 'attribute_3', 'product_id'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
