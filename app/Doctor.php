<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable {

	use Notifiable;

	protected $table = "doctors";

	protected $appends = ['name'];

	protected $fillable = [
		'first_name', 'email', 'password', 'last_name', 'phone_number', 'hospital_name', 'section', 'created_by', 'updated_by', 'image', 'about',
	];

	public function getNameAttribute() {
		return $this->first_name . ' ' . $this->last_name;
	}
}
