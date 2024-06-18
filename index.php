<!DOCTYPE html>
<html>
<head>
    <title>Blood Donor Information</title>
</head>
<frameset rows="40%, 60%">
    <!-- Left frame containing radio buttons -->
    <frame src="left_frame.php" name="leftFrame" scrolling="no" noresize="noresize">

    <!-- Right frame containing six equal parts -->
    <frameset cols="16.66%, 16.66%, 16.66%, 16.66%, 16.66%, 16.66%">
        <frame src="right_frame.php?part=1" name="rightFrame1">
        <frame src="right_frame.php?part=2" name="rightFrame2">
        <frame src="right_frame.php?part=3" name="rightFrame3">
        <frame src="right_frame.php?part=4" name="rightFrame4">
        <frame src="right_frame.php?part=5" name="rightFrame5">
        <frame src="right_frame.php?part=6" name="rightFrame6">
    </frameset>
</frameset>
</html>