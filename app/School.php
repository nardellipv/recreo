<?php

namespace recreo;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $fillable = [
        'name', 'address', 'postal_code', 'phone', 'type', 'director1', 'director2', 'email', 'first_time', 'city_id', 'location_id',
    ];
    
    protected $guarded = [
        'email', 'city_id', 'location_id',
    ];

    public function users()
    {
        return $this->belongToMany(User::class);
    }

    public function students()
    {
        return $this->belongToMany(Student::class);
    }

    public function teachers()
    {
        return $this->belongToMany(Teacher::class);
    }

    public function city()
    {
        return $this->belongTo(City::class);
    }
}
