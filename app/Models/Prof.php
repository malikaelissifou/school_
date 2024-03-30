<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    protected $fillable = ["nom","prenom","matiere_id"];
    use HasFactory;

    public function matiere(){
        return $this->belongsTo(Matiere::class);
    }
}
