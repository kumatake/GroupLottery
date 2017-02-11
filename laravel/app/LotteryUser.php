<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LotteryUser extends Model
{
    protected $fillable = [
      'name',
        'group_id',
        'fixed',
        'default_join',
        'default_view'
    ];
    //
}
