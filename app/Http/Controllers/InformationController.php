<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Exports\FileExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Database\QueryException;

class InformationController extends Controller
{
    public function index()
    {
        return Information::all();
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $data['birth_date'] = Carbon::createFromFormat('d-m-Y', $data['birth_date'])->format('Y-m-d');
        $data['admission_date'] = Carbon::createFromFormat('d-m-Y', $data['admission_date'])->format('Y-m-d');
        $data['issue_date'] = Carbon::createFromFormat('d-m-Y', $data['issue_date'])->format('Y-m-d');

        $data['mother_name'] = $data['mother_name'] ?? 'Nome da Mãe Não Fornecido';
        $data['father_name'] = $data['father_name'] ?? 'Nome do Pai Não Fornecido';

        return Information::create($data);
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
