<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEarthQuakeRequest;
use App\Http\Requests\UpdateEarthQuakeRequest;
use App\Repositories\EarthQuakeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class EarthQuakeController extends AppBaseController
{
    /** @var  EarthQuakeRepository */
    private $earthQuakeRepository;

    public function __construct(EarthQuakeRepository $earthQuakeRepo)
    {
        $this->earthQuakeRepository = $earthQuakeRepo;
    }

    /**
     * Display a listing of the EarthQuake.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $earthQuakes = $this->earthQuakeRepository->all();

        return view('earth_quakes.index')
            ->with('earthQuakes', $earthQuakes);
    }

    /**
     * Show the form for creating a new EarthQuake.
     *
     * @return Response
     */
    public function create()
    {
        return view('earth_quakes.create');
    }

    /**
     * Store a newly created EarthQuake in storage.
     *
     * @param CreateEarthQuakeRequest $request
     *
     * @return Response
     */
    public function store(CreateEarthQuakeRequest $request)
    {
        $input = $request->all();

        $earthQuake = $this->earthQuakeRepository->create($input);

        Flash::success('Earth Quake saved successfully.');

        return redirect(route('earthQuakes.index'));
    }

    /**
     * Display the specified EarthQuake.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $earthQuake = $this->earthQuakeRepository->find($id);

        if (empty($earthQuake)) {
            Flash::error('Earth Quake not found');

            return redirect(route('earthQuakes.index'));
        }

        return view('earth_quakes.show')->with('earthQuake', $earthQuake);
    }

    /**
     * Show the form for editing the specified EarthQuake.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $earthQuake = $this->earthQuakeRepository->find($id);

        if (empty($earthQuake)) {
            Flash::error('Earth Quake not found');

            return redirect(route('earthQuakes.index'));
        }

        return view('earth_quakes.edit')->with('earthQuake', $earthQuake);
    }

    /**
     * Update the specified EarthQuake in storage.
     *
     * @param int $id
     * @param UpdateEarthQuakeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEarthQuakeRequest $request)
    {
        $earthQuake = $this->earthQuakeRepository->find($id);

        if (empty($earthQuake)) {
            Flash::error('Earth Quake not found');

            return redirect(route('earthQuakes.index'));
        }

        $earthQuake = $this->earthQuakeRepository->update($request->all(), $id);

        Flash::success('Earth Quake updated successfully.');

        return redirect(route('earthQuakes.index'));
    }

    /**
     * Remove the specified EarthQuake from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $earthQuake = $this->earthQuakeRepository->find($id);

        if (empty($earthQuake)) {
            Flash::error('Earth Quake not found');

            return redirect(route('earthQuakes.index'));
        }

        $this->earthQuakeRepository->delete($id);

        Flash::success('Earth Quake deleted successfully.');

        return redirect(route('earthQuakes.index'));
    }
}
