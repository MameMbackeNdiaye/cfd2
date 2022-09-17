<?php

namespace App\Models;

use App\Models\User;
use App\Models\Theme;
use App\Models\Financement;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $fillable = array('codeProjet','users_id','themes_id','owners_id','commissions_id','cagnottes_id','contrats_id','articles_id','nom','description');
    protected $casts =[
        'created_at' => 'datetime:d-M-Y'
    ];

    use HasFactory;

    public function theme()
    {
        return $this->belongsTo(Theme::class, 'themes_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financement()
    {
        return $this->hasMany(Financement::class);
    }

}
