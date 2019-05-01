<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tender extends Model
{
    //
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tenders';

    protected $primaryKey="id";
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User', "user","id");
    }

}