<main class="pt-5 mx-lg-5">

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">List of Rooms (storage)</h2>
            </div>
        </div>
        <hr>
        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
            <table class="table table-striped table-bordered mt-4 mb-4 mr-2" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Floor</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <?php
                if (isset($data['data'])) {
                    $id = 1;
                    foreach ($data['data'] as $result_room) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $result_room['room_name']; ?></td>
                                <td><?php echo $result_room['floor']; ?></td>
                                <td><?php echo $result_room['description']; ?></td>
                            </tr>

                        </tbody>
                <?php
                        $id++;
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