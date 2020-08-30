<?php

namespace App\Exceptions;

use App\Entry;
use Exception;

class InvalidEntrySlugException extends Exception
{
	private $entry;

	public function __construct(Entry $entry)
	{
		$this->entry = $entry;
	}

	public function render()
	{
		return redirect($this->entry->getUrl());
	}
}