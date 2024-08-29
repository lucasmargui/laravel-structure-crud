<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    // Laravel automatically manages the created_at and updated_at fields, disable this functionality in your models to format it correctly when saving to the database

    public $timestamps = false;

    // This property specifies which attributes can be mass assigned.
    // This helps protect against unwanted mass assignment by only allowing these fields to be set via the create or update method.
    protected $fillable = [
        'name',
        'type',
        'description',
        'thickness',
        'width',
        'height',
        'color',
        'manufacturer',
        'manufacturer_code',
        'price',
    ];

    // Relacionamento one-to-many com 'Order'
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
