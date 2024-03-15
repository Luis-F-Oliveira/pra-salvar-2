<?php

namespace App\Exports;

use App\Models\Information;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FileExport implements FromCollection, Responsable, WithHeadings
{
    use Exportable;
    protected $id;
    private $fileName = 'name.xlsx';

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function collection()
    {
        return Information::where('staffing_id', $this->id)->get();
    }

    public function headings(): array
    {
        return [
            '#',
            'numero_registro',
            'nome',
            'sexo',
            'data_admissão',
            'cpf',
            'dt_nascimento',
            'rg',
            'emissor_rg',
            'uf_rg',
            'nome_mae',
            'nome_pai',
            'naturalidade',
            'nacionalidade',
            'nacionalidade_uf',
            'tipo_sangue',
            'carteira_numero',
            'carteira_data_expedição'
        ];
    }
}
