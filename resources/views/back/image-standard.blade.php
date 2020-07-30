@foreach($photos as $photo)
<tr>
<td class="center widthbutton"><a class="btn btn-danger listbuttonremove" id="{{$photo->id}}" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

<td><img src="{{ asset('public/images/' . $photo->image) }}" alt /></td> 
</tr>
@endforeach
