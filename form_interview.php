if (isset($_POST['submit'])) {

    //Shipping Address Variables
    $Street = $_POST['Street'];
    $Zip = $_POST['Zip'];
    $State = $_POST['State'];
    $Country = $_POST['Country'];
}

<html>

<main>
    <h1>Personal Information</h1>

    <div>
        <div>

            <form method="POST" action="form_2.php">

                <h2>Please enter your Shipping Address</h2>
                <p>
                    <label>Street</label>
                    <input type="text" name="Street" id="Street">
                </p>
                <p>
                    <label>Zip</label>
                    <input type="number" name="Zip" id="Zip">
                </p>
                <p>
                    <label>State</label>
                    <input type="text" name="State" id="State">
                </p>
                <p>
                    <label>Country</label>
                    <input type="text" name="Country" id="Country">
                </p>

                <p>
                    <input type="submit" name="submit" id="submit" value="Submit">
                </p>
            </form>
        </div>
</main>


</html>