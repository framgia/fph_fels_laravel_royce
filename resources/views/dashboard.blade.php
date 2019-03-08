@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content">
        <div class="col-md-3">
            <div class="profile-pic">
                <i> Put image here </i>
            </div>
            <div >
                <table class="profile-summary">
                    <tr> 
                        <th ><h3> {{ Auth::user()->name }} <h3> </th>
                    </tr>
                    <tr>
                        <th> Followers:</th><td><a href="#">5</a></td>
                    </tr>
                    <tr>
                        <th>Following:</th><td><a href="#">5</a></td>
                    </tr>
                </table>
            </div>

        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header"><h2>Activites</h2></div>
                <div class="card-body">
                    <div class ="activity-log">
                        <p>
                            <a href = "#"> You </a> 
                            learned n of n words in 
                            <a href="#"> lesson </a> <br>
                            <i class="activity-log-history">
                                <small> 
                                    some time ago 
                                </small>
                            </i>
                        </p>
                    </div>
                    <div class ="activity-log">
                        <p>
                            <a href = "#"> You </a> 
                            learned n of n words in 
                            <a href="#"> lesson </a> <br>
                            <i class="activity-log-history">
                                <small> 
                                    some time ago 
                                </small>
                            </i>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
