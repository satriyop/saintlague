<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{

    public function index()
    {
        //
        return view('vote.index');
    }

    public function result()
    {
        return view('vote.result');    
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
        
        $pkb = [];
        $gerindra = [];
        $pdip = [];
        $golkar = [];
        $nasdem = [];
        $garuda = [];
        $berkarya = [];
        $pks = [];
        $perindo = [];
        $ppp = []; 
        $psi = [];
        $pan = [];
        $hanura= []; 
        $demokrat = [];
        $pbb = [];
        $pkpi = [];

        for ($i=0; $i < $available_seat; $i++) { 
            $pkb["divisor_". (2 * $i + 1) ] = $total_votes['pkb'] / (2 * $i + 1);
            $gerindra["divisor_". (2 * $i + 1)] = $total_votes['gerindra'] / (2 * $i + 1);
            $pdip["divisor_". (2 * $i + 1)] = $total_votes['pdip'] / (2 * $i + 1);
            $golkar["divisor_". (2 * $i + 1)] = $total_votes['golkar'] / (2 * $i + 1);
            $nasdem["divisor_". (2 * $i + 1)] = $total_votes['nasdem'] / (2 * $i + 1);
            $garuda["divisor_". (2 * $i + 1)] = $total_votes['garuda'] / (2 * $i + 1);
            $berkarya["divisor_". (2 * $i + 1)] = $total_votes['berkarya'] / (2 * $i + 1);
            $pks["divisor_". (2 * $i + 1)] = $total_votes['pks'] / (2 * $i + 1);
            $perindo["divisor_". (2 * $i + 1)] = $total_votes['perindo'] / (2 * $i + 1);
            $ppp["divisor_". (2 * $i + 1)] = $total_votes['ppp'] / (2 * $i + 1);
            $psi["divisor_". (2 * $i + 1)] = $total_votes['psi'] / (2 * $i + 1);
            $pan["divisor_". (2 * $i + 1)] = $total_votes['pan'] / (2 * $i + 1);
            $hanura["divisor_". (2 * $i + 1)] = $total_votes['hanura'] / (2 * $i + 1);
            $demokrat["divisor_". (2 * $i + 1)] = $total_votes['demokrat'] / (2 * $i + 1);
            $pbb["divisor_". (2 * $i + 1)] = $total_votes['pbb'] / (2 * $i + 1);
            $pkpi["divisor_". (2 * $i + 1)] = $total_votes['pkpi'] / (2 * $i + 1);
        }

        $tabulation = [
            'parties' => [
                'pkb' => [
                    'name' => 'PKB',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pkb']
                ],
                'gerindra' =>  [
                    'name' => 'Gerindra',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['gerindra']

                ] ,
                'pdip' => [
                    'name' => 'PDI P',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pdip']

                ] ,
                'golkar' => [
                    'name' => 'Golkar',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['golkar']

                ],
                'nasdem' => [
                    'name' => 'Nasdem',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['nasdem']

                ],
                'garuda' => [
                    'name' => 'GARUDA',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['garuda']

                ],
                'berkarya' => [
                    'name' => 'Partai Berkarya',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['berkarya']

                ],
                'pks' => [
                    'name' => 'PKS',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pks']

                ],
                'perindo' => [
                    'name' => 'PKB',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['perindo']

                ],
                'ppp' => [
                    'name' => 'PPP',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['ppp']

                ],
                'psi' => [
                    'name' => 'PSI',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['psi']

                ],
                'pan' => [
                    'name' => 'PAN',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['psi']

                ],
                'hanura' => [
                    'name' => 'HANURA',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['hanura']

                ],
                'demokrat' => [
                    'name' => 'Partai Demokrat',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['demokrat']

                ],
                'pbb' => [
                    'name' => 'PBB',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pbb']

                ],
                'pkpi' => [
                    'name' => 'PKPI',
                    'vote' => [],
                    'seat' => 0,
                    'total_votes' => $total_votes['pkpi']
                ],
            ]
        ];
        
        // dd($tabulation);
        for ($i=0; $i < $available_seat; $i++) { 
            foreach ($tabulation['parties'] as $party => $party_votes) {
                    // dd($party_votes);
                    $quotient = $party_votes['total_votes'] / ((2 * $party_votes['seat']) + 1);
                    $temp_votes[$party]['vote'] = $quotient;
                    array_push($tabulation['parties'][$party]['vote'], $quotient);
                    // array_push($party_votes['vote'], $quotient);
            }
            arsort($temp_votes);
            // dd($party_votes);
            $winner_index	= key($temp_votes);
            $tabulation['parties'][$winner_index]['seat']	= $tabulation['parties'][$winner_index]['seat'] + 1;
            // var_dump($tabulation);

        }
        // dd($tabulation);

        return view('vote.saintlague_result', $tabulation);
    }
}