<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Actions\Actionable;
use Illuminate\Notifications\Notifiable;

class Cfile extends Model
{
    use Notifiable;
    use Actionable;

    protected $fillable = [
        'name', 'description', 'version', 'company_id', 'file',
    ];
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}
