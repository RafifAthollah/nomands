@extends('layouts.admin')

@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
<h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
</div>
 
<div class="row">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width:"100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Travel</th>
                        <th>User</th>
                        <th>Visa</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($item as $items)
                    <tr>
                        <th>{{  $items->id}}</th>
                        <th>{{  $items->travel_package->title}}</th>
                        <th>{{  $items->user->name}}</th>
                        <th>${{  $items->additional_visa}}</th>
                        <th>${{  $items->transaction_total}}</th>
                        <th>{{  $items->transaction_status}}</th>
                        <td>
                            <a href="{{ route('transaction.show', $items->id)}}" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                                </a>
                            <a href="{{ route('transaction.edit', $items->id)}}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('transaction.destroy', $items->id)}}" method="post"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash">
                                </i>
                            </button>
                        </form>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">
                                Data Kosong                                
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


</div>
<!-- /.container-fluid -->
@endsection