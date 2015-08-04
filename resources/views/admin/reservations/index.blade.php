@extends('layouts.admin')
@section('title')
    Reservations
@endsection
@section('scripts')
    <script src="{{ asset('/admins/js/angular/reservation-app.js') }}"></script>
@endsection
@section('content')
    <section class="wrapper" ng-app="reservationApp" ng-controller="reservationController">
        <h1>Reservations</h1>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped table-advance table-hover">
                    <thead>
                    <tr>
                        <th><i class="fa fa-users"></i> Adults / Kids</th>
                        <th><i class="fa fa-calendar"></i> Checkin date</th>
                        <th><i class="fa fa-calendar"></i> Checkout date</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat='reservation in reservations'>
                        <td><a href="#"><% reservation.adults %> / <% reservation.kids %></a></td>
                        <td><a href="#"><% reservation.checkin_date %></a></td>
                        <td><a href="#"><% reservation.checkout_date %></a></td>
                        <td>
                            <button class="btn btn-danger btn-xs" ng-really-message="Are you sure?" ng-really-click="deleteRoomType($index)"><i class="fa fa-trash-o "></i></button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection