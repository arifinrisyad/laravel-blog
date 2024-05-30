<?php

namespace App\Http\Controllers\Back;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    public function index()
    {
        return view('back.config.index', [
            'config' => Config::paginate(7)
        ]);
    }

    public function update(request $request, String $id)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'value' => 'required|min:3'
        ]);
       Config::find($id)->update($data);
       return back()->with('success', 'Config has been updated');
    }
}
