@include('include.header')
<div class="container">
        <div class="row">
            <div class="col-md-6">
            <form class="form-horizontal" method="POST" action="{{ url('/editdiagnoses',array($diagnoses->id)) }}">
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
                                   <label for="staticEmail" class="col-lg-2 control-label">Diagnosis ID</label>
                                   <div class="col-sm-10">
                                    <input type="text" name="diagnoses_id" value="<?php echo $diagnoses -> diagnosis_id?>"  class="form-control" id="staticEmail" >
                                   </div>
                                </div>
                                <div class="form-group row">
                                   <label for="staticEmail" class="col-lg-2 control-label">Diagnosis</label>
                                   <div class="col-sm-10">
                                    <input type="text" name="diagnoses" value="<?php echo $diagnoses ->profname?>" class="form-control" id="staticEmail" >
                                   </div>
                                </div>
                                <div class="form-group row">
                                <label for="staticEmail" class="col-lg-2 control-label">Diagnosis status</label>
                                <div class="form-check">
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="optionsRadios1" value="valid" >
                                    Valid
                                    </label>
                                    <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="optionsRadios2" value="invalid" >
                                    Invalid
                                    </label>
                                </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Validate</button>
                        </fieldset>
                            </form>
                        </div>

        </div>
    </div>
    @include('include.footer')
