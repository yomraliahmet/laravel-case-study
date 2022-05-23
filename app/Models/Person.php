<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = 'person';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'birthday',
        'gender'
    ];

    protected $casts = [
        'birthday' => 'date',
    ];

    protected function birthday(): Attribute {
        return Attribute::make(
            get: fn ($value) => \Carbon\Carbon::parse($value)->format("d.m.Y"),
        );
    }

    public function address()
    {
        return $this->hasOne(Address::class, 'person_id', 'id');
    }
}
