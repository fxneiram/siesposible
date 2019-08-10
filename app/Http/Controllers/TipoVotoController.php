<?php

namespace App\Http\Controllers;

use App\DataTables\TipoVotoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTipoVotoRequest;
use App\Http\Requests\UpdateTipoVotoRequest;
use App\Repositories\TipoVotoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TipoVotoController extends AppBaseController
{
    /** @var  TipoVotoRepository */
    private $tipoVotoRepository;

    public function __construct(TipoVotoRepository $tipoVotoRepo)
    {
        $this->tipoVotoRepository = $tipoVotoRepo;
    }

    /**
     * Display a listing of the TipoVoto.
     *
     * @param TipoVotoDataTable $tipoVotoDataTable
     * @return Response
     */
    public function index(TipoVotoDataTable $tipoVotoDataTable)
    {
        return $tipoVotoDataTable->render('tipo_votos.index');
    }

    /**
     * Show the form for creating a new TipoVoto.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_votos.create');
    }

    /**
     * Store a newly created TipoVoto in storage.
     *
     * @param CreateTipoVotoRequest $request
     *
     * @return Response
     */
    public function store(CreateTipoVotoRequest $request)
    {
        $input = $request->all();

        $tipoVoto = $this->tipoVotoRepository->create($input);

        Flash::success('Tipo Voto guardado correctamente.');

        return redirect(route('tipoVotos.index'));
    }

    /**
     * Display the specified TipoVoto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoVoto = $this->tipoVotoRepository->findWithoutFail($id);

        if (empty($tipoVoto)) {
            Flash::error('Tipo Voto not found');

            return redirect(route('tipoVotos.index'));
        }

        return view('tipo_votos.show')->with('tipoVoto', $tipoVoto);
    }

    /**
     * Show the form for editing the specified TipoVoto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoVoto = $this->tipoVotoRepository->findWithoutFail($id);

        if (empty($tipoVoto)) {
            Flash::error('Tipo Voto not found');

            return redirect(route('tipoVotos.index'));
        }

        return view('tipo_votos.edit')->with('tipoVoto', $tipoVoto);
    }

    /**
     * Update the specified TipoVoto in storage.
     *
     * @param  int              $id
     * @param UpdateTipoVotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTipoVotoRequest $request)
    {
        $tipoVoto = $this->tipoVotoRepository->findWithoutFail($id);

        if (empty($tipoVoto)) {
            Flash::error('Tipo Voto not found');

            return redirect(route('tipoVotos.index'));
        }

        $tipoVoto = $this->tipoVotoRepository->update($request->all(), $id);

        Flash::success('Tipo Voto actualizado correctamente.');

        return redirect(route('tipoVotos.index'));
    }

    /**
     * Remove the specified TipoVoto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoVoto = $this->tipoVotoRepository->findWithoutFail($id);

        if (empty($tipoVoto)) {
            Flash::error('Tipo Voto not found');

            return redirect(route('tipoVotos.index'));
        }

        $this->tipoVotoRepository->delete($id);

        Flash::success('Tipo Voto deleted successfully.');

        return redirect(route('tipoVotos.index'));
    }
}
