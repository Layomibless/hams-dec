@extends('layout.app')
@section('page_content')
    
    <!-- row -->	
    <div class="page-titles">
        <ol class="breadcrumb">
            <li><h5 class="bc-title">User Dashboard</h5></li>
            <li class="breadcrumb-item"><a href="javascript:void(0)">
                <svg width="17" height="17" viewbox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                Home </a>
            </li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">User Dashboard</a></li>
        </ol>
        <a class="text-primary fs-13" data-bs-toggle="offcanvas" href="#offcanvasExample1" role="button" aria-controls="offcanvasExample1">+ Add Task</a>
    </div>
<!-- row -->	
<div class="container-fluid">
<div class="row">
    <div class="col-xl-4 col-lg-12 col-xxl-4 col-sm-12">
        <div class="card">
            <div class="card-body">
                <h4 class="my-2">Please Read the Hall Regulations below to complete your accommodation application
                    Hall Regulations</h4>
                    <p>Only bona-fide (registered) students of the University are allowed to live in the Halls of Residence.
                    Accommodation in the halls of residence is a privilege and not a right.
                    Allocated accommodation is not transferable from one student to another.
                    Squatting of anybody overnight is illegal; offenders will forfeit their accommodation.
                    Sale of allocated accommodation in the Halls of Residence is prohibited.
                    Students must not bring into students’ rooms heavy electrical gadgets like electric cookers/stoves, washing machines, drier, grills, immersion heaters, refrigerators etc.
                    Any student who is found guilty of disturbing the peace of the hall shall be required to withdraw from the hall.
                    Fighting is not allowed. Student who engages in fighting shall forfeit accommodation and face appropriate disciplinary measures.
                    Both stale and new students should note that membership of cult group is prohibited. Severe disciplinary actions await such members.
                    It is mandatory for students to clean their rooms.
                    Students are required to return their keys and the other University property at the close of every semester/session.</p>
                    <hr>
                    
                <a href="javascript:void();;" class="btn my-2 btn-primary btn-lg px-4">Apply Here</a>
            </div>
        </div>
    </div>
</div>
@endsection