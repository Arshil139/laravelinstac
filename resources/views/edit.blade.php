<h1>update memeber</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <input type="text" name="caption" value="{{$data['caption']}}"><br><br>
    
   
    <button type="submit">Update</button>
</form>