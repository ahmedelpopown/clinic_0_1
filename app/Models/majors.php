<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class majors extends Model
{
    use HasFactory;
    protected $fillable =['name','image'];
    public function doctors()
    {
        return $this->belongsTo(doctors::class);
    }
    
    public function reservations()
    {
        return $this->hasMany(reservations::class);
    }
}
