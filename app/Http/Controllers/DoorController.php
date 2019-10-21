<?php

namespace App\Http\Controllers;

use App\DataTables\DoorDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateDoorRequest;
use App\Http\Requests\UpdateDoorRequest;
use App\Repositories\DoorRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class DoorController extends AppBaseController
{
    /** @var  DoorRepository */
    private $doorRepository;

    public function __construct(DoorRepository $doorRepo)
    {
        $this->doorRepository = $doorRepo;
    }

    /**
     * Display a listing of the Door.
     *
     * @param DoorDataTable $doorDataTable
     * @return Response
     */
     public function index()
    {
        return view('doors.index');
    }
    public function clientsList()
    {
        $doors = DB::table('door')->select('*');
        return datatables()->of($doors)
            ->make(true);
    }

    /**
     * Show the form for creating a new Door.
     *
     * @return Response
     */
    public function create()
    {
        return view('doors.create');
    }

    /**
     * Store a newly created Door in storage.
     *
     * @param CreateDoorRequest $request
     *
     * @return Response
     */
    public function store(CreateDoorRequest $request)
    {
        $input = $request->all();

        $door = $this->doorRepository->create($input);

        Flash::success('Door saved successfully.');

        return redirect(route('doors.index'));
    }

    /**
     * Display the specified Door.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            Flash::error('Door not found');

            return redirect(route('doors.index'));
        }

        return view('doors.show')->with('door', $door);
    }

    /**
     * Show the form for editing the specified Door.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            Flash::error('Door not found');

            return redirect(route('doors.index'));
        }

        return view('doors.edit')->with('door', $door);
    }

    /**
     * Update the specified Door in storage.
     *
     * @param  int              $id
     * @param UpdateDoorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoorRequest $request)
    {
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            Flash::error('Door not found');

            return redirect(route('doors.index'));
        }

        $door = $this->doorRepository->update($request->all(), $id);

        Flash::success('Door updated successfully.');

        return redirect(route('doors.index'));
    }

    /**
     * Remove the specified Door from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            Flash::error('Door not found');

            return redirect(route('doors.index'));
        }

        $this->doorRepository->delete($id);

        Flash::success('Door deleted successfully.');

        return redirect(route('doors.index'));
    }
}
