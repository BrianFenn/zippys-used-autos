<?php include 'view/header.php'; ?>
<main>
    <h1>Add Vehicle</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_vehicle">

        
        

        <label>Year:</label>
        <input type="text" name="Vehicle_year" />
        <br>
        
        <label>Make:</label>
        <input type="text" name="Make" />
        <br>

        <label>Model:</label>
        <input type="text" name="Model" />
        <br>

        <label>Price:</label>
        <input type="text" name="Price" />
        <br>

        <label>Vehicle Type:</label>
        <select id="mobile_add_vehicle" name="Type_code">
        <?php foreach ( $Types as $Type ) : ?>
            <option value="<?php echo $Type['Type_code']; ?>">
                <?php echo $Type['Type_name']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
        <label>Vechicle Class:</label>
        <select id="mobile_add_vehicle" name="Class_code">
        <?php foreach ( $Vehicle_Classes as $Class ) : ?>
            <option value="<?php echo $Class['Class_code']; ?>">
                <?php echo $Class['Class_name']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        
        <label>&nbsp;</label>
        <input  id="button" type="submit" value="Add Vehicle" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_vehicles">View Vehicle List</a>
    </p>

</main>
<?php include 'view/footer.php'; ?>