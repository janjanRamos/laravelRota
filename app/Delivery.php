<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['company','name','deliverysector','activity','institution','description','priority'];


    /**
     * Get the user that owns the task.
     */

}
