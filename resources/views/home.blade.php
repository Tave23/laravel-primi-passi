<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <title>Homepage</title>
</head>
<body>

   <div class="container">

      <h1 class="text-center my-3">Questa è l'homepage</h1>

      <ul class="list-group">
         <li class="list-group-item">
            <a href="{{ route('who') }}">Chi siamo?</a>
         </li>
         <li class="list-group-item">
            <a href="{{ route('where') }}">Dove siamo?</a>
         </li>
         <li class="list-group-item">
            <a href="{{ route('name') }}">Come mi chiamo?</a>
         </li>
      </ul>

      <h3 class="my-4"> 
         Questi sono i miei fratelli:
      </h3>

      <ul>
         @foreach ($employes as $employe)
            
            <li>{{$employe}}</li>

         @endforeach
      </ul>

   </div>

</body>
</html>