<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverybackup extends Model
{
    protected $fillable = ['company','name','deliverysector','activity','institution','description','priority'];
}
