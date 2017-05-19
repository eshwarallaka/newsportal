<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table  = 'news_data';
	protected $primaryKey = 'news_id';
}
