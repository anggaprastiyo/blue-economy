<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sliders;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSlidersRequest;
use App\Http\Requests\UpdateSlidersRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        abort_if(Gate::denies('sliders_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Sliders::query()->select(sprintf('%s.*', (new Sliders())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'sliders_show';
                $editGate = 'sliders_edit';
                $deleteGate = 'sliders_delete';
                $crudRoutePart = 'sliders';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('subtitle', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('file_name', function ($row) {
                return $row->file_name ? $row->file_name : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.sliders.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        abort_if(Gate::denies('sliders_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSlidersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSlidersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function show(Sliders $sliders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function edit(Sliders $sliders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSlidersRequest  $request
     * @param  \App\Models\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSlidersRequest $request, Sliders $sliders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sliders  $sliders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sliders $sliders)
    {
        //
    }
}
