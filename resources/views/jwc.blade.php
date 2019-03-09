<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JWC #11</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body class="grad">
    <div class="container" style="margin-top:3em">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{ asset('image/logo.png') }}" alt="JWC Logo" class="logo text-center">
            </div>
            <div class="col-sm-8">
                <div class="container">
                    <div class="centor-div">
                        <h1>JWC Camp</h1>
                        <h3>Junior Web Master Camp</h3>
                        <a href="https://jwc.in.th/" class="button">Go to our Website</a>
                    </div>
                </div>

            </div>
        </div>
        <hr>
        <h1>
            History
        </h1>
        <p>
            Mauris quis elementum sem, a dapibus sapien. Sed a massa dolor. Integer faucibus facilisis nisi, eget
            ultricies risus porttitor a. Mauris quis ipsum et metus vestibulum interdum id et velit. Fusce a eleifend
            enim, sed lacinia lorem. Pellentesque ornare, nibh pellentesque porttitor gravida, ipsum augue ultrices
            nibh, a viverra justo arcu nec nisi. Nullam condimentum vulputate maximus. Sed tempus est sed nulla
            vulputate facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
            himenaeos. Nulla dictum, dui quis egestas mattis, mi quam sollicitudin nisl, a dapibus mauris risus eu
            lectus. Etiam ex risus, laoreet eu ante in, maximus egestas leo. Ut a imperdiet nulla, vitae maximus arcu.
        </p>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <h1>Review</h1>
                <form action="{{ route('save') }}" method="post">
                    @csrf
                    <div class="form-group">
                        @if ($message = Session::get('status'))
                            <div class="alert alert-success">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-3"><Label for="name" class="mt-1">Name: &emsp;</Label></div>
                            <div class="col-9">
                                <input type="text" name="name" id="name" placeholder="Name.." class="form-control float-right"
                                    >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <Label for="comment">
                            Comment:
                        </Label>
                        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" 
                            placeholder="Comment.."></textarea>
                        <div class="float-right">
                            <br>
                            <input type="reset" value="Clear" class="btn clear">
                            <input type="submit" value="Submit" class="btn submit">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-7">
                <h1>Timetable</h1>
                <div class="table-responsive">
                    <table class="table table-custom zui-table zui-table-rounded">
                        <thead>
                            <tr>
                                <th style="border-right:1px solid #ddd;"></th>
                                <th class="" colspan="2">9</th>
                                <th class="" colspan="2">10</th>
                                <th class="" colspan="2">11</th>
                                <th class="" colspan="2">12</th>
                                <th class="" colspan="2">13</th>
                                <th class="" colspan="2">14</th>
                                <th class="" colspan="2">15</th>
                                <th class="" colspan="2">16</th>
                                <th class="" colspan="2">17</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="tb-time">24/05/2000</td>
                            <td class="dash"></td>
                            <td class="dash"></td>
                            <td class="dash"></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr>
                            <td class="tb-time">25/05/2000</td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                        <tr>
                            <td class="tb-time">26/05/2000</td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                            <td class=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>

</html>
