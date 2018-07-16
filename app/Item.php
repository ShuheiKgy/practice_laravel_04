<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Item
 *
 * @property-read \App\User $users
 * @mixin \Eloquent
 */
class Item extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
