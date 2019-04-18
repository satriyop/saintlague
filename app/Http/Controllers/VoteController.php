<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{

    public function index()
    {
        return view('vote.index');
    }

    public function store(Vote $vote)
    {
        $votes = request()->all();
        $available_seat = 10;
        $total_votes = [
            'pkb' => intval($votes['pkb']),
            'gerindra' => intval($votes['gerindra']),
            'pdip' => intval($votes['pdip']),
            'golkar' => intval($votes['golkar']),
            'nasdem' => intval($votes['nasdem']),
            'garuda' => intval($votes['garuda']),
            'berkarya' => intval($votes['berkarya']),
            'pks' => intval($votes['pks']),
            'perindo' => intval($votes['perindo']),
            'ppp' => intval($votes['ppp']),
            'psi' => intval($votes['psi']),
            'pan' => intval($votes['pan']),
            'hanura' => intval($votes['hanura']),
            'demokrat' => intval($votes['demokrat']),
            'pbb' => intval($votes['pbb']),
            'pkpi' => intval($votes['pkpi']),
        ];


        $tabulation = [
            'total_votes' => array_sum($total_votes),
            'winners' => [],
            'parties' => [
                'pkb' => [
                    'name' => 'PKB',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pkb'],
                ],
                'gerindra' =>  [
                    'name' => 'Gerindra',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['gerindra'],
                ] ,
                'pdip' => [
                    'name' => 'PDI P',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pdip'],
                ] ,
                'golkar' => [
                    'name' => 'Golkar',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['golkar'],
                ],
                'nasdem' => [
                    'name' => 'Nasdem',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['nasdem'],
                ],
                'garuda' => [
                    'name' => 'GARUDA',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['garuda'],
                ],
                'berkarya' => [
                    'name' => 'Partai Berkarya',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['berkarya'],
                ],
                'pks' => [
                    'name' => 'PKS',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pks'],
                ],
                'perindo' => [
                    'name' => 'PKB',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['perindo'],
                ],
                'ppp' => [
                    'name' => 'PPP',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['ppp'],
                ],
                'psi' => [
                    'name' => 'PSI',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['psi'],
                ],
                'pan' => [
                    'name' => 'PAN',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['psi'],
                ],
                'hanura' => [
                    'name' => 'HANURA',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['hanura'],
                ],
                'demokrat' => [
                    'name' => 'Partai Demokrat',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['demokrat'],
                ],
                'pbb' => [
                    'name' => 'PBB',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pbb'],
                ],
                'pkpi' => [
                    'name' => 'PKPI',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pkpi'],
                ],
            ]
        ];
        for ($i=0; $i < $available_seat; $i++) { 
            foreach ($tabulation['parties'] as $party => $party_votes) {
                    $quotient = $party_votes['total_votes'] / ((2 * $party_votes['seat']) + 1);
                    $temp_votes[$party]['vote'] = $quotient;
                    array_push($tabulation['parties'][$party]['vote'], $quotient);
            }
            arsort($temp_votes);
            $winner_index	= key($temp_votes);
            $tabulation['parties'][$winner_index]['seat'] = $tabulation['parties'][$winner_index]['seat'] + 1;
            array_push($tabulation['winners'], $winner_index);
            // $tabulation['parties'][$winner_index]['win'] = true;
            
        }
        // dd($tabulation);

        return view('vote.saintlague_result', $tabulation);
    }
}