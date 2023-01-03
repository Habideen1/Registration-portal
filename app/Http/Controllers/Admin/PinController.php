<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PinRequest;
use App\Models\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PinController extends Controller
{
    public function store(PinRequest $request)
    {
        $data = $request->validated();

        $pin = new Pin();
        $pin->pin = Str::random(20);
        $pin->batch_no =  $data['batch_no'];
        $pin->status =  0;
        $pin->user_id = 0;
        $pin->save();

        return redirect ('admin/pins')->with('message', 'Pin generated successfully');
    }
}
