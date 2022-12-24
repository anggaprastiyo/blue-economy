<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResourceLibrary;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResourceLibraryController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('resource_library_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $resourceLibraries = ResourceLibrary::get();

        return view('admin.resourceLibrary.index', compact('resourceLibraries'));
    }

    public function create()
    {
        abort_if(Gate::denies('resource_library_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.resourceLibrary.create');
    }

    public function store(Request $request)
    {
        $resourceLibrary = ResourceLibrary::create($request->all());
        return redirect()->route('admin.resource-libraries.index');
    }

    public function edit(ResourceLibrary $resourceLibrary)
    {
        abort_if(Gate::denies('resource_library_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.resourceLibrary.edit', compact('resourceLibrary'));
    }

    public function update(Request $request, ResourceLibrary $resourceLibrary)
    {
        $resourceLibrary->update($request->all());
        return redirect()->route('admin.resource-libraries.index');
    }

    public function show(ResourceLibrary $resourceLibrary)
    {
        abort_if(Gate::denies('resource_library_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.resourceLibrary.show', compact('resourceLibrary'));
    }

    public function destroy(ResourceLibrary $resourceLibrary)
    {
        abort_if(Gate::denies('resource_library_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $resourceLibrary->delete();

        return back();
    }

    public function massDestroy(Request $request)
    {
        ResourceLibrary::whereIn('id', request('ids'))->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
