<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2016/11/30
 * Time: 20:18
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $fillable=['name'];
}