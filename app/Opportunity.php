<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    protected $table = 'opportunities';

    protected $primaryKey="id";
    protected $guarded = ['id'];
}
