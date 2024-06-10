<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'attendance';

    // Primary key
    protected $primaryKey = 'attendance_id';

    // Fillable fields
    protected $fillable = [
        'employee_id',
        'date',
        'status',
    ];

    // Relasi dengan model Employee
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'employee_id');
    }
}
