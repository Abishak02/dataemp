<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe_date extends Model
{
    use HasFactory;
    protected $table ='employe_date';
    protected $primaryKey = 'id'; 
    protected $fillable  = ['id','name', 'email', 'phone', 'gender'];
    public $timestamps = false;
}
