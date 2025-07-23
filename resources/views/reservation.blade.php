@extends('heritad')
@section('content')


<br><br><br>
<section class="section-sm" id='tt'>
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto" id='ttt'>

                <div class="content mb-5">
                    <h2 id="t" align='center'> RESERVATION</h2>
                    <!-- <p id="t">Resrver vite vos logements , appartements, chambres a coucher,tables a manger,salles de conferances...</p> -->
                </div>

                <form id='' method="POST" action="{{route('storereservation.reservation') }}"
                    enctype="multipart/form-data" class="">
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif


                    @csrf

                    <div class=" form-group">
                        <label for="name">Reservation</label>
                        <input type="text" name="nom" id="name" class="form-control" placeholder=" Nom de reservaton?"
                            required>
                    </div>
                    <!-- <div class="form-group">
            <label for="name">Prenom</label>
            <input type="" name="prenom" id="name" class="form-control" placeholder="votre prenom svp?" >
          </div> -->

                    <div class="form-group" align='left'>
                        <fieldset>
                            <label for="name">Choix du client</label>
                            <select name="choix" id="time" id="name" class="form-control">
                                <option name="Lunch" id="Lunch">table a manger</option>
                                <option name="Lunch" id="Lunch">chambre a coucher</option>
                                <option name="Lunch" id="Lunch">appartement</option>
                                <option name="Lunch" id="Lunch">salle de conferance</option>
                            </select>

                        </fieldset>
                    </div>

                    <div class="form-group">
                        <fieldset>
                            <label for="name">Chambre</label>
                            <select name="chambre" id="time" id="name" class="form-control">
                                <option name="Lunch" id="Lunch">NON</option>
                                </option>
                                @foreach($meschambre as $clients)
                                <option name="Lunch" id="Lunch">{{$clients->etage}} em etage(s) chambre
                                    N{{$clients->numero}}</option>
                                @endforeach
                            </select>

                        </fieldset>
                    </div>


                    <div class="form-group">
                        <fieldset>
                            <label for="name">clients</label>
                            <select name="client" id="time" id="name" class="form-control">
                                @foreach($mesclient as $clients)
                                <option name="Lunch" id="Lunch"> {{$clients->prenom}} {{$clients->nom}} </option>
                                @endforeach
                            </select>

                        </fieldset>
                    </div>


                    <div class="form-group ">
                        <label for="name">Date de debut</label>
                        <input type="date" name="datedeb" id="name" class="form-control"
                            placeholder="votre date de debut svp?" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Date de fin</label>
                        <input type="date" name="datefin" id="name" class="form-control"
                            placeholder="votre date de fin svp?" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Heure</label>
                        <input type="time" name="heur" id="name" class="form-control" placeholder="l'heur svp?"
                            required>
                    </div>







                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="votre email svp?"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Telephone</label>
                        <input type="phone" name="phone" id="email" class="form-control"
                            placeholder="votre telephone svp">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" class="form-control"
                            placeholder="votre message svp?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>



@endsection