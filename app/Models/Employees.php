<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';
    protected $fillable = ['name', 'address', 'departement_id', 'gender', 'phone', 'email','is_active'];

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}

