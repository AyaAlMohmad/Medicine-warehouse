<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends AppModel
{
    use HasFactory;
    public function category()  {
        return $this->belongsTo(Category::class);
        
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'orders');
    }
    public function usersFavorite()
    {
        return $this->belongsToMany(User::class, 'favorites');
    }
}
