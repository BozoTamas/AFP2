<section>
    <form action="saveLink" method="POST">
        <input type="text" name="url">
        <input type="text" name="alias">
        <button type="submit">Submit</button>
    </form>
</section>

<section>
    <form action="saveFolder" method="POST">
        <input type="file" name="file">
        <input type="text" name="alias">
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
        </select>
        <button type="submit">Submit</button>
    </form>
</section>
