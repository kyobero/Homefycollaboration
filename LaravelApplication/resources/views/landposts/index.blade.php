@extends('layouts.appk')

@section('content')

<div class="d-flex justify-content-end mb-2">
<a href="{{ route('landposts.create')}}" class="btn btn-success float-right"> Add land post</a>
</div>

<div class="card card-default">

    <div class="card-header"> Land posts</div>

        <div class="card-body">

            <table class="table">

                <thead>

                    <th>Land title</th>

                    <th>Allocation Number</th>

                    <th></th> 

                    <th></th>

                    <th>Status</th>

                </thead>

            </table>            

         </tbody>

            @foreach($landposts as $landpost)

             <tr>

                  <td>
                      {{ $landpost->land_title}}
                  </td>
             
             </tr>

             <tr>

             <td>
                 {{ $landpost->allocationNumber}}
             </td>

             <td>
             
             <a href="" class="btn btn-info btn-sm">Edit</a>

             </td>

             <td>
             
             <a href="" class="btn btn-danger btn-sm">Trash</a>

             </td>
        
        </tr>
                  @endforeach

       </div>

</div>

@endsection