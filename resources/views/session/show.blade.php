<x-layout>
    <x-slot:title>
        User Profile
    </x-slot:title>
    <x-slot:heading>
        Your Profile
    </x-slot:heading>
    <form>
    <h3>Name: {{$user['name']}}</h3>
    <h3>Nid: {{$user['nid']}}</h3>
    <h3>Blood Group: {{$user['bg']}}</h3>
    <h3>Phone: {{$user['phone']}}</h3>
    <h3>City: {{$user['city']}}</h3>
    <h3>Thana: {{$user['thana']}}</h3>
    <h3>Last Blood Given: {{$user['blood_last_given']}}</h3>
    @can('access_user')
        <button class="bg-blue-500 text-white rounded p-2 m-2"><a href="/session">Edit Info</a></button>
<button form="delete" class="bg-red-500 text-white rounded p-2 m-2"
>Delete</a></button>

    </form>
    <form method="post" action="/sessiondel" class="hidden" id="delete">
        @csrf
        @method('PATCH')
    </form>
    @endcan

    
</x-layout>