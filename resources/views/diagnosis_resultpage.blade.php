@include('include.header')

    <div class="container">
        <div class="row">
        @if(session('info'))
             <div class="alert alert-success">
                   {{session('info')}}
             </div>
        @endif
            <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Diagnosis ID</th>
                        <th scope="col">Diagnosis</th>
                        <th scope="col">Diagnosis Status</th>
                        <th scope="col">Date of Diagnosis</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($diagnoses) > 0)
                      @foreach($diagnoses -> all() as $diag)
                        <tr>
                        <!--<td>{{$diag -> id}}</td>-->
                        <td>{{$diag -> diagnosis_id}}</td>
                        <td>{{$diag -> profname}}</td>
                        <td>{{$diag -> status}}</td>
                        <td>{{$diag -> created_at}}</td>
                        <td>
                           <a href='{{ url("/validatediagnoses/{$diag -> id}") }}' class="label label-success">Validate</a> |
                           <a href='{{ url("/deletediagnoses/{$diag -> id}") }}' class="label label-danger">Delete</a>
                        </td>
                        </tr>
                      @endforeach
                    @endif
                    </tbody>
            </table>
        </div>
    </div>
@include('include.footer')
