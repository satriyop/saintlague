<?php
$party_votes = [
	[
		'name'	=> 'Partai Budi',
		'votes'	=> 15000,
		// 'votes'	=> 24000,
		'seats'	=> 0,
	],
	[
		'name'	=> 'Partai Aku',
		'votes'	=> 24000,
		// 'votes'	=> 53000,
		'seats'	=> 0,
	],
	[
		'name'	=> 'Partai Dono',
		'votes'	=> 5000,
		'seats'	=> 0,
	],
	[
		'name'	=> 'Partai Cicak',
		'votes'	=> 9000,
		// 'votes'	=> 23000,
		'seats'	=> 0,
	]
];

$available_seat 	= 6;



for ($i=0; $i< $available_seat; $i++)
// for ($i=0; $i< 3; $i++)
{

	$temp_votes			= [];

	foreach ($party_votes as $index => $party_vote)
	{
		// Generate quotient for each party
		$quotient = $party_vote['votes'] / ((2 * $party_vote['seats']) + 1);
		// echo $quotient;
        // echo "\n";

		$temp_votes[$index]	= $quotient;
	}

	// Sort descending
	arsort($temp_votes);

	// Get first array element
	$winner_index	= key($temp_votes);

	// Update seats won for related party index
	$party_votes[$winner_index]['seats']	= $party_votes[$winner_index]['seats'] + 1;
}

print_r($party_votes);