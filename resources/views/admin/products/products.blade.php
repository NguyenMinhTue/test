@extends('admin.admin_layout')
@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
@endsection
@section('content')
    <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Quản lý sản phẩm</h3>
        <div class="row mb">
            <!-- page start-->

                <div class="adv-table">
                    <table id="example" class="table table-bordered b-t b-light" style="width:100%; background-color: white">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th class="hidden-phone">Mô tả</th>
                            <th class="hidden-phone">Giá cũ</th>
                            <th class="hidden-phone">Giá mới</th>
                            <th class="hidden-phone">Ảnh</th>
                            <th class="hidden-phone">Số lượt mua</th>
                            <th class="hidden-phone">Trạng thái</th>
                            <th class="hidden-phone"><a href="{{URL::to('admin/products/add')}}"></a><i class="fa fa-address-card "></i> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr class="gradeX">
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->old_price}}</td>
                            <td>{{$product->new_price}}</td>
                            <td><img src="{{URL::to('public/images/'.$product->image)}}" alt="" style="width: 50px"></td>
                            <td>{{$product->count_buy}}</td>
                            <td>{{$product->status}}</td>
                            <td>
                                <a href="{{URL::to('admin/products/add')}}"><i class="fa fa-shower "></i></a>
                                <a href="{{URL::to('admin/products/add')}}"><i class="fa fa-pencil "></i></a>
                                <a href="{{URL::to('admin/products/add')}}"><i class="fa fa-times"></i></a>
                            </td>


                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- page end-->

        <!-- /row -->
    </section>
@endsection
@section('js')
{{--    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>--}}
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "order": [[0, "desc"]]
            });
        });
    </script>

    @endsection
