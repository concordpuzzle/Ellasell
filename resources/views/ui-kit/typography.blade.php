@extends('layouts.base', ['title' => 'Prompt | UI Kit'])

@section('content')

    @include('layouts.partials.navbar', ['hideSearch' => true,'fixedWidth' => true, 'sticky' => true,'topbarColor' => 'navbar-light', 'classList' => 'mx-auto','ctaButtonClass' => 'btn-outline-primary btn-sm' ])

    <section class="py-4 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0">Regular Headings</h4>
                            <p class="sub-header">
                                All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are
                                available.
                            </p>

                            <div class="row">
                                <div class="col">
                                    <h1>h1. Bootstrap heading</h1>
                                    <h2>h2. Bootstrap heading</h2>
                                    <h3>h3. Bootstrap heading</h3>
                                    <h4>h4. Bootstrap heading</h4>
                                    <h5>h5. Bootstrap heading</h5>
                                    <h6>h6. Bootstrap heading</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0">Display Headings</h4>
                            <p class="sub-header">
                                Traditional heading elements are designed to work best in the meat of your page content.
                                When you need a heading to stand out, consider using a display heading—a larger,
                                slightly more opinionated heading style.
                            </p>

                            <div class="row">
                                <div class="col">
                                    <h1 class="display-1">Display 1</h1>
                                    <h1 class="display-2">Display 2</h1>
                                    <h1 class="display-3">Display 3</h1>
                                    <h1 class="display-4">Display 4</h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="mt-0">Inline text elements</h4>
                            <p class="sub-header">
                                Styling for common inline HTML5 elements.
                            </p>

                            <div class="row">
                                <div class="col">
                                    <p>You can use the mark tag to
                                        <mark>highlight</mark>
                                        text.
                                    </p>
                                    <p>
                                        <del>This line of text is meant to be treated as deleted text.</del>
                                    </p>
                                    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                    <p>
                                        <ins>This line of text is meant to be treated as an addition to thedocument.
                                        </ins>
                                    </p>
                                    <p><u>This line of text will render as underlined</u></p>
                                    <p><small>This line of text is meant to be treated as fine print.</small></p>
                                    <p><strong>This line rendered as bold text.</strong></p>
                                    <p><em>This line rendered as italicized text.</em></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
