<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'project_title',
        'department_office',
        'project_description',
        'person_in_charge',
        'project_date',
    ];

    public function documentInputs()
    {
        return $this->hasMany(DocumentInput::class); #one to many relation to document inputs
    }
}
