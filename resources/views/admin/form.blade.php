




<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Evenement Dashboard | By Code Info</title>
      <link rel="stylesheet" href="style.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <link rel="stylesheet" href="{{ asset('storage/style.css') }}">
    <body>
      <div class="container">
        <nav>
          <ul>
            <li><a href="#" class="logo">
              <img src="{{ asset('storage/assets/img/avatars/avatar2.png') }}">
              <span class="nav-item">{{ Auth::user()->name}}</span>
            </a></li>
            <li><a href=""{{ route('admin.evenement.index') }}>
              <i class="fas fa-menorah"></i>
              <span class="nav-item">Evenement</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-comment"></i>
              <span class="nav-item">Message</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-database"></i>
              <span class="nav-item">Report</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-chart-bar"></i>
              <span class="nav-item">Attendance</span>
            </a></li>
            <li><a href="#">
              <i class="fas fa-cog"></i>
              <span class="nav-item">Setting</span>
            </a></li>

            <li><form action="{{ route('logout') }}" method="POST" class="logout">
              <i class="fas fa-sign-out-alt"></i>
              <button class="nav-item">Se deconecter</button>
            </form></li>
          </ul>
        </nav>

        <section class="main">

            <div class="main-top">
                <h1>Nouvelle </h1>
                <i class="fas fa-user-cog"></i>
            </div>

            <div class="card p-3">

                <form action="{{ route($evenement->exists ? 'admin.evenement.update' : 'admin.evenement.store', $evenement) }}"
                    method="post" class="row g-3"  enctype="multipart/form-data">
                    @csrf
                    @method($evenement->exists ? 'put' : 'post')

                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Nom</label>
                      <input type="text" class="form-control" id="inputEmail4"  name="nom" value="{{$evenement->nom}}">
                    </div>

                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Lieu</label>
                      <input type="text" class="form-control" id="inputEmail4"  name="lieu" value="{{$evenement->lieu}}">
                    </div>

                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Date</label>
                      <input type="date" class="form-control" id="inputEmail4"  name="date" value="{{$evenement->date}}">
                    </div>

                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Photo</label>
                      <input class="form-control form-control-lg" name="photo" id="formFileLg" type="file">
                  </div>

                    <div class="col-md-12">
                      <label for="inputEmail4" class="form-label">Description</label>
                      <input type="text" class="form-control" id="inputEmail4"  name="description" value="{{$evenement->description}}">
                    </div>


                    <div class=" ">
                        @if ($evenement->exists)
                        <button>Modifier</button>
                        @else
                        <button>Ajouter</button>
                        @endif
                    </div>


                </form>

            </div>


        </section>

    </div>


    </body>
    </html>
    </span>




