@extends('layouts.frontend')

@section('content')
<section>
    <div class="container" style="margin-top: 70px">
        <div class="section-title">
            <h2>Resource Library</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>
        <div class="row" id="resource_library"><div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                <thead>
                    <tr>
                        <th>
                            No
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Jabatan
                        </th>
                        <th>
                            
                        </th>
                        <th>
                           
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                        </td>
                        <td>
                        </td>
                        <td>
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Event::PUBLISH_STATUS_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr data-entry-id="asdas">
                        <td>
                            1
                        </td>
                        <td>
                           Stackholder 1
                        </td>
                        <td>
                            
                        </td>
                        <td>
                        </td>
                        <td>
                            
                        </td>
                        <td>
                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </section>
  @endsection