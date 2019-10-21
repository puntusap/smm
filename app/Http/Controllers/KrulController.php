<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKrulRequest;
use App\Http\Requests\UpdateKrulRequest;
use App\Repositories\KrulRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class KrulController extends AppBaseController
{
    /** @var  KrulRepository */
    private $krulRepository;

    public function __construct(KrulRepository $krulRepo)
    {
        $this->krulRepository = $krulRepo;
    }

    /**
     * Display a listing of the Krul.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $kruls = $this->krulRepository->all();

        return view('kruls.index')
            ->with('kruls', $kruls);
    }

    /**
     * Show the form for creating a new Krul.
     *
     * @return Response
     */
    public function create()
    {
        return view('kruls.create');
    }

    /**
     * Store a newly created Krul in storage.
     *
     * @param CreateKrulRequest $request
     *
     * @return Response
     */
    public function store(CreateKrulRequest $request)
    {
        $input = $request->all();

        $krul = $this->krulRepository->create($input);

        Flash::success('Krul saved successfully.');

        return redirect(route('kruls.index'));
    }

    /**
     * Display the specified Krul.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $krul = $this->krulRepository->find($id);

        if (empty($krul)) {
            Flash::error('Krul not found');

            return redirect(route('kruls.index'));
        }

        return view('kruls.show')->with('krul', $krul);
    }

    /**
     * Show the form for editing the specified Krul.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $krul = $this->krulRepository->find($id);

        if (empty($krul)) {
            Flash::error('Krul not found');

            return redirect(route('kruls.index'));
        }

        return view('kruls.edit')->with('krul', $krul);
    }

    /**
     * Update the specified Krul in storage.
     *
     * @param int $id
     * @param UpdateKrulRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateKrulRequest $request)
    {
        $krul = $this->krulRepository->find($id);

        if (empty($krul)) {
            Flash::error('Krul not found');

            return redirect(route('kruls.index'));
        }

        $krul = $this->krulRepository->update($request->all(), $id);

        Flash::success('Krul updated successfully.');

        return redirect(route('kruls.index'));
    }

    /**
     * Remove the specified Krul from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $krul = $this->krulRepository->find($id);

        if (empty($krul)) {
            Flash::error('Krul not found');

            return redirect(route('kruls.index'));
        }

        $this->krulRepository->delete($id);

        Flash::success('Krul deleted successfully.');

        return redirect(route('kruls.index'));
    }
}
