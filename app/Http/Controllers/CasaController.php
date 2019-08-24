<?php

namespace App\Http\Controllers;

use App\DataTables\CasaDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCasaRequest;
use App\Http\Requests\UpdateCasaRequest;
use App\Repositories\CasaRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CasaController extends AppBaseController
{
    /** @var  CasaRepository */
    private $casaRepository;

    public function __construct(CasaRepository $casaRepo)
    {
        $this->casaRepository = $casaRepo;
    }

    /**
     * Display a listing of the Casa.
     *
     * @param CasaDataTable $casaDataTable
     * @return Response
     */
    public function index(CasaDataTable $casaDataTable)
    {
        return $casaDataTable->render('casas.index');
    }

    /**
     * Show the form for creating a new Casa.
     *
     * @return Response
     */
    public function create()
    {
        return view('casas.create');
    }

    /**
     * Store a newly created Casa in storage.
     *
     * @param CreateCasaRequest $request
     *
     * @return Response
     */
    public function store(CreateCasaRequest $request)
    {
        $input = $request->all();

        $casa = $this->casaRepository->create($input);

        Flash::success('Casa guardado correctamente.');

        return redirect(route('casas.index'));
    }

    /**
     * Display the specified Casa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $casa = $this->casaRepository->findWithoutFail($id);

        if (empty($casa)) {
            Flash::error('Casa not found');

            return redirect(route('casas.index'));
        }

        return view('casas.show')->with('casa', $casa);
    }

    /**
     * Show the form for editing the specified Casa.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $casa = $this->casaRepository->findWithoutFail($id);

        if (empty($casa)) {
            Flash::error('Casa not found');

            return redirect(route('casas.index'));
        }

        return view('casas.edit')->with('casa', $casa);
    }

    /**
     * Update the specified Casa in storage.
     *
     * @param  int              $id
     * @param UpdateCasaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCasaRequest $request)
    {
        $casa = $this->casaRepository->findWithoutFail($id);

        if (empty($casa)) {
            Flash::error('Casa not found');

            return redirect(route('casas.index'));
        }

        $casa = $this->casaRepository->update($request->all(), $id);

        Flash::success('Casa actualizado correctamente.');

        return redirect(route('casas.index'));
    }

    /**
     * Remove the specified Casa from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $casa = $this->casaRepository->findWithoutFail($id);

        if (empty($casa)) {
            Flash::error('Casa not found');

            return redirect(route('casas.index'));
        }

        $this->casaRepository->delete($id);

        Flash::success('Casa deleted successfully.');

        return redirect(route('casas.index'));
    }
}
