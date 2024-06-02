@extends('layouts.admin')
@section('title','- Bảng điều khiển')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ĐƠN HÀNG</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Thương hiệu</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-12 text-right">
            <td> 
              <a href="#" class="btn btn-sm btn-info">
                <i class="fas fa-plus"></i> Thêm
              </a>
              <a href="#" class="btn btn-sm btn-danger">
                <i class="fas fa-trash"></i> Thùng rác
              </a>
              
            </td>
          
          </div>
        </div>
      </div>
      <div class="card-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center" style="width: 30px">#</th>
                <th>Người giao hàng</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th class="text-center" style="width: 170px">Chức năng</th>
                <th class="text-center" style="width: 50px">ID</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($list as $row)
 
              <tr>
                <td class="text-center">
                  <input type="checkbox" id="checkID" value="1" name="checkID[]">
                </td>
                <td>{{$row->delivery_name}}</td>
                <td>{{$row->delivery_gender}}</td>
                <td>{{$row->delivery_email}}</td>
                <td>{{$row->delivery_phone}}</td>
                <td>{{$row->delivery_address}}</td>
                <td> 
                  <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-toggle-on"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-info">
                    <i class="fas fa-eye"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i>
                  </a>
                  <a href="#" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
       </div>
      </div>
    </div>
  </section>
@endsection



