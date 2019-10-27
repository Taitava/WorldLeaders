<?php


class SukhoiSu34 extends RussianMilitaryAircraft
{
	/**
	 * TODO: Should this be a constant?
	 *
	 * @var bool
	 */
	private $transponderOn = false;
	
	/**
	 * @return bool Usually false
	 */
	public function isTransponderOn()
	{
		return $this->transponderOn;
	}
	
	/**
	 * @param bool $transponderOn Either true (recommended by multiple EU countries) or false (insisted by Vladimir)
	 */
	public function setTransponderOn($transponderOn)
	{
		$this->transponderOn = $transponderOn;
	}
	
	/**
	 * @return SukhoiSu34[] an array of 125 instances of Sukhoi Su-34
	 */
	public static function getAllInService()
	{
		$aircrafts = static::gatherItems(125);
		return $aircrafts;
	}
	
}