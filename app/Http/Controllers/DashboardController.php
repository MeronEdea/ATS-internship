<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = [];

        for ($i = 0; $i < 8; $i++) {
            $drivers[] = [
                'driver_name' => 'Abebe',
                'date' => 'Monday',
                'phone_number' => '(255) 555 0118',
                'side_number' => '3256'
            ];
        }

        $title = "Total Trips";
        $tripDifference = 23;
        $comfortTrips = 140;
        $greyTrips = 215;
        $boleTrips = 122;
        $meterTrips = 195;

        $maxTrips = max($comfortTrips, $greyTrips, $boleTrips, $meterTrips);

        $incomeDifference = 5;
        
        $tripData = [
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            'data' => [300, 100, 50, 125, 420, 275, 150, 100, 50]
        ];

        $currentYearIncome = [200, 250, 225, 350, 365, 450, 400, 300, 350, 250, 225, 410];
        $lastYearIncome = [500, 400, 150, 250, 225, 235, 210, 190, 110, 105, 165, 150];

        return view('dashboard.index', compact('drivers', 'title', 'tripDifference', 'comfortTrips',
                                                'greyTrips', 'boleTrips', 'meterTrips', 'tripData', 'maxTrips', 
                                                'incomeDifference', 'currentYearIncome', 'lastYearIncome'));
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
        //
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
