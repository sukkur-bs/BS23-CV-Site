<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>BS23 | CV Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}"/>

    <style>
        body,
        .table td,
        .table th {
            font-size: 13px;
        }

        h5 {
            font-size: 16px;
        }

        @media print {
            .table td,
            .table th {
                font-size: 10px;
                padding: .12rem .15rem;
            }

            .card-body {
                padding: 8px;
            }

            .row {
                margin-right: -10px;
                margin-left: -10px;
            }
        }
    </style>
</head>
<body style="background-color: #eee;" onload="window.print()">

<div class="container mt-1">
    <div class="row">
        <div class="col-lg-3 col-4">
            <div class="card mb-2">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                         alt="avatar"
                         class="rounded-circle img-fluid" style="width: 80px;">
                    <h5 class="my-3">MD. Rakibul Islam(BS1065)</h5>
                    <p class="text-muted mb-1">Trainee</p>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <p class="text-primary me-1">A. Performance Review</p>

                    <table class="table table-bordered border-primary">
                        <thead>
                        <tr>
                            <td>Expertise Area</td>
                            <td>Asp.NET</td>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-2">
                <div class="card-body">
                    <p class="text-primary me-1">Project information</p>

                    <table class="table table-bordered border-primary">
                        <thead>
                            <tr>
                                <td>Expertise Area</td>
                                <td>Asp.NET</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Expertise Area</td>
                                <td>Asp.NET</td>
                            </tr>
                            <tr>
                                <td>Expertise Area</td>
                                <td>Asp.NET</td>
                            </tr>
                            <tr>
                                <td>Expertise Area</td>
                                <td>Asp.NET</td>
                            </tr>
                            <tr>
                                <td>Expertise Area</td>
                                <td>Asp.NET</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-9 col-8">
            <div class="card mb-2">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="table-primary">
                        <tr>
                            <th>Designation: Trainee</th>
                            <th>Joining Date: 03-Jan-2022</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Lorem ipsum.</td>
                            <td>Lorem ipsum dolor.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <p class="text-primary me-1">Hiring Summary</p>
                    <table class="table table-bordered">
                        <thead class="table-primary">
                        <tr>
                            <th>Test Result</th>
                            <th>Comment</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Lorem ipsum dolor.</td>
                            <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, similique.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">

                    <div class="card mb-2 mb-md-0">
                        <div class="card-body">
                            <p class="text-primary me-1">B. Employee Evaluation</p>

                            <table class="table table-bordered border-primary">
                                <colgroup>
                                    <col width="50%">
                                    <col width="50%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th valign="top">Tasks</th>
                                        <th valign="top">Status(Excellent/Good/Satisfactory/Improvement Required)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Tasks</th>
                                        <td>Status(Excellent/Good/Satisfactory/Improvement Required)</td>
                                    </tr><tr>
                                        <th>Tasks</th>
                                        <td>Status(Excellent/Good/Satisfactory/Improvement Required)</td>
                                    </tr><tr>
                                        <th>Tasks</th>
                                        <td>Status(Excellent/Good/Satisfactory/Improvement Required)</td>
                                    </tr><tr>
                                        <th>Tasks</th>
                                        <td>Status(Excellent/Good/Satisfactory/Improvement Required)</td>
                                    </tr><tr>
                                        <th>Tasks</th>
                                        <td>Status(Excellent/Good/Satisfactory/Improvement Required)</td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="mt-1 table table-bordered border-primary">
                                <thead>
                                <tr>
                                    <td valign="middle">Mark the satisfaction level</td>
                                    <td class="p-0" valign="middle">
                                        <table class="table border-primary p-0 mb-0">
                                            <thead>
                                            <tr>
                                                <th>Result (Extended / Permanent)</th>
                                            </tr><tr>
                                                <th>Permanent</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>PM Signature</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-2 mb-md-0">
                        <div class="card-body">
                            <p class="text-primary me-1">C. Salary Information</p>

                            <table class="table table-bordered border-primary">
                                <colgroup>
                                    <col width="33%">
                                    <col width="33%">
                                    <col width="33%">
                                </colgroup>
                                <thead>
                                <tr>
                                    <th valign="top">Salary Details</th>
                                    <th valign="top">Level</th>
                                    <th valign="top">Increment</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <td>Current Salary</td>
                                    <th>NA</th>
                                    <th>NA</th>
                                </tr>
                                <tr>

                                    <td>Amount of salary revision (if any)</td>
                                    <th>ICI</th>
                                    <th>0</th>
                                </tr>
                                </tbody>
                            </table>

                            <table class="mt-1 table table-bordered border-primary">
                                <colgroup>
                                    <col width="50%">
                                    <col width="50%">
                                </colgroup>
                                <tbody>
                                <tr>
                                    <td valign="middle">Effective date of confirmation</td>
                                    <td valign="middle">

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="mt-1 table table-bordered border-primary">
                                <thead>
                                <tr>
                                    <td valign="middle">Feedback by HR</td>
                                    <td valign="middle"></td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th valign="middle">Signature</th>
                                    <th valign="middle">S.M Sajibul Alam</th>
                                </tr>
                                </tbody>
                            </table>
                            <table class="mt-1 table table-bordered border-primary">
                                <tbody>
                                    <tr>
                                        <th valign="middle">Feedback by Board Panel</th>
                                        <td valign="middle">Recommendation by permanent role because of strong growth and performance</td>
                                    </tr>
                                    <tr>
                                        <th valign="middle">Decision By Panel</th>
                                        <th valign="middle">(Permanent)</th>
                                    </tr>
                                    <tr>
                                        <th valign="middle">Signature</th>
                                        <td valign="middle">MD. Abdullah Bin Amin</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="mt-1 table table-bordered border-primary">
                                <colgroup>
                                    <col width="50%">
                                    <col width="50%">
                                </colgroup>
                                <tbody>
                                    <tr>
                                        <th valign="middle" colspan="2" style="text-align: center">Approval</th>
                                    </tr>
                                    <tr>
                                        <th valign="bottom" class="pt-5 text-center">Masudur Rahman</th>
                                        <th valign="bottom" class="pt-5 text-center">Raisul Kabir</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
</body>
</html>
