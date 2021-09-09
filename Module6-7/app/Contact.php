<?php
namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Contact as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
class Contact extends Model
{
    use  Notifiable;
    protected $fillable=[
       
        'name','firstname','lastname','email','mobile','subject','message'
     
    ];
    protected $table='contacts';
}
