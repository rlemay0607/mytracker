<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;
use Illuminate\Notifications\Notifiable;
use Silvanite\Brandenburg\Traits\HasRoles;
use Illuminate\Support\Facades\Gate;

class Company extends Model
{
    use Notifiable;
    use Actionable;
    use HasRoles;

    protected $fillable = [
        'name', 'address', 'city', 'state', 'zip_code', 'logo',
    ];
    public function users()
    {
        return $this->hasMany('App\User');
    }
    public function cfiles()
    {
        return $this->hasMany('App\Cfile');
    }

    public function meeting()
    {
        return $this->hasMany('App\Meeting');
    }
    public function note()
    {
        return $this->hasMany('App\Note');
    }
}
