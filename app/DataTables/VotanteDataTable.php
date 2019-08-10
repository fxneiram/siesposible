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
            ->addColumn('action', 'votantes.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $votantes = Votante::query()
            ->select(DB::raw('*, uuid AS id'));

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
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i>',
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
            'barrio_id' => ['name' => 'barrio_id', 'data' => 'barrio_id'],
            'nacimiento' => ['name' => 'nacimiento', 'data' => 'nacimiento'],
            'gps' => ['name' => 'gps', 'data' => 'gps'],
            'sector' => ['name' => 'sector', 'data' => 'sector'],
            'tipo_voto' => ['name' => 'tipo_voto', 'data' => 'tipo_voto'],
            'incentivado' => ['name' => 'incentivado', 'data' => 'incentivado']
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
