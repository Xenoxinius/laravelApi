<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
<form action="" method="get">
    <input type="text" placeholder="search character" name="search" id="search">
    <input type="submit" value="submit">
</form>

@if(isset($response->data->results[0]->name) )
<h2>{{$response->data->results[0]->name}}</h2>
@if(!empty($response->data->results[0]->description) )
<p><strong>description</strong>: <br>{{$response->data->results[0]->description}}</p>
@endif
<p>link: <a href="{{$response->data->results[0]->urls[0]->url}}">Webpage</a></p>
<img src="{{$response->data->results[0]->thumbnail->path}}.jpg" width="300em" height="300em">
@else
    <p>This character does not exist or is not in the database yet</p>
@endif
</body>
</html>
