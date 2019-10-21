<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateDoorAPIRequest;
use App\Http\Requests\API\UpdateDoorAPIRequest;
use App\Models\Door;
use App\Repositories\DoorRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class DoorController
 * @package App\Http\Controllers\API
 */

class DoorAPIController extends AppBaseController
{
    /** @var  DoorRepository */
    private $doorRepository;

    public function __construct(DoorRepository $doorRepo)
    {
        $this->doorRepository = $doorRepo;
    }

    /**
     * Display a listing of the Door.
     * GET|HEAD /doors
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $doors = $this->doorRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($doors->toArray(), 'Doors retrieved successfully');
    }

    /**
     * Store a newly created Door in storage.
     * POST /doors
     *
     * @param CreateDoorAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateDoorAPIRequest $request)
    {
        $input = $request->all();

        $door = $this->doorRepository->create($input);

        return $this->sendResponse($door->toArray(), 'Door saved successfully');
    }

    /**
     * Display the specified Door.
     * GET|HEAD /doors/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Door $door */
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            return $this->sendError('Door not found');
        }

        return $this->sendResponse($door->toArray(), 'Door retrieved successfully');
    }

    /**
     * Update the specified Door in storage.
     * PUT/PATCH /doors/{id}
     *
     * @param int $id
     * @param UpdateDoorAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDoorAPIRequest $request)
    {
        $input = $request->all();

        /** @var Door $door */
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            return $this->sendError('Door not found');
        }

        $door = $this->doorRepository->update($input, $id);

        return $this->sendResponse($door->toArray(), 'Door updated successfully');
    }

    /**
     * Remove the specified Door from storage.
     * DELETE /doors/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Door $door */
        $door = $this->doorRepository->find($id);

        if (empty($door)) {
            return $this->sendError('Door not found');
        }

        $door->delete();

        return $this->sendResponse($id, 'Door deleted successfully');
    }
}
