<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string  $name
 * @property boolean $completed
 */
class Tasks extends Model
{
    protected $table = 'tasks';

    public $timestamps = false;
}
