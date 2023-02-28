<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sales;

class Pastatas extends Model
{

    use HasFactory;
    protected $fillable=['miestas'];
    public function sales(){
        return $this->hasMany(Sales::class);

    }
}
