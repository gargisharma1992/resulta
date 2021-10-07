
<?php
/**
template name: team list
 */

// Include custom header
include 'customHeader.php';
?>

<h2 id="team_title">NFL TEAM LIST</h2>

<div id="main_div">
    Search: <input type="text" id="searchTeams" placeholder="Quick search by any column"></input>
</div>

<?php
$api_url = 'http://delivery.chalk247.com/team_list/NFL.JSON?api_key=74db8efa2a6db279393b433d97c2bc843f8e32b0';

// Reading JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array format
$response_data = json_decode($json_data);

// Fetching team data from json response
$team_data = $response_data->results->data->team;

//echo '<pre>'; print_r($team_data); echo '</pre>';
?>

<!-- Content of table -->
<table id="nflTeamlist" width="100%">
    <thead>
    <tr class="tableHeadings">
        <th>Id<i class="fa fa-angle-down"></i></th>
        <th>Name<i class="fa fa-angle-down"></i></th>
        <th>Nick Name<i class="fa fa-angle-down"></i></th>
        <th>Display Name<i class="fa fa-angle-down"></i></th>
        <th>Conference<i class="fa fa-angle-down"></i></th>
        <th>Division<i class="fa fa-angle-down"></i></th>
    </tr>
    </thead>

    <tbody>
    <?php foreach($team_data as $column) { ?>
        <tr style="background: #e0e545;">
            <td><?php echo $column->id; ?></td>
            <td><?php echo $column->name; ?></td>
            <td><?php echo $column->nickname; ?></td>
            <td><?php echo $column->display_name; ?></td>
            <td><?php echo $column->conference; ?></td>
            <td><?php echo $column->division; ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<!-- Display error message if there are no records -->
<h2 id="errormessage" align="center"></h2>


