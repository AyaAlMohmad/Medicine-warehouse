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
}
