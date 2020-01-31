<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable =['title', 'body'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function setTitleAtribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str::slug($value);
    }
}
