<?php


class Item
{
	protected static function gatherItems($count)
	{
		$items = [];
		for ($i = 0; $i < $count; $i++)
		{
			$items[] = new static;
		}
		return $items;
	}
}