<?php


class PhoneCall extends Action
{
	public function say($message)
	{
		return $this;
	}
	
	public function talkAbout($subject)
	{
		return $this;
	}
	
	public function listenForAWhile()
	{
		return $this;
	}
	
	public function actuallyDontListen()
	{
		return $this;
	}
	
	public function endCall()
	{
		return;
	}
}