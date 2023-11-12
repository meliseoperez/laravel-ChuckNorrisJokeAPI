<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Chistes extends Model
{
    protected $table = 'chistes';
    protected $fillable=[
        'chiste',
        'categoria',
    ];

}
