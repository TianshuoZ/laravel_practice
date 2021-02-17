<html>
<head>
    <title>New Item</title>
</head>

<body>
<form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <table>
        <tr>
            <td>Date</td>
            <td><input type='date' name='Idate' /></td>
            <td>Gender</td>
            <td><input type='text' name='Igender' /></td>
            <td>Type</td>
            <td><input type='text' name='Itype' /></td>

        </tr>
        <tr>
            <td>Ranking</td>
            <td><input type='number' name='Iranking' /></td>
            <td>Player</td>
            <td><input type='text' name='Iplayer' /></td>
            <td>Country</td>
            <td><input type='text' name='Icountry' /></td>
        </tr>
        <tr>
            <button colspan= '1'>
                <input type = 'button' value = "save"/>
            </button>
            <td colspan = '2'>
                <input type = 'button' value = "cancel"/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>
