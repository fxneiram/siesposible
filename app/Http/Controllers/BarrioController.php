<?php

namespace App\Http\Controllers;

use App\DataTables\BarrioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBarrioRequest;
use App\Http\Requests\UpdateBarrioRequest;
use App\Repositories\BarrioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BarrioController extends AppBaseController
{
    /** @var  BarrioRepository */
    private $barrioRepository;

    public function __construct(BarrioRepository $barrioRepo)
    {
        $this->barrioRepository = $barrioRepo;
    }

    /**
     * Display a listing of the Barrio.
     *
     * @param BarrioDataTable $barrioDataTable
     * @return Response
     */
    public function index(BarrioDataTable $barrioDataTable)
    {
        return $barrioDataTable->render('barrios.index');
    }

    /**
     * Show the form for creating a new Barrio.
     *
     * @return Response
     */
    public function create()
    {
        return view('barrios.create');
    }

    /**
     * Store a newly created Barrio in storage.
     *
     * @param CreateBarrioRequest $request
     *
     * @return Response
     */
    public function store(CreateBarrioRequest $request)
    {
        $input = $request->all();

        $barrio = $this->barrioRepository->create($input);

        Flash::success('Barrio guardado correctamente.');

        return redirect(route('barrios.index'));
    }

    /**
     * Display the specified Barrio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $barrio = $this->barrioRepository->findWithoutFail($id);

        if (empty($barrio)) {
            Flash::error('Barrio not found');

            return redirect(route('barrios.index'));
        }

        return view('barrios.show')->with('barrio', $barrio);
    }

    /**
     * Show the form for editing the specified Barrio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $barrio = $this->barrioRepository->findWithoutFail($id);

        if (empty($barrio)) {
            Flash::error('Barrio not found');

            return redirect(route('barrios.index'));
        }

        return view('barrios.edit')->with('barrio', $barrio);
    }

    /**
     * Update the specified Barrio in storage.
     *
     * @param  int              $id
     * @param UpdateBarrioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBarrioRequest $request)
    {
        $barrio = $this->barrioRepository->findWithoutFail($id);

        if (empty($barrio)) {
            Flash::error('Barrio not found');

            return redirect(route('barrios.index'));
        }

        $barrio = $this->barrioRepository->update($request->all(), $id);

        Flash::success('Barrio actualizado correctamente.');

        return redirect(route('barrios.index'));
    }

    /**
     * Remove the specified Barrio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $barrio = $this->barrioRepository->findWithoutFail($id);

        if (empty($barrio)) {
            Flash::error('Barrio not found');

            return redirect(route('barrios.index'));
        }

        $this->barrioRepository->delete($id);

        Flash::success('Barrio deleted successfully.');

        return redirect(route('barrios.index'));
    }
}
