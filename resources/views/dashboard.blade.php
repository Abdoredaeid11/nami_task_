<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nami Task </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container py-4">
        <h1 class="mb-4">Nami Task </h1>

        <!-- Controls -->
        <div class="row g-3 align-items-center mb-4">
            <div class="col-sm-6 col-md-4">
                <label for="tableSelect" class="form-label">Choose Project to display</label>
                <select id="tableSelect" class="form-select" aria-label="Select table">
                    <option value="" selected>Choose</option>
                    <option value="all">All Projects</option>
                    <option value="1">Project 1</option>
                    <option value="2">Project 2</option>
                    <option value="3">Project 3</option>
                </select>
            </div>
            <div class="col-auto">
                <label class="form-label d-block mb-1">&nbsp;</label>
                <button id="applyButton" class="btn btn-primary">Apply</button>
            </div>
        </div>

        <!-- Tables -->
        <div id="tablesContainer" class="row gy-4">
            <!-- Table 1: Employees -->
            <div id="t1" class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header"><strong>Employees</strong></div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Hour Cost</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table 2: Projects -->
            <div id="t2" class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header"><strong>Projects</strong></div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Name</th>
                                        <th>Total Employees</th>
                                        <th>Total Cost</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table 3: Work Times -->
            <div id="t3" class="col-12">
                <div class="card shadow-sm">
                    <div class="card-header"><strong>Time Logs</strong></div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Date</th>
                                        <th>Employee</th>
                                        <th>Project</th>
                                        <th>Hours</th>
                                        <th>Hour Cost</th>
                                        <th>Modul</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#applyButton').click(function() {
                let projectId = $('#tableSelect').val();

                $.ajax({
                    url: '/dashboard/data',
                    type: 'GET',
                    data: {
                        project_id: projectId
                    },
                    success: function(res) {
                        populateEmployees(res.employees);
                        populateProjects(res.projects);
                        populateWorkTimes(res.workTimes);
                    },
                    error: function(err) {
                        console.log(err);
                        alert('Error loading data');
                    }
                });
            });

            function populateEmployees(employees) {
                let tbody = $('#t1 tbody');
                tbody.empty();
                employees.forEach((emp, i) => {
                    tbody.append(`<tr>
                  <td>${i+1}</td>
                  <td>${emp.name}</td>
                  <td>${emp.salary}</td>
                  <td>${(emp.salary/240).toFixed(2)}</td>
              </tr>`);
                });
            }

            function populateProjects(projects) {
                let tbody = $('#t2 tbody');
                tbody.empty();
                projects.forEach((proj) => {
                    let totalDays = Math.ceil((new Date(proj.end_date) - new Date(proj.start_date)) / (
                        1000 * 60 * 60 * 24));
                    let totalEmployees = proj.employees_count || 3;
                    let totalCost = proj.total_cost || 5500;
                    tbody.append(`<tr>
                  <td>${proj.id}</td>
                  <td>${proj.name}</td>
   
                  <td>${totalEmployees}</td>
                  <td>${totalCost}</td>
              </tr>`);
                });
            }

            function populateWorkTimes(workTimes) {
                let tbody = $('#t3 tbody');
                tbody.empty();
                workTimes.forEach((wt) => {
                    tbody.append(`<tr>
                  <td>${wt.date}</td>
                  <td>${wt.employee.name}</td>
                  <td>${wt.project.name}</td>
                  <td>${wt.hours}</td>
                  <td>${(wt.hours * wt.employee.salary / 240).toFixed(2)}</td>

                  <td>${wt.modul.name}</td>
              </tr>`);
                });
            }
        });
    </script>

</body>

</html>
