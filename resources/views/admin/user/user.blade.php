@extends('layouts.app')

@section('title','ERP')

@section('content')
           <!-- 2. Main Content Area -->
           <!--every content write here -->
                <div class="user-card">
                    @include('partials.flash')

                    <!-- Title and Controls -->
                    <div class="card-header">
                        <h2 class="btn card-title">User <span>| Home</span></h2>
                       <!-- search bar -->
                       <div class="search-container">
                        <svg class="search-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <input id="search-bar" type="text" placeholder="Search" class="search-input">
                    </div>
                        <div class="controls-group">
                            <div class="select-group">
                                <span>Showing</span>
                                <select class="btn select-entries">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>50</option>
                                </select>
                            </div>

                            <button  class="btn control-btn" onclick="handleClick('Filter')">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707v5.882a1 1 0 01-1.54.843l-2.454-1.636a1 1 0 01-.616-.725v-5.882a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                                Filter
                            </button>

                            <a href="{{route('user.create')}}" class="control-btn btn-primary" onclick="handleClick('Add New Product')">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                            Add
                            </a>
                        </div>
                    </div>

                    <!-- Data Table -->
                    <div class="table-wrapper">
                        <table class="user-table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th>Id </th>
                                    <th>Name </th>
                                    <th>Email </th>
                                    <th>Role </th>
                                    <th>Mobile </th>
                                    <th>Status </th>
                                    <th>Created_at </th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <!-- Table Body -->
                            <tbody>
                                <?php $i=1 ?>
                                <!-- Row 1 -->
                                @foreach ($users as $user)
                                    
                               
                                <tr>
                                    <td class="td-product-name">
                                       <span>0{{$i++}}</span>
                                    </td>
                                    <td class="td-id">{{$user->name}}</td>
                                    <td class="td-price">{{$user->email}}</td>
                                    <td class="td-stock">{{$user->role}}</td>
                                    <td class="td-stock">
                                            @if($user->mobile_no)
                                            {{$user->mobile_no}} @else N/A 
                                            @endif
                                        </td>

                                    <td>
                                        <span class="badge badge-pending">{{$user->status}}</span>
                                    </td>
                                    <td class="td-type">  @if($user->office_no)
                                        {{$user->office_no}} @else N/A 
                                        @endif</td>

                                    <td class="td-action">
                    
                                        <button class="button-29 actionbtn" role="button">Action</button>
 
                                        <div class="buttons active">
                                            <button><a href="{{route('user.edit',$user->id)}}">Update</a></button>
                                            <button class="userdeletebtn" data-user-id={{$user->id}}>Delete</button>
                                        </div>
                                    </td>
                                </tr>
                               
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="pagination-footer">
                        <button class="pagination-arrow-btn" onclick="handleClick('Previous Page')">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                            <span>Previous</span>
                        </button>
                        
                        <div class="pagination-numbers">
                            <button class="page-number-btn" onclick="handleClick('Page 01')">01</button>
                            <button class="page-number-btn" onclick="handleClick('Page 02')">02</button>
                            <button class="page-number-btn current" onclick="handleClick('Page 03')">03</button>
                            <button class="page-number-btn active-secondary" onclick="handleClick('Page 04')">04</button>
                            <button class="page-number-btn" onclick="handleClick('Page 10')">10</button>
                            <span>...</span>
                            <button class="page-number-btn" onclick="handleClick('Page 11')">11</button>
                        </div>

                        <button class="pagination-arrow-btn" onclick="handleClick('Next Page')">
                            <span>Next</span>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>

                </div>

                <script>
                    let actionbtn=document.querySelectorAll('.actionbtn');
                    actionbtn.forEach(btn => {
                        btn.addEventListener("click",function(){
                        let buttonsDiv = btn.parentElement.querySelector('.buttons');
                       buttonsDiv.classList.toggle('active');

                     });
                    });
                 

                    $('.userdeletebtn').click(function(){
                      let userId= $(this).data('user-id');
                        //console.log($userdelete);
                        let routeUrl = "{{ route('user.delete', ':id') }}";
                        routeUrl = routeUrl.replace(':id', userId);
                        console.log(routeUrl);
                        $.ajax({
                            url: routeUrl,
                            type:'POST',
                            data:{
                                _token:"{{csrf_token()}}"
                            },

                            success:function(res){
                                //alert(res.message);
                                location.reload();
                            },
                            error:function(res){
                               // alert(res.message);
                            }
                        })
                        
                    });
                 
               
                </script>         
@endsection
