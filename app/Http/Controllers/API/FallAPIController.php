<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFallAPIRequest;
use App\Http\Requests\API\UpdateFallAPIRequest;
use App\Models\Fall;
use App\Repositories\FallRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class FallController
 * @package App\Http\Controllers\API
 */

class FallAPIController extends AppBaseController
{
    /** @var  FallRepository */
    private $fallRepository;

    public function __construct(FallRepository $fallRepo)
    {
        $this->fallRepository = $fallRepo;
    }

    /**
     * Display a listing of the Fall.
     * GET|HEAD /falls
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $falls = $this->fallRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($falls->toArray(), 'Falls retrieved successfully');
    }

    /**
     * Store a newly created Fall in storage.
     * POST /falls
     *
     * @param CreateFallAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateFallAPIRequest $request)
    {
        $input = $request->all();

        $fall = $this->fallRepository->create($input);

        return $this->sendResponse($fall->toArray(), 'Fall saved successfully');
    }

    /**
     * Display the specified Fall.
     * GET|HEAD /falls/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Fall $fall */
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            return $this->sendError('Fall not found');
        }

        return $this->sendResponse($fall->toArray(), 'Fall retrieved successfully');
    }

    /**
     * Update the specified Fall in storage.
     * PUT/PATCH /falls/{id}
     *
     * @param int $id
     * @param UpdateFallAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFallAPIRequest $request)
    {
        $input = $request->all();

        /** @var Fall $fall */
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            return $this->sendError('Fall not found');
        }

        $fall = $this->fallRepository->update($input, $id);

        return $this->sendResponse($fall->toArray(), 'Fall updated successfully');
    }

    /**
     * Remove the specified Fall from storage.
     * DELETE /falls/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Fall $fall */
        $fall = $this->fallRepository->find($id);

        if (empty($fall)) {
            return $this->sendError('Fall not found');
        }

        $fall->delete();

        return $this->sendResponse($id, 'Fall deleted successfully');
    }
}
