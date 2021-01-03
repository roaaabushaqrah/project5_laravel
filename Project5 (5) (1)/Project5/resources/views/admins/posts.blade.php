
@extends ('layout.admins_layouts.admin_main')

@section('main')



<table class="table table-striped">
  <tr>
  <th>Post Id</th>
  <th>Category Id</th>
  <th>User Id</th>
  <th>Post Image</th>
  <th>Post Content</th>
  <th>Delete Post</th>
  </tr>
  @foreach($all_posts as $key => $value)
  <tr>
  <td>{{$value['id']}}</td>
  <td>{{$value['category_id']}}</td>
  <td>{{$value['user_id']}}</td>
  <td><img src ="/images/{{$value['post_image']}}" width=100em; height=100em;></td>
  <td>{{$value['post_desc']}}</td>
  <td><a href="deletePost/{{$value['id']}}"><button class="btn btn-danger">Delete</button></a></td>
  </tr>
  @endforeach
</table>




@endsection


