<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'hire_date',
        'position',
        'department',
        'salary',
        'area_id', // Agregamos la clave foránea
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    
}
