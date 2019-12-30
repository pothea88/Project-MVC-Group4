<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
        <?php
            if(isset($data['room_edit'])) {
                foreach ($data['room_edit'] as $result){
        ?>
            <form action="index2.php?action=edit_form" method="post">
                <input type="number" name="id" value="<?php echo $result['id_room']?>" hidden>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" value="<?php echo $result['room_name']?>" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="floor">Floor:</label>
                    <select name="floor" id="floor" class="form-control">
                        <option disableed selected>Select floor</option>
                        <option <?php if( $result['floor'] == "ground floor"){?>selected = "selected" <?php } ?> value="ground floor" >Ground floor</option>
                        <option <?php if( $result['floor'] == "first floor"){?>selected = "selected" <?php } ?>value="first floor">first floor</option>
                        <option <?php if( $result['floor'] == "second floor"){?>selected = "selected" <?php } ?>value="second floor">second floor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label><br>
                    <textarea name="description" value="<?php echo $result['description']?>" class="form-control"><?php echo $result['description']?></textarea>
                </div>
                <a href="index2.php?action=view_room" class="btn btn-first">Go Back</a>
                <input type="submit" name="button" value="submit" id="button" class="btn btn-primary">
                
            </form>
            <?php
                  }
                }
            ?>
        </div>
        <div class="col-3"></div>
    </div>
</div>