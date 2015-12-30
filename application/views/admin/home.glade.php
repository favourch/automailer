@include('admin/header')

@include('admin/menu')

<!--main-->
<div class="container" id="main">
   <div class="row">
   <div class="col-md-12 col-sm-12">
        <div class="panel panel-default">
          <div class="panel-heading"><a href="#" class="pull-right">View all</a> <h4>Registered Users</h4></div>
   			<div class="panel-body">

          <table class="table table-hover table-stripped">

            <thead>
              <th>Name</th><th>Email</th><th>User Type</th><th>Status</th><th>Date Created</th><th>Delete</th>

            </thead>

          <tbody>

            @if(isset($users) AND count($users) > 0)

              @foreach($users as $user)

                <tr>
                  <td>
                    <img src="20.jpg" width="28px" height="28px">
                    {{$user['first_name']}} {{$user['last_name']}} 
                  </td>
                  <td> {{$user['email']}} </td>
                  <td> {{$user['user_type']}} </td>

                    @if($user['status'] == 'online')
                          
                      <td><span class="label label-success ">Online</span></td>

                    @else

                      <td><span class="label label-info ">Offline</span></td>

                    @endif

                  <td> {{$user['date_created']}} </td>
                  <td> <a href="#" class="btn "><i class="fa fa-lg fa-trash"></i></a> </td>
                </tr>

              @endforeach


            @else

                <p class="alert alert-info">There are no registered users yet!</p>

            @endif


          </tbody>

          </table>

        
        </div>
   		
      </div>

	</div>
  
  	
  </div><!--/row-->
  
</div><!--/main-->

<!--login modal-->
<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center"><img src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"><br>Login</h2>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>


<!--about modal-->
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center">About</h2>
      </div>
      <div class="modal-body">
          <div class="col-md-12 text-center">
            <a href="http://www.bootply.com/DwnjTNuvVt">This Bootstrap Template</a><br>was made with <i class="glyphicon glyphicon-heart"></i> by <a href="http://bootply.com/templates">Bootply</a>
            <br><br>
            <a href="https://github.com/iatek/bootstrap-google-plus">GitHub Fork</a>
          </div>
      </div>
      <div class="modal-footer">
          <button class="btn" data-dismiss="modal" aria-hidden="true">OK</button>
      </div>
  </div>
  </div>
</div>


@include('admin/footer')