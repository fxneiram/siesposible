<?php

namespace App\DataTables;

use Caffeinated\Shinobi\Models\Role;
use Form;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;

class RoleDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables()
            ->eloquent($this->query())
            ->addColumn('action', 'roles.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $roles = Role::query()
            ->select(DB::raw('*, uuid AS id'));

        return $this->applyScopes($roles);
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
                    ]
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
            'nombre' => ['name' => 'name', 'data' => 'name'],
            'slug' => ['name' => 'slug', 'data' => 'slug'],
            'descripcion' => ['name' => 'description', 'data' => 'description'],
            'permiso_especial' => ['name' => 'special', 'data' => 'special']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'roles';
    }
}
