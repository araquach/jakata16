<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'salon_id', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function votes()
    {
        return $this->hasMany('App\Superstylist', 'voter_id');
    }
    
    public function votesCount()
    {
      return $this->hasOne('App\Superstylist', 'voter_id')
        ->selectRaw('voter_id, count(*) as aggregate')
        ->groupBy('voter_id');
    }
    
    public function getVotesCountAttribute()
    {
      // if relation is not loaded already, let's do it first
      if ( ! array_key_exists('votesCount', $this->relations)) 
        $this->load('votesCount');
     
      $related = $this->getRelation('votesCount');
     
      // then return the count directly
      return ($related) ? (int) $related->aggregate : 0;
    }
    
    public function superstylists()
    {
        return $this->hasMany('App\Superstylist');
    }
    
    public function customerservices()
    {
        return $this->hasMany('App\CustomerService');
    }
}
