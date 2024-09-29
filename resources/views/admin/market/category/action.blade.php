<a href="{{ route("admin.market.category.edit",$model->id) }}" class="btn btn-gradient-primary btn-rounded btn-icon"
    style="padding: 13px">
     <i class="mdi mdi-tooltip-edit"></i>
 </a>
 <form class="d-inline" action="{{ route("admin.market.category.destroy",$model->id) }}" method="post">
     @csrf
     {{ method_field('delete') }}
     <button href="" class="btn btn-gradient-warning btn-rounded btn-icon delete" style="padding: 13px">
         <i class="mdi mdi-delete-variant"></i>
     </button>
 </form>
 
 