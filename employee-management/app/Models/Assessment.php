<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;
    protected $table = 'assessments';
    protected $primaryKey = 'assessment_id';

    protected $fillable = [
        'child_id',
        'date',
        'result',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
