<?php
$statusFilter = isset($_POST['status']) ? $_POST['status'] : 'all';

// Sample vehicle data
$vehicles = array(
    array('LSD675RV', 'Toyota Corolla', 'Toyota', 'Car', 'Active'),
    array('123CU5RV', 'Toyota Camry', 'Toyota', 'Car', 'Active'),
    array('GHK236LI', 'Nissan Quest', 'Nissan', 'Van', 'Inactive'),
    array('KUF128SG', 'Toyota Corolla', 'Toyota', 'Car', 'Inactive'),
    array('MUK249DC', 'Toyota Corolla', 'Toyota', 'Car', 'Inactive')
);

// Filter the vehicles based on the selected status
if ($statusFilter != 'all') {
    $filteredVehicles = array_filter($vehicles, function ($vehicle) use ($statusFilter) {
        return $vehicle[4] == $statusFilter;
    });
} else {
    $filteredVehicles = $vehicles;
}

// Helper function to get the badge class based on status
function getStatusBadgeClass($status)
{
    switch ($status) {
        case 'Active':
            return 'bg-success';
        case 'Inactive':
            return 'bg-danger';
        default:
            return 'bg-secondary';
    }
}

// Generate the HTML table rows
foreach ($filteredVehicles as $vehicle) {
    echo '<tr>';
    echo '<td><a href="#">' . $vehicle[0] . '</a></td>';
    echo '<td>' . $vehicle[1] . '</td>';
    echo '<td>' . $vehicle[2] . '</td>';
    echo '<td>' . $vehicle[3] . '</td>';
    echo '<td><span class="badge ' . getStatusBadgeClass($vehicle[4]) . '">' . $vehicle[4] . '</span></td>';
    echo '<td><span><i style="display: flex; font-size: 25px; color: #00BB90; flex-direction: row; justify-content: flex-end; align-items: center; padding: 0px; gap: 15px; cursor: pointer;" class="fa-solid fa-pen-to-square"></i></span></td>';
    echo '<td><i id="deleteButton" style="display: flex; font-size: 25px; color: #BB0000; flex-direction: row; justify-content: flex-start; align-items: center; padding: 0px; gap: 5px; cursor: pointer;" class="fa-solid fa-trash-can"></i></td>';
    echo '</tr>';
}
?>
