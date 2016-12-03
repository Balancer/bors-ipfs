<?php

namespace B2\Ipfs;

class File
{
	static function add($file)
	{
//		$hash = exec('/var/www/bin/ipfs add -q '.escapeshellarg($file));

		$ipfs = new Api("10.0.3.1", "58080", "55001");

		$hash = $ipfs->add(file_get_contents($file));
		$ipfs->pinAdd($hash);

		return $hash;
	}
}
