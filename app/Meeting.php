<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;
use Illuminate\Notifications\Notifiable;

class Meeting extends Model
{
    use Notifiable;
    use Actionable;

    protected $fillable = [
        'name', 'details', 'date', 'company_id',
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
    protected $casts = [
        'date' => 'date',
    ];
    public function mfiles()
    {
        return $this->hasMany('App\Mfile');
    }
    public function notes()
    {
        return $this->hasMany('App\Note');
    }
    public function todos()
    {
        return $this->hasMany('App\Todo');
    }
}
