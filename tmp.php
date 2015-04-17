<?php

$re = '/Diameter[\s]*([0-9]+)/';
$strA = "30.200.0280
	Diameter 25 cm.     Kraagmaat 15 cm.    Hoogte 19 cm.  Uitvoering: messing, chroom of brons. ";

preg_match($re, $strA, $matchesA);

print_r($matchesA);
