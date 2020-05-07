<div align = "center">
<section class="center">
    <form action="saveLink" method="POST">
        </br>
		<a>Link rövidítése:</a></br>
		</br>
		
        <a>Az URL:</a>
        <input type="text" name="url"></br></br>
        <a>Az URL rövidítése:</a>
        <input type="text" name="alias"></br></br>
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</section>

<section class="center">
    <form method="POST" action="createDir" enctype="multipart/form-data">
    </br>
    </br>
	<a>Fájl feltöltése:</a>
    </br>
	</br>
    <a>New Pase:</a></br>
        <textarea id="textarea" name="text"></textarea>
        </br></br>
        <input type="file" name="files[]">
        </br></br>
        <a>A link rövidítése:</a>
        <input type="text" name="alias">
        </br></br>
        <a>Mennyi ideig legyen aktív a link:</a> </br></br>
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