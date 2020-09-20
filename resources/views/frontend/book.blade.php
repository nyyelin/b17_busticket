@extends('master')
@section('content')


<div class="jumbotron jumbotron-fluid subtitle">
      <div class="container">
        </div>
  </div>
  
   <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary text-center">Booking Detail</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <div class="row">
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="Width:100%;">
                  <thead>
                    <tr role="row">
                      <th>No</th>
                      <th>User Name</th>
                      <th>Leaving From</th>
                      <th>Going To</th>
                      <th>Departure Date</th>
                      <th>Time</th>
                      <th>Number of seat</th>
                      <th>Total</th>
                     
               
               </tr>
             </thead>
             <tbody>
               <tr>
                <th><input class="form-control" name="id" value="{{ $id }}"></th>
                <th><input class="form-control"  name="name" value="{{ $city_name }}"></th>
                 <th>
                  @foreach($cities as $city)
                  <input class="form-control"  name="leavingfrom" value="{{$city->name}}">
                   @endforeach 
                 </th>
                 <th>
                  @foreach($cities as $city)
                  <input class="form-control" name="goingto" value="{{$city->name}}">
                   @endforeach
                 </th>
                 <th><input  class="form-control" id="book_pick_date"  value='{{$city_date}}'></th>
                 <th><input  class="form-control" id="time_pick"  value='{{$city_time}}' name="city_time"></th>
                 <th><input class="form-control" name="" value="{{$city_seat}}"></th>
                  <th><input class="form-control" name="" value="{{$city_total}}"></th>
               </tr>
             </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
     @endsection   