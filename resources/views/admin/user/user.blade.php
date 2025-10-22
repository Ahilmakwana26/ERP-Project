@extends('layouts.app')

@section('title','User')

@section('content')
           <!-- 2. Main Content Area -->
           
                <!-- Header / Search Bar -->
               {{-- @include('partials.header') --}}
                <!-- user List Section -->
                <div class="user-card">
                    
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

                            <button class="control-btn btn-primary" onclick="handleClick('Add New Product')">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                                Add
                            </button>
                        </div>
                    </div>

                    <!-- Data Table -->
                    <div class="table-wrapper">
                        <table class="user-table">
                            <!-- Table Header -->
                            <thead>
                                <tr>
                                    <th>Id <span>^</span></th>
                                    <th>Name <span>^</span></th>
                                    <th>Email <span>^</span></th>
                                    <th>Role <span>^</span></th>
                                    <th>Type <span>^</span></th>
                                    <th>Status <span>^</span></th>
                                    <th>Action <span>^</span></th>
                                </tr>
                            </thead>
                            <!-- Table Body -->
                            <tbody>
                                
                                <!-- Row 1 -->
                                <tr>
                                    <td class="td-product-name">
                                       <span>01</span>
                                    </td>
                                    <td class="td-id">#KP267400</td>
                                    <td class="td-price">$90.50</td>
                                    <td class="td-stock">350 pcs</td>
                                    <td class="td-type">Dessert</td>
                                    <td>
                                        <span class="badge badge-pending">Pending</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Cherry Delight')">...</button>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>02</span>
                                    </td>
                                    <td class="td-id">#TL651535</td>
                                    <td class="td-price">$12.00</td>
                                    <td class="td-stock">650 kg</td>
                                    <td class="td-type">Fruits</td>
                                    <td>
                                        <span class="badge badge-active">Active</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Kiwi')">...</button>
                                    </td>
                                </tr>
                                
                                <!-- Row 3 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>03</span>
                                    </td>
                                    <td class="td-id">#08651535</td>
                                    <td class="td-price">$100.50</td>
                                    <td class="td-stock">1200 pcs</td>
                                    <td class="td-type">Ice Cream</td>
                                    <td>
                                        <span class="badge badge-inactive">Inactive</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Mango Magic')">...</button>
                                    </td>
                                </tr>
                                
                                <!-- Row 4 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>04</span>
                                    </td>
                                    <td class="td-id">#ER851535</td>
                                    <td class="td-price">$59.99</td>
                                    <td class="td-stock">700 pcs</td>
                                    <td class="td-type">Care</td>
                                    <td>
                                        <span class="badge badge-on-sale">On Sale</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Joy Care')">...</button>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>05</span>
                                    </td>
                                    <td class="td-id">#SD487441</td>
                                    <td class="td-price">$150.90</td>
                                    <td class="td-stock">100 lt</td>
                                    <td class="td-type">Dessert</td>
                                    <td>
                                        <span class="badge badge-bouncing">Bouncing</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Blueberry Bliss')">...</button>
                                    </td>
                                </tr>
                                
                                <!-- Row 6 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>06</span>
                                    </td>
                                    <td class="td-id">#TL449003</td>
                                    <td class="td-price">$10.99</td>
                                    <td class="td-stock">23 lt</td>
                                    <td class="td-type">Juice</td>
                                    <td>
                                        <span class="badge badge-pending">Pending</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Watermelon')">...</button>
                                    </td>
                                </tr>

                                <!-- Row 7 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>07</span>
                                    </td>
                                    <td class="td-id">#KP651535</td>
                                    <td class="td-price">$130.00</td>
                                    <td class="td-stock">3000 pcs</td>
                                    <td class="td-type">Oil</td>
                                    <td>
                                        <span class="badge badge-active">Active</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Trilogy')">...</button>
                                    </td>
                                </tr>
                                
                                <!-- Row 8 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>08</span>
                                    </td>
                                    <td class="td-id">#GB449003</td>
                                    <td class="td-price">$40.70</td>
                                    <td class="td-stock">400 pcs</td>
                                    <td class="td-type">Cream</td>
                                    <td>
                                        <span class="badge badge-inactive">Inactive</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Dryskin')">...</button>
                                    </td>
                                </tr>
                                
                                <!-- Row 9 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>09</span>
                                    </td>
                                    <td class="td-id">#SD449003</td>
                                    <td class="td-price">$35.50</td>
                                    <td class="td-stock">200 lt</td>
                                    <td class="td-type">Oil</td>
                                    <td>
                                        <span class="badge badge-on-sale">On Sale</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Olive Oil')">...</button>
                                    </td>
                                </tr>

                                <!-- Row 10 -->
                                <tr>
                                    <td class="td-product-name">
                                        <span>10</span>
                                    </td>
                                    <td class="td-id">#ER558812</td>
                                    <td class="td-price">$9.99</td>
                                    <td class="td-stock">1200 pcs</td>
                                    <td class="td-type">Flowers</td>
                                    <td>
                                        <span class="badge badge-bouncing">Bouncing</span>
                                    </td>
                                    <td class="td-action">
                                        <button onclick="handleClick('Action for Citrus Brust')">...</button>
                                    </td>
                                </tr>
                                
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
          

@endsection