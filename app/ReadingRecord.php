<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReadingRecord extends Model
{
    protected $fillable = ['book_id', 'user_id','comment',];
    public function book(){
        return $this->belongsTo('App\Book');
        }
        public function reader(){
            return $this->belongsTo('App\User');
            }
}
