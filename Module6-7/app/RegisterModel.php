<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class RegisterModel extends Model
{
    use  Notifiable;
    protected $fillable=[
       
        'photo','firstname','lastname','username','email','password','gender','mobile','address'
     
    ];
    protected $table='tbl_registers';
}
