<?php

namespace App\Http\Controllers;

use App\DataTables\LiderDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLiderRequest;
use App\Http\Requests\UpdateLiderRequest;
use App\Models\Barrio;
use App\Repositories\LiderRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LiderController extends AppBaseController
{
    /** @var  LiderRepository */
    private $liderRepository;

    public function __construct(LiderRepository $liderRepo)
    {
        $this->liderRepository = $liderRepo;
    }

    /**
     * Display a listing of the Lider.
     *
     * @param LiderDataTable $liderDataTable
     * @return Response
     */
    public function index(LiderDataTable $liderDataTable)
    {
        return $liderDataTable->render('liders.index');
    }

    /**
     * Show the form for creating a new Lider.
     *
     * @return Response
     */
    public function create()
    {
        $barrios = Barrio::pluck('name', 'uuid');
        return view('liders.create')
            ->with('barrios', $barrios);
    }

    /**
     * Store a newly created Lider in storage.
     *
     * @param CreateLiderRequest $request
     *
     * @return Response
     */
    public function store(CreateLiderRequest $request)
    {
        $input = $request->all();

        $lider = $this->liderRepository->create($input);

        Flash::success('Lider guardado correctamente.');

        return redirect(route('liders.index'));
    }

    /**
     * Display the specified Lider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lider = $this->liderRepository->findWithoutFail($id);

        if (empty($lider)) {
            Flash::error('Lider not found');

            return redirect(route('liders.index'));
        }

        return view('liders.show')->with('lider', $lider);
    }

    /**
     * Show the form for editing the specified Lider.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lider = $this->liderRepository->findWithoutFail($id);

        if (empty($lider)) {
            Flash::error('Lider not found');

            return redirect(route('liders.index'));
        }
        $barrios = Barrio::pluck('name', 'uuid');
        return view('liders.edit')
            ->with('barrios', $barrios)
            ->with('lider', $lider);
    }

    /**
     * Update the specified Lider in storage.
     *
     * @param int $id
     * @param UpdateLiderRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLiderRequest $request)
    {
        $lider = $this->liderRepository->findWithoutFail($id);

        if (empty($lider)) {
            Flash::error('Lider not found');

            return redirect(route('liders.index'));
        }

        $lider = $this->liderRepository->update($request->all(), $id);

        Flash::success('Lider actualizado correctamente.');

        return redirect(route('liders.index'));
    }

    /**
     * Remove the specified Lider from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lider = $this->liderRepository->findWithoutFail($id);

        if (empty($lider)) {
            Flash::error('Lider not found');

            return redirect(route('liders.index'));
        }

        $this->liderRepository->delete($id);

        Flash::success('Lider deleted successfully.');

        return redirect(route('liders.index'));
    }
}
