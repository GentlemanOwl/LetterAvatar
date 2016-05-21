<?php
require 'vendor/autoload.php';

use LetterAvatar\LetterAvatar;

$la = new LetterAvatar();

foreach (range('A', 'Z') as $letter) {
	$la
		->setFontFile('./fonts/DroidSansMono.ttf')
	    ->generate($letter, 100)
	    ->saveAsPng('./pics/'.$letter.'.png');
}