<?php


class Person
{
	/**
	 * Job titles and other positions of responsibilities.
	 *
	 * @var string[]
	 */
	public $badges = [];
	
	public function say($message)
	{
	
	}
	
	public function sayTo($target, $message)
	{
	
	}
	
	/**
	 * Most often called from the DonaldTrump class.
	 *
	 * @param $message
	 */
	public function tweet($message)
	{
	
	}
	
	/**
	 * @param Person|Area $to
	 * @return PhoneCall
	 */
	public function phoneCallTo($to)
	{
		return new PhoneCall($this, $to);
	}
}