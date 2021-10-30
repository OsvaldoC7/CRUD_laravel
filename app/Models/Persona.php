<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model {

    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['nombre',
                            'user_id',
                            'apellido_paterno', 
                            'apellido_materno',
                            'codigo',
                            'correo',
                            'telefono'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function areas() {
        return $this->belongsToMany(Area::class);
    }

}