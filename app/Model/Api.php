<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2016/12/3
 * Time: 13:13
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    protected $table = "privilege";

//    protected $guarded = ['*'];
    protected $fillable=['category_id','name','desc','route','head_img'];
}