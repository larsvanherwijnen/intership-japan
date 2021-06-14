<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nationality',
        'livingIn',
        'fieldOfStudies',
        'graduated',
        'currentlyStudying',
        'nativeLanguages',
        'secondsLanguages',
        'seekingInternship',
        'openForEmployment',
        'about',
        'image'
    ];

    public function user(){
        return $this->hasOne(User::class);
    }
}
