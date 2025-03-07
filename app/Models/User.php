<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function Groups(){
        return $this->belongsToMany(Group::class);
    }
    public function Messages(){
        return $this->hasMany(Message::class , 'sender_id');
    }
    public function channels(){
        return $this->belongsToMany(chanel::class);
    }

    public function FavorateConversation(){
        return $this->belongsToMany(conversation::class);
    }

    public function contacts (){

        return $this->belongsToMany(User::class , 'contacts' , 'user_id1' , 'user_id2');

    }

    public function business(){
        return $this->belongsTo(business::class , 'business_id');
    }

}
