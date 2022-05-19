<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [

'name','description','minutes'


    ];

    public function question(){

        return $this->hasMany(Question::class);
    }


    public function storeQuiz($data){

return Quiz::create($data);


    }
}
