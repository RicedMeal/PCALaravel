<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentInput extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'project_id',
        'input_name',
        'file_content',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class); #many to one relation to projects
    }
}
