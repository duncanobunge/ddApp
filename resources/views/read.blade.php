@include('include.header')

    <div class="container">
        <div class="row">
            <legend>More Details</legend>
             <p class="lead">{{$diagnosis -> symptom_id}}</p>
             <p>{{$diagnosis -> symptom}}</p>
        </div>
    </div>
@include('include.footer')
