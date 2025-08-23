<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['group_id', 'surname', 'name'];

    // Связь "Многие к одному" с моделью Group
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
