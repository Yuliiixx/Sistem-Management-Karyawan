<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;
    protected $table = 'children';
    protected $primaryKey = 'child_id';

    protected $fillable = [
        'name',
        'birthdate',
        'gender',
        'parent_name',
        'address',
        'phone',
        'email',
        'package_id',
    ];

    public function package()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
