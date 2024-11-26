<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'graduation_year', 'tech_stack', 
        'interests', 'certificates', 'user_image', 
        'projects', 'template'
    ];

    protected $casts = [
        'certificates' => 'array',
        'projects' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

