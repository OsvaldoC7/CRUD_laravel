@extends('layouts.dashboard-layout')
@section('navigation')

<div class="navigation">

    <ul>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="flash-outline"></ion-icon></ion-icon></span>
                <span class="title">Brand name</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                <span class="title">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                <span class="title">Customers</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                <span class="title">Message</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                <span class="title">Help</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                <span class="title">Settings</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                <span class="title">Password</span>
            </a>
        </li>

        <li>
            <a href="#">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Sign out</span>
            </a>
        </li>

    </ul>

</div>
    
@endsection