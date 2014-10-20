<?php

class Registro extends Eloquent
{
    protected $table      = 'cancion';
    protected $fillable   = array('ruta ','cantidad','nombre','partido');
    protected $guarded    = array('id');
    public    $timestamps = false;
}
