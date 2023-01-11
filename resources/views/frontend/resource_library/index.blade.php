@extends('layouts.frontend')

@section('content')
<section>
    <div class="container" style="margin-top: 70px">
        <div class="section-title">
            <h2>Sumber Daya</h2>
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
                            Alamat
                        </th>
                        <th>
                            PIC
                        </th>
                        <th>
                           Longitude
                        </th>
                        <th>
                           Latitude
                        </th>
                        <th>
                           Type
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
                            <input class="search" type="text" placeholder="{{ trans('global.search') }}">
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
                            <select class="search" strict="true">
                                <option value>{{ trans('global.all') }}</option>
                                @foreach(App\Models\Event::PUBLISH_STATUS_RADIO as $key => $item)
                                    <option value="{{ $item }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </thead>
                <tbody>
                @if (isset($resources))
                    <?php $no = 1; ?>
                    @foreach($resources as $resource)
                        <tr data-entry-id="asdas">
                            <td>
                                <?php echo $no; ?>
                            </td>
                            <td>
                                {{ $resource->nama }}
                            </td>
                            <td>
                                {{ $resource->alamat }}
                            </td>
                            <td>
                                {{ $resource->PIC }}
                            </td>
                            <td>
                                {{ $resource->long }}
                            </td>
                            <td>
                                {{ $resource->lat }}
                            </td>
                            <td>
                                @if($resource->type == 1) {{'Public'}}
                                @else  {{'Private'}}
                                @endif
                            </td>
                            <td>
                                
                            </td>

                        </tr>
                        <?php $no++; ?>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        </div>
    </div>
  </section>
  @endsection