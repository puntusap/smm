<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateMSIAPIRequest;
use App\Http\Requests\API\UpdateMSIAPIRequest;
use App\Models\MSI;
use App\Repositories\MSIRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class MSIController
 * @package App\Http\Controllers\API
 */

class MSIAPIController extends AppBaseController
{
    /** @var  MSIRepository */
    private $mSIRepository;

    public function __construct(MSIRepository $mSIRepo)
    {
        $this->mSIRepository = $mSIRepo;
    }

    /**
     * Display a listing of the MSI.
     * GET|HEAD /mSIS
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $mSIS = $this->mSIRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($mSIS->toArray(), 'M S I S retrieved successfully');
    }

    /**
     * Store a newly created MSI in storage.
     * POST /mSIS
     *
     * @param CreateMSIAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateMSIAPIRequest $request)
    {
        $input = $request->all();

        $mSI = $this->mSIRepository->create($input);

        return $this->sendResponse($mSI->toArray(), 'M S I saved successfully');
    }

    /**
     * Display the specified MSI.
     * GET|HEAD /mSIS/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var MSI $mSI */
        $mSI = $this->mSIRepository->find($id);

        if (empty($mSI)) {
            return $this->sendError('M S I not found');
        }

        return $this->sendResponse($mSI->toArray(), 'M S I retrieved successfully');
    }

    /**
     * Update the specified MSI in storage.
     * PUT/PATCH /mSIS/{id}
     *
     * @param int $id
     * @param UpdateMSIAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMSIAPIRequest $request)
    {
        $input = $request->all();

        /** @var MSI $mSI */
        $mSI = $this->mSIRepository->find($id);

        if (empty($mSI)) {
            return $this->sendError('M S I not found');
        }

        $mSI = $this->mSIRepository->update($input, $id);

        return $this->sendResponse($mSI->toArray(), 'MSI updated successfully');
    }

    /**
     * Remove the specified MSI from storage.
     * DELETE /mSIS/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var MSI $mSI */
        $mSI = $this->mSIRepository->find($id);

        if (empty($mSI)) {
            return $this->sendError('M S I not found');
        }

        $mSI->delete();

        return $this->sendResponse($id, 'M S I deleted successfully');
    }
}
