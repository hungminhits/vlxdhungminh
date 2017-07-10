<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class News extends Model
{
    protected $table='news';
    public static function Load_ALL_News(){
    	$news=DB::table('news')->select();
    	return $news;
    }
}
