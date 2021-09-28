<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="content">
         @foreach ($pdksz as $key => $value)
           {{$key+1 }} :
           {{ $value->tc }}
           <br>
           {{ $value->type }}
           <br>
           {{ $value->tarih }}
           <hr>
         @endforeach
        </div>

    <input type="text" name="giris" value="giriş">
  </body>
</html>
