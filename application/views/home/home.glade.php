@include('header')

@include('home/menu')

<!-- Simple Dashboard - START -->

<!--main-->
<div class="container" id="main">

    <div class="row">

        <div class="col-md-12 col-sm-12">

            <div class="col-md-4"><a href="" class="btn btn-primary">Campaigns</a></div>
            <div class="col-md-4"><a href="{{Url::link('lists')}}" class="btn btn-primary">Lists</a></div>
            <div class="col-md-4"><a href="" class="btn btn-primary">Reports</a></div>

        </div>

        <div class="col-md-12 col-sm-12">

            <table class="table table-hover table-striped">

                <thead>
                    <th>List Name</th><th>Size</th><th>Campaigns</th><th>Date Created</th><th></th>
                </thead>

                <tbody>

                    @if(isset($lists) AND count($lists) > 0)

                        @foreach($lists as $list)

                            <tr>
                                <td>{{$list->name}}</td><td>{{$list->recipients}}</td><td>{{$list->campaigns}}</td><td>{{$list->date_created}}</td><td><a href="">View Reports</a></td>
                            </tr>

                        @endforeach

                    @else

                        <tr>
                            
                           <p class="alert alert-info">The are no mailing lists yet...</p>

                        </tr>

                    @endif

                </tbody>

            </table>


        </div>

    </div>

</div>

@include('footer')