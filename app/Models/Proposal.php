<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'hours'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
