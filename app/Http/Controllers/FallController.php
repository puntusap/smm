<?php

namespace App\Http\Controllers;

use App\DataTables\FallDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateFallRequest;
use App\Http\Requests\UpdateFallRequest;
use App\Repositories\FallRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class FallController extends AppBaseController
{
    /** @var  FallRepository */
    private $fallRepository;

    public function __construct(FallRepository $fallRepo)
    {
        $this->fallRepository = $fallRepo;
    }

    /**
     * Display a listing of the Fall.
     *
     * @param FallDataTable $fallDataTable
     * @return Response
     */
    public function index(FallDataTable $fallDataTable)
    {
        return $fallDataTable->render('falls.index');
    }

    /**
     * Show the form for creating a new Fall.
     *
     * @return Response
     */
    public function create()
    {
        return view('falls.create');
    }

    /**
     * Store a newly created Fall in storage.
     *
     * @param CreateFallRequest $request
     *
     * @return Response
     */
    public function store(CreateFallRequest $request)
    {
        $input = $request->all();

        $fall = $this->fallRepository->create($input);

        Flash::success('Fall saved successfully.');

        return redirect(route('falls.index'));
    }

    /**
     * Display the specified Fall.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            Flash::error('Fall not found');

            return redirect(route('falls.index'));
        }

        return view('falls.show')->with('fall', $fall);
    }

    /**
     * Show the form for editing the specified Fall.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            Flash::error('Fall not found');

            return redirect(route('falls.index'));
        }

        return view('falls.edit')->with('fall', $fall);
    }

    /**
     * Update the specified Fall in storage.
     *
     * @param  int              $id
     * @param UpdateFallRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFallRequest $request)
    {
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            Flash::error('Fall not found');

            return redirect(route('falls.index'));
        }

        $fall = $this->fallRepository->update($request->all(), $id);

        Flash::success('Fall updated successfully.');

        return redirect(route('falls.index'));
    }

    /**
     * Remove the specified Fall from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            Flash::error('Fall not found');

            return redirect(route('falls.index'));
        }

        $this->fallRepository->delete($id);

        Flash::success('Fall deleted successfully.');

        return redirect(route('falls.index'));
    }
}
