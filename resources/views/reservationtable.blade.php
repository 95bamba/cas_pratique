@extends('heritad')
@section('content')

<div class="card">

    <div class="card-body table-responsive">
        <table class="table ">
            <thead id="">
                <br><br><br>
                <tr>
                    <h5 align='rihgt>

                
            <li class="nav-item d-block d-xl-none" >
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <d class="navbar-collapse justify-content-end px-0" id="navbarNav" align=' left'>
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end ">
                            <li class="nav-item dropdown ">
                                <a class="nav-link nav-icon-hover btn btn-succes " href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    type de reservation </a>
                                <div class="dropdown-menu bg-dark dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body bg-white" align='center'>
                                        <a href="mesreservation" class="d-flex align-items-left gap-2 dropdown-item">

                                            <h1 class="mb-0 fs-3 ">reservation chambres</h1>
                                        </a>
                                        <a href="reservationtable"
                                            class="d-flex align-items-center gap-2 dropdown-item">

                                            <h1 class="mb-0 fs-3 ">resrvation tables</h1>
                                        </a>
                                        <a href="mesresapart
                    " class="d-flex align-items-center gap-2 dropdown-item">

                                            <h1 class="mb-0 fs-3 ">reservation appartements</h1>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">

                                            <h1 class="mb-0 fs-3">reservation salle de conferances</h1>
                                        </a>
                                    </div>
                                </div>
                            </li>








                            <a href="reservation" target="_blank" class="btn btn">creer un reservation</a></h1>



                            <th id='t'>ID</th>
                            <th id='t' scope="col">RESERVATION</th>
                            <th id='t' scope="col">CLIENT</th>
                            <th id='t' scope="col">CHAMBRE</th>
                            <th id='t' scope="col">DEBUT</th>
                            <th id='t' scope="col">FIN</th>
                            <th id='t' scope="col">HEURE</th>
                            <th id='t' scope="col">TELEPHONE</th>
                            <th id='t' scope="col">EMAIL</th>
                            <th id='t' scope="col">ACTION </th>

                </tr>
            </thead>
            <tbody>


                @foreach($reservations as $mesreservation)



                <tr>
                    <td id="">{{$mesreservation->id}} </td>
                    <td>{{$mesreservation->nom}} {{$mesreservation->id}} </td>
                    <td>{{$mesreservation->client}} </td>
                    <td>{{$mesreservation->chambre}} </td>
                    <td>{{$mesreservation->datedeb}} </td>
                    <td>{{$mesreservation->datefin}} </td>
                    <td>{{$mesreservation->heur}} </td>
                    <td>{{$mesreservation->phone}} </td>
                    <td>{{$mesreservation->email}} </td>
                    <td>
                        <a href="#" class="btn btn-danger"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mesreservation->id}}').submit()}"><span
                                class="ti-trash"></span></a>
                    </td>
                    
                    <td>
                        <a href="#" class="btn btn-primary"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mesreservation->id}}').submit()}"><span
                                class="ti-pencil-alt"></span></a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-success"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mesreservation->id}}').submit()}"><span
                                class="ti-download"></span></a>
                    </td>
                </tr>

                <form id="form-{{$mesreservation->id}}"
                    action="{{route('supprimerres',['reservation'=>$mesreservation->id ])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>
                @endforeach
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>



@endsection