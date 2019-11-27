<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Student Information Edit</h2>
                </div>
                <?php
                if (isset($data['student'])) {
                    foreach ($data['student'] as $rows) {
                        ?>
                        <form action="index.php?action=edit_new" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <input type="number" name="id" id="id" hidden value="<?php echo $rows['id']?>">
                                <div class="form-group">
                                    <label for="name">Full Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" value="<?php echo $rows['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="class">Class:</label>
                                    <select name="class" id="class" class="form-control">
                                        <option value="WEP2020-A">WEP2020-A</option>
                                        <option value="WEP2020-B">WEP2020-B</option>
                                        <option value="SNA2020">SNA2020</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mark">Mark:</label>
                                    <input type="number" name="mark" id="mark" class="form-control" value="<?php echo $rows['mark'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="sex">Gender:</label><br>
                                    <input type="radio" name="sex" value="Male" checked>Male <br>
                                    <input type="radio" name="sex" value="Female">Female
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                                <input type="submit" name="edit" value="Edit" class="btn btn-primary float-right">
                            </div>
                        </form>
            </div>
    <?php
        }
    }
    ?>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
</div>