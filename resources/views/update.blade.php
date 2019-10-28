@include('include.header')
<div class="container">
        <div class="row">
            <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{ url('/edit',array($diagnosis->id)) }}">
             {{csrf_field()}}
                <fieldset>
                    <legend>ddApp</legend>
                        @if(count($errors) > 0)
                          @foreach($errors->all() as $error)
                               <div class="alert alert-danger">
                                {{$error}}
                                </div>
                          @endforeach
                        @endif
                            <div class="form-group">
                               <div class="form-group row">
                                   <label for="staticEmail" class="col-lg-2 control-label">Symptom ID</label>
                                   <div class="col-sm-10">
                                    <input type="text" name="symptom_id" value="<?php echo $diagnosis -> symptom_id?>"  class="form-control" id="staticEmail" >
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <label for="staticEmail" class="col-lg-2 control-label">Symptom(s)</label>
                                   <div class="col-sm-10">
                                    <input type="text" name="symptoms" value="<?php echo $diagnosis -> symptom?>" class="form-control" id="staticEmail" >
                                   </div>
                                </div>
                                <div class="form-group row">
                                <label for="staticEmail" class="col-lg-2 control-label">Gender</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="optionsRadios1" value="female" >
                                    Female
                                    </label>
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" id="optionsRadios2" value="male" >
                                    Male
                                    </label>
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-lg-2 control-label">Year of Birth</label>
                                    <div class="col-sm-10">
                                    <input type="text" name="year"  class="form-control" id="staticEmail" >
                                </div>
                                </div>
                                <div class="form-group row">
                                     <label for="staticEmail" class="col-lg-2 control-label">Auth Token</label>
                                     <div class="col-sm-10">
                                    <textarea name="token"  class="form-control" id="staticEmail" ></textarea>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                        </fieldset>
                            </form>
                        </div>

        </div>
    </div>
    @include('include.footer')
