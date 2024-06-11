<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildClass extends Model
{
    use HasFactory;

    protected $table = 'child_classes';
    protected $primaryKey = 'child_class_id'; // Primary key column
    protected $fillable = [
        'child_id',
        'class_id',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }

    public function class()
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }
}
