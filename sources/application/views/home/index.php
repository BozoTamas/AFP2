<div align = "center">
<section class="center">
    <form action="saveLink" method="POST">
        </br>
		<a>LINK ABBREVIATION:</a></br>
		</br>
		<table>
		<tr>
			<td><a>The URL:</a></td>
			<td> <input type="text" name="url"><td>
		</tr>
		<tr>
			<td><a>The URL abbreviation:</a></td>
			<td><input type="text" name="alias"></td>
		</tr>             
		</table>
		</br>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</section>

<section class="center">
    <form method="POST" action="createDir" enctype="multipart/form-data">
    </br>
    </br>
	<a>FILE UPLOAD:</a>
    </br>
	</br>
	<div class="left">
    <a>New Pase:</a></br>
        <textarea id="textarea" name="text"></textarea>
        </br></br>
        <input type="file" name="files[]">
        </br></br>
        <a>The link abbreviation:</a>
        <input type="text" name="alias">
        </br></br>
        <a>How long should it be?</a> </br></br>
	</div>
        <select name="expiration">
            <option value="1">1 Day</option>
            <option value="3">3 Days</option>
            <option value="7">1 Week</option>
            <option value="14">2 Weeks</option>
            <option value="30" selected>1 Month</option>
            <option value="60">2 Months</option>
            <option value="90">3 Months</option>
            <option value="180">6 Months</option>
            <option value="365">1 Year</option>
        </select></br>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
    </br>
    </br>
</section>
</div>
