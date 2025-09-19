<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    //
    use SoftDeletes, HasFactory;
    protected $table = 'items';
    protected $fillable = ['name', 'description', 'price', 'image', 'is_active','created_at', 'updated_at'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
