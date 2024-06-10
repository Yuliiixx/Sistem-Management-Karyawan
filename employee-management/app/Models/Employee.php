<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'employees';

    // Primary Key
    protected $primaryKey = 'employee_id';

    // Kolom yang dapat diisi
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'position',
        'basic_salary',
        'date_joined',
    ];

    // Cast attributes
    protected $casts = [
        'date_joined' => 'date',
        'basic_salary' => 'decimal:2',
    ];
}
