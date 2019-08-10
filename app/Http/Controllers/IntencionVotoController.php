<?php

namespace App\Http\Controllers;

use App\DataTables\IntencionVotoDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateIntencionVotoRequest;
use App\Http\Requests\UpdateIntencionVotoRequest;
use App\Repositories\IntencionVotoRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class IntencionVotoController extends AppBaseController
{
    /** @var  IntencionVotoRepository */
    private $intencionVotoRepository;

    public function __construct(IntencionVotoRepository $intencionVotoRepo)
    {
        $this->intencionVotoRepository = $intencionVotoRepo;
    }

    /**
     * Display a listing of the IntencionVoto.
     *
     * @param IntencionVotoDataTable $intencionVotoDataTable
     * @return Response
     */
    public function index(IntencionVotoDataTable $intencionVotoDataTable)
    {
        return $intencionVotoDataTable->render('intencion_votos.index');
    }

    /**
     * Show the form for creating a new IntencionVoto.
     *
     * @return Response
     */
    public function create()
    {
        return view('intencion_votos.create');
    }

    /**
     * Store a newly created IntencionVoto in storage.
     *
     * @param CreateIntencionVotoRequest $request
     *
     * @return Response
     */
    public function store(CreateIntencionVotoRequest $request)
    {
        $input = $request->all();

        $intencionVoto = $this->intencionVotoRepository->create($input);

        Flash::success('Intencion Voto guardado correctamente.');

        return redirect(route('intencionVotos.index'));
    }

    /**
     * Display the specified IntencionVoto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $intencionVoto = $this->intencionVotoRepository->findWithoutFail($id);

        if (empty($intencionVoto)) {
            Flash::error('Intencion Voto not found');

            return redirect(route('intencionVotos.index'));
        }

        return view('intencion_votos.show')->with('intencionVoto', $intencionVoto);
    }

    /**
     * Show the form for editing the specified IntencionVoto.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $intencionVoto = $this->intencionVotoRepository->findWithoutFail($id);

        if (empty($intencionVoto)) {
            Flash::error('Intencion Voto not found');

            return redirect(route('intencionVotos.index'));
        }

        return view('intencion_votos.edit')->with('intencionVoto', $intencionVoto);
    }

    /**
     * Update the specified IntencionVoto in storage.
     *
     * @param  int              $id
     * @param UpdateIntencionVotoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateIntencionVotoRequest $request)
    {
        $intencionVoto = $this->intencionVotoRepository->findWithoutFail($id);

        if (empty($intencionVoto)) {
            Flash::error('Intencion Voto not found');

            return redirect(route('intencionVotos.index'));
        }

        $intencionVoto = $this->intencionVotoRepository->update($request->all(), $id);

        Flash::success('Intencion Voto actualizado correctamente.');

        return redirect(route('intencionVotos.index'));
    }

    /**
     * Remove the specified IntencionVoto from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $intencionVoto = $this->intencionVotoRepository->findWithoutFail($id);

        if (empty($intencionVoto)) {
            Flash::error('Intencion Voto not found');

            return redirect(route('intencionVotos.index'));
        }

        $this->intencionVotoRepository->delete($id);

        Flash::success('Intencion Voto deleted successfully.');

        return redirect(route('intencionVotos.index'));
    }
}
