<?php

namespace Bbr\HomeBundle\Entity;

class User{
	protected $name;
	protected $firstName;

	protected $address;
	protected $zip;
	protected $city;

	protected $email;
	protected $password;

	public function __set( $name, $value){
		if(property_exists($this, $name)) {
			$this->$name = $value;
		}
	}

	public function __get($name){
		if(property_exists($this, $name)) {
			return $this->$name;
		}
	}
}
