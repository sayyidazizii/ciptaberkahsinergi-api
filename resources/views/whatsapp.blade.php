@extends('layouts.app')

@section('content')
    <div class="untree_co-hero overlay" style="background-image: url('images/hero-img-1-min.jpg');">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center ">
                        <div class="col-lg-12 text-center ">
                            <div class="card shadow">
                                <div class="card-body">
                                    base_url : <a href="https://ciptapro.id/ciptaberkahsinergi-api/">https://ciptapro.id/ciptaberkahsinergi-api/</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-2">
                        <div class="col-lg-12 text-left ">
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="table-responsive">
                                            <?php
                                            $no = 1;
                                            ?>
                                            <table class="table table-bordered table-advance table-hover">
                                                <tr>
                                                    <thead>
                                                        <th>No</th>
                                                        <th>Name</th>
                                                        <th>Method</th>
                                                        <th>Route</th>
                                                        <th>Request</th>
                                                        <th>Params</th>
                                                        <th>Example</th>
                                                    </thead>
                                                    <tbody id="myTable">
                                                        <?php foreach ($data as $value) { ?>
                                                        {{-- <tr>
                                                            <td><?= $no++ ?></td>
                                                            <td><?= $value->name ?></td>
                                                            <td><?= $value->method ?></td>
                                                            <td><?= $value->route ?></td>
                                                            <td><?= $value->request ?></td>
                                                            <td><?= $value->params ?></td>
                                                            <td><?= $value->sample ?></td>

                                                        </tr> --}}
                                                        <?php } ?>
                                                    </tbody>
                                                </tr>
                                            </table>
                                    </div>
                                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                                      <div class="pagination-container">
                                        <button id="prevPage" class="btn btn-sm btn-primary">Previous</button>
                                        <span id="paginationStatus" class="pagination-status"></span>
                                        <button id="nextPage" class="btn btn-sm btn-primary">Next</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
