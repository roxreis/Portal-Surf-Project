<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


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

