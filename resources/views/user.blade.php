@extends ('master')
@section ('konten')
<main role="main" class="container">
    <br>
    <font>
        <h2 align="center">LIST USER</h2>
    </font>
    <hr>
    <div>
        <div class="card bg-light mb-3 o-hidden border-0 shadow-lg my-5">
            <div class="card-body">
                <table class="table table-bordered">
                    <?php if (empty($users)) : ?>
                        <div class="alert alert-danger" role="alert">
                            User tidak ditemukan.
                        </div>
                    <?php endif ?>
                    <?php if (!empty($users)) :  ?>
                        <tr>
                            <th>Id User</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Name</th>
                            <!-- <th>Email_verified_at</th> -->
                            <th>Pasword</th>
                            <!-- <th>
                                <p align="center">Action</p>
                            </th> -->
                        </tr>
                    <?php endif; ?>
                    <?php
                    $no = 1;
                    foreach ($users as $row) {
                    ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->role; ?></td>
                            <td><?php echo $row->name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <!-- <td><?php echo $row->email_verified_at; ?></td> -->
                            <td><?php echo $row->password; ?></td>
                            <!-- <td>
                                <p align="center">
                                    <a href="<?php ?>" class="btn btn-outline-success btn-block"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                        </svg></a>
                                    <a href="<?php ?>" class="btn btn-outline-danger btn-block" onclick="return confirm('Yakin?');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                        </svg></a>
                                </p>
                            </td> -->
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <!-- <div class="btn-toolbar float-right">
                    <a href="" class="btn btn-outline-danger mr-2">Logout</a>
                </div> -->

            </div>
        </div>
    </div>
</main>
@endsection