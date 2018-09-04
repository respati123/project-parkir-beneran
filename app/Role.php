<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name','created_at','created_by','modifier_at','modifier_by'
    ];

    public function permission(){

        return $this->belongsToMany(Permission::class);
    }
}
