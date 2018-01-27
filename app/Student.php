<?php

namespace recreo;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'lastname', 'dni', 'birth_date', 'phone', 'classroom', 'level', 'first_note', 'second_note', 'total_note',
        'first_time',
    ];

    public function school()
    {
        return $this->belongto(School::class);
    }
}
