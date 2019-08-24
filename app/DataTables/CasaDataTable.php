<?php

namespace App\DataTables;

use App\Models\Casa;
use Form;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;

class CasaDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables()
            ->eloquent($this->query())
            ->addColumn('action', 'casas.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $casas = Casa::query()
            ->select(DB::raw('*, uuid AS id'));

        return $this->applyScopes($casas);
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
            'nombre_cuidador' => ['name' => 'nombre_cuidador', 'data' => 'nombre_cuidador'],
            'telefono_cuidador' => ['name' => 'telefono_cuidador', 'data' => 'telefono_cuidador'],
            'capacidad_personas' => ['name' => 'capacidad_personas', 'data' => 'capacidad_personas'],
            'gps' => ['name' => 'gps', 'data' => 'gps'],
            'numero_casa' => ['name' => 'numero_casa', 'data' => 'numero_casa']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'casas';
    }
}
