@extends('layoutadmin')

@section('body')
    <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div style="float: right;">
          <div class="btn-group dropdown">
            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 29px, 0px);">
              <a class="dropdown-item" href="#">
                <i class="fa fa-reply fa-fw"></i>Khoa CNTT</a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-history fa-fw"></i>Khoa Dược</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="fa fa-check text-success fa-fw"></i>Khoa Cơ - Điện tử</a>
              <a class="dropdown-item" href="#">
                <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
            </div>
          </div>
        </div>
        
        <h4 class="card-title">Danh sách đề xuất đã duyệt</h4>
        <p></p>
        <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Tên khách hàng
                </th>
                <th>
                  Hình thức thanh toán
                </th>
                <th>
                  Tổng tiền
                </th>
                <th>
                  Ngày đặt hàng
                </th>
                <th>
                  Ghi chú
                </th>
                <th style="width: 5px">
                  Trạng thái
                </th>
              </tr>
            </thead>
            <tbody>
            @foreach($bill as $donhang)
            @if ($donhang['status']==$status)
            <tr >
                <td class="py-1" data-toggle="modal" data-target="#model{{$donhang['id']}}">
                  {{$dem++}}
                </td>
                <td data-toggle="modal" data-target="#model{{$donhang['id']}}">
                @foreach($customer as $cus)
                @if ($cus['id']==$donhang['id_customer'])
                  {{$cus['name']}}
                @endif
                @endforeach
                </td >
                <td data-toggle="modal" data-target="#model{{$donhang['id']}}">
                  {{$donhang['payment']}}
                </td>
                <td data-toggle="modal" data-target="#model{{$donhang['id']}}">
                  {{$donhang['total']}} VND
                </td>
                <td data-toggle="modal" data-target="#model{{$donhang['id']}}">
                  {{$donhang['date_order']}}
                </td>
                <td data-toggle="modal" data-target="#model{{$donhang['id']}}">
                  {{$donhang['note']}}
                </td>
                <td style="padding-top: 0; padding-bottom: 0">
                <a href="{{route('giao-hang',$donhang['id'])}}"><label class="badge badge-success">
                @if ($status==0)
                  Chưa giao
                @else
                  Đã giao
                @endif
                </label></a>
                </td>
              </tr>
            @endif
            @endforeach
              
              
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal cho quản lý duyệt-->
@foreach($bill as $donhang)
@if ($donhang['status']==$status)
<div class="modal" id="model{{$donhang['id']}}">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title">Thông tin chi tiết</h5>
            <button type="button" class="close" data-dismiss="modal">×</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
            <div class="col-lg-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  @foreach($customer as $cus)
                  @if ($cus['id']==$donhang['id_customer'])
                    <h4 class="card-title">{{$cus['name']}}</h4>
                    <h4 class="card-title">địa chỉ: {{$cus['address']}}</h4>
                    <h4 class="card-title">phone: {{$cus['phone_number']}}</h4>
                  @endif
                  @endforeach
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>
                            #
                          </th>
                          <th>
                            Tên dụng cụ
                          </th>
                          <th>
                            Số lượng
                          </th>
                          <th>
                            Đơn giá
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($billdetail as $detail)
                        @if ($detail['id_bill']==$donhang['id'])
                        <tr data-toggle="modal" data-target="#ModalView">
                          <td class="font-weight-medium">
                            1
                          </td>
                          <td>
                          @foreach($product  as $sp)
                          @if ($detail['id_product']==$sp['id'])
                            {{$sp['name']}}
                          @endif
                          @endforeach
                          </td>
                          <td>
                            {{$detail['quantity']}}
                          </td>
                          <td>
                            {{$detail['unit_price']}}
                          </td>
                        </tr>
                        @endif
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
                           
                          
         
      </div>
    </div>
  </div>
@endif
@endforeach      
@endsection
