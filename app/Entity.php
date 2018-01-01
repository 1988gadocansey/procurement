<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Entity extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'people';

    protected $primaryKey="id";
    protected $guarded = ['id'];

    public function districts(){
        return $this->belongsTo('App\District', "district","id");
    }


}