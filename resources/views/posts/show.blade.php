<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                <h1>Post info</h1><br>
                  <table id="datatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
               <th>Title</th>
               <th>content</th>
              
               
              </tr>
            </thead>
    
              <tbody>
                        <tr>
                          <td>{{$post->title}}</td>
                          <td>{{$post->content}}</td>
                          
                        </tr>
                 
                        
              </tbody>
    </table>
              
                </div>
              </div>
            </div>
</head>
<body>
    
</body>
</html>