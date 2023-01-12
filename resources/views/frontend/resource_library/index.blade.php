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
        
    <!-- ======= Clients Section ======= -->
    <section id="locations" class="locations">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Resource Stakeholder</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
            </div>
            <div id="map" class="map"></div>
            <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1yWpsj6aBnPLYZCJbYGCOfzUG5MjWI8k&ehbc=2E312F"
                id="our_location"></iframe> -->
            <!-- <img src="{{ asset('assets/img/map_xl.jpeg') }}"/> -->
        </div>
    </section><!-- End Clients Section -->

    </div>
  </section>
  
  <script>
        //   var map;
        //   function initMap() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //       center: {lat: -34.397, lng: 150.644},
        //       zoom: 8
        //     });
        //   }
        function initMap() {

            console.log(<?php echo $resources; ?>);
            var loc = [];
            var res_data = <?php echo $resources; ?>;

            for (var j = 0; j < res_data.length; j++) {
                var data = ['<h5>' + res_data[j].PIC + '<h5>', res_data[j].long, res_data[j].lat];
                loc.push(data);
            }
            console.log(loc);
            var locations = [
                ['<h5>Ibukota Provinsi Aceh</h5>', 5.550176, 95.319263],
                ['<h5>Ibukota Kab.Aceh Jaya</h5>', 4.727890, 95.601373],
                ['<h5>Ibukota Abdya</h5>', 3.818570, 96.831841],
                ['<h5>Ibukota Kotamadya Langsa</h5>', 4.476020, 97.952447],
                ['<h5>Ibukota Kotamadya Sabang</h5>', 5.909284, 95.304742]

            ];
            var infowindow = new google.maps.InfoWindow();

            var options = {
                zoom: 5,
                center: new google.maps.LatLng(-0.789275, 113.921327),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Pembuatan petanya
            var map2 = new google.maps.Map(document.getElementById('map'), options);

            var marker2;
            // proses penambahan marker pada masing-masing lokasi yang berbeda
            for (i = 0; i < loc.length; i++) {
                marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(loc[i][1], loc[i][2]),
                    map: map2,

                });

                // Menampilkan informasi pada masing-masing marker yang diklik
                google.maps.event.addListener(marker2, 'click', (function (marker2, i) {
                    return function () {
                        infowindow.setContent(loc[i][0]);
                        infowindow.open(map2, marker2);
                    }
                })(marker2, i));
            }

        };
    </script>
  @endsection