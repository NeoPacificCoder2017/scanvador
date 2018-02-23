<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'schedule_id', 
        'checked_at', 
        'status_id',
        'scanner_id',
        'regulated',
    ];

    /**
     * Get the user that owns the check.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the schedule that owns the check.
     */
    public function schedule()
    {
        return $this->belongsTo('App\Schedule');
    }

    /**
     * Get the status of the check.
     */
    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    /**
     * Get the planner of the check.
     */
    public function planner()
    {
        return $this->belongsTo('App\User');
    }
}
