<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class District extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'districts';

    protected $primaryKey="id";
    protected $guarded = ['id'];

    public function regions(){
        return $this->belongsTo('App\Region', "region","id");
    }

}