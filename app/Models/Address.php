<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'address';
    public $timestamps = false;

    protected $fillable = [
        'address',
        'post_code',
        'city_name',
        'country_name'
    ];

    public function person()
    {
        return $this->belongsTo(Person::class, 'id', 'person_id');
    }
}
