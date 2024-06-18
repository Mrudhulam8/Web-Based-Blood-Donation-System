<!DOCTYPE html>
<html>
<head>
    <title>Left Frame - Blood Donor Information</title>
</head>
<body>
    <!-- HTML form with radio buttons -->
    <form action="right_frame.php" method="get" target="rightFrame1">
        <h2>Select Blood Group</h2>
        <input type="radio" name="blood_group" value="A+" id="group_a+">
        <label for="group_a+">Blood Group A+</label><br>

        <input type="radio" name="blood_group" value="B+" id="group_b+">
        <label for="group_b+">Blood Group B+</label><br>

        <input type="radio" name="blood_group" value="AB+" id="group_ab+">
        <label for="group_ab+">Blood Group AB+</label><br>

        <input type="radio" name="blood_group" value="O+" id="group_o+">
        <label for="group_o+">Blood Group O+</label><br>

        <input type="radio" name="blood_group" value="A-" id="group_a-">
        <label for="group_a-">Blood Group A-</label><br>

        <input type="radio" name="blood_group" value="B-" id="group_b-">
        <label for="group_b-">Blood Group B-</label><br>

        <input type="radio" name="blood_group" value="AB-" id="group_ab-">
        <label for="group_ab-">Blood Group AB-</label><br>

        <input type="radio" name="blood_group" value="O-" id="group_o-">
        <label for="group_o-">Blood Group O-</label><br><br>


        <input type="submit" value="Get Information">
    </form>
</body>
</html>
                   