<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acceptation;
use App\Models\Ban;
use App\Models\Used;
use App\Models\Refus;

class Home extends Controller
{
    

    public function Acceptation()
    {$Acceptation = Acceptation::all();
        return view('Acceptation', compact('Acceptation')); // Pass them to the view
    } 

    public function Ban()
    {

        $Ban = Ban::all();
        return view('Ban' ,compact('Ban')); // Pass them to the view
    } 

    public function Refus()
    {$Refus = Refus::all(); 
        return view('Refus' ,compact('Refus')); // Pass them to the view
    } 
    public function Used()
    {$Used = Used::all();
        return view('Used' ,compact('Used')); // Pass them to the view
    } 




}
