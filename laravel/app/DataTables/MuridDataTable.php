<?php

namespace App\DataTables;

use App\User;
use Yajra\DataTables\Services\DataTable;

class MuridDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'muriddatatable.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model)
    {
        // return $model->newQuery()->select('id', 'add-your-columns-here', 'created_at', 'updated_at');

        // $murid = Murid::select('id', 'nama_lengkap', 'nama_panggilan', 'gender','kelas_mhs','kelas_id')
        $murid = Murid::select();
        return $this->applyScopes($murid);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->columns([
            'id',
            'nama_lengkap',
            'nama_panggilan',
            'gender',
            'kelas_mhs',
            'kelas_id',
        ])
        ->parameters([
            'dom' => 'Bfrtip',
            'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'nama_lengkap',
            'nama_panggilan',
            'gender',
            'kelas_mhs',
            'kelas_id',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Murid_' . date('YmdHis');
    }
}
