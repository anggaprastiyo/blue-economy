@extends('layouts.admin')
@section('content')
    @can('faq_question_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.resource-libraries.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.resourceLibrary.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.resourceLibrary.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-resourceLibrary">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.resourceLibrary.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.resourceLibrary.fields.nama') }}
                            </th>
                            <th>
                                {{ trans('cruds.resourceLibrary.fields.alamat') }}
                            </th>
                            <th>
                                {{ trans('cruds.resourceLibrary.fields.pic') }}
                            </th>
                            <th>
                                {{ trans('cruds.resourceLibrary.fields.long') }}
                            </th>
                            <th>
                                {{ trans('cruds.resourceLibrary.fields.lat') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($resourceLibraries as $key => $resourceLibrary)
                            <tr data-entry-id="{{ $resourceLibrary->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $resourceLibrary->id ?? '' }}
                                </td>
                                <td>
                                    {{ $resourceLibrary->nama ?? '' }}
                                </td>
                                <td>
                                    {{ $resourceLibrary->alamat ?? '' }}
                                </td>
                                <td>
                                    {{ $resourceLibrary->PIC ?? '' }}
                                </td>
                                <td>
                                    {{ $resourceLibrary->long ?? '' }}
                                </td>
                                <td>
                                    {{ $resourceLibrary->lat ?? '' }}
                                </td>
                                <td>
                                    @can('faq_question_show')
                                        <a class="btn btn-xs btn-primary"
                                            href="{{ route('admin.resource-libraries.show', $resourceLibrary->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('faq_question_edit')
                                        <a class="btn btn-xs btn-info"
                                            href="{{ route('admin.resource-libraries.edit', $resourceLibrary->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('faq_question_delete')
                                        <form action="{{ route('admin.resource-libraries.destroy', $resourceLibrary->id) }}"
                                            method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                            style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger"
                                                value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(function() {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('faq_question_delete')
                let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
                let deleteButton = {
                    text: deleteButtonTrans,
                    url: "{{ route('admin.resource-library.massDestroy') }}",
                    className: 'btn-danger',
                    action: function(e, dt, node, config) {
                        var ids = $.map(dt.rows({
                            selected: true
                        }).nodes(), function(entry) {
                            return $(entry).data('entry-id')
                        });

                        if (ids.length === 0) {
                            alert('{{ trans('global.datatables.zero_selected') }}')

                            return
                        }

                        if (confirm('{{ trans('global.areYouSure') }}')) {
                            $.ajax({
                                    headers: {
                                        'x-csrf-token': _token
                                    },
                                    method: 'POST',
                                    url: config.url,
                                    data: {
                                        ids: ids,
                                        _method: 'DELETE'
                                    }
                                })
                                .done(function() {
                                    location.reload()
                                })
                        }
                    }
                }
                dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                orderCellsTop: true,
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            let table = $('.datatable-resourceLibrary:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });

        })
    </script>
@endsection
