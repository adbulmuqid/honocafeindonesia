<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleryModels extends Model
{
    use HasFactory;
    protected $table ='galery';
    protected $fillable =['judul','deskripsi','image'];
}
