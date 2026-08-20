<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
        protected $table = 'solicituds';
        
        protected $fillable = [
            'plan_id',
            'domicilio',
            'nombre',
            'stock',
        ];

        public function plan()
        {
            return $this->belongsTo(Plan::class);
        }
}
