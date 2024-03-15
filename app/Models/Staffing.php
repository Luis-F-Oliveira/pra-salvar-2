<?php

namespace App\Models;

use App\Models\Information;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffing extends Model
{
    use HasFactory;

    protected $fillable = ['date'];

    public function information() 
    {
        return $this->hasMany(Information::class);
    }
}
