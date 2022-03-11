<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contato;
use Carbon\Carbon;

class Pessoa extends Model
{
    use HasFactory;




    public function contatos()
    {
        return $this->hasMany(Contato::class);
    }
}
