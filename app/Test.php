<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    //
        //table name
        protected $table='test';
        //primary key
        public $primaryKey='id';

        // updated_at created_at fields
        public $timestamps=true;
        
        // public function user(){
        //     return $this->belongsTo('App\User');
        // }

}
