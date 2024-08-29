<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;

    protected $fillable = ['material_id', 'quantity'];

    public function material()
    {
        return $this->belongsTo(Material::class);
    }

    public function __toString()
    {
        return "Order of {$this->quantity} {$this->material->name}";
    }
}
