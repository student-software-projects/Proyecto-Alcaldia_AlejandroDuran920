<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $table= 'localidades';
    protected $fillable=[
        'localidad'
    ];
    public function equipo (){
        return $this->hasMany(Equipo::class);
    }
}
