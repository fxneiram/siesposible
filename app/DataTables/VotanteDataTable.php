<?php

namespace App\DataTables;

use App\Models\Votante;
use Form;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;

class VotanteDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables()
            ->eloquent($this->query())
            ->editColumn('incentivado', function ($data) {
                return $data->incentivado ? 'Si' : 'No';
            })
            ->addColumn('action', 'votantes.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {//            ->select(DB::raw('votantes.uuid AS id, votantes.nombre, votantes.apellido, votantes.cedula, votantes.nacimiento, votantes.celular'))

        $votantes = Votante::query()
            ->select(DB::raw('*, votantes.uuid AS id, tipo_votos.name AS tipo_voto_name'))
            ->join('barrios', 'barrios.uuid', '=', 'votantes.barrio_id')
            ->join('tipo_votos', 'tipo_votos.uuid', '=', 'votantes.tipo_voto')
            ->join('sectors', 'sectors.uuid', '=', 'votantes.sector');

        return $this->applyScopes($votantes);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '120px'])
            ->ajax('')
            ->parameters([
                'dom' => '<"col-sm-12"Bfr><"col-sm-12"t><"col-sm-12"ip>',
                'scrollX' => true,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                        'extend' => 'collection',
                        'text' => '<i class="fa fa-download"></i>',
                        'buttons' => [
                            'csv',
                            'excel',
                            'pdf',
                        ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'nombre' => ['name' => 'nombre', 'data' => 'nombre'],
            'apellido' => ['name' => 'apellido', 'data' => 'apellido'],
            'cedula' => ['name' => 'cedula', 'data' => 'cedula'],
            'celular' => ['name' => 'celular', 'data' => 'celular'],
            'sexo' => ['name' => 'sexo', 'data' => 'sexo'],
            'barrio' => ['name' => 'barrios.name', 'data' => 'name'],
            'nacimiento' => ['name' => 'nacimiento', 'data' => 'nacimiento'],
            'gps' => ['name' => 'gps', 'data' => 'gps'],
            'sector' => ['name' => 'sectors.nombre', 'data' => 'name'],
            'tipo_voto' => ['name' => 'tipo_votos.name', 'data' => 'tipo_voto_name'],
            'visitado' => ['name' => 'incentivado', 'data' => 'incentivado']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'votantes';
    }
}
