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
                        <!--<th scope="col">ID</th>-->
                        <th scope="col">Symptom ID</th>
                        <th scope="col">Symptom</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($diagnosis) > 0)
                      @foreach($diagnosis->all() as $diag)
                        <!--<td>{{$diag -> id}}</td>-->
                        <td>{{$diag -> symptom_id}}</td>
                        <td>{{$diag -> symptom}}</td>
                        <td>{{$diag -> created_at}}</td>
                        <td>
                           <a href='{{ url("/read/{$diag -> id}") }}' class="label label-primary">Read</a> |
                           <a href='{{ url("/update/{$diag -> id}") }}' class="label label-warning">Update</a> |
                           <a href='{{ url("/delete/{$diag -> id}") }}' class="label label-danger">Delete</a>
                        </td>
                        </tr>
                      @endforeach
                    @endif
                    </tbody>
            </table>
        </div>
    </div>
@include('include.footer')
