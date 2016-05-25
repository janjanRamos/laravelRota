<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrega extends Model
{
	protected $fillable = ['company','name','activity','institution','description','priority'];
}
