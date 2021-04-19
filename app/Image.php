<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Image extends Model
{
    public $timestamps = false;
    protected $table = "image";
	protected $fillable = ["file_name"];
}
