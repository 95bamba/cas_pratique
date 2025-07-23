@extends('heritad')
@section('content')

<div class="card">
    <div class="card-body">
        <table class="table ">
            <thead id="">
                <br><br>
                <tr>
                    <h1 align='center'>
                        <img class="img-fluid" width="100px" src="images/i.png"
                                    alt="Reader | Hugo Personal Blog Template">
                    <a href="formtable" target="_blank" class="btn btn-dark">creer une table</a>
                    </h1>
                    <th id='t'>ID</th>
                    <th id='t' scope="col">Capacite</th>
                    <th id='t' scope="col">Tarif</th>
                    <th id='t' scope="col">action</th>

                </tr>
            </thead>
            <tbody>


                @foreach($mestable as $mestable)



                <tr>
                    <td id="">{{$mestable->id}} </td>
                    <td>{{$mestable->capacite}} </td>
                    <td>{{$mestable->tarif}} </td>

                    <td>
                        <a href="#" class="btn btn-danger"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mestable->id}}').submit()}"><span
                                class="ti-trash"></span></a>
                    </td>
                    
                    <td>
                        <a href="#" class="btn btn-primary"
                            onclick="if(confirm('voullez vous vraiment supprimer cette reservation?')) {document.getElementById('form-{{$mestable->id}}').submit()}"><span
                                class="ti-pencil-alt"></span></a>
                    </td>
                </tr>

                <form id="form-{{$mestable->id}}" action="{{route('supprimerres',['reservation'=>$mestable->id ])}}"
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