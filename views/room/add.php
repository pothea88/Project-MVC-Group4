<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
            <form action="index2.php?action=room_form" method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="floor">Floor:</label>
                    <select name="floor" id="floor" class="form-control">
                        <option disableed selected>Select floor</option>
                        <option value="ground floor">ground floor</option>
                        <option value="first floor">first floor</option>
                        <option value="second floor">second floor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label><br>
                    <textarea name="description" class="form-control"></textarea>
                </div>
                <a href="index2.php?action=view_room" class="btn btn-first">Go Back</a>
                <input type="submit" name="button" value="submit" id="button" class="btn btn-primary">
                
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>