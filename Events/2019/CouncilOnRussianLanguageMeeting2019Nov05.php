<?php


class CouncilOnRussianLanguageMeeting2019Nov05 extends Event
{
	public function act()
	{
		// Gather up the meeting
		$putin = new VladimirPutin;
		$university_representative = new Person;
		$anonymous_person = new Person;
		
		// The conversation
		$university_representative->sayTo($putin, "How can it be that Russian judiciaries are using Wikipedia as an information source in the preparation processes of their judgements?");
		$putin->say("As for Wikipedia... it's better to replace it with the new Big Russian Encyclopedia in electronic form, so that it will be of a reliable information in a good modern form. [1]");
		$anonymous_person->say("Well, I don't think there is any need for a Russian version of Wikipedia. I'm sure Kremlin is already publishing their truths in Wikipedia anyway! :)");
		$putin->say("...");
		
		// After a short moment ...
		$aleksander = new AleksandrZaldostanov;
		$putin->whisperTo($aleksander, "Surgeon, could Night Wolves mute this 'anonymous person'?");
		$aleksander->whisperTo($putin, "Will do.");
		
		$putin->reference("[1]", "https://www.newsweek.com/putin-proposes-russian-version-wikipedia-reliable-information-1469995", "2019-11-07");
	}
}