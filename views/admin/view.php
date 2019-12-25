<main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
            <table id="example" class="table table-striped table-bordered mt-4 mb-4 mr-2" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Quanlity</th>
                        <th>Quantity</th>
                        <th>Room</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <?php
                if (isset($data['data'])) {
                    $id = 1;
                    foreach ($data['data'] as $rows) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $rows['id_material'] ?></td>
                                <td><?php echo $rows['material_name']; ?></td>
                                <td><?php echo $rows['quality']; ?></td>
                                <td><?php echo $rows['quantity']; ?></td>
                                <td>B05</td>
                                <td><?php echo $rows['date']; ?></td>
                                <td>
                                    <a href="index.php?action=view_detail&id=<?php echo $rows['id_material'] ?>"><i class="material-icons text-primary">visibility</i></a>
                                    <a href="index.php?action=edit&id=<?php echo $rows['id_material'] ?>"><i class="material-icons text-success">edit</i></a>
                                    <a href="index.php?action=delete&id=<?php echo $rows['id_material'] ?>"><i class="material-icons text-danger">delete</i></a>
                                </td>
                            </tr>
                        </tbody>
                <?php
                    }
                }
                ?>
            </table>
        </div>
        <script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".table").DataTable({});
            });
        </script>