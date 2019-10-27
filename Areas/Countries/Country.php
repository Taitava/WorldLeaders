<?php


class Country extends Area
{
	public $population;
	
	/**
	 * @var Person
	 */
	public $president;
	
	/**
	 * @var Person
	 */
	public $king;
	
	/**
	 * @var Person
	 */
	public $dictator;
	
	public function parliament()
	{
		return new Parliament();
	}
}