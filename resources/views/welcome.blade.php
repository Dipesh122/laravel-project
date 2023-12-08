<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dipesh Todo</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- boostrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card mt-4" style="width: 25rem;">
          <div class="card-body">
            <h5 class="card-title">Todo List</h5>
            <form method="POST" action="/">
              @csrf
              <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" class="form-control">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label">Status</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card mt-4 p-1" style="width: 25rem;">
          <table class="table table-borderless">
            
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>