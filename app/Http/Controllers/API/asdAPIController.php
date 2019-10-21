<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateasdAPIRequest;
use App\Http\Requests\API\UpdateasdAPIRequest;
use App\Models\asd;
use App\Repositories\asdRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class asdController
 * @package App\Http\Controllers\API
 */

class asdAPIController extends AppBaseController
{
    /** @var  asdRepository */
    private $asdRepository;

    public function __construct(asdRepository $asdRepo)
    {
        $this->asdRepository = $asdRepo;
    }

    /**
     * Display a listing of the asd.
     * GET|HEAD /asds
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $asds = $this->asdRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($asds->toArray(), 'Asds retrieved successfully');
    }

    /**
     * Store a newly created asd in storage.
     * POST /asds
     *
     * @param CreateasdAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateasdAPIRequest $request)
    {
        $input = $request->all();

        $asd = $this->asdRepository->create($input);

        return $this->sendResponse($asd->toArray(), 'Asd saved successfully');
    }

    /**
     * Display the specified asd.
     * GET|HEAD /asds/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var asd $asd */
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            return $this->sendError('Asd not found');
        }

        return $this->sendResponse($asd->toArray(), 'Asd retrieved successfully');
    }

    /**
     * Update the specified asd in storage.
     * PUT/PATCH /asds/{id}
     *
     * @param int $id
     * @param UpdateasdAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateasdAPIRequest $request)
    {
        $input = $request->all();

        /** @var asd $asd */
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            return $this->sendError('Asd not found');
        }

        $asd = $this->asdRepository->update($input, $id);

        return $this->sendResponse($asd->toArray(), 'asd updated successfully');
    }

    /**
     * Remove the specified asd from storage.
     * DELETE /asds/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var asd $asd */
        $asd = $this->asdRepository->find($id);

        if (empty($asd)) {
            return $this->sendError('Asd not found');
        }

        $asd->delete();

        return $this->sendResponse($id, 'Asd deleted successfully');
    }
}
