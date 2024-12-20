@extends('layouts.base', ['title' => 'Prompt | UI Kit'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-primary btn-sm' ])

    <section class="py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="my-0">Colors</h4>
                            <p class="sub-header">
                                These are primary theme colors. They are used for all the elements
                                including buttons, alerts, background, etc.
                            </p>

                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <div class="bg-primary p-5 rounded"></div>
                                    <h6>Primary</h6>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-secondary p-5 rounded"></div>
                                    <h6>Secondary</h6>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-success p-5 rounded"></div>
                                    <h6>Success</h6>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-danger p-5 rounded"></div>
                                    <h6>Error</h6>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-warning p-5 rounded"></div>
                                    <h6>Warning</h6>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-info p-5 rounded"></div>
                                    <h6>Info</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="my-0">Background</h4>
                            <p class="sub-header">
                                Use the contexual class to have background with different shades.
                                E.g. <code>.bg-{primary|secondary|success|danger|info|warning}</code>
                            </p>

                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <div class="bg-primary p-3 rounded mb-2 mb-md-0">
                                        <h5 class="text-white">.bg-primary</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    <div class="bg-secondary p-3 rounded">
                                        <h5 class="text-white">.bg-secondary</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    <div class="bg-success p-3 rounded">
                                        <h5 class="text-white">.bg-success</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    <div class="bg-danger p-3 rounded">
                                        <h5 class="text-white">.bg-danger</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    <div class="bg-warning p-3 rounded">
                                        <h5 class="text-white">.bg-warning</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center mb-2 mb-md-0">
                                    <div class="bg-info p-3 rounded">
                                        <h5 class="text-white">.bg-info</h5>
                                    </div>
                                </div>
                            </div>

                            <p class="sub-header mt-4">
                                Each color has a translucent shade too. It adds a little transparency.
                                E.g. <code>.bg-soft-{primary|secondary|success|danger|info|warning}</code>
                            </p>
                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <div class="bg-soft-primary p-2 rounded mb-2 mb-md-0">
                                        <h5 class="text-primary">.bg-soft-primary</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-soft-secondary p-2 rounded mb-2 mb-md-0">
                                        <h5 class="text-secondary">.bg-soft-secondary</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-soft-success p-2 rounded mb-2 mb-md-0">
                                        <h5 class="text-success">.bg-soft-success</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-soft-danger p-2 rounded mb-2 mb-md-0">
                                        <h5 class="text-danger">.bg-soft-danger</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-soft-warning p-2 rounded mb-2 mb-md-0">
                                        <h5 class="text-warning">.bg-soft-warning</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-soft-info p-2 rounded mb-2 mb-md-0">
                                        <h5 class="text-info">.bg-soft-info</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="my-0">Text Colors</h4>
                            <p class="sub-header">
                                Even your text can have the contexual color.
                                E.g. <code>.text-{primary|secondary|success|danger|info|warning}</code>
                            </p>

                            <div class="row">
                                <div class="col-md-2 text-center">
                                    <div class="bg-white p-2 rounded">
                                        <h5 class="text-primary">.text-primary</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-white p-2 rounded">
                                        <h5 class="text-secondary">.text-secondary</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-white p-2 rounded">
                                        <h5 class="text-success">.text-success</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-white p-2 rounded">
                                        <h5 class="text-danger">.text-danger</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-white p-2 rounded">
                                        <h5 class="text-warning">.text-warning</h5>
                                    </div>
                                </div>
                                <div class="col-md-2 text-center">
                                    <div class="bg-white p-2 rounded">
                                        <h5 class="text-info">.text-info</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
