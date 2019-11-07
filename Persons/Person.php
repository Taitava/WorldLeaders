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
	
	/**
	 * Can be used to express external references to certain sentences said by a given Person.
	 *
	 * @param string $index A short indicator like "[1]" to tell ehich part of the text this reference is related to.
	 * @param string $source Can be a URL pointing to a webpage as the source of information. Can also be for example a book (author name, book name, publisher name, year and page number).
	 * @param string $date_checked A date when the source was read or last checked.
	 */
	public function reference($index, $source, $date_checked)
	{
	
	}
}