@section('headTitle','Counties - ')
@section('pageTitle','Counties')
<div class="row">
    <div class='col-12'> 
      <!-- .add{display:flex;} -->
          <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{URL::to('county/add')}}">
              <i class="fas fa-plus"></i> Add County
            </a>
          </div>
        <div class="card mb-4">
        
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">#</th>
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Name</th>
                        <th class="lign-middle text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($counties as $county)
                    <tr>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$county->id}}</p></td>
                        <td><p class="text-xs px-3 mb-0">{{$county->name}}</p></td>
                        <td class="align-middle text-center text-sm">
                            <a href="{{URL::to('county/edit/'.$county->id)}}">
                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- @TODO : Use a javascript library for this-->
                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('county/delete/'.$county->id)}}">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td> 
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">No records found</td>
                    </tr>
                    @endforelse
                  </tbody>
                </table>
                <div class="pagn-links">
                  {{$counties->links()}}
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
