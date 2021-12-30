<table>
<tr>
<td>id</td>
<td>targa</td>
</tr>
@foreach($data['mezzi'] as $mz)
<tr>
<td>{{$mz->id}}</td>
<td>{{$mz->targa}}</td>
</tr>
@endforeach
</table>