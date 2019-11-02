<?php


class KimJongUn extends Person
{
	public $badges = [
		'3rd Supreme Leader of North Korea',
		'Chairman of the Workers\' Party of Korea',
		'Chairman of the State Affairs Commission',
		'First Secretary of the Workers\' Party of Korea',
		'First Chairman of the National Defence Commission',
		'Commander-in-Chief of the Armed Forces of the Democratic People\'s Republic of Korea',
	];
	
	// public $birthday = '1983-01-08'; // Source: South Korea records
	public $birthday = '1984-01-08'; // Source: USA records
	
	private function planNuclearBomb()
	{
	
	}
	
	private function hireNuclearBombSpecialists()
	{
	
	}
	
	private function gatherNuclearBombRawMaterials()
	{
	
	}
	
	public function sayWeWantToEnsureWorldPeace($with_nuclear_bomb = true)
	{
	
	}
	
	private function constructNuclearBombFactory()
	{
	
	}
	
	private function buildNuclearBomb()
	{
	
	}
	
	public function testNuclearBomb()
	{
	
	}
	
	private function hangNuclearBombSpecialistsAndHireNewOnes()
	{
	
	}
	
	/**
	 * // TODO: Figure out how to complete the implementation of this method.
	 *
	 * @param Area $send_to
	 * @return bool
	 */
	public function launchNuclearBomb(Area $send_to)
	{
		switch ($send_to)
		{
		case NorthKorea::class:
			return false;
		case Japan::class:
			return true;
		case USA::class:
			throw new OutOfRangeException('Dunno yet how to reach there');
		}
	}
	
	private function cancelNuclearBombProgram()
	{
		throw new BadFunctionCallException('NEVER!');
	}
	
	public function endOfTheWorld()
	{
		die();
	}
	
}