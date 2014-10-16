<?php

class Registro extends Eloquent
{
    protected $table      = 'registro';
    protected $fillable   = array('url ','format','nombre ','flag');
    protected $guarded    = array('id');
    public    $timestamps = false;
}
