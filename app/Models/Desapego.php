<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
class Desapego extends Model
{
    // protected $fillable = ['title', 'description'];
=======
class Desapego extends Model{

    use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'ofertaSegmento', 'ofertaTipo', 'ofertaEstProduto', 'ofertaTitulo', 'ofertaDescr', 'ofertaPreco', 'ofertaEstado', 'ofertaCidade', 'ofertaBairro', 'imgProduto',
        ];
    }
>>>>>>> 5f6c14cf5a2c77f86e9180d8c4c4dbb27665c26c
}
