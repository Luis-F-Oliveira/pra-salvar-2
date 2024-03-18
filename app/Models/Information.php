<?php

namespace App\Models;

use App\Models\Staffing;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'matriculation',
        'name',
        'gender',
        'admission_date',
        'cpf',
        'birth_date',
        'rg',
        'issue_rg',
        'uf_rg',
        'mother_name',
        'father_name',
        'birthplace',
        'nationality',
        'nationality_uf',
        'blood_type',
        'identification_number',
        'issue_date',
        'staffing_id',
    ];

    protected $hidden = [
        'staffing_id',
        'created_at',
        'updated_at'
    ];

    public function staffing()
    {
        return $this->belongsTo(Staffing::class);
    }
}
