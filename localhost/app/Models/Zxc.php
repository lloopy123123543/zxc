<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Zxc extends Model
{
    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = null;

    protected $table = 'zxc';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
