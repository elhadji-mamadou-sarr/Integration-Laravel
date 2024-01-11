




<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <title>Evenement Dashboard | By Code Info</title>
      <link rel="stylesheet" href="style.css" />
      <!-- Font Awesome Cdn Link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
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

            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <i class="fas fa-sign-out-alt"></i>
                    <x-dropdown-link :href="route('logout')" class="logout"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Se deconnecter') }}
                    </x-dropdown-link>
                </form>

            </li>

          </ul>

        </nav>

        <section class="main">

            <button class="btn btn-info btn-sm " onclick="history.back()">
                <i class="fas fa-arrow-left"></i>  Retour
            </button>

            <div class="main-top">
                <h1>Reservation</h1>
                <i class="fas fa-user-cog"></i>
              </div>
              <div class="users">
                @foreach ($reservations as $reservation)
                    <div class="card">
                    <img src="./pic/img1.jpg">
                    <h4>{{ $reservation->user_id }}</h4>
                    <p>Ui designer</p>
                    <div class="per">
                        <table>
                        <tr>
                            <td><span>85%</span></td>
                            <td><span>87%</span></td>
                        </tr>
                        <tr>
                            <td>Month</td>
                            <td>Year</td>
                        </tr>
                        </table>
                    </div>
                    <button>Valider</button>
                    </div>
                @endforeach
              </div>

              <section class="attendance">
                <div class="attendance-list">

                    <div class="d-flex justify-content-between">
                        <h1>Evenements programmer</h1>
                        <a href="{{ route('admin.evenement.create') }}">
                        <button>
                        Nouveau</button></a>

                    </div>

                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Lieu</th>
                        <th>Date</th>
                        <th>Détails</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($evenements as $evenement)
                        <tr>
                            <td>{{ $evenement->id_evenement }}</td>
                            <td>{{ $evenement->nom }}</td>
                            <td>{{ $evenement->lieu }}</td>
                            <td>{{ $evenement->date }}</td>
                            <td>{{ $evenement->description }}</td>
                            <td class="d-flex">
                                <a href="{{ route('admin.evenement.edit', $evenement->id_evenement) }}">
                                    <button>Modifier </button>
                                </a>
                                <a href="{{ route('admin.evenement.destroy', $evenement->id_evenement) }}">
                                    <button>Supprimer</button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </section>

        </section>

    </div>


    </body>
    </html>
    </span>



