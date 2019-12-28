
<div class="container ">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" style="margin-top:100px;">
            <form action="index1.php?action=form_request" method="post">
                <div class="form-group">
                    <label for="name">Name of Material:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="quanlity">Quanlity:</label>
                    <select name="quanlity" id="quanlity" class="form-control">
                        <option disableed selected>Choose Quanlity</option>
                        <option value="1">High Quanlity</option>
                        <option value="1">Medium Quanlity</option>
                        <option value="1">Low Quanlity</option>
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
                <div class="form-group">
                    <label for="date">Description:</label><br>
                    <textarea name="des" cols="65" rows="3"></textarea>
                </div>

                <a href="index1.php?action=message" type="submit" class="btn btn-primary ">Request</a>
                <a href="index1.php" class="btn btn-first float-right">Go Back</a>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>