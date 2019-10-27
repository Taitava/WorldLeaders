<?php


class VladimirPutin extends Person
{
	/**
	 * @param int $count A number as high as possible
	 * @param string $unit Either 'hours', 'days', 'weeks', 'months' or "won't bother".
	 */
	public function beLate($count, $unit)
	{
	
	}
	
	private function sendWeaponsTo(Area $area)
	{
	
	}
	
	public function sendAircraftsTo(Area $area)
	{
		$aircrafts = SukhoiSu34::getAllInService();
		foreach ($aircrafts as $aircraft)
		{
			$aircraft->sendTo($area);
			$aircraft->setTransponderOn(false);
		}
		$this->sayTo($area->leader,'We didn\'t break your national borders.');
		$this->sayTo($area->leader, 'Or if we did, it was an accident.');
	}
	
	private function sendSubmarinesTo(Area $area)
	{
	
	}
	
	public function agreePeaceWith(Area $area)
	{
		switch ($area->name)
		{
		case 'USA':
			$this->say('Yes immediately -  you just first withdraw your forces from Europe, Middle East, Asia, the Artic, and South and North America.');
			return false; // Won't happen, I guess
		break;
		case 'Krim':
			$this->say('I have already solved the issues of Krim, aren\'t you happy? At least 98 % of the inhabitants of Krim are happy!');
			return true; // Everything settled
		break;
		case 'Finland' && date('Y') === 1944:
			/** @var Finland $finland */
			$finland = $area;
			$putin = $this;
			$putin->say("It's a bit early as its still 8 years until I will be born.");
			$putin->say("But I will pass this matter to my honoured and beloved predecessor.");
			$stalin = new JosephStalin();
			$stalin->say("Comrades of Finland! I have considered this tiny dispute between us and while at the same time I have been seeking for peaceful solutions that offer wealth and well-being for all people allover the world regardless of nationality, race, region, religion, occupation, political attitude, opinion about me, status of family, sexual orientation or any other similar factor, I am very glad to generously inform that little countries - such as Finland - will greatly benefit when nobly being included within the honourable family of Soviet peoples.");
			$stalin->say("... but, on a second thought, I might have to consider the several losses we've had recently. It might be that I can't afford any new casualties, although I wouln't be responsible for them anyway.");
			$stalin->say("So I might be ready to consider agreeing a peace, with the friendly and positively surprising prerequisites that Finland will:");
			$stalin->say(" - pay us 226,500,000 US dollars (at 1938 rates to double the de facto amount) in the form of electrical machines, locomotives, vessels such as icebreakers and schooners, and also wooden houses - which will take about 340,000 railroad carloads in 8 years to get the job done so nothing you can't handle with ease;");
			$stalin->say(" - give us remarkable quantities of territorial areas, as we're still quite a small country and in a desperate need of space to expand;");
			$stalin->say(" - rent us a military basement right next to Finland's capital city Helsinki so we can point our gun towards your head for 50 years to come. (Which we will suddenly ditch just after 10 years and generously hand back over to Finland in order to improve our reputation towards the international community - just a mention from a future me.)");
			$stalin->say(" - immediately end any diplomatic relations with Germany;");
			$stalin->say(" - and last but not least: legalize the Communist Party of Finland.");
			$putin->say("And I will want to come by and enjoy some Opera in Savonlinna with Sauli some day in the 2010's.");
			$finland->parliament()->say("Please, anything else but the communists!");
			$stalin->say("If not the communists, how about we conquer you?");
			$finland->parliament()->say("Actually, your offer seems legit, Father Sunny. Better a party of communists than everybody turned to communists.");
			return true; // Union of Soviet Socialist Republics approved
		break;
		}
	}
}