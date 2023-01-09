@section('headTitle','Sub Counties - ')
@section('pageTitle','Sub Counties')
<div class="row">
    <div class='col-12'> 
      <!-- .add{display:flex;} -->
          <div class="d-flex justify-content-end">
            <a class="btn btn-primary" href="{{URL::to('subcounty/add')}}">
              <i class="fas fa-plus"></i> Add Sub County
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
                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">County</th>
                        <th class="lign-middle text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($subcounties as $subcounty)
                    <tr>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$subcounty->id}}</p></td>
                        <td><p class="text-xs px-3 mb-0">{{$subcounty->name}}</p></td>
                        <td><p class="text-xs px-3 font-weight-bold mb-0">{{$subcounty->county->name}}</p></td>
                        <td class="align-middle text-center text-sm">
                            <a href="{{URL::to('subcounty/edit/'.$subcounty->id)}}">
                                <i class="fa-sharp fa-solid fa-pen-to-square"></i>
                            </a>
                            <!-- @TODO : Use a javascript library for this-->
                            <a onclick="return confirm('Are you sure?')" href="{{URL::to('subcounty/delete/'.$subcounty->id)}}">
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
                  {{$subcounties->links()}}
                </div>
              </div>
            </div>
        </div>
    </div>
</div>