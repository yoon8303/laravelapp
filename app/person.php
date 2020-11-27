<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class person extends Model
{
    public function getData()
{
   return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
}
}
