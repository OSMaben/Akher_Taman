<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />



    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
<div class="container-scroller">


    @include('layout.dashBoard_header');
    <div class="container-fluid page-body-wrapper" style="padding: 0">
        @include('layout.sideBar');

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Manage Products</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-unstyled">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th> # </th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>role</th>
                                    <th>Status</th>
                                    <th>change Role</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th> # </th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>role</th>
                                    <th>Status</th>
                                    <th>change Role</th>
                                    <th>action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @foreach($allUsers as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->role_type}}</td>
                                       @if($user->deleted_at == null)
                                            <td class="text-success">active</td>
                                        @else
                                            <td class="text-danger">deleted</td>
                                        @endif
                                        <form method="post" action="{{route('changeRole', $user->id)}}">
                                            @csrf
                                            <td>
                                                <select name="RoleName">
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->role_type}}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <button type="submit" class="bg-danger p-2" style="border-radius: 10px"><i class="bi bi-check2-all text-white" ></i></button>
                                            </td>
                                        </form>
                                        @if($user->deleted_at == null)
                                        <form method="post" action="{{route('DeleteUser', $user->id)}}">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <button type="submit" class="bg-danger p-2" style="border-radius: 10px"><i class="bi bi-trash3 text-white"></i></button>
                                            </td>
                                        </form>
                                        @else
                                            <form method="post" action="{{route('undoDeletion', $user->id)}}">
                                                @csrf
                                                @method('PUT')
                                                <td>
                                                    <button type="submit" class="bg-danger p-2" style="border-radius: 10px"><i class="bi bi-arrow-counterclockwise text-white"></i></button>
                                                </td>
                                            </form>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<style>
    .action button
    {
        background: transparent;
        border: none;
        color: red;
    }
</style>
<script src="vendors/js/vendor.bundle.base.js"></script>

<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
