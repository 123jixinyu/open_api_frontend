<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RelUserPrivilege extends Model
{
    protected $table = 'rel_user_privilege';

    protected $fillable = ['user_id', 'privilege_id'];
}