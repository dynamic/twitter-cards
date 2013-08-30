<?php

/**
 * Defines the list of standard twitter card types.
 * User types may be substitude in place of any of these for the twitter:card property,
 * as long as the namespace is correctly implemented 
 */
class TCTypes
{

	const Summary = 'summary';
	const SummaryLarge = 'summary_large_image';
	const Photo = 'photo';
	const Gallery = 'gallery';
	const Product = 'product';
	const App = 'app';
	const Player = 'player';
	
	const DefaultType = self::Summary;
}