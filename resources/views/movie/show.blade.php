<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="form-body">
            <div class="row">

                <div class="col-md-12">
                    
                    <div class="form-group">

                        {{-- <label for="eventRegInput1">Movie_Title:
                        </label>  --}}

                    @foreach ($crud as $image)

{{-- @dump($image->movie_description) --}}

                    <h1>{{$image->movie_title}}</h1>

                    <h1>{{$image->movie_name}}</h1> 

                    <h1>{{$image->movie_description}}</h1>

                    <h1><img src="{{asset('file/'.$image->file)}}" width="350px"></h1>


                    @endforeach

                    </div>
                </div> 
            </div>
        </div>                                    
    </div>
</div>                   
</body>
</html>