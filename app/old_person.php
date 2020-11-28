<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Scopes\ScopePerson;

class Person extends Model
{
   protected $guarded = array('id');

   public static $rules = array(
      'name' => 'required',
      'mail' => 'email',
      'age' => 'integer|min:0|max:150'
   );

   // getDataは残しておく
   public function getData()
   {
      return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
   }
}

