<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 2016/11/14
 * Time: 21:41
 */
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    const DEBUG = 'debug';
    const ERROR = 'error';
    const EXCEPTION = 'exception';

    protected $table = 'log';
    
}