<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-head/>
   <style>
     #laravel-notify .notify{
        z-index:+99999;
    }
   </style>

    <body >
       
        @if (request()->routeIs('home.events.details'))
            
        @else
        <x-topbar />
        @endif
       
        <x-header />
        @yield('content')
        

        @livewireScripts

        <x-foot/>
        <x-modals/>
        <x-footer/>
    </body>
</html>
