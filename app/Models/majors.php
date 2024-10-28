<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class majors extends Model
{
    // 38
    use HasFactory;
    protected $table = 'majors'; 
    protected $primaryKey = 'id';  
    public $timestamps = true;

    public function doctors()
    {
        return $this->belongsTo(doctors::class);
    }
    
    public function reservations()
    {
        return $this->hasMany(reservations::class);
    }
}
