<?php

namespace App\Http\Controllers;

use App\DataTables\asdDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateasdRequest;
use App\Http\Requests\UpdateasdRequest;
use App\Repositories\asdRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class asdController extends AppBaseController
{
    /** @var  asdRepository */
    private $asdRepository;

    public function __construct(asdRepository $asdRepo)
    {
        $this->asdRepository = $asdRepo;
    }

    /**
     * Display a listing of the asd.
     *
     * @param asdDataTable $asdDataTable
     * @return Response
     */
    public function index(asdDataTable $asdDataTable)
    {
        return $asdDataTable->render('asds.index');
    }

    /**
     * Show the form for creating a new asd.
     *
     * @return Response
     */
    public function create()
    {
        return view('asds.create');
    }

    /**
     * Store a newly created asd in storage.
     *
     * @param CreateasdRequest $request
     *
     * @return Response
     */
    public function store(CreateasdRequest $request)
    {
        $input = $request->all();

        $asd = $this->asdRepository->create($input);

        Flash::success('Asd saved successfully.');

        return redirect(route('asds.index'));
    }

    /**
     * Display the specified asd.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            Flash::error('Asd not found');

            return redirect(route('asds.index'));
        }

        return view('asds.show')->with('asd', $asd);
    }

    /**
     * Show the form for editing the specified asd.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            Flash::error('Asd not found');

            return redirect(route('asds.index'));
        }

        return view('asds.edit')->with('asd', $asd);
    }

    /**
     * Update the specified asd in storage.
     *
     * @param  int              $id
     * @param UpdateasdRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateasdRequest $request)
    {
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            Flash::error('Asd not found');

            return redirect(route('asds.index'));
        }

        $asd = $this->asdRepository->update($request->all(), $id);

        Flash::success('Asd updated successfully.');

        return redirect(route('asds.index'));
    }

    /**
     * Remove the specified asd from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            Flash::error('Asd not found');

            return redirect(route('asds.index'));
        }

        $this->asdRepository->delete($id);

        Flash::success('Asd deleted successfully.');

        return redirect(route('asds.index'));
    }
}
