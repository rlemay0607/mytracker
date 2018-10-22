<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mfile extends Model
{
    protected $fillable = [
        'name', 'description', 'version', 'meeting_id', 'file',
    ];
    public function meeting()
    {
        return $this->belongsTo('App\Meeting');
    }

}
