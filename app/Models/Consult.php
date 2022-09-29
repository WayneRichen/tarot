<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Veelasky\LaravelHashId\Eloquent\HashableId;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consult extends Model
{
    use HashableId;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['cards', 'question', 'answer', 'ip', 'user_agent'];
}
