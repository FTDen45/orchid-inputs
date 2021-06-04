<?php

namespace Easy\OrchidInputs\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Easy\OrchidInputs\App\Mail\OrchidInputsMailable;
use Easy\OrchidInputs\App\Models\OrchidInput;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrchidInputsController extends Controller
{
    public function index()
    {
        return view('orchid-inputs::orchid-inputs');
    }

    public function send(Request $request)
    {
        Mail::to(config('orchid-inputs.send_email_to'))
            ->send(new OrchidInputsMailable($request->message,$request->name));
        OrchidInput::create($request->all());
        return redirect(route('orchid-inputs'));
    }
}
