<head>
    <style>
        /* @import url(https://fonts.googleapis.com/css?family=Merriweather:400,700,700italic,900,900italic,400italic,300italic,300); */

        body {
            font-family: "Courier New", Courier, monospace;
            /*   font-family: 'Merriweather', serif; */
            font-size: 18px;
            background-color: black;
        }

        .row {
            /* min-height: 1000px; */
            ;
            background-color: white;
        }

        a,
        a:active {
            text-decoration: underline;
            color: black;
        }

        a:hover {
            color: grey;
        }

        mark {
            background-color: lightgrey;
            color: black;
        }

        pre {
            padding-left: 20px;
            background-color: black;
            color: grey;
        }

        .pageNav a,
        .pageNav a:active {
            font-family: "", sans-serif, monospace;
            font-size: 18px;
            text-decoration: none;
            color: black;
        }

        li {
            list-style: none;
            display: inline;
        }
    </style>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Blogging</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                @if(Auth::check())
                <li class="nav-item" style="margin-left:1100px;">
                    <a class="nav-link" href="/home">Myaccount</a>
                </li>
                @else
                <li class="nav-item" style="margin-left:1100px;">
                    <a class="nav-link" href="/home">Login/Register</a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
    <br>

    <article>
        <div class="container">
            <div class="row">

                <div class="col">
                    @foreach($data as $blog)
                    @if($blog->status=="Accepted")
                    <div class="card mb-3" style="max-width: 1540px;border:none;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/images/{{$blog->image}}" class="card-img" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2 class="card-title">{{$blog->title}}</h2>
                                    <p style="text-align:right;"><small>By&nbsp;{{$blog->name}}</small></p>

                                    <p>
                                        <a  data-toggle="collapse" href="#{{$blog->id}}"
                                            role="button" aria-expanded="false" aria-controls="collapseExample">
                                            Click here to read the blog........
                                        </a>
                                    </p>
                                    <div class="collapse" id="{{$blog->id}}">
                                        <div class="card card-body">
                                        {{$blog->content}}
                                        </div>
                                    </div>
                                    <hr>
                                    <h5> Comments:</h5>
                                    <br>
                                    @foreach($blog->comments as $comment)
                                    <p>~&nbsp;{{ $comment->comment }} </#&nbsp;>
                                    </p>
                                    @endforeach
                                    @if(Auth::check())
                                    <form action="/comments_add/{{$blog->id}}" method="POST">
                                        @csrf
                                        <b>Leave a Comment:</b><input type="text" class="form-control form-control-sm "
                                            name="comment" id="comment">
                                        <br>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </article>
</body>