<?php

namespace App\Http\Controllers;

use App\DataTables\VotanteDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateVotanteRequest;
use App\Http\Requests\UpdateVotanteRequest;
use App\Models\Barrio;
use App\Models\IntencionVoto;
use App\Models\Sector;
use App\Models\TipoVoto;
use App\Repositories\VotanteRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Response;

class VotanteController extends AppBaseController
{
    /** @var  VotanteRepository */
    private $votanteRepository;

    public function __construct(VotanteRepository $votanteRepo)
    {
        $this->votanteRepository = $votanteRepo;
    }

    /**
     * Display a listing of the Votante.
     *
     * @param VotanteDataTable $votanteDataTable
     * @return Response
     */
    public function index(VotanteDataTable $votanteDataTable)
    {
        return $votanteDataTable->render('votantes.index');
    }

    /**
     * Show the form for creating a new Votante.
     *
     * @return Response
     */
    public function create()
    {
        $tipo_voto = TipoVoto::pluck('name', 'uuid');
        $barrios = Barrio::pluck('name', 'uuid');
        $intencion_voto = IntencionVoto::pluck('name', 'uuid');
        $sectores = Sector::pluck('name', 'uuid');
        return view('votantes.create')
            ->with('barrios', $barrios)
            ->with('sectores', $sectores)
            ->with('intencion_voto', $intencion_voto)
            ->with('tipo_voto', $tipo_voto);
    }

    /**
     * Store a newly created Votante in storage.
     *
     * @param CreateVotanteRequest $request
     *
     * @return Response
     */
    public function store(CreateVotanteRequest $request)
    {
        $input = $request->all();
        $input['usuario_regitra'] = Auth::user()->uuid;
        $votante = $this->votanteRepository->create($input);

        Flash::success('Votante guardado correctamente.');

        return redirect(route('votantes.index'));
    }

    /**
     * Display the specified Votante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $votante = $this->votanteRepository->findWithoutFail($id);

        if (empty($votante)) {
            Flash::error('Votante not found');

            return redirect(route('votantes.index'));
        }

        return view('votantes.show')->with('votante', $votante);
    }

    /**
     * Show the form for editing the specified Votante.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $votante = $this->votanteRepository->findWithoutFail($id);

        if (empty($votante)) {
            Flash::error('Votante not found');

            return redirect(route('votantes.index'));
        }
        $tipo_voto = TipoVoto::pluck('name', 'uuid');
        $barrios = Barrio::pluck('name', 'uuid');
        $intencion_voto = IntencionVoto::pluck('name', 'uuid');
        $sectores = Sector::pluck('name', 'uuid');
        return view('votantes.edit')
            ->with('barrios', $barrios)
            ->with('sectores', $sectores)
            ->with('intencion_voto', $intencion_voto)
            ->with('tipo_voto', $tipo_voto)
            ->with('votante', $votante);
    }

    /**
     * Update the specified Votante in storage.
     *
     * @param int $id
     * @param UpdateVotanteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVotanteRequest $request)
    {
        $votante = $this->votanteRepository->findWithoutFail($id);

        if (empty($votante)) {
            Flash::error('Votante not found');

            return redirect(route('votantes.index'));
        }

        $votante = $this->votanteRepository->update($request->all(), $id);

        Flash::success('Votante actualizado correctamente.');

        return redirect(route('votantes.index'));
    }

    /**
     * Remove the specified Votante from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $votante = $this->votanteRepository->findWithoutFail($id);

        if (empty($votante)) {
            Flash::error('Votante not found');

            return redirect(route('votantes.index'));
        }

        $this->votanteRepository->delete($id);

        Flash::success('Votante deleted successfully.');

        return redirect(route('votantes.index'));
    }
}
