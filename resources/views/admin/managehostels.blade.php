@extends('layout.app')
@section('page_content')
    


<div class="page-titles">
    <ol class="breadcrumb">
        <li><h5 class="bc-title">Dashboard</h5></li>
        <li class="breadcrumb-item"><a href="javascript:void(0)">
            <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            Home </a>
        </li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Manage Hostels</a></li>
    </ol>
    <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
</div>

<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-4">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                Add Hostels
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body  form excerpt">
                            <div class="card-body">
                                <form action="/admin/create_hostel" method="POST" >@csrf
                                    <div class="mb-3">
                                        <label  class="form-label">Name of Hostel</label>
                                        <input type="text" class="form-control" name="name" placeholder="name">
                                    </div>
                                    <div class="row" >
                                        <div class="mb-3 col-md-6 ">
                                            <label  class="form-label">No. of Rooms</label>
                                            <input type="text" class="form-control" name="total_rooms"  placeholder="100">
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label  class="form-label">space per Room</label>
                                            <input type="text" class="form-control" name="bed_space" placeholder="4">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label  class="form-label">Amount</label>
                                        <input type="text" name="price" class="form-control" placeholder="#23,000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Room Inventories</label>
                                        <textarea class="form-control" name="inventories" rows="3"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Add Hostel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="filter cm-content-box box-primary">
                        <div class="content-title">
                            <div class="cpa">
                                List of Hostels
                            </div>
                            <div class="tools">
                                <a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                            </div>
                        </div>
                        <div class="cm-content-body publish-content form excerpt">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-black">S.No</th>
                                                <th scope="col" class="text-black">Name of Hostel</th>
                                                <th scope="col" class="text-black">No. of Rooms</th>
                                                <th scope="col" class="text-black">Space per Room</th>
                                                <th scope="col" class="text-black">Amount</th>
                                                <th scope="col" class="text-black">Inventories</th>
                                                <th scope="col" class="text-black">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>adeniyi</td>
                                                <td>100</td>
                                                <td>4</td>
                                                <td>#23,000</td>
                                                <td>chairs,fan, table, wardropr</td>
                                                <td class="text-end">
                                                    
                                                    <a href="javascript:void(0);">Edit</a>
                                                    <span>|</span>
                                                    <a href="javascript:void(0);">delete</a>
                                                    <span>|</span>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection