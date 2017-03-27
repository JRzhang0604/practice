<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    //
    protected $fillable = ['title','body','user_id','last_user_id'];
}
