<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts:</title>
</head>
<body>
    
      <h1>Posts:</h1>

       <div>
        @if(session()->has('success'))
         <div>

            {{session('success')}}
         </div>
         @endif
       </div>

       <div>
         <div>
            <a href="{{route('post.create')}}">Create A Post</a> <br> <br>
         </div>
        <table border="1">

             <tr>
                <th>Id No:</th>
                <th>Name:</th>
                <th>Description:</th>
                <th>Edit:</th>
                <th>Delete:</th>
             </tr>

             @foreach($posts as $post)
             
              <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <a href="{{route('post.edit', ['post' => $post])}}">Edit</a>
                </td>
                
                 <td>
                    <form method="post" action="{{route('post.destroy', ['post' => $post])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                 </td>

              </tr>

             @endforeach

        </table>
       </div>

</body>
</html>