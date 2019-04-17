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

        for ($i=0; $i < 10; $i++) { 
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
                    'vote' => $pkb
                ],
                'gerindra' =>  [
                    'name' => 'Gerindra',
                    'vote' => $gerindra
                ] ,
                'pdip' => [
                    'name' => 'PDI P',
                    'vote' => $pdip
                ] ,
                'golkar' => [
                    'name' => 'Golkar',
                    'vote' => $golkar
                ],
                'nasdem' => [
                    'name' => 'Nasdem',
                    'vote' => $nasdem
                ],
                'garuda' => [
                    'name' => 'GARUDA',
                    'vote' => $garuda
                ],
                'berkarya' => [
                    'name' => 'Partai Berkarya',
                    'vote' => $berkarya
                ],
                'pks' => [
                    'name' => 'PKS',
                    'vote' => $pks
                ],
                'perindo' => [
                    'name' => 'PKB',
                    'vote' => $perindo
                ],
                'ppp' => [
                    'name' => 'PPP',
                    'vote' => $ppp
                ],
                'psi' => [
                    'name' => 'PSI',
                    'vote' => $psi
                ],
                'pan' => [
                    'name' => 'PAN',
                    'vote' => $pan
                ],
                'hanura' => [
                    'name' => 'HANURA',
                    'vote' => $hanura
                ],
                'demokrat' => [
                    'name' => 'Partai Demokrat',
                    'vote' => $demokrat
                ],
                'pbb' => [
                    'name' => 'PBB',
                    'vote' => $pbb
                ],
                'pkpi' => [
                    'name' => 'PKPI',
                    'vote' => $pkpi
                ],
            ]
        ];
        // dd($tabulation);
        $total_result = [];
        foreach ($tabulation as $party) {
            array_map(function($result) {
                $result['vote'];
            }, $party);
        }
        dd($total_result);
        // $total_tabulation = []; 
        // for ($i=0; $i < 10; $i++) { 
        //     $total_tabulation['divisor_' . (2 * $i + 1)] = [
        //     // $total_tabulation['divisor'] = [
        //         'pkb' => $tabulation["parties"]["pkb"]["vote"]["divisor_".(2 * $i + 1)],
        //         'gerindra' => $tabulation["parties"]["gerindra"]["vote"]["divisor_". (2 * $i + 1)],
        //         'pdip' => $tabulation["parties"]["pdip"]["vote"]["divisor_". (2 * $i + 1)],
        //         'golkar' => $tabulation["parties"]["golkar"]["vote"]["divisor_". (2 * $i + 1)],
        //         'nasdem' => $tabulation["parties"]["nasdem"]["vote"]["divisor_". (2 * $i + 1)],
        //         'garuda' => $tabulation["parties"]["garuda"]["vote"]["divisor_". (2 * $i + 1)],
        //         'berkarya' => $tabulation["parties"]["berkarya"]["vote"]["divisor_". (2 * $i + 1)],
        //         'pks' => $tabulation["parties"]["pks"]["vote"]["divisor_". (2 * $i + 1)],
        //         'perindo' => $tabulation["parties"]["perindo"]["vote"]["divisor_". (2 * $i + 1)],
        //         'ppp' => $tabulation["parties"]["ppp"]["vote"]["divisor_". (2 * $i + 1)],
        //         'psi' => $tabulation["parties"]["psi"]["vote"]["divisor_". (2 * $i + 1)],
        //         'pan' => $tabulation["parties"]["pan"]["vote"]["divisor_". (2 * $i + 1)],
        //         'hanura' => $tabulation["parties"]["hanura"]["vote"]["divisor_". (2 * $i + 1)],
        //         'demokrat' => $tabulation["parties"]["demokrat"]["vote"]["divisor_". (2 * $i + 1)],
        //         'pbb' => $tabulation["parties"]["pbb"]["vote"]["divisor_". (2 * $i + 1)],
        //         'pkpi' => $tabulation["parties"]["pkpi"]["vote"]["divisor_". (2 * $i + 1)],
        //     ];
        //     // arsort($total_tabulation['divisor']);
        //     arsort($total_tabulation['divisor_' . (2 * $i + 1)]);
        // }


        return view('vote.saintlague_result', $tabulation);
    }
}