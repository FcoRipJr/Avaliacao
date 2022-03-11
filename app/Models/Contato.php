<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pessoa;

class Contato extends Model
{
    use HasFactory;

    protected $table = 'contatos';
    protected $guarded = [];
    protected $dates = ['created_at', 'updated_at'];

    public function pessoa() 
    {
        return $this->belongsTo(Pessoa::class);
    }
}
