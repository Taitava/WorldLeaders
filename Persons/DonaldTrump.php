<?php


class DonaldTrump extends Person
{
	/**
	 * @param int $count A number as high as possible
	 * @param string $unit Either 'tweets', 'phone calls' or 'press conferences'.
	 */
	public function beGreat($count, $unit)
	{
	
	}
	
	public function wasElectedForThePresidentOfTheUnitedStates()
	{
		return true;
	}
	
	public function onAfterPresidentialElection()
	{
		$this->beGreat(8, 'press conferences');
		$this->beGreat(55, 'phone calls');
		$this->beGreat(738, 'tweets');
	}
	
	public function onBeforePresidentialReElection()
	{
		$ukraine = new Ukraine;
		$this->phoneCallTo($ukraine->president)
		     	->talkAbout("Joe Biden")
		     	->talkAbout("Hunter Biden")
			->talkAbout("Russian interference in the 2016 United States elections - which didn't happen.")
			->talkAbout("Me")
			->listenForAWhile()
			->actuallyDontListen()
			->talkAbout("Joe Biden")
			->talkAbout("Joe Biden")
			->listenForAWhile()
			->say("Don't interrupt me!")
			->endCall()
		;
	}
	
	public function onAfterPresidentialReElection($election_result)
	{
		switch ($election_result)
		{
		case 'Donald Trump re-elected':
			$this->sayTo(JoeBiden::class, "Screw you!");
			unset_constant(WiseWordsBook::VERY_WISE_WORDS);
		break;
		case 'Joe Biden elected':
			$this->sayTo(JoeBiden::class, "Screw you!");
			$this->tweet("Fake news! Fake media! Fake results!");
			$this->sayTo(VladimirPutin::class, "Why didn't you vote for me?!?!");
		break;
		}
	}
}