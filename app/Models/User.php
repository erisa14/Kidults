<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'email',
        'negozio', 
        'lastname', 
        'date', 
        'cellulare',
        'gender',
        'indirizzo',
        'nr_civico',
        'cap',
        'provinca',

    ];
    

   
    protected $hidden = [
        'remember_token',
    ];

    
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }



    public function choices()
    {
        return $this->belongsToMany(Interessi::class, 'user_interessi');
    }
}
