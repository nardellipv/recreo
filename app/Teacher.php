<?php

namespace recreo;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name', 'lastname', 'dni', 'space', 'level', 'phone', 'email', 'first_time',
    ];

    public function school()
    {
        return $this->belongto(School::class);
    }
}
