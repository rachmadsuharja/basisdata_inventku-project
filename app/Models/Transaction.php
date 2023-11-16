<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = "transactions";
    protected $fillable = ['name','email','no_hp','stock'];

    public function item() {
        return $this->belongsTo(Item::class);
    }
}
