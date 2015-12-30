@include('home/header')

@include('home/menu')

<!-- Simple Dashboard - START -->

<!--main-->
<div class="container" id="main">

    <div class="row">

   <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Registered Sales Records</h4></div>
        <div class="panel-body">

            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Quarterly Sales</h3>
                    </div>
                    <div class="panel-body">
                        <div id="quarterChart"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Details per quarter</h3>
                    </div>
                    <div id="detailChart" class="panel-body">
                    </div>
                </div>
            </div>

        </div>


    </div>

    </div>
</div>


</div>
@include('home/footer')