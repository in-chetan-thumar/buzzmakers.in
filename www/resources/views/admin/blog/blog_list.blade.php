@extends('admin.layouts.master')

@section('title')
    Blog list
@endsection
@section('css')
@endsection
@section('content')
    @component('components.breadcrumb', ['li_1' => ['Dashboard' => route('root')]])
        @slot('title')
            Blog list
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="float-end">
                        @can('news-list.create')
                            <a href="{{ route('blog-list.create') }}" onclick="showBlogSaveModal(event)" class="btn btn-primary"><i
                                    class="mdi mdi-account-plus"></i>&nbsp;Add Blogs</a>
                        @endcan
                    </div>
                    <div class="float-start">

                    </div>
                    <div class="clearfix"></div>
                    <div class="divtable">
                        {!! $table !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="divOffcanvas">

        </div>
    </div>
@endsection
@section('script-bottom')
    <script type="text/javascript" src="{{ asset('assets/vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/blog.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if (!confirm('Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
