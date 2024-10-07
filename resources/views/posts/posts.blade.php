@extends('layouts.app')
@section('content')
<style>
    .ind_row{
    background: linear-gradient(#ff6a6a, #d50000) !important;
    color:#fff !important;
}
</style>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed main-content-narrow">

        @include('layouts.topnavbar')
        @include('layouts.sidebar')

        <main id="main-container">

        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-sm-fill h3 my-2">
                        Admins
                    </h1>
                    <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item"><a href="{{ route('posts.index') }}">Admin Users</a></li>
                        <li class="breadcrumb-item" aria-current="page">List</li>
                    </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form action="{{route('search')}}" method="post">
            @csrf
            @method('post')
                <input type="text" value="{{old('search')}}" name="search">
                <button type="submit">Submit</button>
        </form>
        <!-- Page Content -->
        <div class="content" style="width:98%">
            <div class="block block-rounded">
                <div class="block-header">
                    <div class="d-flex align-items-center"><h3 class="block-title">Admins list</h3></div>

                    <div class="d-flex align-items-center">
                      {{--  <a class="link-fx btn btn-success" href="{{ url('crm/admins/create') }}">New</a> --}}
                    </div>

                </div>
                <div class="block-content block-content-full">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
                    <thead>
                        <tr class="ind_row">
                            <th class="text-center" style="width: 1%;">ID</th>
                            <th class="text-center" style="width: 10%;">Title</th>
                            <th class="text-center" style="width: 15%;">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)

                        <tr>
                            <td class="text-center font-size-sm">{{ $loop->index+1 }}</td>
                            <td class="font-w600 font-size-sm">{{ $post->title}}
                            </td>
                            <td class="font-w600 font-size-sm">{{ $post->description}}
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                    </table>

                </div>
            </div>
        </div>
        <!-- END Page Content -->

        </main>

</div>
@endsection
@section('script')
    <script>
        $(function() {
            var table = $('.table');
            table.on('click', '.delete-confirm[data-remote]', function(event) {
                event.preventDefault();
                let url = $(this).data('remote');
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    imageUrl: '{{ asset('assets/icon/confirm.gif') }}',
                    imageHeight: 300,
                    imageWeight: 250,
                    showCancelButton: true,
                    confirmButtonColor: '#2cabf5',
                    cancelButtonColor: '#f58787',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = url;
                    }
                })
            });
        });
    </script>
@endsection
