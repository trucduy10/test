<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airports extends Model
{
    use HasFactory;
    protected $table = 'airports';
    protected $primaryKey = 'iata_code';
    protected $fillable = ['iata_code','name', 'city'];
    public $timestamps = true;
}
