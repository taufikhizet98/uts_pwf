<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'expired_at',
        'modified_by'
    ];

    // Relationship with User model for modified_by
    public function modifier()
    {
        return $this->belongsTo(User::class, 'modified_by');
    }

    // Relationship with Category model for category_id
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
