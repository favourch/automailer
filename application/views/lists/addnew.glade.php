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

        <div class="col-md-4 col-sm-4">

            <form method="post" action="{{Url::link('lists/addnew')}}" enctype="multipart/form-data">

                <div class="col-md-12"><br><br> <input name="list_name" type="text" class="form-control" placeholder="List Name" required/><br><br> </div>
                <div class="col-md-12"> <input name="list_description" type="text" class="form-control" placeholder="List Description" required/> <br><br></div>
                <div class="col-md-12">Upload CSV <input name="list_csv" type="file" class="btn " placeholder="Upload CSV" /> <br><br></div>
                <div class="col-md-12"> <button name="submit" type="submit" class="btn btn-success"/>Create List</button> </div>

            </form>

        </div>

    </div>

</div>

@include('footer')