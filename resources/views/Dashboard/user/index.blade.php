<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
    <title>{{ $title }} | Dash Ui</title>
</head>

<body>
    <div id="db-wrapper">
        <!-- navbar vertical -->
        @include('partials.navbar-vertical')
        <!-- Page content -->
        <div id="page-content">
            @include('partials.header')
            <!-- Container fluid -->
            <div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 fw-bold text-white">Projects</h3>
                                </div>
                                <div>
                                    <a href="/Dashboard/user/create" class="btn btn-white">Create New Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Projects</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                        <i class="bi bi-briefcase fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">18</h1>
                                    <p class="mb-0"><span class="text-dark me-2">2</span>Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Active Task</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                        <i class="bi bi-list-task fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">132</h1>
                                    <p class="mb-0"><span class="text-dark me-2">28</span>Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Teams</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                        <i class="bi bi-people fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">12</h1>
                                    <p class="mb-0"><span class="text-dark me-2">1</span>Completed</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card rounded-3">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center
                    mb-3">
                                    <div>
                                        <h4 class="mb-0">Productivity</h4>
                                    </div>
                                    <div
                                        class="icon-shape icon-md bg-light-primary text-primary
                      rounded-1">
                                        <i class="bi bi-bullseye fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">76%</h1>
                                    <p class="mb-0"><span class="text-success me-2">5%</span>Completed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white border-bottom-0 py-4">
                                <h4 class="mb-0">Active Projects</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Kegiatan</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Documentasi</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="align-middle border-bottom-0">{{ $loop->iteration }}</td>
                                                <td class="align-middle border-bottom-0">{{ $post->kegiatan }}</td>
                                                <td class="align-middle border-bottom-0">{{ $post->tanggal }}</td>
                                                <td class="align-middle border-bottom-0">{{ $post->jam }}</td>
                                                <td class="align-middle border-bottom-0">{{ $post->category->name }}
                                                </td>

                                                <td><a href="/Dashboard/user/show" class="badge bg-info"><i
                                                            class="bi bi-eye"></i></a></td>
                                                <td><a href="/Dashboard/user/update" class="badge bg-warning"><i
                                                            class="bi bi-plus-circle"></i></a></td>

                                                <form action="/Dashboard/user" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <td>
                                                        <button class="badge bg-danger border-0"
                                                            onclick="return confirm('Hapus Data Ini?')"><i
                                                                class="bi bi-x-circle"></i></button>
                                                    </td>
                                                </form>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- card footer  -->
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
                <!-- row  -->
                {{-- <div class="row my-6">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12 mb-6 mb-xl-0">
              <!-- card  -->
              <div class="card h-100">
                <!-- card body  -->
                <div class="card-body">
                  <div class="d-flex align-items-center
                    justify-content-between">
                    <div>
                      <h4 class="mb-0">Tasks Performance </h4>
                    </div>
                    <!-- dropdown  -->
                    <div class="dropdown dropstart">
                      <a class="text-muted text-primary-hover" href="#"
                        role="button" id="dropdownTask" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="icon-xxs" data-feather="more-vertical"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownTask">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <!-- chart  -->
                  <div class="mb-8">
                    <div id="perfomanceChart"></div>
                  </div>
                  <!-- icon with content  -->
                  <div class="d-flex align-items-center justify-content-around">
                    <div class="text-center">
                      <i class="icon-sm text-success"
                        data-feather="check-circle"></i>
                      <h1 class="mt-3 fw-bold mb-1">76%</h1>
                      <p>Completed</p>
                    </div>
                    <div class="text-center">
                      <i class="icon-sm text-warning"
                        data-feather="trending-up"></i>
                      <h1 class="mt-3 fw-bold mb-1">32%</h1>
                      <p>In-Progress</p>
                    </div>
                    <div class="text-center">
                      <i class="icon-sm text-danger"
                        data-feather="trending-down"></i>
                      <h1 class="mt-3 fw-bold mb-1">13%</h1>
                      <p>Behind</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- card  -->
            <div class="col-xl-8 col-lg-12 col-md-12 col-12">
              <div class="card h-100">
                <!-- card header  -->
                <div class="card-header bg-white border-bottom-0 py-4">
                  <h4 class="mb-0">Teams </h4>
                </div>
                <!-- table  -->
                <div class="table-responsive">
                  <table class="table text-nowrap">
                    <thead class="table-light">
                      <tr>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Last Activity</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="images/avatar/avatar-2.jpg"
                                alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class="fw-bold mb-1">Anita Parmar</h5>
                              <p class="mb-0">anita@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Front End Developer</td>
                        <td class="align-middle">3 May, 2021</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#"
                              role="button" id="dropdownTeamOne"
                              data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-xxs" data-feather="more-vertical"></i>
                            </a>
                            <div class="dropdown-menu"
                              aria-labelledby="dropdownTeamOne">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="images/avatar/avatar-1.jpg"
                                alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class="fw-bold mb-1">Jitu Chauhan</h5>
                              <p class="mb-0">jituchauhan@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Project Director </td>
                        <td class="align-middle">Today</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#"
                              role="button" id="dropdownTeamTwo"
                              data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-xxs" data-feather="more-vertical"></i>
                            </a>
                            <div class="dropdown-menu"
                              aria-labelledby="dropdownTeamTwo">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="images/avatar/avatar-3.jpg"
                                alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class="fw-bold mb-1">Sandeep Chauhan</h5>
                              <p class="mb-0">sandeepchauhan@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Full- Stack Developer</td>
                        <td class="align-middle">Yesterday</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#"
                              role="button" id="dropdownTeamThree"
                              data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-xxs" data-feather="more-vertical"></i>
                            </a>

                            <div class="dropdown-menu"
                              aria-labelledby="dropdownTeamThree">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle">
                          <div class="d-flex align-items-center">

                            <div>
                              <img src="images/avatar/avatar-4.jpg"
                                alt="" class="avatar-md avatar rounded-circle">
                            </div>

                            <div class="ms-3 lh-1">
                              <h5 class="fw-bold mb-1">Amanda Darnell</h5>
                              <p class="mb-0">amandadarnell@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Digital Marketer</td>
                        <td class="align-middle">3 May, 2021</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#"
                              role="button" id="dropdownTeamFour"
                              data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-xxs" data-feather="more-vertical"></i>
                            </a>

                            <div class="dropdown-menu"
                              aria-labelledby="dropdownTeamFour">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>

                        <td class="align-middle">
                          <div class="d-flex align-items-center">

                            <div>
                              <img src="images/avatar/avatar-5.jpg"
                                alt="" class="avatar-md avatar rounded-circle">
                            </div>

                            <div class="ms-3 lh-1">
                              <h5 class="fw-bold mb-1">Patricia Murrill</h5>
                              <p class="mb-0">patriciamurrill@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle">Account Manager</td>
                        <td class="align-middle">3 May, 2021</td>
                        <td class="align-middle">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#"
                              role="button" id="dropdownTeamFive"
                              data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-xxs" data-feather="more-vertical"></i>
                            </a>

                            <div class="dropdown-menu"
                              aria-labelledby="dropdownTeamFive">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle border-bottom-0">
                          <div class="d-flex align-items-center">
                            <div>
                              <img src="images/avatar/avatar-6.jpg"
                                alt="" class="avatar-md avatar rounded-circle">
                            </div>
                            <div class="ms-3 lh-1">
                              <h5 class="fw-bold mb-1">Darshini Nair</h5>
                              <p class="mb-0">darshininair@example.com</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle border-bottom-0">Front End Developer</td>
                        <td class="align-middle border-bottom-0">3 May, 2021</td>
                        <td class="align-middle border-bottom-0">
                          <div class="dropdown dropstart">
                            <a class="text-muted text-primary-hover" href="#"
                              role="button" id="dropdownTeamSix"
                              data-bs-toggle="dropdown" aria-haspopup="true"
                              aria-expanded="false">
                              <i class="icon-xxs" data-feather="more-vertical"></i>
                            </a>

                            <div class="dropdown-menu"
                              aria-labelledby="dropdownTeamSix">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else
                                here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> --}}
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @include('partials.scripts')


</body>

</html>
