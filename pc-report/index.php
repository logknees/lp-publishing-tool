<? include "../header.php" ?>
<? include "pc-report-bindings.php" ?>
<h1>PC Report</h1>

<div class="filters">
    <div class="filterRow">
        <label for="pc">Publishing Coordinator:</label>
        <select name="pc" id="pc">
            <option value="1" selected>Emmy</option>
            <option value="2">Mallory</option>
            <option value="3">Morgan</option>
            <option value="4">Zack</option>
            <option value="5">Emily</option>
            <option value="6">Kayla</option>
        </select>
    </div>

    <div class="filterRow">
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date">
    </div>

    <div class="filterRow">
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date">
    </div>
</div>

<div class="totals">

<label for="created"># Created within date range:</label>
<p name="created" id="created">&nbsp;</p>

<label for="emailed"># Last POC within date range:</label>
<p name="emailed" id="emailed">&nbsp;</p>
</div>

<style>

    .filters{
        display: block;
        width: 600px;
    }

    .filterRow{
        width: 100%;
        margin: 10px;
    }

    input{
        width: 50%;
    }
    input[type="date"]{
        font-size: 1rem;
    }

    label, p{
        margin: 10px;
    }

    p{
        font-weight: bold;
    }

</style>