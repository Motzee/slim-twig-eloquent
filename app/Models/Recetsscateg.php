<?php

namespace App\Models ;
 
use Illuminate\Database\Eloquent\Model ;
 
class Recetsscateg extends Model {
   protected $table = 'recetsscategs';
   protected $fillable = ['titre','affiche'];
}

?>