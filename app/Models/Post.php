<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //protected $table='rooms';  //to change the table name
    //primary key . Similary primary key attributes name can also be changed like room_id
    public $primaryKey='id'; 
    public $timestamps=true; //if we don't want the timestamps we can write false

}
