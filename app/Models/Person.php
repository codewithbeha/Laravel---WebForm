<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Status;

class Person extends Model
{
    protected $fillable = ['name','lname','phone','email','status_id'];

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
