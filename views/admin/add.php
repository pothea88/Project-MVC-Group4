<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="text-center text-white">ADD NEW MATERIAL</h2>
                </div>
                <div class="card-body">
                    <form action="index0.php?action=add_data_material" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quality">Quanlity:</label>
                            <select name="quality" id="quality" class="form-control">
                                <option disableed selected>Choose Quanlity</option>
                                <option value="Heigh Quanlity">High Quanlity</option>
                                <option value="Medium Quanlity">Medium Quanlity</option>
                                <option value="Low Quanlity">Low Quanlity</option>
                            </select>
                        </div>
                        <!-- room -->
                        <div class="form-group">
                            <label for="room">Room:</label>
                            <select name="room" id="room" class="form-control">
                                <?php
                                foreach ($data['room_data'] as $rows) {
                                    ?>
                                    <option value="<?php echo $rows['id_room']; ?>"><?php echo $rows['room_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantity">Quantity:</label>
                            <input type="number" name="quantity" id="quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div>
                        <a href="index0.php?action=material" class="btn btn-success">Go Back</a>
                        <input type="submit" name="button" id="button" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>