@extends('admin.form_layout.col_8')

@section('bread_crumb')
    <li><a href="{{route('admin.coupon.index')}}">کوپن ها</a></li>
    <li class="active"><a href="{{route('admin.coupon.create')}}"> اضافه کردن کوپن</a></li>

@endsection

@section('form_title')اضافه کردن کوپن@endsection

@section('form_attributes') action="{{route('admin.coupon.store')}}" method="POST" enctype="multipart/form-data"  @endsection

@section('form_body')
    <div class="input-group group-sm col-lg-12 col-sm-12 col-md-12 col-xs-12">
        <span class="label">عنوان</span>
        <input class="form-control input-sm" name="title" value="{{old('title')}}">
    </div>
    <div class="input-group group-sm col-lg-12 col-sm-2 col-md-2 col-xs-3">
        <span class="label">مبلغ</span>
        <input class="form-control input-sm" act="price" name="amount" value="{{old('amount')}}">
    </div>
    <div class="input-group group-sm col-lg-12 col-sm-2 col-md-2 col-xs-3">
        <span class="label">تاریخ انقضا</span><br>
        <input class="form-control input-sm" name="expiration_datepicker" data-name="expire_at" value="{{old('expire_at')}}">
        <input type="hidden" name="expire_at" value="{{old('expire_at')}}">
    </div>
    <div class="input-group group-sm col-lg-12 col-sm-2 col-md-2 col-xs-3">
        <span class="label">شماره تماس کاربر</span>
        <input class="form-control input-sm" name="phone_number" value="{{old('phone_number')}}">
    </div>
@endsection

@section('form_footer')
    <button type="submit" class="btn btn-default btn-sm">ذخیره</button>
@endsection
