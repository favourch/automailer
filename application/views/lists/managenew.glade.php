@include('header')

@include('home/menu')

<!-- Simple Dashboard - START -->

<!--main-->
<div class="container" id="main">

    <div class="row">

        <div class="col-md-12 col-sm-12">

            <div class="col-md-3"><a href="" class="btn btn-primary">Campaigns</a></div>
            <div class="col-md-3"><a href="{{Url::link('lists')}}" class="btn btn-primary">Lists</a></div>
            <div class="col-md-3"><a href="" class="btn btn-primary">Reports</a></div>
            <div class="col-md-3"><a href="{{Url::link('lists/addnew')}}" class="btn btn-danger"><i class="fa fa-plus fa-lg"></i>List</a></div>

        </div>

        <div class="col-md-12 col-sm-12">
            <p class="lead">Match the list fields - leave the fields to be ignored blank.</p>

            <form method="post" action="{{Url::link('lists/managenew')}}">

                @if(isset($column_list))

                    @foreach($column_list as $key => $value)
                        
                        <div class="col-md-3">

                            <select name={{$key}} class="form-control">

                                @if(isset($table_fields))

                                    <option value="">---Select Title---</option>
                                    @foreach($table_fields as $index => $table_field)
                                    
                                        <option value="{{$table_field}}">{{ucwords(str_replace('_', ' ', $table_field))}}</option>

                                    @endforeach

                                @endif

                            </select>

                            <table class="table">

                                <tbody>

                                    @if(isset($list_data))

                                        @foreach($list_data as $index => $value)

                                            <tr><td>{{$value[$key]}}</td></tr>

                                        @endforeach

                                    @endif

                                </tbody>

                            </table>

                        </div>

                    @endforeach

                @endif
                
                <button name="submit" type="submit" class="btn btn-success"/>Save List</button>

            </form>

        </div>

    </div>

</div>

@include('footer')