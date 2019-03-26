@extends('layoutadmin')

@section('body')
<div class="col-lg-12 grid-margin">
    <div class="card">
        <div class="card-body" style="padding: 1.5rem 0.5rem;">
            <div style="float: right;">
                <button type="button" style="font-size: 11px;" class="btn btn-success btn-fw" data-toggle="modal" data-target="#modelqlview">
                <i class="mdi mdi-loupe"></i>Thêm mới</button>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                <thead>
                    <tr>
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
                            1
                        </td>
                        <td>
                            {{$sp['name']}}
                        </td>
                        <td>
                            {{$sp['id_type']}}
                        </td>
                        <td>
                            {{$sp['description']}}
                        </td>
                        <td>
                            {{$sp['unit_price']}}
                        </td>
                        <td>
                            {{$sp['created_at']}}
                        </td>
                        <td style="padding:0;">
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
                <h5 class="modal-title">Thêm mới</h5>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <div class="card">
                <div class="card-body">
                    <form action="{{route('button-add-product')}}" method="post" enctype="multipart/form-data">
                    @csrf 
                        <p>name</p>
                        <input type="text" name="name" id="name">
                        <p>id_type</p>
                        <input type="text" name="id_type" id="id_type">
                        <p>desc</p>
                        <input type="text" name="description" id="description">
                        <p>price</p>
                        <input type="text" name="unit_price" id="unit_price">
                        <p>unit</p>
                        <input type="text" name="unit" id="unit">
                        
                        <p>chon hinh anh</p>
                        <input type="file" id="image" name="image" >
                        <input type="submit" value="ok">
                    </form>
                    <div class="form-group">
                    <label for="exampleFormControlSelect3">Loại</label>
                    <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                        <option>Thí nghiệm</option>
                        <option>Điện tử</option>
                        <option>Khác</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label>Tên dụng cụ</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Nhập tên dụng cụ" aria-label="Nhập tên dụng cụ">
                    </div>
                    <div class="form-group">
                    <label>Công ty</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Nhập công ty" aria-label="Nhập công ty">
                    </div>
                    <div class="form-group">
                    <label>Ngày nhập</label>
                    <input id="datepicker" class="form-control form-control-lg">
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4'
                        });
                    </script>
                    </div>
                    <div class="form-group">
                    <label>Số lượng</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Nhập số lượng" aria-label="Nhập số lượng">
                    </div>
                    <div class="form-group">
                    <label>Giá</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text">VNĐ</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                        <span class="input-group-text">.000</span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>  
            </div>
                
            
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Thêm</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
      </div>
    </div>
</div>
</div>
@endsection