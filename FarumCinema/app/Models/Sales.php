<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vietos;

class Sales extends Model
{
    use HasFactory;
    protected $fillable=['pavadinimas'];
    public function vietos(){
        return $this->hasMany(Vietos::class);

    }
}
