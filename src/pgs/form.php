<form id="frm">
    <table>
        <tr>
            <td>Name: </td>
            <td> <input name="frm-name" /></td>
        </tr>
        <tr>
            <td>Do you like GoDaddy? </td>
            <td> <label><input type="checkbox" name="frm-like" /> Yes!</label></td>
        </tr>
    </table>
    <div id="sent" style="display: none">Sent!</div>
</form>
<script>
    $('#frm').on('submit', function (e)
    {
      e.preventDefault();
      $('#sent').css("display", "block");
    })
</script>
