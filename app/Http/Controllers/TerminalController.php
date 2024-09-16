<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TerminalController extends Controller
{
    
    protected $terminals = [
        1 => [],
        2 => [] 
    ];
    protected $drivers = [
        3452, 3511, 3818, 3542, 3618, 3814, 3542, 3452, 3818, 3542,
        3452, 3511, 3818, 3542, 3618, 3814, 3542, 3452, 3818, 3542,
        3452, 3511, 3818, 3542, 3618, 3814, 3542, 3452, 3818, 3542,
        3452, 3511, 3818, 3542, 3618, 3814, 3542, 3452, 3818, 3542,
        3452, 3511, 3818, 3542, 3618, 3814, 3542, 3452, 3818, 3542,
        3452, 3818, 3542, 3511, 3818, 3542, 3452, 3511, 3818, 3542, 
        3618, 3814
    ];
    protected $newDrivers = [3168, 3535, 3245, 3713];
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!session()->has('terminals') || !is_array(session('terminals'))) {
            $terminals = [
                1 => [],
                2 => []
            ];

            foreach ($this->drivers as $driver) {
                if (count($terminals[1]) <= count($terminals[2])) {
                    array_push($terminals[1], $driver);
                } else {
                    array_push($terminals[2], $driver);
                }
            }
            foreach ($this->newDrivers as $newDriver) {
                if (count($terminals[1]) <= count($terminals[2])) {
                    array_push($terminals[1], $newDriver);
                } else {
                    array_push($terminals[2], $newDriver);
                }
            }
            session(['terminals' => $terminals]);
        }

        $terminals = session('terminals');

        if (!is_array($terminals)) {
            $terminals = [
                1 => [],
                2 => []
            ];
        }
        return view('assign-order.index', [
            'terminals' => $terminals,
            'newDrivers' => $this->newDrivers
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('Request received: ', $request->all());

        $terminals = session('terminals', [
            1 => [],
            2 => []
        ]);

        $newDriver = $request->input('driver');
        $selectedTerminal = $request->input('terminal') === 'terminal1' ? 1 : 2;

        array_push($terminals[$selectedTerminal], $newDriver);
        session(['terminals' => $terminals]);

        return redirect()->route('assign-order.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
