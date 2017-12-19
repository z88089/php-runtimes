<?php

class PHPRuntimes
{
	/**
	 * Author zbing
	 */

	protected $marks = [];

	function mark($mark=null)
	{
		$this->marks[] = ['time'=>microtime(true), 'mark'=>$mark];
	}

	function display()
	{
		foreach($this->times as $key=>$value){
			if ($key==0) continue;
			echo "【= " . ($times[$key-1]['mark'] ?? 'Mark['.$key.']') .'-'. ($value['mark'] ?? 'Mark['.($key+1).']') .": ". ($value['time'] - $times[$key-1]['time']) . " =】";
		}
	}
}