@extends('layouts.app')
@section('content')

    <div class="user-card">
           @include('partials.flash')
        <div class="card-header">
            <h2 class="btn card-title">Create <span>| <a href="#">Home</a></span></h2>
           <!-- Header -->
            <div class="controls-group">
                <a href="{{URL::previous()}}" class="control-btn btn-primary" onclick="handleClick('Add New Product')">
                - Back
                </a>
            </div>
        </div>
        <!--Form -->
    
       <div class="form-container">

            <form action="{{route('user.update',$user->id)}}" method="POST">
                {{csrf_field()}}
            <div class="form-group company-role-group">
                <label for="" class="btn" >Company</label>
                <input type="checkbox" id="role_name" value="admin" name="role" required>
            </div>

            <div class="second">
                    <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" value="{{$user->name ?? ''}}" required>
                   </div>
        
                   <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{$user->email}}" required>
                   </div>
        
                   <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password"  >
                   </div>
            </div>
 
            <div class="third">
                <div class="form-group">
                    <label for="">Conform Password</label>
                    <input type="password" name="password_confirmation" >
                   </div>
       
                   <div class="form-group">
                       <label for="">Authorize Type</label>
                       <select name="authorize_type" class="type_select" >
                        <option value="choose type" selected disabled>choose type</option>
                           <option value="otp" {{$user->authorize_type=='otp' ? 'selected':''}}>otp</option>
                           <option value="key" {{$user->authorize_type=='key'? 'selected':''}}>key</option>
                           <option value="both" {{$user->authorize_type=='both'? 'selected':''}}>both</option>
                           <option value="none" {{$user->authorize_type=='none'? 'selected':''}}>none</option>
                       </select>
                   </div>
            </div>

            <div class="contact-status-group">
                <div class="form-group">
                    <label for="">Mobile No</label>
                    <input type="number" value="{{$user->mobile_no ?? ''}}"  name="mobile_no" required>
                </div>

                <div class="form-group">
                    <label for="">Office No</label>
                    <input type="number"  name="office_no" value="{{$user->office_no ?? ''}}" required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                   <select id="status" name="status" class="type_select">
                    <option value="Active" {{$user->status=='Active'? 'selected':''}}>Active</option>
                    <option value="Inactive" {{$user->status=='Inactive'? 'selected':''}}>Inactive</option>
                   </select>
                </div>
            </div>
            <div class="user_permissions">
                <h3>User Permissions</h3>

               <div class="user-permissions-grid">
                    <div class="user-per">
                        <input type="checkbox" id="perm_user" value="user" name="user_permission[]" 
                        @if (in_array('user', explode(',',$user->user_permission)))
                        checked   
                        @endif>
                        <label for="perm_user">User</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_company" value="company" name="user_permission[]"
                        @if (in_array('company', explode(',',$user->user_permission)))
                        checked   
                        @endif>
                        <label for="perm_company">Company</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_setting" value="setting" name="user_permission[]"
                        @if (in_array('setting', explode(',',$user->user_permission)))
                        checked   
                        @endif>
                        <label for="perm_setting">Settings</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_dashboard" value="dashboard_view" name="user_permission[]"
                        @if (in_array('dashboard_view', explode(',',$user->user_permission)))
                        checked   
                        @endif>
                        <label for="perm_dashboard">Dashboard View</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_widget" value="widget" name="user_permission[]"
                        @if (in_array('widget', explode(',',$user->user_permission)))
                        checked   
                        @endif>
                        <label for="perm_widget">Widget</label>
                    </div>
               </div>
            </div>
            <input type="submit" value="Save">

            </form>
       </div>
    </div>
@endsection