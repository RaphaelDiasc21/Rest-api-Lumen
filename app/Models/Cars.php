<?php

    namespace App\Models;
    use Illuminate\Database\Eloquent\Model;

    class Cars extends Model
    {
        protected $table = 'cars';

        protected $fillable = [
            'nome',
            'descricao',
            'data'
        ];

        protected $casts = [
            'date' => 'Timestamp'
        ];

        public $timestamps = false; 
    }