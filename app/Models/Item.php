<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = "items";
    protected $fillable = ['code','name','category_id','unit','stock','price','image','item_description'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
