<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
        protected $table = 'plans';

        protected $fillable = [
            'velocidad',
            'precio',
        ];
        public function solicitudes()
        {
            return $this->hasMany(Solicitud::class);
        }
}
