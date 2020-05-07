<div align = "center">
<section class="center">
    <form action="saveLink" method="POST">
        </br>
		<a class="h1"><ins>LINK ABBREVIATION:</ins></a></br>
		</br>
		<table>
		<tr>
			<td><a class="h3">The URL:</a></td>
			<td> <input type="text" name="url"><td>
		</tr>
		<tr>
			<td><a class="h3">The URL abbreviation:</a></td>
			<td><input type="text" name="alias"></td>
		</tr>             
		</table>
		</br>
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
</section>

<section class="center">
    <form method="POST" action="createDir" enctype="multipart/form-data">
    </br>
    </br>
	<a class="h1"><ins>FILE UPLOAD:<ins></a>
    </br>
	</br>
	<div class="container">
    <a class="h3">New Pase:</a></br></br>
        <textarea class="form-control" rows="5" id="textarea " name="text"></textarea>
        </br></br>
		
		
		
        <input type="file" name="files[]">
        </br></br>
        <a class="h3">The link abbreviation:</a>
        <input type="text" name="alias">
        </br></br>
		
	</div>
        <a class="h3">How long should it be?</a> </br></br>
					
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
        <button type="submit" class="btn btn-danger">Submit</button>
    </form>
    </br>
    </br>
</section>
</div>
