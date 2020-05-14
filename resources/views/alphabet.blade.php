
<body>
@include('inc.navbar')
<br>
<br>
<br>

<form action="" method="get">
@foreach(range('a', 'z') as $char)
    <button name="letter" id="a" value={{$char}}>{{$char}}</button>
@endforeach
</form>

@for ($i =0; $i < count($alphabetResponse->data->results); $i++)
    @if(isset($alphabetResponse->data->results[$i]->name) )
        <a href="https://marvel.fandom.com/wiki/{{$alphabetResponse->data->results[$i]->name}}" target="_blank">{{$alphabetResponse->data->results[$i]->name}} <br></a>
    @endif
@endfor
</body>

