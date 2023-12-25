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
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
    </ol>
    <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
</div>
    <!-- row -->	
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="table-responsive active-projects manage-client">
                        <div class="tbl-caption">
                            <h4 class="heading mb-0">Manage Client</h4>
                        </div>
                            <table id="reports-tbl" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Contact</th>
                                        <th>Gender</th>
                                        <th>Location</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                
                                                <div>
                                                    <h6>Ricky Antony</h6>
                                                </div>	
                                            </div>
                                        </td>
                                        <td><span class="text-primary">rickyathony@gmail.com</span></td>
                                        <td>
                                            <span>500</span>
                                        </td>
                                        <td>
                                            <span>Male</span>
                                        </td>	
                                        <td>
                                            <span>Adeniyi Hall</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-success light border-0">Approve</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="products">
                                                
                                                <div>
                                                    <h6>Ricky Antony</h6>
                                                    <span>Web Designer</span>	
                                                </div>	
                                            </div>
                                        </td>
                                        <td><span class="text-primary">ricky.antony</span></td>
                                        <td>
                                            <span>+91 123 456 7890</span>
                                        </td>
                                        <td>
                                            <span>Female</span>
                                        </td>	
                                        <td>
                                            <span>Usa</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-danger light border-0">decline</span>
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
@endsection