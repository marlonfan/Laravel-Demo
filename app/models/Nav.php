<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class nav extends Eloquent {
	protected $table = 'nav';
	protected $guarded = [];
	public $timestamps = false;
}