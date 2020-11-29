<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table= 'jugadores';
    protected $fillable=[
        'nombres','apellidos','numero_camisa','apodo','equipo_id'
    ];
    public function equipo(){
        return $this->belongsTo(Equipo::class);
    }
}
