@extends('heritad')
@section('content')


<br><br>

<section class="section-sm" id='tt'>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto" id='ttt'>

                <div class="content mb-5">
                    <h2 id="t" align='center'>tables</h2>
                    <!-- <p id="t">Resrver vite vos logements , appartements, chambres a coucher,tables a manger,salles de conferances...</p> -->
                </div>

                <form id="" method="POST" action="{{route('storetable.table') }}" enctype="multipart/form-data">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif


                    @csrf

                    <div class="form-group">
                        <label for="name">capacite</label>
                        <input type="number" name="capacite" id="name" class="form-control" placeholder="Capacite svp?"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="name">tarif</label>
                        <input type="text" name="tarif" id="name" class="form-control" placeholder="Tarif svp?"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection