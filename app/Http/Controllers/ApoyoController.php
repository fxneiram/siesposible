<?php

namespace App\Http\Controllers;

use App\DataTables\ApoyoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateApoyoRequest;
use App\Http\Requests\UpdateApoyoRequest;
use App\Repositories\ApoyoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ApoyoController extends AppBaseController
{
    /** @var  ApoyoRepository */
    private $apoyoRepository;

    public function __construct(ApoyoRepository $apoyoRepo)
    {
        $this->apoyoRepository = $apoyoRepo;
    }

    /**
     * Display a listing of the Apoyo.
     *
     * @param ApoyoDataTable $apoyoDataTable
     * @return Response
     */
    public function index(ApoyoDataTable $apoyoDataTable)
    {
        return $apoyoDataTable->render('apoyos.index');
    }

    /**
     * Show the form for creating a new Apoyo.
     *
     * @return Response
     */
    public function create()
    {
        return view('apoyos.create');
    }

    /**
     * Store a newly created Apoyo in storage.
     *
     * @param CreateApoyoRequest $request
     *
     * @return Response
     */
    public function store(CreateApoyoRequest $request)
    {
        $input = $request->all();

        $apoyo = $this->apoyoRepository->create($input);

        Flash::success('Apoyo guardado correctamente.');

        return redirect(route('apoyos.index'));
    }

    /**
     * Display the specified Apoyo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $apoyo = $this->apoyoRepository->findWithoutFail($id);

        if (empty($apoyo)) {
            Flash::error('Apoyo not found');

            return redirect(route('apoyos.index'));
        }

        return view('apoyos.show')->with('apoyo', $apoyo);
    }

    /**
     * Show the form for editing the specified Apoyo.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $apoyo = $this->apoyoRepository->findWithoutFail($id);

        if (empty($apoyo)) {
            Flash::error('Apoyo not found');

            return redirect(route('apoyos.index'));
        }

        return view('apoyos.edit')->with('apoyo', $apoyo);
    }

    /**
     * Update the specified Apoyo in storage.
     *
     * @param  int              $id
     * @param UpdateApoyoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateApoyoRequest $request)
    {
        $apoyo = $this->apoyoRepository->findWithoutFail($id);

        if (empty($apoyo)) {
            Flash::error('Apoyo not found');

            return redirect(route('apoyos.index'));
        }

        $apoyo = $this->apoyoRepository->update($request->all(), $id);

        Flash::success('Apoyo actualizado correctamente.');

        return redirect(route('apoyos.index'));
    }

    /**
     * Remove the specified Apoyo from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $apoyo = $this->apoyoRepository->findWithoutFail($id);

        if (empty($apoyo)) {
            Flash::error('Apoyo not found');

            return redirect(route('apoyos.index'));
        }

        $this->apoyoRepository->delete($id);

        Flash::success('Apoyo deleted successfully.');

        return redirect(route('apoyos.index'));
    }
}
