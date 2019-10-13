<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'body'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id', 'user_id','created_at','updated_at'
    ];
     

    /**
     * This is relation model
     *
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
