<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use File;


class Desapego extends Model{

    // use Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable =
        ['segment', 'typeEquipament', 'stateProduct', 'titleProduct', 'descriptionProduct', 'priceProduct', 'withdrawalState', 'withdrawalCity', 'withdrawalNeighborhood', 'imgProduct'];
        protected $guarded = ['id', 'created_at', 'update_at'];
        protected $table = 'desapego_produtos';

    
    }

