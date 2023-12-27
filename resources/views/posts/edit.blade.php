<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    
     <h1> Edit A Post</h1>

      <div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
         <li>
            {{$error}}
         </li>
         @endforeach
    </ul>

     @endif
</div>

      <form method="post" action="{{route('post.update', ['post'=> $post])}}">

          @csrf 
          @method('put')

         <div>
        <label for="name">Name:</label>
         <input type="name" name="name" placeholder="Enter the Name" value ="{{$post->name}}">
         </div>
  <br><br>
          <div>
          Describe:<textarea name="description" id="" cols="30" rows="2" > {{$post->description}}</textarea>
          </div>
         
           <div>
            <input type="submit" value="UPDATE">
           </div>

      </form>

</body>
</html>