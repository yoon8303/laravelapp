<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

   protected $guarded = array('id');
  
    public static $rules = array(
       'person_id' => 'required',
       'title' => 'required',
       'message' => 'required'
   );

// 新たにメソッドを追加
public function person()
{
   return $this->belongsTo('App\Person');
}

// 既にあるメソッドを修正
public function getData()
{
   return $this->id . ': ' . $this->title . ' (' 
      . $this->person->name . ')';
}

}

