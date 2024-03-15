<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use App\Exports\FileExport;
use Maatwebsite\Excel\Facades\Excel;

class InformationController extends Controller
{
    public function index()
    {
        return Information::all();
    }

    public function store(Request $request)
    {
        return Information::create($request->all());
    }

    public function show($id)
    {
        return Information::find($id);
    }

    public function update(Request $request, Information $information)
    {
        $information->fill($request->all());

        if ($information->save()) {
            return $information;
        }
    }

    public function destroy($id)
    {
        return Information::find($id)->delete();
    }

    public function export($id)
    {
        return new FileExport($id);
    }
}
