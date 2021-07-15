<!DOCTYPE html>
<html lang="en">
    <head>
        <title>busForm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./bootstrap3/css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/customCss.css">
        <script src="./js/jquery.min.js"></script>
        <script src="./bootstrap3/js/bootstrap.min.js"></script>

    </head>
    <body >
        <div class="container">
            <h1 class="text-center textColor"><strong>BOOK KKT BUS TICKET NOW</strong></h1>
            <div>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                    </div>

                @endif
            </div>
            <form class="form-horizontal "action="{{route('addData.save')}}" method="POST">
              @csrf <!-- add csrf field on your form -->
                <div class="form-group">
                    <label for="inputUserName" >Name</label>
                    <input type="text" class="form-control" placeholder="Full name"/>
                </div>
                <div class="form-group">
                    <label for="" >Leaving From</label>
                    <input type="text" class="form-control" placeholder="Leaving From"/>
                </div>
                <div class="form-group">
                    <label for="" >Travelling TO</label>
                    <input type="text" class="form-control" placeholder="Travelling To"/>
                </div>
                
                <button  type="submit" class="btn btn-default textColor btn-primary"> <strong>Search for the available Buses</strong></button>
            </form>
        </div>
    
    </body>
</html>