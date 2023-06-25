function sortTable() {
    const dropdown = document.getElementById('form-select');
    const table = document.getElementById('drivers');
    const tbody = table.tBodies[0];
  const rows = Array.from(tbody.rows);

  const sortBy = dropdown.value;
  let sortOrder = 1;

  // Determine the sort order
  if (sortBy === 'email' || sortBy === 'phone') {
    sortOrder = -1;
  }

  // Sort the rows based on the selected column
  rows.sort((rowA, rowB) => {
    const cellA = rowA.cells[getIndex(sortBy)];
    const cellB = rowB.cells[getIndex(sortBy)];

    const valueA = cellA.textContent.trim().toLowerCase();
    const valueB = cellB.textContent.trim().toLowerCase();

    if (valueA < valueB) {
      return -1 * sortOrder;
    } else if (valueA > valueB) {
      return 1 * sortOrder;
    }
    return 0;
  });

  // Clear the table
  while (tbody.firstChild) {
    tbody.removeChild(tbody.firstChild);
  }

  // Append the sorted rows to the table
  rows.forEach(row => {
    tbody.appendChild(row);
  });
}

function getIndex(columnName) {
  const tableHeaders = document.getElementsByTagName('th');
  for (let i = 0; i < tableHeaders.length; i++) {
    if (tableHeaders[i].textContent.toLowerCase() === columnName.toLowerCase()) {
      return i;
    }
  }
  return -1;
}