@extends('layouts.app')
@section('content')

    <div class="user-card">
           @include('partials.flash')
        <div class="card-header">
            <h2 class="btn card-title">Create <span>| <a href="{{URL('admin/user/')}}">Home</a></span></h2>
           <!-- Header -->
            <div class="controls-group">
                <a href="{{URL('admin/user/')}}" class="control-btn btn-primary" onclick="handleClick('Add New Product')">
                - Back
                </a>
            </div>
        </div>
        <!--Form -->
    
       <div class="form-container">

            <form action="{{route('user.store')}}" method="POST">
                {{csrf_field()}}
            <div class="form-group company-role-group">
                <label for="" class="btn" >Company</label>
                <input type="checkbox" id="role_name" value="admin" name="role" required>
            </div>

            <div class="second">
                    <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" required>
                   </div>
        
                   <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{old('email')}}" required>
                   </div>
        
                   <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password"  required>
                   </div>
            </div>
 
            <div class="third">
                <div class="form-group">
                    <label for="">Conform Password</label>
                    <input type="password" name="password_confirmation" required>
                   </div>
       
                   <div class="form-group">
                       <label for="">Authorize Type</label>
                       <select name="authorize_type" class="type_select">
                        <option value="choose type" selected disabled>choose type</option>
                           <option value="otp">otp</option>
                           <option value="key">key</option>
                           <option value="both">both</option>
                           <option value="none">none</option>
                       </select>
                   </div>
            </div>

            <div class="contact-status-group">
                <div class="form-group">
                    <label for="">Mobile No</label>
                    <input type="number" value="{{old('mobile_no')}}"  name="mobile_no" required>
                </div>

                <div class="form-group">
                    <label for="">Office No</label>
                    <input type="number"  name="office_no" value="{{old('office_no')}}"  required>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                   <select id="status" name="status" class="type_select">
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                   </select>
                </div>
            </div>
            <div class="user_permissions">
                <h3>User Permissions</h3>

               <div class="user-permissions-grid">
                    <div class="user-per">
                        <input type="checkbox" id="perm_user" value="user" name="user_permission[]">
                        <label for="perm_user">User</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_company" value="company" name="user_permission[]">
                        <label for="perm_company">Company</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_setting" value="setting" name="user_permission[]">
                        <label for="perm_setting">Settings</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_dashboard" value="dashboard_view" name="user_permission[]">
                        <label for="perm_dashboard">Dashboard View</label>
                    </div>

                    <div class="user-per">
                        <input type="checkbox" id="perm_widget" value="widget" name="user_permission[]">
                        <label for="perm_widget">Widget</label>
                    </div>
               </div>
            </div>
            <input type="submit" value="Save">

            </form>
       </div>
    </div>
@endsection