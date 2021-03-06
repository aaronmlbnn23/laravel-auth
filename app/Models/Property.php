<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Property extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tdId',
        'ownerId',
        'name',
        'address',
        'classification',
        'assessedValue',
        'coordinates,'
    ];

    
   
}
