<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smtp extends Model
{

    use HasFactory;
    protected $fillable = array("site_name", "smtp_driver", "smtp_host", "smtp_port", "username", "password", "from_name", "encription", "from_mail");
}
