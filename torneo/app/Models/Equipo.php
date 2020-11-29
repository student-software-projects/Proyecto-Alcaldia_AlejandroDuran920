<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Equipo extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table='equipos';
    protected $fillable=[
        'nombre','logo','localidad_id'
    ];
    public function localidad(){
        return $this->belongsTo(Localidad::class);
    }
    public function jugador (){
        return $this->hasMany(Jugador::class);
    }
}
