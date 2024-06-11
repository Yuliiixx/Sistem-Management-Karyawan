<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $table = 'reports';
    protected $primaryKey = 'report_id';

    protected $fillable = [
        'child_id', 'date', 'description'
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
