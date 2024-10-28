<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    use HasFactory;
    protected $table='doctors';
    
    protected $fillable = ['name', 'image', 'id_major'];

    public function reservation(){
        return $this->hasMany(reservations::class);
    }
    
    public function doctor(){
        return $this->belongsTo(majors::class);
    }
    
}
