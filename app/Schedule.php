<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id',
        'place_id',
        'start_at',
        'end_at',
        'constant_id_lateness',
        'constant_id_absence',
        'teacher_id',
        'planner_id',
    ];

    /**
     * Get the task of the schedule.
     */
    public function task() 
    {
        return $this->hasone('App\Task');
    }
    
    /**
     * Get the place of the schedule.
     */
    public function place() 
    {
        return $this->hasone('App\Place');
    }
    
    /**
     * Get the constant of the schedule.
     */
    public function constant() 
    {
        return $this->hasone('App\Constant');
    }
    
    /**
     * Get the teacher of the schedule.
     */
    public function teacher() 
    {
        return $this->hasone('App\User');
    }
    
    /**
     * Get the planner of the schedule.
     */
    public function planner() 
    {
        return $this->hasone('App\User');
    }
}
