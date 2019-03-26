@extends('layoutadmin')

@section('body')
<div class="col-lg-12 grid-margin">
    <div class="card">
        <div class="card-body" style="padding: 1.5rem 0.5rem;">
            <h4 class="card-title">Danh sách sản phẩm</h4>
            <div style="float: right;">
                <button type="button" style="font-size: 11px;" class="btn btn-success btn-fw" data-toggle="modal" data-target="#modelqlview">
                <i class="mdi mdi-loupe"></i>Thêm mới</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                <thead>
                    <tr style="text-align:center;">
                    <th>
                        #
                    </th>
                    <th>
                        Tên sản phẩm
                    </th>
                    <th>
                        Loại
                    </th>
                    <th>
                        Chi tiết
                    </th>
                    <th>
                        Đơn giá
                    </th>
                    <th>
                        Ngày thêm 
                    </th>
                    <th style="width: 5px">
                        Thao tác
                    </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($product as $sp)
                        <td class="py-1">
                            {{$dem++}}
                        </td>
                        <td>
                            <!-- <span class="tooltip"><img src="/source/images/products/{{$sp['image']}}"></span> -->
                            {{$sp['name']}}
                        </td>
                        <td>
                            {{$sp['id_type']}}
                        </td>
                        <td style="width:60%;line-height:2;white-space:initial;">
                            {{$sp['description']}}
                        </td>
                        <td>
                            {{$sp['unit_price']}} VNĐ
                        </td>
                        <td>
                            {{$sp['created_at']}}
                        </td>
                        <td style="padding:0;text-align:center;">
                            <button type="button" class="btn btn-icons btn-inverse-warning" data-toggle="modal" data-target="#modelqlview">
                            <i class="mdi mdi-eye"></i></button>
                            <button type="button" class="btn btn-icons btn-inverse-danger">
                            <i class="mdi mdi-close"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal cho quản lý duyệt-->
<div class="modal" id="modelqlview">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
          <!-- Modal Header -->
            <div class="modal-header">
                <h5 class="modal-title">Thêm mới sản phẩm</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                <div class="card-body">
                    <form action="{{route('button-add-product')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input name="name" id="name" type="text" class="form-control form-control-lg" placeholder="Nhập tên sản phẩm" aria-label="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Loại sản phẩm</label>
                            <input name="id_type" id="id_type" type="number" class="form-control form-control-lg" placeholder="Nhập loại sản phẩm" aria-label="Nhập loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <input name="description" id="description" type="text" class="form-control form-control-lg" placeholder="Nhập mô tả sản phẩm" aria-label="Nhập mô tả sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Giá</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">VNĐ</span>
                                </div>
                                <input type="number" name="unit_price" id="unit_price" class="form-control" aria-label="Amount (to the nearest dollar)">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Quy cách</label>
                            <input name="unit" id="unit" type="text" class="form-control form-control-lg" placeholder="Nhập quy cách sản phẩm" aria-label="Nhập mô tả sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>Chọn ảnh</label>
                            <input type="file" id="image" name="image" >
                        </div>
                        
                        <input type="submit" class="btn btn-success" value="Thêm">
                    </form>
                </div>
                </div>  
            </div>
                
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
      </div>
    </div>
</div>
</div>
@endsection