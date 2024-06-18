<x-layout>
<x-slot:title>
        Contact
    </x-slot:title>
<form action="/search" method="post">
@csrf
<input type="text" name="search" placeholder="A+" >
<button type="submit"  class="mx-2 bg-blue-900 hover:bg-blue-500 text-white p-2 rounded" >Search</button>

<table>
<tr><th class="p-1">Name</th>
<th class="p-1">Blood Group</th>
<th class="p-1">Phone</th>
<th class="p-1">Last Donation</th>
<th class="p-1">Action</th>
</tr>
@foreach($peeps as $peep)
<tr>
<td ><h3>{{$peep['name']}}</h3></td>
<td ><h3>{{$peep['bg']}}</h3></td>
<td><h3>{{$peep['phone']}}</h3></td>
<td ><h3>{{$peep['blood_last_given']}}</h3></td>
<td ><h3><a href="tel:{{$peep['phone']}}">Call</a></h3></td>
</tr>
@endforeach
</table>



</form>
</x-layout>