<?php
// Fetch the selected status
$selectedStatus = $_POST['status'];

// Table data (replace this with your actual data source)
$drivers = [
  [
    'name' => 'Ayotunde Babalola',
    'email' => 'ayotunde.babalola@cu.edu.ng',
    'phone' => '07011772239',
    'status' => 0
  ],
  [
    'name' => 'Somto Davies',
    'email' => 'somto.davies@cu.edu.ng',
    'phone' => '08023456782',
    'status' => 1
  ],
  [
    'name' => 'Peter Hassan',
    'email' => 'peter.hassan@cu.edu.ng',
    'phone' => '09124537628',
    'status' => 0
  ],
  [
    'name' => 'John Doe',
    'email' => 'john.doe@cu.edu.ng',
    'phone' => '09122337562',
    'status' => 0
  ],
  [
    'name' => 'Abraham Daniel',
    'email' => 'abraham.daniel@cu.edu.ng',
    'phone' => '07034678192',
    'status' => 0
  ],
];

// Filter the drivers based on the selected status
if ($selectedStatus == 'all') {
  $filteredDrivers = $drivers;
} elseif ($selectedStatus == 'active') {
  $filteredDrivers = array_filter($drivers, function($driver) {
    return $driver['status'] == 1;
  });
} elseif ($selectedStatus == 'inactive') {
  $filteredDrivers = array_filter($drivers, function($driver) {
    return $driver['status'] == 0;
  });
}

// Generate the HTML for the filtered table rows
$html = '';
foreach ($filteredDrivers as $driver) {
  $html .= '
    <tr>
      <td>
        <a href="#">
          <figure class="avatar me-3">
            <img src="../vehicles/assets/images/user/avatar.jpg" class="rounded-circle" alt="avatar" />
          </figure>
          '.$driver['name'].'
        </a>
      </td>
      <td>'.$driver['email'].'</td>
      <td>'.$driver['phone'].'</td>
      <td>
        <span class="badge '.($driver['status'] == 0 ? 'bg-danger' : 'bg-success').'">'.($driver['status'] == 0 ? 'Inactive' : 'Active').'</span>
      </td>
      <td>
        <span>
          <i style="display: flex; font-size: 25px; color: #00BB90; flex-direction: row; justify-content: flex-end; align-items: center; padding: 0px; gap: 15px; cursor: pointer;" class="fa-solid fa-pen-to-square"></i>
        </span>
      </td>
      <td>
        <i style="display: flex; font-size: 25px; color: #BB0000; flex-direction: row; justify-content: flex-start; align-items: center; padding: 0px; gap: 5px; cursor: pointer;" class="fa-solid fa-trash-can"></i>
      </td>
    </tr>';
}

// Send the generated HTML back as the response
echo $html;
?>
