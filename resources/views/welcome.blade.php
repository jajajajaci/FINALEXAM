<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Final Exam</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="{{ asset('js/app.js') }}" defer></script>
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<br>
<br>
<body class="bg-white">
  <div class="container bg-opacity-dark p-3">
    <div class="content border border-dark bg-opacity-tan p-3 my-3 mx-3">
      <div class="user-input text-center bg-opacity-secondary p-3">
        <form action="/" method="get">
          @csrf
          <div class="row m-2">
            <div class="col-sm-12"><label for="value1">City</label></div>
            
          </div>
          <div class="row m-2">
            <div class="col-sm-12"><input type="text" name="q" id="" placeholder="Input City" value=""></div>
              </div>
    
          <button type="submit" class="mt-3 btn btn-info">Submit</button>
        </form>
      </div>
    </div>

    <div class="border border-dark bg-opacity-tan p-3 my-3 mx-3">
      <div class="results text-center bg-opacity-secondary p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($data)
          <div class="col-3"><h4>Country</h4></div>
          <div class="col-9">
            {{print_r($data[0]["Country"]["LocalizedName"])}}
            
          </div>
          <div class="col-3"><h4>Continent</h4></div>
          <div class="col-9">
          {{print_r($data[0]["TimeZone"]["Name"])}}
          </div>
          <div class="col-3"><h4>City</h4></div>
          <div class="col-9">
          {{print_r($data[0]["EnglishName"])}}
          </div>
              </div>
            </div>
          </div>

          @endisset
        </div>
      </div>
    </div>
  </div>
</body>
</html>