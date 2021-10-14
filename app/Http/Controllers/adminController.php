<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public function generateLayoutMaster()
    {
        return view('Admin.formtab');
    }

    public function addNewEvent(Request $request)
    {
        $newEvent = new event();
        $newEvent->eventName = $request->get('eventName');
        $newEvent->bandNames = $request->get('bandNames');
        $newEvent->startDate = $request->get('startDate');
        $newEvent->endDate = $request->get('endDate');
        $newEvent->portfolio = $request->get('portfolio');
        $newEvent->ticketPrice = $request->get('ticketPrice');
        $newEvent->status = $request->get('status');
        $result = $newEvent->save();
        if ($result) {
            return view('Admin.formtab');
        }
    }

    public function getAllEvent()
    {
        $events = DB::table('events')->get();
        return view('Admin.tabletab', $events);
    }
}
