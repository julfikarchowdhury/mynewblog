<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $primarykey = 'id';
    protected $fillable = ['author_name','user_id','title','slug','excerpt','body','image'];
}
