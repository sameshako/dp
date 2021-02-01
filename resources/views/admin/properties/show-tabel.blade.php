@foreach($properties as $elem)
<tr>
  <th><img class="img-thumbnail" src="/storage/properties/{{$elem->slug}}/{{get_images($elem->images)}}" /></th>
  <th scope="row">{{$elem->title}}</th>
  <td>{{get_property_type($elem->type)}} </td>
  <td>{{$elem->judet}} {{$elem->localitate}} {{$elem->strada}} {{$elem->apartament}} {{$elem->nr_strada}}</td>
  <td>
  @if(Auth::user()->id == $elem->user_id || Auth::user()->isAdministrator()) 
    <a href="{{route('show_one_property', $id=$elem->slug)}}" class="btn btn-outline-warning"><i>show</i></a>
    <a href="{{route('edit_property', $id=$elem->id)}}" class="btn btn-outline-primary"><i>edit</i></a>
    <form action="{{route('delete_property', $id=$elem->id)}}" method="POST">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-outline-danger">Delete</button>
    </form>
    @endif
  </td>
</tr>
@endforeach