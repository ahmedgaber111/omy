<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="nav-item active">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}<span class="sr-only">(current)</span></a>
            </li>
            @endforeach
      </div>
</nav>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .error {
            color: #ae1c17;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{__('messages.Add your offer')}}

        </div>
        @if(Session::has('success'))
            <div class="alert  alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif


        <form method="POST" action="{{url('offers\store')}}" enctype="multipart/form-data">
            @csrf
            {{-- <input name="_token" value="{{csrf_token()}}"> --}}
            <div class="form-group">
                <label for="exampleInputEmail1">{{__('message.offer name_ar')}}</label>
                <input type="name" class="form-control" name="name_ar" placeholder="{{__('message.offer name_ar')}}l">
                @error('name_ar')
                <small class="form-text text-muted">{{$message}}</small>
                @enderror

                    <div class="form-group">
                        <label for="exampleInputEmail1">{{__('message.offer name_en')}}</label>
                        <input type="name" class="form-control" name="name_en" placeholder="{{__('message.offer name_en')}}l">
                            @error('name_en')
                            <small class="form-text text-muted">{{$message}}</small>
                        @enderror


                            <div class="form-group">
                                <label for="exampleInputEmail1">{{__('message.offer details_ar')}}</label>
                                <input type="name" class="form-control" name="details_ar" placeholder="{{__('message.offer details_ar')}}l">
                                    @error('details_ar')
                                    <small class="form-text text-muted">{{$message}}</small>
                                    @enderror

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{__('message.offer details_en')}}</label>
                                <input type="details" class="form-control" name="details_en" placeholder="{{__('message.offer details_en')}}l">
                                    @error('details_en')
                                    <small class="form-text text-muted">{{$message}}</small>
                                @enderror

                </div>
         ///

                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{__('message.offer price')}}</label>
                                    <input type="price" class="form-control" name="price" placeholder="{{__('message.offer price')}}">
                                    @error('price')
                                    <small class="form-text text-muted">{{$message}}</small>
                                    @enderror




                                </div>

                                ////
            <button type="submit" class="btn btn-primary">save offer</button>
        </form>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">{{__('message.offer name_ar')}}</th>
        <th scope="col">{{__('message.offer price')}}</th>
        <th scope="col">{{__('message.offer details_ar')}}</th>
        <th scope="col">{{__('message.offer details_en')}}</th>
        <th scope="col">{{__('message.offer name_en')}}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($offers as $offer)
        <tr>
            <th scope="row">{{$offer->id}}</th>
            <td>{{$offer->name}}</td>
            <td>{{$offer->price}}</td>
            <td>{{$offer->details}}</td>
            </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
