<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>content</th>
                          <th>Edit</th>
                          <th>Delete</th>
                          <th>Show</th>
                        </tr>
                      </thead>
    
                      <tbody>
                      @foreach ($post as $val)
                        <tr>
                          <td>{{$val->title}}</td>
                          <td>{{$val->content}}</td>
                          
                          @if(Auth::user()->admin=="Yes")
                          <td><a href="editpost/{{$val->id}}"><img src="./images/edit.png" alt="Edit"></a></td>
                          <td>
                             <form action="{{route('deletepost')}}" method="post">
                               @csrf 
                               @method("delete")
                              <input type="hidden" name="id" value="{{$val->id}}">
                              <input type="submit" value="delete">
                             </form>
                             @endif
                             <td><a href="/showpost/{{$val->id}}">Show</a></td>
                          </td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
</head>
<body>
    
</body>
</html>