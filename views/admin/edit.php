<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
            <div class="card">
                <div class="card-header bg-primary">
                    <h2 class="text-center text-white">EDIT MATERIAL</h2>
                </div>
                <div class="card-body">
                        <?php
                        foreach ($data['data_material'] as $row) {
                            ?>
                        <form action="index.php?action=edit_data_material&id=<?php echo $row['id_material']; ?>" method="post">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" value="<?php echo $row['material_name'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quality">Quanlity:</label>
                                <select name="quality" id="quality" class="form-control">
                                    <option <?php if ($row['quality'] == "Heigh Quanlity") { ?> selected="selected" <?php } ?> value="Heigh Quanlity">Heigh Quanlity</option>
                                    <option <?php if ($row['quality'] == "Medium Quanlity") { ?> selected="selected" <?php } ?> value="Medium Quanlity">Medium Quanlity</option>
                                    <option <?php if ($row['quality'] == "Low Quanlity") { ?> selected="selected" <?php } ?> value="Low Quanlity">Low Quanlity</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity:</label>
                                <input type="number" name="quantity" id="quantity" value="<?php echo $row['quantity'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date">Date:</label>
                                <input type="date" name="date" id="date" value="<?php echo $row['date'] ?>" class="form-control">
                            </div>
                        <?php
                        }
                        ?>
                        <!-- room -->
                        <div class="form-group">
                            <label for="room">Room:</label>
                            <select name="room" id="room" class="form-control">
                                <?php
                                foreach ($data['room_data'] as $rows) {
                                    ?>
                                    <option <?php if ($row['id_room'] == $rows['id_room']) { ?> selected="selected" <?php } ?> value="<?php echo $rows['id_room']; ?>"><?php echo $rows['room_name']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <a href="index.php?action=material" class="btn btn-success">Go Back</a>
                        <input type="submit" name="button" id="button" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>