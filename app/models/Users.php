<?php

class Users extends Illuminate\Database\Eloquent\Model {

    public $name;

    public $timestamps = [];

    protected $fillable = ['username','email'];
}