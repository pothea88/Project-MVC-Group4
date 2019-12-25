
<main class="pt-5 mx-lg-5">

    <div class="container-fluid mt-5">
    <a href="index2.php?action=add_room" class="btn btn-success">Add Room</a>
        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
            <table id="example" class="table table-striped table-bordered mt-4 mb-4 mr-2" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Floor</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                    foreach ($data['data'] as $result_room) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $result_room['id_room']?></td>
                                <td><?php echo $result_room['room_name']; ?></td>
                                <td><?php echo $result_room['floor']; ?></td>
                                <td><?php echo $result_room['description']; ?></td>
                                <td>
                                    <a href="index2.php?action=view_rooml&id=<?php echo $result_room['id_room'] ?>"><i class="material-icons text-primary">visibility</i></a>
                                    <a href="index2.php?action=edit_room&id=<?php echo $result_room['id_room'] ?>"><i class="material-icons text-success">edit</i></a>
                                    <a href="index2.php?action=delete_room&id=<?php echo $result_room['id_room'] ?>"><i class="material-icons text-danger">delete</i></a>
                                </td>
                            </tr>
                           
                        </tbody>
                <?php
                    }
                ?>
            </table>
        <!-- </div>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".table").DataTable({});
            });
        </script> -->