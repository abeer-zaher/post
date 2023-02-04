@foreach ($comments as $item)

<div @if($item->parent_id != null) 
    style="margin-lift:60px;color:red"
    @endif>
    <strong>
        {{$item->user->name}}
    </strong>
    <p>{{$item->description}}</p>
    <form action="{{route('comments.store')}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token()}}"/>
                        <div class="form-group">
                            <textarea type="text" class="form-control" name="description" ></textarea>
                            <input type="hidden" class="form-control" name="post_id" value="{{$post_id}}" >
                            <input type="hidden" class="form-control" name="parent_id" value="{{$item->id}}" >

                        </div>
                        <button type="submit" class="btn btn-primary">Reply</button>
                        </form>
                        @include('posts.comments',['comments'=>$item->replies])
</div>

@endforeach