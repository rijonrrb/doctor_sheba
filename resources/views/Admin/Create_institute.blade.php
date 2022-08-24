<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <meta name="csrf-token" content="" />
        <title>Create Institute</title>
        <link rel="icon" type="image/x-icon" href=" " />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>  
        <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
        

    </head>
    <body cz-shortcut-listen="true">
        <div class="d-flex" id="wrapper">
            <div class="bg-light border-right" id="sidebar-wrapper" onclick="hideDropdown()">
                <div class="sidebar-heading"><a href="#"><img src="img/logo.png" alt="" /> </a> </div>
                <div class="list-group list-group-flush sidebar-scroll">
                    <a class="list-group-item list-group-item-action bg-light" href="#">Home</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Create Institute</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Create Department</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Create Class</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Create Subject</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">GPA Setting</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Payment Setting</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Create Exam</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Set Exam</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Create Questions</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Prepare Exams</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Institute list</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Applicant List</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Selected List</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Location wise Exam</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Location wise applicant</a>
                    <a class="list-group-item list-group-item-action bg-light" href="#">Send Notification</a>
                </div>
            </div>
            <div class="col">
                <!-- <nav class="navbar navbar-expand navbar-light bg-nav border-bottom">
                    <i class="fa fa-align-left" id="menu-toggle"></i>
                    <div class="collapse navbar-collapse" onclick="">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item dropdown" id="showOne">
                                <button onclick="showDropdown()" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="rounded-circle avatar" src="img/1627737611-chrysanthemum.jpg" alt="User image" />
                                    School Admin
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" id="showTwo" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-success" href="#">(Admin)</a>
                                    <a class="dropdown-item" href="http://doctorseba.net/admin/profile">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="http://doctorseba.net/admin/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="#" />
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav> -->
                <div class="main-wrapper" onclick="hideDropdown()">
                    <div class="container-fluid w-100">
                        <div class="row" style="background-color: #E9ECEF; padding: 1%;">
                        <div class="col">Create Institute</div>
                    </div>        
                 <br/>


                            <form method="GET" action="#">
                                <div class="row container-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 input-field input-field-category ">
                                    <input type="text" name="institute" placeholder="Enter your Institute" class="form-control" />
                                </div>  
                                <div class="col-lg-3 col-md-6 col-sm-6 input-field input-field-category ">
                                    <a href="exam-setting.html" class="btn form-control btn btn-outline-secondary">Create Institute </a>
                                </div>                                          
                                </div>  
                             </form>
                            
                             <div class="row card-table table-row">
                                <table class="table table-center table-responsive table-striped nowrap" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Institute name</th>
                                            <th width="20%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <!-- <td>{{$student->name}}</td>
                                        <td>{{$student->id}}</td>
                                        <td><a href="/studentEdit/{{$student->id}}">Details</a></td>
                                        <td><a href="/studentDelete/{{$student->id}}">Delete</a></td> -->
                                            <td>01</td>
                                            <td>University</td>
                                            <td>
                                                <a href="#" class="btn bg-success-light">Edit</a>
                                                <a href="#" class="btn bg-danger-light">Delete</a>
                                            </td>
                                        </tr>                        
                                    </tbody>
                                </table>
                            </div>                           
                        </main>
                    </div>
                </div>

                <div class="border container-fluid bg-light footer pt-2 pb-2">
                    <div class="row">
                        <div class="col-7">
                            <nav class="navbar">
                                <ul class="nav nav-pills navbar-right footer-menu">
                                    <li><a class="footer-text mr-2" href="#">Support</a></li>
                                    <li><a class="footer-text mr-2" href="#">Help Center</a></li>
                                    <li><a class="footer-text mr-2" href="#">Privacy</a></li>
                                    <li><a class="footer-text mr-2" href="#">Terms of Service</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-3 text-right pt-2"><i class="fa fa-phone"></i> 01948 22 44 88</div>
                    </div>
                </div>
            </div>
        </div>


        



    </body>
</html>
