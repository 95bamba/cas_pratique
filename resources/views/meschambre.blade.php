@extends('heritad')
@section('content')

<div class="card">
    <div class="card-body table-responsive">
        <table class="table ">
            <thead id="">
                <br><br>
                <tr>
                    <h1 align='center'>
                        <img class="img-fluid" width="100px" src="images/i.png"
                            alt="Reader | Hugo Personal Blog Template">
                        <a href="formchambre" target="_blank" class="btn btn-dark">creer un chambre</a>
                    </h1>
                    <th id='t'>id</th>
                    <th id='t' scope="col">image </th>
                    <th id='t' scope="col">TYPE</th>
                    <th id='t' scope="col">STATUT</th>
                    <th id='t' scope="col">BAIN</th>
                    <th id='t' scope="col">TELEPHONE</th>
                    <th id='t' scope="col">CAPACITE</th>
                    <th id='t' scope="col">TARIF</th>
                    <th id='t' scope="col">CLIMATISEUR</th>
                    <th id='t' scope="col">MESSAGES</th>
                    <th id='t' scope="col">action </th>

                </tr>
            </thead>
            <tbody>


                @foreach($meschambre as $chambre)



                <tr>
                    <td id="">{{$chambre->id}} </td>
                    <td align='center'><img src="public/assets/{{$chambre->image}}" class="img-responsive"
                            style="max-height:50px;max-width:50px;border-radius:90%"></td>
                    <td>{{$chambre->type}} </td>
                    <td>{{$chambre->statut}} </td>
                    <td>{{$chambre->bain}} </td>
                    <td>{{$chambre->tele}} </td>
                    <td>{{$chambre->capacite}} </td>
                    <td>{{$chambre->tarif}} </td>
                    <td>{{$chambre->clim}} </td>
                    <td>{{$chambre->message}} </td>

                    <td>
                        <a href="#" class="btn btn-danger"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$chambre->id}}').submit()}"><span
                                class="ti-trash"></span></a>
                    </td>
                    
                    <td>
                        <a href="#" class="btn btn-primary"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$chambre->id}}').submit()}"><span
                                class="ti-pencil-alt"></span></a>
                    </td>


                </tr>

                @endforeach
            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
</div>



@endsection