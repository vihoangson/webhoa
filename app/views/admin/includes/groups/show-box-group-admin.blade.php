@foreach($groups as $key => $group)

    @if(count($group->children) > 0)
        <div><input {{(in_array($group->id,$checked_group)?"checked='checked'":"")}} type="checkbox"
                    name="groups[]"
                    value="{{$group->id}}" id="group-{{$group->id}}"><label
                    for="group-{{$group->id}}"> {{$group->name}}</label></div>
        @foreach($group->children as $key_child => $group_child)

            <div> --- <input {{(in_array($group_child->id,$checked_group)?"checked='checked'":"")}} type="checkbox"
                             name="groups[]" value="{{$group_child->id}}" id="group-{{$group_child->id}}"><label
                        for="group-{{$group_child->id}}"> {{$group_child->name}}</label></div>
        @endforeach
    @endif
@endforeach