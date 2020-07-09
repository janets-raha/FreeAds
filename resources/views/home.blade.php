<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>freeads - best deals in one click</title>
    </head>

    <body>

        <!-- Navbar CSS -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <a href="/index.php"><img src="img/header/logo-fruities.png" width="70" height="70" alt="" loading="lazy">
              </a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/home') }}">HOME </a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/product') }}">+ POST ADS</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/login') }}">LOG IN</a>
                    </li>
                  </ul>
            </div>
        </nav> 

        <!-- Searchbar CSS -->

        <br><br><br>
        <div class="d-flex bg-secondary mb-3">
                    
            <div class="SearchBar d-flex bd-highlight">
                <div id="search-btn"><img src="img/search/Search.png" class="search-btn" alt="..."></div>
                <form class="p-2 flex-grow-1 bd-highlight"><div class="form-group mb-4">
                    <input id="exampleFormControlInput1" type="email" placeholder="living room" class="form-control form-control-underlined">
                    </div>
                </form>
            </div>

        </div>

        <!-- Main section CSS -->

        <div class="row">
            
            <!-- Dropdownmenu CSS -->
            <div class="col-sm-4">   
                <div class="card h-100">
                    <p><div id="filter"> FILTER BY </div></p>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            @foreach($products as $i)    
                            <a class="dropdown-item" href="#">{{$i->category}}</a>
                            @endforeach
                        </div>
                    </div>

                    <label for="quantity">Location</label>
                    <input type="number" id="quantity" name="quantity" min="1" max="5">
                    
                    <p>Price Range</p>
                    <div class="row">
                        <div class="col">
                            <label for="price-min">MIN:</label>
                            <input type="number" id="quantity" name="price-min" min="1" max="5000">
                        </div>
                        <div class="col">
                            <label for="price-max">MAX</label>
                            <input type="number" id="quantity" name="price-max" min="1" max="5000"> 
                        </div>
                    </div> 

                    <div class="condition">
                        <p>Condition</p>
                        <div class="form-check">
                            <ul>    
                                @foreach($products as $i)    
                                <li>
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                    <label class="form-check-label" for="exampleRadios1">
                                        {{$i->category}}
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
            </div>

            <!-- Gallery CSS -->
            <div class="col-sm-8">
                <div class="card h-100">
                    @foreach($products as $i)    
                    <div class="card h-100">    
                        <div class="row">    
                            <div class="col">
                                <img src="/storage/app/public/images/{{ $products['image'] }}" class="card-img-top" alt="...">
                                <h5 class="price">${{$i->price}}</h5>
                            </div> 
                            <div class="col">
                                <h4 class="card-title">{{$i->name}}</h4>
                                <p class="card-text">{{$i->category}}</p>
                                <p class="card-text">{{$i->description}}</p>
                                <p class="card-text">seller</p>
                            </div> 
                        </div>
                    </div>
                    @endforeach
                </div>            
            </div>

        </div>

        <!-- Pagination CSS -->

        <span> {{$products->links()}}</span>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    </body>
</html>