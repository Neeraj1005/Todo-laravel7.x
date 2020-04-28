<?php

namespace App;

use App\Step;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function steps()
    {
        return $this->hasMany(Step::class);
    }
}
