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

                        <a href="formClient" target="_blank" class="btn btn-dark">creer un client</a>
                    </h1>
                    <th id='t'>id</th>
                    <th id='t' scope="col">image </th>
                    <th id='t' scope="col">prenom</th>
                    <th id='t' scope="col">nom</th>
                    <th id='t' scope="col">civilité</th>
                    <th id='t' scope="col">telephone</th>
                    <th id='t' scope="col">email</th>
                    <th id='t' scope="col">pays</th>
                    <th id='t' scope="col">ville</th>
                    <th id='t' scope="col">adresse</th>
                    <th id='t' scope="col">action </th>

                </tr>
            </thead>
            <tbody>


                @foreach($mesclient as $clients)
                <tr>
                    <td id="">{{$clients->id}} </td>
                    <td align='center'><img src="public/assets/{{$clients->photo}}" class="img-responsive"
                    style="max-height:50px;max-width:50px;border-radius:90%"></td>
                    <td>{{$clients->prenom}} </td>
                    <td>{{$clients->nom}} </td>
                    <td>{{$clients->civil}} </td>
                    <td>{{$clients->phone}} </td>
                    <td>{{$clients->email}} </td>
                    <td>{{$clients->pays}} </td>
                    <td>{{$clients->ville}} </td>
                    <td>{{$clients->adress}} </td>

                    <td>
                        <a href="#" class="btn btn-danger"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$clients->id}}').submit()}"><span
                                class="ti-trash"></span></a>
                    </td>
                    
                    <td>
                        <a href="#" class="btn btn-primary"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$clients->id}}').submit()}"><span
                                class="ti-pencil-alt"></span></a>
                    </td>


                </tr>

                <form id="form-{{$mesformation->id}}" action="{{route('supprimer',['client'=>$clients->id ])}}"
                    method="post">
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